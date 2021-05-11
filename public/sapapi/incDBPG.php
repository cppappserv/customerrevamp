<?php
define('_DEFVAR', 1);
require_once("index.php");
error_reporting( 1 ) ;

define ('LIKE','LIKE');

$error = "";
function getFromEnv(){
 $dir =  __DIR__;
 //echo $dir;
	$path1 = str_replace('public/sapapi','',$dir);
 
	$path2 = str_replace('public\sapapi','',$dir);
	if (strlen($path1) < strlen($path2)){
	 $path = $path1;
	} else {
	 $path = $path2;
	}

 $arr = array();
 $fn = fopen($path.".env","r");
 $found = 0;
 while (! feof($fn)){
       $arrs = array();
       $result = fgets($fn);
       if ( substr($result,0,2) == "DB" ){
         $pos = strpos($result,"=");
         if ($pos > 0){
         $op = substr($result,0,$pos);
         $op = trim($op);
         $val = substr($result,$pos+1);
         $val = trim($val);
         $new  = "[".$op.":".$val."]";
         $arr[$op] = $val;
         }
       }

       if ( substr($result,0,11) == "DB_PASSWORD" ){  
         fclose($fn);     
         return $arr;
         }
       }
 fclose($fn); 
 }   
 
function microtime_float(){
 list($usec,$sec) = explode(" ",microtime());
 return ( (float)$sec + (float)$sec );
} 

function prnMsg($Msg,$Type='info', $Prefix=''){
global $error;
$error = "";
  $error = '<P>' . getMsg($Msg, $Type, $Prefix) . '</P>'; 
	echo '<P>' . getMsg($Msg, $Type, $Prefix) . '</P>';

}//prnMsg

function getMsg($Msg,$Type='info',$Prefix=''){
	$Colour='';
	switch($Type){
		case 'error':
			$Class = 'error';
			$Prefix = $Prefix ? $Prefix : 'ERROR' . ' ' .'Message Report';
			break;
		case 'warn':
			$Class = 'warn';
			$Prefix = $Prefix ? $Prefix : 'WARNING' . ' ' . 'Message Report';
			break;
		case 'success':
			$Class = 'success';
			$Prefix = $Prefix ? $Prefix : 'SUCCESS' . ' ' . 'Report';
			break;
		case 'info':
		default:
			$Prefix = $Prefix ? $Prefix : 'INFORMATION' . ' ' .'Message';
			$Class = 'info';
	}
	return '<DIV class="'.$Class.'"><P><B>' . $Prefix . '</B> : ' .$Msg . '<P></DIV>';
}//getMsg

function IsEmailAddress($TestEmailAddress){

/*thanks to Gavin Sharp for this regular expression to test validity of email addresses */

	if (function_exists("preg_match")){
		if(preg_match("/^(([A-Za-z0-9]+_+)|([A-Za-z0-9]+\-+)|([A-Za-z0-9]+\.+)|([A-Za-z0-9]+\++))[A-Za-z0-9]+@((\w+\-+)|(\w+\.))\w{1,63}\.[a-zA-Z]{2,6}$/", $TestEmailAddress)){
			return true;
		} else {
			return false;
		}
	} else {
		if (strlen($TestEmailAddress)>5 AND strstr($TestEmailAddress,'@')>2 AND (strstr($TestEmailAddress,'.co')>3 OR strstr($TestEmailAddress,'.org')>3 OR strstr($TestEmailAddress,'.net')>3 OR strstr($TestEmailAddress,'.edu')>3 OR strstr($TestEmailAddress,'.biz')>3)){
			return true;
		} else {
			return false;
		}
	}
}

Function ContainsIllegalCharacters ($CheckVariable) {

	if (strstr($CheckVariable,"'")
		OR strstr($CheckVariable,'+')
		OR strstr($CheckVariable,"\"")
		OR strstr($CheckVariable,'&')
		OR strstr($CheckVariable,"\\")
		OR strstr($CheckVariable,'"')){

		return true;
	} else {
		return false;
	}
}


function pre_var_dump(&$var){
	echo "<div align=left><pre>";
	var_dump($var);
	echo "</pre></div>";
}

class XmlElement {
  var $name;
  var $attributes;
  var $content;
  var $children;
};


/*
//$db = mysqli_connect($dbHost , $dbUser, $dbPassword);
$db = @pg_connect("10.27.10.92" , "cppuser", "cpp123");


 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    //exit();
    $db = 0;
}

if ( !$db ) {
	echo '<br>Check configuration file for the database user name and password to connect to the database server';
	//exit;
}

if (!mysqli_select_db($db,$dbName)) {
	echo '<br> The connection to Database if Failed';
	echo '<br><a href="logout.php" target="_top">Back to login page</a>';	
	//exit;
}
*/

/**
* remote : 10.3.1.120 port : 4022 user : qrcodeapps pass : QRCodeApps1!2@3#
* postgrest : 10.3.1.121 qrcodedb pass : QRCodeDB1!2@3#
*/

/* get from ENV Laravel**/
//$genv = getFromEnv(); 


     //   require("../../mainsite/coninfo.php");
    //if(($this->db = mysql_connect($this->hostdb,$this->userdb,"barcodecpp123"))) 
    //$this->db = mysql_connect($hostdb,$userdb,$passdb);  

//$conn_string = "host=".$genv["DB_HOST"]." port=".$genv["DB_PORT"]." dbname=".$genv["DB_DATABASE"]." user=".$genv["DB_USERNAME"]." password=".$genv["DB_PASSWORD"]."";
//$db = @mysqli_connect($conn_string);


$genv = getFromEnv(); 

//print_r($genv);
$hostdb =  $genv["DB_HOST"];
$userdb = $genv["DB_USERNAME"]; 
$passdb = str_replace('"','',$genv["DB_PASSWORD"]);
$dbport = $genv["DB_PORT"];
$dbs = $genv["DB_DATABASE"];

// mysqli_connect(host, username, password, dbname, port, socket)

$db = @mysqli_connect($hostdb, $userdb, $passdb, $dbs, $dbport);

//require_once ($PathPrefix .'includes/MiscFunctions.php');


if (!mysqli_select_db($db, $dbs)) {
	echo '<br> The connection to Database if Failed';
//	echo '<br><a href="logout.php" target="_top">Back to login page</a>';	
	//exit;
}



//DB wrapper functions to change only once for whole application
function DB_query ($SQL,
		&$Conn,		
		$Transaction=false,
		$TrapErrors=true){

  global $error;
  
  $error = "";
	global $PathPrefix;	
	$Result=@mysqli_query($Conn, $SQL);
			
	if ($DebugMessage == '') {
		$DebugMessage = "The SQL that failed was";
	}
	$ErrMsg = DB_error_msg($Conn);
	
	if (DB_error_no($Conn) != 0 AND $TrapErrors==true){
		// msg to user, there is error in sql
		prnMsg($ErrorMessage.'<br>' . $ErrMsg,'error', 'Database Error');		
		// display error sql to screen
		prnMsg($DebugMessage. "<br>$SQL<br>",'error','Database SQL Failure');
		
		// get error sql for logfile
		//$ErrorSQL = "INSERT INTO t_error (error_date, usrid, qry_str, err_msg) ".
	  //				"VALUES (NOW(),'" .trim($_SESSION['UserId']). "', ".
	  //				"'" .DB_escape_string($SQL). "', '" .DB_escape_string($ErrMsg). "')"; 
				
		// if type transcation==true than rollback
		if ($Transaction){
			$SQL = 'rollback';
			$Result = DB_query($SQL,$Conn);
			if (DB_error_no($Conn)!=0){
				prnMsg('Error Rolling Back Transaction', '', 'Database Rollback Error' );
			} 			
		} 
		
		// insert sql error to logfile
		//mysqli_query($Conn, $ErrorSQL);
		
	//	exit;
		
	}
	return $Result;
}

function DB_fetch_row (&$ResultIndex) {
	$RowPointer=mysqli_fetch_row($ResultIndex);
	Return $RowPointer;
}

function DB_fetch_assoc (&$ResultIndex) {
	$RowPointer=mysqli_fetch_assoc($ResultIndex);
	Return $RowPointer;
}

function DB_fetch_array (&$ResultIndex) {
	$RowPointer=mysqli_fetch_array($ResultIndex);
	Return $RowPointer;
}

function DB_data_seek (&$ResultIndex,$Record) {
	mysqli_data_seek($ResultIndex,$Record);
}

function DB_free_result (&$ResultIndex){
	mysqli_free_result($ResultIndex);
}

function DB_num_rows (&$ResultIndex){
	return mysqli_num_rows($ResultIndex);
}

function DB_affected_rows(&$ResultIndex){
	global $db;
	return mysqli_affected_rows($db);	
}

function DB_error_no(&$Conn){
	return mysqli_error($Conn);
}

function DB_error_msg(&$Conn){
global $error;
$error = mysqli_error($Conn);

	return mysqli_error($Conn);
}

function mysqls_escape_string($String){
	global $db;
	//return mysqli_real_escape_string($db, htmlentities($String));
	//return mysqli_real_escape_string($db, htmlentities($String, ENT_COMPAT, 'ISO-8859-1'));
	return mysqli_real_escape_string($db, htmlspecialchars($String, ENT_COMPAT, 'ISO-8859-1'));		
}

function DB_show_tables(&$Conn){
	$Result = DB_query('SHOW TABLES',$Conn);
	Return $Result;
}

function DB_show_fields($TableName, &$Conn){
	$Result = DB_query("DESCRIBE $TableName",$Conn);
	Return $Result;
}

function DB_last_insert_id(&$Conn){
	return mysqli_insert_id($Conn);
}

function INTERVAL( $val, $Inter ){
		global $dbtype;
		return "\n".'INTERVAL ' . $val . ' '. $Inter."\n";
}

function DB_QuerySelect($FieldName, $TblName, $WhereClause) {
	$SQL = "SELECT $FieldName FROM $TblName $WhereClause ";
    $Result = DB_query($SQL, $db);
    return $Result;
}

      
?>