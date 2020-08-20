@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php                    
                        function curl($url,$post="")
                        {
                            $curl = curl_init();
                            $userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';
                            curl_setopt($curl,CURLOPT_URL,$url);    //The URL to fetch. This can also be set when initializing a session with curl_init().
                            curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE); //TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
                            curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,5);    //The number of seconds to wait while trying to connect.
                            if($post!="")
                            {
                                curl_setopt($curl,CURLOPT_POST,5);
                                curl_setopt($curl,CURLOPT_POSTFIELDS,$post);
                            }
                            curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);  //The contents of the "User-Agent: " header to be used in a HTTP request.
                            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);   //To follow any "Location: " header that the server sends as part of the HTTP header.
                            curl_setopt($curl, CURLOPT_AUTOREFERER, TRUE);  //To automatically set the Referer: field in requests where it follows a Location: redirect.
                            curl_setopt($curl, CURLOPT_TIMEOUT, 10);    //The maximum number of seconds to allow cURL functions to execute.
                            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);  //To stop cURL from verifying the peer's certificate.
                    
                            $contents = curl_exec($curl);
                            curl_close($curl);
                            return $contents;
                        }
                    
                        $currentUrl = $_SERVER['REQUEST_URI'];
                        $currentUrl = explode('?', $currentUrl);
                        $client_id='252007486382-2791b814v5su3j4fonkl9b12mde9jgn3.apps.googleusercontent.com';
                        $client_secret='FgdectCndYDBlGxELnmSTwOc';
                        //$redirect_uri=$currentUrl[0];
                        $redirect_uri='http://01659440.dyn.cbn.net.id:8815/customer/gcon';
                        $max_results = 25;
                    
                        if(isset($_GET["code"]))
                        {
                            $auth_code = $_GET["code"];
                    
                            $fields=array(
                                'code'=>  urlencode($auth_code),
                                'client_id'=>  urlencode($client_id),
                                'client_secret'=>  urlencode($client_secret),
                                'redirect_uri'=>  urlencode($redirect_uri),
                                'grant_type'=>  urlencode('authorization_code')
                            );
                            $post = '';
                            foreach($fields as $key=>$value)
                            {
                                $post .= $key.'='.$value.'&';
                            }
                            $post = rtrim($post,'&');
                    
                            $result = curl('https://accounts.google.com/o/oauth2/token',$post);
                    
                            $response =  json_decode($result);
                            $accesstoken = $response->access_token;
                    
                            $url = 'https://www.google.com/m8/feeds/contacts/default/full?max-results='.$max_results.'&alt=json&v=3.0&oauth_token='.$accesstoken;
                            $xmlresponse =  curl($url);

                            
                            $temp = json_decode($xmlresponse,true); 
                            print_r($temp);
                            //$file = $_SERVER['DOCUMENT_ROOT'] . '/data.txt';
                            //file_put_contents($file, $temp);
                        }
                    
                    ?>
                    <a href="https://accounts.google.com/o/oauth2/auth?client_id=<?php echo $client_id; ?>&redirect_uri=<?php echo $redirect_uri ?>&scope=https://www.google.com/m8/feeds/&response_type=code">Import Contacts from google</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
