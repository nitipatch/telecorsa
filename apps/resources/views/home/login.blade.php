<!doctype html>
<html>

    {!! Form::open([
    "url" => "login/create",
    "method" => "POST",
    "files" => true,
    "class" => "form-register",
    ])  !!}  

<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/mainsub.css">
<meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/theme.css">
<meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/menu.css">
<meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>

<title>online connext company</title>
<style type="text/css"></style>

</head>

<body>

    <?php
        echo csrf_field();
        session_start();  
//////////////////////////////////////////////////-----Facebook-----/////  
        require_once __DIR__ . '\FacebookSDK\src\Facebook\autoload.php';
        $fb = new Facebook\Facebook(['app_id' => '264541357219816',
                                     'app_secret' => 'ef72c094178f7322991f67793472e43c',
                                     'default_graph_version' => 'v2.5',]);
        $helper = $fb->getRedirectLoginHelper();
        $loginUrl = $helper->getLoginUrl('https://localhost/telecorsa/fb-callback.php');
//////////////////////////////////////////////////-----Google-----/////
        include_once(__DIR__ . "/google/config.php");
        include_once(__DIR__ . "/google/includes/functions.php");
        $authUrl = $gClient->createAuthUrl();
/////////////////////////////////////////////////////////////
    ?>
    

    
    <?php 
      if(isset($_SESSION['name']))require(__DIR__ . '\home\inc_header_login.php');
      else require(__DIR__ . '\home\inc_header.php');
    ?>

    <div id="wrapper"></div>
        <br>
        @if(Session::has('flash_notice'))
            <h3 style="color:red;text-align:center;">{{ Session::get('flash_notice') }}</h3>
        @endif         
            <div class="content" style="margin-top:0; padding-top:0px; background:url(images/bodybg.jpg) top center no-repeat #010101">
            	<div class="contactbac">
                	<div class="container" style="background:#FFF; padding-top:0px">
                    	<div class="notlogin">
    <h3>Quickly sign in with:</h3>
    <label>I have read and agree to the Telecorsa Interactive Terms of Use and Privacy Policy. I understand I will receive the Telecorsa Insider and Roadshow newsletters (you can opt out at any time).</label>
    <div class=" agree"></div>
    	<div class="col-5">
    	  <div class="social-authenticate">
            <a href=<?php echo $loginUrl;?>><img src="images/sub/socialbut_03.jpg"  alt=""/></a>
            
            <a href=<?php echo $authUrl;?>><img src="images/sub/socialbut_05.jpg" alt=""/></a>
            
            <a href="yahoo.php"><img src="images/sub/socialbut_06.jpg"  alt=""/></a>        
        </div>
      </div>

      

    <div class="or">or</div>
    <div class="col-5">
    <div class="authenticate">
        <!--
        <div class="fname">    <input required type="text" name="fname"     id="fname"     placeholder="FIRST NAME" class="login_email"></div>
        <div class="lname">    <input required type="text" name="lname"     id="lname"     placeholder="LAST NAME" class="login_email"></div>
        <div class="emailAddr"><input required type="text" name="emailAddr" id="emailAddr" placeholder="E-MAIL ADDRESS" class="login_email"></div>
            @if ($errors->has('emailAddr'))
                <p style="color:red;font-size:14px;">{{ $errors->first('emailAddr') }}</p>
            @endif
        <div class="gender">
            Gender : <input type="radio" name="gender" id="gender_Male" value="male" /> Male
                     <input type="radio" name="gender" id="gender_Female" value="female" /> Female
            <p></p>
        </div>
        <div class="country">  <input required type="text" name="country"   id="country"   placeholder="COUNTRY" class="login_email"></div>
        
        <div class="password"> <input required type="password" name="password"   id="password"   placeholder="PASSWORD" class="login_email"></div>    
        <div class="password_confirmation"> <input required type="password" name="password_confirmation" id="password_confirmation" placeholder="CONFIRM PASSWORD" class="login_email"></div>    
            @if ($errors->has('password_confirmation'))
                <p style="color:red;font-size:14px;">{{ $errors->first('password_confirmation') }}</p>
            @endif
        -->

        <div class="emailAddr"><input required type="text" name="emailAddr" id="emailAddr" placeholder="E-MAIL ADDRESS" class="login_email"></div>
            @if ($errors->has('emailAddr'))
                <p style="color:red;font-size:14px;">{{ $errors->first('emailAddr') }}</p>
            @endif
        <div class="password"> <input required type="password" name="password"   id="password"   placeholder="PASSWORD" class="login_email"></div>    

        {!! Form::submit('LOGIN', ['class' => 'btn-link']) !!}
        <a href="#" style="margin-left:30px">Forgot Password?</a> 

    </div>
    </div>  


    </div>
    </div>
    </div>
    </div>
    </div>
        <?php require(__DIR__ . '\home\inc_footer.php');?>
    </div>
    </div>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


<script>
    //if(document.getElementById('gender_Male').checked) alert("M");
    //else if(document.getElementById('gender_Female').checked) alert("F");
</script>


<?php  
    //session_start();
    if(isset($_SESSION['name'])) 
    echo "<script>document.getElementById('fullName').innerHTML='".$_SESSION['name']."'</script>";
?>
