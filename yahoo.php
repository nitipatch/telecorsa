<?php
session_start();
require  __DIR__ . '\lightopenid\openid.php';

//header("Location:https://www.google.co.th/");
//header('Location:' . $_SERVER['HTTP_REFERER']);

try
{
    # Change 'localhost' to your domain name.
    $openid = new LightOpenID($_SERVER['HTTP_HOST']);
     
    //Not already logged in
    if(!$openid->mode)
    {
        //do the login
        if(isset($_GET['login'])) 
        {
            //The google openid url
            $openid->identity = 'https://me.yahoo.com';
             
            //Get additional google account information about the user , name , email , country
            $openid->required = array('contact/email' , 'namePerson' , 'pref/language' , 'contact/country' , 'person/gender'); 
             
            //start discovery
            header('Location: ' . $openid->authUrl());
        }
        else
        {
            //print the login form
            login_form();
        }
         
    }
     
    else if($openid->mode == 'cancel')
    {
        echo 'User has canceled authentication!';
        //redirect back to login page ??
    }
     
    //Echo login information by default
    else
    {
        //header("Location:https://login.yahoo.com/config/login?logout=.");
        //header("Location:https://accounts.google.com/Logout");

        if($openid->validate())
        {
            $d = $openid->getAttributes();
             
            $_SESSION['accountType'] = 'Yahoo';            
            $_SESSION['id'] = '';
            $_SESSION['name'] = $d['namePerson'];
            $_SESSION['link'] = '';
            $_SESSION['emailAddr'] = $d['contact/email'];
            $_SESSION['gender'] = $d['person/gender'];
            $_SESSION['locale'] = $d['pref/language'];
            $_SESSION['picture'] = '';
            //$_SESSION['language_code'] = $d['pref/language'];
            //$_SESSION['locale'] = $d['contact/country'];    
        }

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
                 $update = mysqli_query($con,"UPDATE $tableName SET accountType = '".$_SESSION['accountType']."', fname = '".substr($_SESSION['name'],0,strpos($_SESSION['name'],' '))."', lname = '".substr($_SESSION['name'],strpos($_SESSION['name'],' ')+1,strlen($_SESSION['name']))."', emailAddr = '".$_SESSION['emailAddr']."',password = '', gender = '".$_SESSION['gender']."', locale = '".$_SESSION['locale']."', picture = '".$_SESSION['picture']."', link = '".$_SESSION['link']."', modified = '".date("Y-m-d H:i:s",time())."' WHERE emailAddr = '".$_SESSION['emailAddr']."'") or die(mysqli_error($con));
        else 
            $insert = mysqli_query($con,"INSERT INTO $tableName SET accountType = '".$_SESSION['accountType']."', fname = '".substr($_SESSION['name'],0,strpos($_SESSION['name'],' '))."', lname = '".substr($_SESSION['name'],strpos($_SESSION['name'],' ')+1,strlen($_SESSION['name']))."', emailAddr = '".$_SESSION['emailAddr']."',password = '', gender = '".$_SESSION['gender']."', locale = '".$_SESSION['locale']."', picture = '".$_SESSION['picture']."', link = '".$_SESSION['link']."', created = '".date("Y-m-d H:i:s",time())."', modified = '".date("Y-m-d H:i:s",time())."'") or die(mysqli_error($con));
        
        echo "<script>window.opener.location.assign('http://localhost/telecorsa');</script>";
        echo "<script>window.close();</script>";
        //header("Location:http://localhost/telecorsa/");
    }
}
 
catch(ErrorException $e) 
{
    echo $e->getMessage();
}
 
/*
    This function will print the login form with the button
*/
function login_form()
{
?>
<a id="go" href="?login"></a>
<script>
document.getElementById("go").click();
</script>
<?php
}