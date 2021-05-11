<?php 
$url = "http://rec.localhost/sapapi/coreAPI.php";
$url = "http://google.com";
$data = "X9KXwVOVHAC0CBcanQZBWFlDqhIW0O4a7QZuds1DQ1hBB+kXApe8We8IEBKBBgAMQw3pDgaZvAaiSwoXzQURFw5D/RAGx+9B4ydp0s1DQ1oAAuQPAdT/CO0KWUvPDgwcCgXxQUO4lkPvV25lzUM=";
$ch = curl_init();
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
// curl_setopt( $ch, CURLOPT_CAPATH, '/etc/ssl/certs/' );
// curl_setopt($ch, CURLOPT_CAPATH, getcwd() . '/cert/');
// curl_setopt($ch, CURLOPT_CAINFO, '/etc/ssl/certs/ca-certificates.crt');
curl_setopt($ch, CURLOPT_URL, $url);

// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',));
// curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);


// curl_setopt($ch, CURLOPT_GET, 1);
// curl_setopt($ch, CURLOPT_SSH_PRIVATE_KEYFILE, getcwd() . '\myjks.jks');
// curl_setopt($ch, CURLOPT_SSLCERT, getcwd() . '/cert/aping-ideal.uat.dbs.com.crt');
// curl_setopt($ch, CURLOPT_SSLCERTPASSWD, "thesslpassword");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);

// curl_setopt($ch, CURLOPT_REFERER, "https://adfapi.adftest.rightmove.com/v1/property/sendpropertydetails");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$ch_result = curl_exec($ch);

// echo "result:".$ch_result;
// exit;

// print curl_errno($ch);
// print curl_error($ch);
// echo "Result = ".decodeAPI($ch_result);
curl_close($ch);
?>