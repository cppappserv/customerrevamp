<?php
$token = "XdNxEFOAeAA6C2YeReCd1q9MLhSWiavFa1V8c6C/hvMo8ru6Mw==";
$sep_row  = '[//]';
$sep_data = '[|]';
define('_DEFVAR', 1);
require_once('lame.php');
// require_once ("conDBPG.php");
// include('application.php');
// connect to gmail

function createUniqID()
{
  $uid   = uniqid("", 1);
  $uids  = substr($uid, 0, 4)."-".substr($uid, 4, 4)."-".substr($uid, 8, 4).$uids .= "-".substr($uid, 12, 2).substr($uid, 15, 2);
  $uids .= "-".substr($uid, 17, 4)."-".substr($uid, 21, 2).substr($uid, 0, 2);
  return $uids;
}

function createToken()
{
  $uniq = createUniqID();
  return getEncrypt($uniq);
}

function buildParamRequest($par)
{
  global $token;

  // echo "masuk param";
  $mess = "";
  $mess = '{"type" : "'.$par["type"].'",
    "data" : '.json_encode($par["query"]).',
    "callback" : "'.$par["callback"].'" 
  }
  ';

  // return  $mess;
  return getEncryptToken($mess, $token);
}

function sendCURL($par)
{
  // echo "sendCURL";
  $url = $par["url"];
  $data = buildParamRequest($par);
  //echo $data;
  //echo "\n";
  $ch = curl_init();

  // curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 1 );
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
  //echo "result:".$ch_result;

  // print curl_errno($ch);
  // print curl_error($ch);
  // echo "Result = ".decodeAPI($ch_result);
  curl_close($ch);

   //echo $ch_result;
  return $ch_result;//decodeAPI($ch_result);
  //echo decodeAPI($ch_result);
  //return decodeAPI($ch_result);
}

function responseRequest($par)
{
  global $token, $sep_row;
  $result = "";
  if ($par["type"] == "query") {
    $ress = sendCURL($par);

    if ($ress != "") {
      // $result = $ress;
      $result = getDecryptToken($ress, $token);
      // echo $ress;
    }
    else {
      $result = 'STATUS: ERROR'.$sep_row;
      $result .= 'MESSAGE:'.'URL : '.$par["url"].' Error/Not Reachable'.$sep_row;
    }
  }
  echo $result;
}

/**
* $data = "";
* 
* if ( isset( $_POST['data'] ) ) {
* $data = json_decode( $_POST["data"], true );
* } 
* else {
* $data = json_decode( file_get_contents( 'php://input' ) , true );
* } 
* 
* if ( !$data ) return 0;
*/


// return responseRequest()
//print_r($_POST);

if ($_POST["type"] == "query" and $_POST["query"] != "" and $_POST["url"] != "") {
  echo responseRequest($_POST);
}
else {
  echo 'no found/////
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Not Found</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: \'Nunito\', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .code {
                border-right: 2px solid;
                font-size: 26px;
                padding: 0 15px 0 15px;
                text-align: center;
            }

            .message {
                font-size: 18px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="code">
                404            </div>

            <div class="message" style="padding: 10px;">
                Not Found            </div>
        </div>
    </body>
</html> ';
}

?>
