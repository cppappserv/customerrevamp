<?php
function getFromEnv(){
 $dir =  __DIR__;

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
       //echo $result;
       if ( substr($result,0,2) == "DB" ){
         $pos = strpos($result,"=");
         //echo "masuk".$pos;
         if ($pos > 0){
         $op = substr($result,0,$pos);
         $op = trim($op);
         $val = substr($result,$pos+1);
         $val = trim($val);
         //echo "ok";
         $new  = "[".$op.":".$val."]";
         //print_r($new);
         //$news = json_encode($new); 
         $arr[$op] = $val;
         //$arrs[$op];
         //print_r($arrs);
         //array_push($arr,$new);
         //print_r($arr);
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

$time_start = microtime(); 
$dbenv = getFromEnv(); 
echo $dbenv["DB_PASSWORD"];
$time_end = microtime();
$time = $time_end - $time_start;

echo "sec=.".$time;
echo "<br>";

$hostdb =  $dbenv["DB_HOST"];
$userdb = $dbenv["DB_USERNAME"]; 
$passdb = str_replace('"','',$dbenv["DB_PASSWORD"]);
$dbport = $dbenv["DB_PORT"];
$dbs = $dbenv["DB_DATABASE"];

$db = @mysqli_connect($hostdb, $userdb, $passdb, $dbs, $dbport);
if (!mysqli_select_db($db, $dbs)) {
	echo '<br> The connection to Database if Failed';
}

// $result = DB_query('select * from rcvrm_plasma', $db);
$sql = 'select name, email from users';

$rs0 = DB_query ($sql, $db,		
		$Transaction=false,
		$TrapErrors=true);
$rw0 = db_fetch_array($rs0);
print_r($rw0);

?>