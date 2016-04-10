<?php
session_start();
include_once("config.php");
include_once("includes/functions.php");

//print_r($_GET);die;

if(isset($_REQUEST['code'])){
	$gClient->authenticate();
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectUrl, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) 
{
	$userProfile = $google_oauthV2->userinfo->get();
	//DB Insert
	$gUser = new Users();
	$gUser->checkUser('google',$userProfile['id'],$userProfile['given_name'],$userProfile['family_name'],$userProfile['email'],$userProfile['gender'],$userProfile['locale'],$userProfile['link'],$userProfile['picture']);
	$_SESSION['google_data'] = $userProfile;

	$_SESSION['accountType'] = 'Google';
	$_SESSION['id'] = $_SESSION['google_data']['id'];
	$_SESSION['name'] = $_SESSION['google_data']['name'];
	$_SESSION['link'] = $_SESSION['google_data']['link'];
	$_SESSION['emailAddr'] = $_SESSION['google_data']['email'];
	$_SESSION['gender'] = $_SESSION['google_data']['gender'];
	$_SESSION['locale'] = $_SESSION['google_data']['locale'];
	$_SESSION['picture'] = $_SESSION['google_data']['picture'];
	
	header("location: account.php");
	$_SESSION['token'] = $gClient->getAccessToken();
} 
else $authUrl = $gClient->createAuthUrl();

	if(isset($authUrl)) echo '<a href="'.$authUrl.'"><img src="images/glogin.png" alt=""/></a>';
	else echo '<a href="logout.php?logout">Logout</a>';

?>