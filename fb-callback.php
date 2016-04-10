<?php
session_start();
require_once __DIR__ . '\FacebookSDK\src\Facebook\autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '264541357219816',
  'app_secret' => 'ef72c094178f7322991f67793472e43c',
  'default_graph_version' => 'v2.5',
]);

$helper = $fb->getRedirectLoginHelper();

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    echo 'Bad request';
  }
  exit;
}


//echo '<h3>Access Token</h3>';var_dump($accessToken->getValue());

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name,email,gender,locale,picture,languages', $accessToken->getValue());
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}


$user = $response->getGraphUser();

$_SESSION['accountType'] = 'Facebook';
$_SESSION['id'] = $user['id'];
$_SESSION['name'] = $user['name'];
$_SESSION['link'] = 'http://www.facebook.com/'.$user['id'];
$_SESSION['emailAddr'] = $user['email'];
$_SESSION['gender'] = $user['gender'];
$_SESSION['locale'] = $user['locale'];
$_SESSION['picture'] = 'http://graph.facebook.com/'.$user['id'].'/picture?type=large';
//$_SESSION['languages'] = $user['languages'];


$oAuth2Client = $fb->getOAuth2Client();
$tokenMetadata = $oAuth2Client->debugToken($accessToken);
$tokenMetadata->validateAppId('264541357219816'); 
//$tokenMetadata->validateExpiration();


  $dbServer = 'localhost'; //Define database server host
  $dbUsername = 'root'; //Define database username
  $dbPassword = ''; //Define database password
  $dbName = 'testdatabase'; //Define database name
  $tableName = 'users';

  //connect databse
  $con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
  $con->query("SET names utf8");

  if(mysqli_connect_errno())die("Failed to connect with MySQL: ".mysqli_connect_error());

  date_default_timezone_set('Asia/Bangkok');

  $prevQuery = mysqli_query($con,"SELECT * FROM $tableName WHERE emailAddr = '".$_SESSION['emailAddr']."'") or die(mysqli_error($con));
  if(mysqli_num_rows($prevQuery) > 0) 
         $update = mysqli_query($con,"UPDATE $tableName SET accountType = '".$_SESSION['accountType']."', fname = '".substr($_SESSION['name'],0,strpos($_SESSION['name'],' '))."', lname = '".substr($_SESSION['name'],strpos($_SESSION['name'],' ')+1,strlen($_SESSION['name']))."', emailAddr = '".$_SESSION['emailAddr']."', password = '', gender = '".$_SESSION['gender']."', locale = '".$_SESSION['locale']."', picture = '".$_SESSION['picture']."', link = '".$_SESSION['link']."', modified = '".date("Y-m-d H:i:s",time())."' WHERE emailAddr = '".$_SESSION['emailAddr']."'") or die(mysqli_error($con));
  else 
    $insert = mysqli_query($con,"INSERT INTO $tableName SET accountType = '".$_SESSION['accountType']."', fname = '".substr($_SESSION['name'],0,strpos($_SESSION['name'],' '))."', lname = '".substr($_SESSION['name'],strpos($_SESSION['name'],' ')+1,strlen($_SESSION['name']))."', emailAddr = '".$_SESSION['emailAddr']."', password = '', gender = '".$_SESSION['gender']."', locale = '".$_SESSION['locale']."', picture = '".$_SESSION['picture']."', link = '".$_SESSION['link']."', created = '".date("Y-m-d H:i:s",time())."', modified = '".date("Y-m-d H:i:s",time())."'") or die(mysqli_error($con));

    
echo "<script>window.opener.location.assign('http://localhost/telecorsa');</script>";
echo "<script>window.close();</script>";
//header('Location:http://localhost/telecorsa');

