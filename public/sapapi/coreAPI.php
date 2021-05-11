<?php
$token = "XdNxEFOAeAA6C2YeReCd1q9MLhSWiavFa1V8c6C/hvMo8ru6Mw==";
$sep_row = '[//]';

/** separated row data **/
$sep_data = '[|]';

/** identify cllaer include  **/
define('_DEFVAR', 1);

/** separated row column **/
require_once('lame.php');
require_once('incDBPG.php');
require_once('index.php');

function buildResponse($rows)
{
  global $sep_row, $sep_data;
  $ds = "";
  foreach ($rows as $key => $value) {
    if ($ds != "") {
      $ds .= "[|]";
    }
    $ds .= $value;
  }
  return $ds;
}
// global $token;
/**
* Structure received JSON
* 
* { "type" : "query",
* "data" : "encrypted",
* "callback" : "true", 
* }
* 
* Structure Send Customize 
* ------------------------
* STATUS: TRUE [//]   
* MESSAGE: OK [//]
* TYPE: SELECT [//]
* MANIFEST: COUNT=10[//]
* HEADER:  Header1[|]Header2[|]Header3]     [//]
* DATA1[|]DATA2[//]
* DATA2[|]DATA2[//]
*/
$obj = "";
$mess = "";
if (isset($_POST['data'])) {
  $obj = $_POST["data"];
}
else {
    $obj = file_get_contents('php://input');
}
if (!$obj) {
  echo $msgerridx;
  return 0;
}

if ($obj == "") {
  echo $msgerridx;
  return 0;
}
if ($obj) {
  $datas = getDecryptToken($obj, $token);

  // echo $datas;
  if ($datas != "") {
    $data = json_decode($datas);
    if ($data) {

      // echo "decoded";
      $SQL    = $data->data;
      $mess   = "";
      $head   = "";
      $header = "";
      $count  = 0;

      //$mess = $SQL;
      $error = "";
      $result = DB_query($SQL, $db);
      //$mess .= json_encode($error);
      //$mess .=  "S:".$error;
      //echo "OK";
      $rowdata = array();
      if ($error == "") {
        while ($rowse = DB_fetch_assoc($result)) {
          array_push($rowdata, $rowse);
        }
      }
      if (count($rowdata) > 0) {
        $status = "select";
      }
      else {
        $status = "modify";
      }
      if ($result && $error == "") {
      }
      else {
        //$status = "error";
      }
      if ($status == "select") {

        //	while ( $rows = DB_fetch_assoc( $result ) ) {
        foreach ($rowdata as $rd => $rows) {
          $count++;
          if ($mess != "") {
            $mess .= $sep_row;
          }
          if ($count == 1) {
            $mess = '';
            $header = "";
            foreach ($rows as $key => $value) {
              if ($header != "") {
                $header .= $sep_data;
              }
              $header .= $key;
            }
            $header .= $sep_row;;
          }
          $mess .= buildResponse($rows);
        }
        if ($count == 0) {
          $head .= 'STATUS: FALSE';
          $mess = $head;
        }
        else {
          $head .= 'STATUS: TRUE'.$sep_row;
          $head .= 'MESSAGE: OK'.$sep_row;
          $head .= 'TYPE: '.$status.$sep_row;
          $head .= 'MANIFEST: '.'COUNT='.$count.$sep_row;
          $mess  = $head.'HEADER:'.$header.$mess;
        }
      }
      elseif ($status == "modify") {

        //$mess = "callback";
        if ($result and $error == "") {
          $head .= 'STATUS: TRUE'.$sep_row;
          $head .= 'MESSAGE: OK'.$sep_row;
          $head .= 'TYPE: '.$data->callback.$sep_row;
          $head .= 'MANIFEST: data modified'.$sep_row;
          $mess  = $head.$mess;
        }
        else {
          $head .= 'STATUS: ERROR'.$sep_row;
          if ($error==''){
            $error = 'Server Error';
          }          
          $head .= 'MESSAGE:'.json_encode($error).$sep_row;
          $head .= 'TYPE: '.$data->callback.$sep_row;
          $mess  = $head.$mess;
        }
      }
    }
    else {

      // add handling count decrypt
    }
  }
}
if ($mess!= "" ){
  echo getEncryptToken($mess, $token);
  // echo $mess;
}else{
  echo $msgerridx;
}
?>
