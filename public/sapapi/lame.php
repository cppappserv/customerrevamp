<?php // Example (of 256-bit AES encryption in CTR mode): 
require_once 'index.php';
// See the "README" for information about choosing an appropriate key
class AES
{
	private $Nr; // number of rounds (10/12/14 for a 128/192/256-bit key)
	private $w; // key schedule as an array (Nr+1 x Nb bytes) generated from the cipher key
	public function AES ($key)
	{
		$t0 =& self::$t0; $t1 =& self::$t1; $t2 =& self::$t2; $t3 =& self::$t3;
		$sbox0 =& self::$sbox0; $sbox1 =& self::$sbox1; $sbox2 =& self::$sbox2; $sbox3 =& self::$sbox3;
		for ($i = 0; $i < 256; ++$i)
		{
			// PHP integer size is platform dependent: "& 0xFFFFFF00" is necessary for 64-bit machines
			$t2[$i <<  8] = (($t3[$i] <<  8) & 0xFFFFFF00) | (($t3[$i] >> 24) & 0x000000FF);
			$t1[$i << 16] = (($t3[$i] << 16) & 0xFFFF0000) | (($t3[$i] >> 16) & 0x0000FFFF);
			$t0[$i << 24] = (($t3[$i] << 24) & 0xFF000000) | (($t3[$i] >>  8) & 0x00FFFFFF);
			$sbox1[$i <<  8] = ($sbox0[$i] <<  8) & 0xFFFFFF00;
			$sbox2[$i << 16] = ($sbox0[$i] << 16) & 0xFFFF0000;
			$sbox3[$i << 24] = ($sbox0[$i] << 24) & 0xFF000000;
		}
		self::key($key);
	}
	// Generate key schedule
	public function key ($key)
	{
		// Nk: key length (in words): 4/6/8 for 128/192/256-bit keys
		switch ($n = strlen($key))
		{
			case 16: $Nk = 4; $this->Nr = 10; break;
			case 24: $Nk = 6; $this->Nr = 12; break;
			case 32: $Nk = 8; $this->Nr = 14; break;
			default: return;
		}
		$w = array_values(unpack('N*words', $key));
		for ($i = $Nk, $end = 4 * ($this->Nr+1); $i < $end; ++$i)
		{
			$tmp = $w[$i-1];
			if ($i % $Nk == 0)
			{
				$tmp = (($tmp << 8) & 0xFFFFFF00) | (($tmp >> 24) & 0x000000FF); // shift left
				$tmp = self::sub_word($tmp) ^ self::$rcon[$i / $Nk]; // sub word + rcon
			}
			else if ($Nk > 6 && $i % $Nk == 4)
				$tmp = self::sub_word($tmp);
			$w[$i] = $w[$i-$Nk] ^ $tmp;
		}
		// Convert the key schedule from a vector of 4 * ($Nr + 1) length to a matrix with $Nr + 1 rows and 4 columns
		for ($i = $row = 0; $i < $end; ++$row, ++$i)
		{
			$this->w[$row][0] = $w[$i];
			$this->w[$row][1] = $w[++$i];
			$this->w[$row][2] = $w[++$i];
			$this->w[$row][3] = $w[++$i];
		}
	}
	function encrypt ($s)
	{
		$w = $this->w;
		$t0 = self::$t0; $t1 = self::$t1; $t2 = self::$t2; $t3 = self::$t3;
		// add round key
		$s = array($s[0] ^ $w[0][0], $s[1] ^ $w[0][1], $s[2] ^ $w[0][2], $s[3] ^ $w[0][3]);
		// sub word + shift rows + mix columns + add round key
		for ($i = 1; $i < $this->Nr; ++$i)
			$s = array(
				$t0[$s[0] & 0xFF000000] ^ $t1[$s[1] & 0x00FF0000] ^ $t2[$s[2] & 0x0000FF00] ^ $t3[$s[3] & 0x000000FF] ^ $w[$i][0],
				$t0[$s[1] & 0xFF000000] ^ $t1[$s[2] & 0x00FF0000] ^ $t2[$s[3] & 0x0000FF00] ^ $t3[$s[0] & 0x000000FF] ^ $w[$i][1],
				$t0[$s[2] & 0xFF000000] ^ $t1[$s[3] & 0x00FF0000] ^ $t2[$s[0] & 0x0000FF00] ^ $t3[$s[1] & 0x000000FF] ^ $w[$i][2],
				$t0[$s[3] & 0xFF000000] ^ $t1[$s[0] & 0x00FF0000] ^ $t2[$s[1] & 0x0000FF00] ^ $t3[$s[2] & 0x000000FF] ^ $w[$i][3]);
		// sub word
		$s = array(self::sub_word($s[0]), self::sub_word($s[1]), self::sub_word($s[2]), self::sub_word($s[3]));
		// shift rows + add round key
		return array(
			$w[$this->Nr][0] ^ ($s[0] & 0xFF000000) ^ ($s[1] & 0x00FF0000) ^ ($s[2] & 0x0000FF00) ^ ($s[3] & 0x000000FF),
			$w[$this->Nr][1] ^ ($s[1] & 0xFF000000) ^ ($s[2] & 0x00FF0000) ^ ($s[3] & 0x0000FF00) ^ ($s[0] & 0x000000FF),
			$w[$this->Nr][2] ^ ($s[2] & 0xFF000000) ^ ($s[3] & 0x00FF0000) ^ ($s[0] & 0x0000FF00) ^ ($s[1] & 0x000000FF),
			$w[$this->Nr][3] ^ ($s[3] & 0xFF000000) ^ ($s[0] & 0x00FF0000) ^ ($s[1] & 0x0000FF00) ^ ($s[2] & 0x000000FF));
	}
	// Perform S-Box substitution
	private static function sub_word ($word) { return self::$sbox0[$word & 0x000000FF] | self::$sbox1[$word & 0x0000FF00] | self::$sbox2[$word & 0x00FF0000] | self::$sbox3[$word & 0xFF000000]; }
	// Tables
	private static $t0, $t1, $t2, $sbox1, $sbox2, $sbox3;
	private static $rcon = array(0, 0x01000000, 0x02000000, 0x04000000, 0x08000000, 0x10000000, 0x20000000, 
		0x40000000, 0x80000000, 0x1B000000, 0x36000000, 0x6C000000, 0xD8000000, 0xAB000000, 0x4D000000,
		0x9A000000, 0x2F000000, 0x5E000000, 0xBC000000, 0x63000000, 0xC6000000, 0x97000000, 0x35000000,
		0x6A000000, 0xD4000000, 0xB3000000, 0x7D000000, 0xFA000000, 0xEF000000, 0xC5000000, 0x91000000);
	private static $t3 = array(
		0x6363A5C6, 0x7C7C84F8, 0x777799EE, 0x7B7B8DF6, 0xF2F20DFF, 0x6B6BBDD6, 0x6F6FB1DE, 0xC5C55491, 
		0x30305060, 0x01010302, 0x6767A9CE, 0x2B2B7D56, 0xFEFE19E7, 0xD7D762B5, 0xABABE64D, 0x76769AEC, 
		0xCACA458F, 0x82829D1F, 0xC9C94089, 0x7D7D87FA, 0xFAFA15EF, 0x5959EBB2, 0x4747C98E, 0xF0F00BFB, 
		0xADADEC41, 0xD4D467B3, 0xA2A2FD5F, 0xAFAFEA45, 0x9C9CBF23, 0xA4A4F753, 0x727296E4, 0xC0C05B9B, 
		0xB7B7C275, 0xFDFD1CE1, 0x9393AE3D, 0x26266A4C, 0x36365A6C, 0x3F3F417E, 0xF7F702F5, 0xCCCC4F83, 
		0x34345C68, 0xA5A5F451, 0xE5E534D1, 0xF1F108F9, 0x717193E2, 0xD8D873AB, 0x31315362, 0x15153F2A, 
		0x04040C08, 0xC7C75295, 0x23236546, 0xC3C35E9D, 0x18182830, 0x9696A137, 0x05050F0A, 0x9A9AB52F, 
		0x0707090E, 0x12123624, 0x80809B1B, 0xE2E23DDF, 0xEBEB26CD, 0x2727694E, 0xB2B2CD7F, 0x75759FEA, 
		0x09091B12, 0x83839E1D, 0x2C2C7458, 0x1A1A2E34, 0x1B1B2D36, 0x6E6EB2DC, 0x5A5AEEB4, 0xA0A0FB5B, 
		0x5252F6A4, 0x3B3B4D76, 0xD6D661B7, 0xB3B3CE7D, 0x29297B52, 0xE3E33EDD, 0x2F2F715E, 0x84849713, 
		0x5353F5A6, 0xD1D168B9, 0x00000000, 0xEDED2CC1, 0x20206040, 0xFCFC1FE3, 0xB1B1C879, 0x5B5BEDB6, 
		0x6A6ABED4, 0xCBCB468D, 0xBEBED967, 0x39394B72, 0x4A4ADE94, 0x4C4CD498, 0x5858E8B0, 0xCFCF4A85, 
		0xD0D06BBB, 0xEFEF2AC5, 0xAAAAE54F, 0xFBFB16ED, 0x4343C586, 0x4D4DD79A, 0x33335566, 0x85859411, 
		0x4545CF8A, 0xF9F910E9, 0x02020604, 0x7F7F81FE, 0x5050F0A0, 0x3C3C4478, 0x9F9FBA25, 0xA8A8E34B, 
		0x5151F3A2, 0xA3A3FE5D, 0x4040C080, 0x8F8F8A05, 0x9292AD3F, 0x9D9DBC21, 0x38384870, 0xF5F504F1, 
		0xBCBCDF63, 0xB6B6C177, 0xDADA75AF, 0x21216342, 0x10103020, 0xFFFF1AE5, 0xF3F30EFD, 0xD2D26DBF, 
		0xCDCD4C81, 0x0C0C1418, 0x13133526, 0xECEC2FC3, 0x5F5FE1BE, 0x9797A235, 0x4444CC88, 0x1717392E, 
		0xC4C45793, 0xA7A7F255, 0x7E7E82FC, 0x3D3D477A, 0x6464ACC8, 0x5D5DE7BA, 0x19192B32, 0x737395E6, 
		0x6060A0C0, 0x81819819, 0x4F4FD19E, 0xDCDC7FA3, 0x22226644, 0x2A2A7E54, 0x9090AB3B, 0x8888830B, 
		0x4646CA8C, 0xEEEE29C7, 0xB8B8D36B, 0x14143C28, 0xDEDE79A7, 0x5E5EE2BC, 0x0B0B1D16, 0xDBDB76AD, 
		0xE0E03BDB, 0x32325664, 0x3A3A4E74, 0x0A0A1E14, 0x4949DB92, 0x06060A0C, 0x24246C48, 0x5C5CE4B8, 
		0xC2C25D9F, 0xD3D36EBD, 0xACACEF43, 0x6262A6C4, 0x9191A839, 0x9595A431, 0xE4E437D3, 0x79798BF2, 
		0xE7E732D5, 0xC8C8438B, 0x3737596E, 0x6D6DB7DA, 0x8D8D8C01, 0xD5D564B1, 0x4E4ED29C, 0xA9A9E049, 
		0x6C6CB4D8, 0x5656FAAC, 0xF4F407F3, 0xEAEA25CF, 0x6565AFCA, 0x7A7A8EF4, 0xAEAEE947, 0x08081810, 
		0xBABAD56F, 0x787888F0, 0x25256F4A, 0x2E2E725C, 0x1C1C2438, 0xA6A6F157, 0xB4B4C773, 0xC6C65197, 
		0xE8E823CB, 0xDDDD7CA1, 0x74749CE8, 0x1F1F213E, 0x4B4BDD96, 0xBDBDDC61, 0x8B8B860D, 0x8A8A850F, 
		0x707090E0, 0x3E3E427C, 0xB5B5C471, 0x6666AACC, 0x4848D890, 0x03030506, 0xF6F601F7, 0x0E0E121C, 
		0x6161A3C2, 0x35355F6A, 0x5757F9AE, 0xB9B9D069, 0x86869117, 0xC1C15899, 0x1D1D273A, 0x9E9EB927, 
		0xE1E138D9, 0xF8F813EB, 0x9898B32B, 0x11113322, 0x6969BBD2, 0xD9D970A9, 0x8E8E8907, 0x9494A733, 
		0x9B9BB62D, 0x1E1E223C, 0x87879215, 0xE9E920C9, 0xCECE4987, 0x5555FFAA, 0x28287850, 0xDFDF7AA5, 
		0x8C8C8F03, 0xA1A1F859, 0x89898009, 0x0D0D171A, 0xBFBFDA65, 0xE6E631D7, 0x4242C684, 0x6868B8D0, 
		0x4141C382, 0x9999B029, 0x2D2D775A, 0x0F0F111E, 0xB0B0CB7B, 0x5454FCA8, 0xBBBBD66D, 0x16163A2C);
	private static $sbox0 = array(
		0x63, 0x7C, 0x77, 0x7B, 0xF2, 0x6B, 0x6F, 0xC5, 0x30, 0x01, 0x67, 0x2B, 0xFE, 0xD7, 0xAB, 0x76,
		0xCA, 0x82, 0xC9, 0x7D, 0xFA, 0x59, 0x47, 0xF0, 0xAD, 0xD4, 0xA2, 0xAF, 0x9C, 0xA4, 0x72, 0xC0,
		0xB7, 0xFD, 0x93, 0x26, 0x36, 0x3F, 0xF7, 0xCC, 0x34, 0xA5, 0xE5, 0xF1, 0x71, 0xD8, 0x31, 0x15,
		0x04, 0xC7, 0x23, 0xC3, 0x18, 0x96, 0x05, 0x9A, 0x07, 0x12, 0x80, 0xE2, 0xEB, 0x27, 0xB2, 0x75,
		0x09, 0x83, 0x2C, 0x1A, 0x1B, 0x6E, 0x5A, 0xA0, 0x52, 0x3B, 0xD6, 0xB3, 0x29, 0xE3, 0x2F, 0x84,
		0x53, 0xD1, 0x00, 0xED, 0x20, 0xFC, 0xB1, 0x5B, 0x6A, 0xCB, 0xBE, 0x39, 0x4A, 0x4C, 0x58, 0xCF,
		0xD0, 0xEF, 0xAA, 0xFB, 0x43, 0x4D, 0x33, 0x85, 0x45, 0xF9, 0x02, 0x7F, 0x50, 0x3C, 0x9F, 0xA8,
		0x51, 0xA3, 0x40, 0x8F, 0x92, 0x9D, 0x38, 0xF5, 0xBC, 0xB6, 0xDA, 0x21, 0x10, 0xFF, 0xF3, 0xD2,
		0xCD, 0x0C, 0x13, 0xEC, 0x5F, 0x97, 0x44, 0x17, 0xC4, 0xA7, 0x7E, 0x3D, 0x64, 0x5D, 0x19, 0x73,
		0x60, 0x81, 0x4F, 0xDC, 0x22, 0x2A, 0x90, 0x88, 0x46, 0xEE, 0xB8, 0x14, 0xDE, 0x5E, 0x0B, 0xDB,
		0xE0, 0x32, 0x3A, 0x0A, 0x49, 0x06, 0x24, 0x5C, 0xC2, 0xD3, 0xAC, 0x62, 0x91, 0x95, 0xE4, 0x79,
		0xE7, 0xC8, 0x37, 0x6D, 0x8D, 0xD5, 0x4E, 0xA9, 0x6C, 0x56, 0xF4, 0xEA, 0x65, 0x7A, 0xAE, 0x08,
		0xBA, 0x78, 0x25, 0x2E, 0x1C, 0xA6, 0xB4, 0xC6, 0xE8, 0xDD, 0x74, 0x1F, 0x4B, 0xBD, 0x8B, 0x8A,
		0x70, 0x3E, 0xB5, 0x66, 0x48, 0x03, 0xF6, 0x0E, 0x61, 0x35, 0x57, 0xB9, 0x86, 0xC1, 0x1D, 0x9E,
		0xE1, 0xF8, 0x98, 0x11, 0x69, 0xD9, 0x8E, 0x94, 0x9B, 0x1E, 0x87, 0xE9, 0xCE, 0x55, 0x28, 0xDF,
		0x8C, 0xA1, 0x89, 0x0D, 0xBF, 0xE6, 0x42, 0x68, 0x41, 0x99, 0x2D, 0x0F, 0xB0, 0x54, 0xBB, 0x16);
}

class CTR
{
	public $counter, $cipher;
	public function CTR ($cipher) { $this->cipher = $cipher; }
	public function encrypt ($text) { return self::new_nonce().self::translate($text); }
	public function decrypt ($text)
	{
		self::set_nonce(substr($text, 0, 8));
		return self::translate(substr($text,8));
	}
	private function new_nonce ()
	{
		$t = microtime(true);
		$this->counter = array((int)$t & 0xFFFFFFFF, (($t - (int)$t) * 0x100000000) & 0xFFFFFFFF, 0, 0);
		return pack('NN', $this->counter[0], $this->counter[1]);
	}
	private function set_nonce ($nonce)
	{
		$this->counter = unpack('N*', $nonce);
		$this->counter = array($this->counter[1], $this->counter[2], 0, 0);
	}
	public function inc () { return self::ninc($this->counter[3]) || self::ninc($this->counter[2]) || self::ninc($this->counter[1]); }
	private static function ninc (&$n)
	{
		if ($n == 0xFFFFFFFF)
			return $n = 0;
		++$n;
		return true;
	}
	private function translate ($text)
	{
		ob_start();
		for ($i = 0, $n = strlen($text); $i < $n; $i += 16, self::inc())
		{
			$x = $this->cipher->encrypt($this->counter);
			echo substr($text, $i, 16) ^ pack('N*', $x[0], $x[1], $x[2], $x[3]);
		}
		$out = ob_get_contents();
		ob_end_clean();
		return $out;
	}
}


function getEncrypt($message)
{
    $key = 'P7Jks$(7%$#7%$#89LNbG|};*&jsH6N#';
    $cipher = new CTR(new AES($key));
    // Encrypt/Decrypt:
    $text = $message;
    $code = $cipher -> encrypt($text);
    // $text1 = $cipher->decrypt($code);
    // The $code variable contains the encrypted raw binary data. You can convert raw binary to a safe ASCII string using base64_encode:
    return base64_encode($code);
    
    // echo "plaintext: $text1";
    }
    
function getEncryptToken($message,$token)
{
    $key = $token;//'P7Jks$(7%$#7%$#89LNbG|};*&jsH6N#';
    $cipher = new CTR(new AES($key));
    // Encrypt/Decrypt:
    $text = $message;
    $code = $cipher -> encrypt($text);
    // $text1 = $cipher->decrypt($code);
    // The $code variable contains the encrypted raw binary data. You can convert raw binary to a safe ASCII string using base64_encode:
    return base64_encode($code);
    
    // echo "plaintext: $text1";
    }     

function getDeCrypt($message)
{
    $key = 'P7Jks$(7%$#7%'.$keys.'$#89LNbG|};*&jsH6N#';
    $cipher = new CTR(new AES($key));
    // Encrypt/Decrypt:
    $text = base64_decode($message);
    $text1 = $cipher -> decrypt($text);
    // The $code variable contains the encrypted raw binary data. You can convert raw binary to a safe ASCII string using base64_encode:
    // echo "ciphertext: ", base64_encode($code), "<br>";
    // echo "plaintext: $text1";
    return $text1;
    }
    
function getDeCryptToken($message,$token)
{
    $key = $token;//'P7Jks$(7%$#7%'.$keys.'$#89LNbG|};*&jsH6N#';
    $cipher = new CTR(new AES($key));
    // Encrypt/Decrypt:
    $text = base64_decode($message);
    $text1 = $cipher -> decrypt($text);
    // The $code variable contains the encrypted raw binary data. You can convert raw binary to a safe ASCII string using base64_encode:
    // echo "ciphertext: ", base64_encode($code), "<br>";
    // echo "plaintext: $text1";
    return $text1;
    }     

/*
$text = 'mypassword12345';
$enc = getEncrypt($text);
$dec = getDecrypt($enc);

echo "asal : " . $text . "<br>";
echo "encrypt:" . $enc . "<br>";
echo "decrypt:" . $dec . "<br>";
*/
//$dec = getDecrypt('Wt1aDL64MAAXQ2Gw6riPQ+wEECIHnAUtfIiFOjndG7RvIA==');
//echo $dec; 


function getNumericDec($txt){
  $res = "";
  //echo strlen($txt);
  for ($j==0;$j< strlen($txt);$j++){
      $num = ord(substr($txt,$j,1)) % 10;
      //echo substr($txt,$j,1)."<br>";
      $res .= $num;
  }
  
  return $res;
}

//echo "hasil:".getNumericDec("aEK/F");


?>                                  