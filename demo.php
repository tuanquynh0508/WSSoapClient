<?php
//DONE TEST SUCCESSFUL
//
//KEYWORD
//wss4j for php ws client
//php soapclient wss-type passwordtext
//https://groups.google.com/forum/#!forum/wse-php
//https://gist.github.com/Turin86/5569152
//Test by Nguyen Nhu Tuan
//tuanquynh0508@gmail.com

include "WSSoapClient.php";

$wsdl = 'http://example.com?wsdl';
$username = 'your username';
$password = 'your password';

$params = array(
    'parameter_1' => 'value 1',
    'parameter_2' => 'value 2',
    'parameter_n' => 'value 3',
);

try {
	// Init Soap client
    $client = new WSSoapClient($wsdl, array('trace' => true, 'exceptions' => true));
	
	// Set authentication info
    $client->__setUsernameToken($username, $password, 'PasswordText');
	
	// Call function with parameters
    $result = $client->exampleFunction($params);
	
	// Debug result
    var_dump($result);

} catch (Exception $e) {
    echo "Exception: ".$e->getMessage();
}

