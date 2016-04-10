<?php
//session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '949697549838-4obg08af16mvll2sekn4c7jundkdot0e.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'dgP0IiNrZu0ZRQY-iotn6O5A'; //Google CLIENT SECRET
$redirectUrl = 'http://localhost/telecorsa/login-with-google-using-php';  //return url (url to script)
$homeUrl = 'http://localhost/telecorsa';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Telecorsa');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>