<?php


$data = array("username" => "msibrahim", "password" => "Godbewithme1!");                                                                    
$data_string = json_encode($data);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://accept.paymobsolutions.com/api/auth/tokens");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string)                                                                    
));  

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

$out = json_decode($server_output);

////////////////////////////////////////

$request_param = "https://accept.paymobsolutions.com/api/ecommerce/orders?token=" . $out->token;

//var_dump($request_param);

$ch1 = curl_init();

curl_setopt($ch1, CURLOPT_URL,$request_param);
//curl_setopt($ch1, CURLOPT_POSTFIELDS, $data1_string);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json'                                                                  
)); 

curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

$server1_output = curl_exec($ch1);

curl_close ($ch1);

$out1 = json_decode($server1_output);

foreach ($out1->results as $a){
    echo $a->items[0]->name . "\n";
}

?>