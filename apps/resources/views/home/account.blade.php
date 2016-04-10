<!doctype html>
<html>

    {!! Form::open([
    "url" => "changeAccountInfo",
    "method" => "POST",
    "files" => true,
    "class" => "form-register",
    ])  !!}

<head>
    <style type="text/css">
      h1
      {
      font-family:Arial, Helvetica, sans-serif;
      color:#999999;
      }
      .wrapper{width:600px; margin-left:auto;margin-right:auto;}
      .welcome_txt{
        margin: 20px;
        background-color: #FFF0DD;
        padding: 10px;
        border: #D6D6D6 solid 1px;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
        border-radius:5px;
      }
      .google_box{
        margin: 20px;
        background-color: #EBEBEB;
        padding: 10px;
        border: #F7CFCF solid 1px;
        -moz-border-radius:5px;
        -webkit-border-radius:5px;
        border-radius:5px;
      }
      .google_box .image{ text-align:center;}
    </style>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/main.css">
    <meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/theme.css">
    <meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <title>online connext company</title>
</head>




<body>

    <?php 
      session_start();
      if(isset($_SESSION['name']))require(__DIR__ . '\home\inc_header_login.php');
      else require(__DIR__ . '\home\inc_header.php');
    ?>    
    <div id="wrapper"></div>
    <div class="wrapper">
    <br>
    <h1>ข้อมูลส่วนตัว</h1>
    <?php
    echo '<div class="google_box">';

    echo '<p class="image"><img src="'.$_SESSION['picture'].'" alt="" width="300" height="300"/></p>';
    echo '<p><b>  Name : </b>' . '<input size="30" readonly="readonly" id="txt1" name="name" value="'.$_SESSION['name'].'"></p>';
    echo '<p><b>E-mail : </b>' . '<input size="30" readonly="readonly" id="txt2" name="emailAddr" value="'.$_SESSION['emailAddr'].'"></p>';
    echo '<p><b>Gender : </b>' . '<input size="30" readonly="readonly" id="txt3" name="gender" value="'.$_SESSION['gender'].'"></p>';
    echo '<p><b>Country : </b>' . '<input size="30" readonly="readonly" id="txt4" name="locale" value="'.$_SESSION['locale'].'"></p>';
    //echo '<p><b>Languages : </b>' . $_SESSION['languages'].'</p>';
    echo '<p><b>You are login with : </b>' . '<input size="30" readonly="readonly" id="txt5" value="'.$_SESSION['accountType'].'"></p>';
    echo '<p><b>'.$_SESSION['accountType'].' ID : </b>' . '<input size="30" readonly="readonly" id="txt6" value="'.$_SESSION['id'].'"></p>';
    echo '<p><b>'.$_SESSION['accountType'].' Link : </b><a id="link" href='.$_SESSION['link'].' target="_blank">'.'<input size="50" readonly="readonly" id="txt6" value="'.$_SESSION['link'].'"></a></p>';
    
    echo '<input hidden id="changeAccountInfo" type="submit" value="แก้ไขข้อมูลส่วนตัว" style="font-size:10pt;color:white;background-color:green;border:2px solid #336600;padding:3px">';
    echo '<p></p><p><b><a href="logout">LOGOUT</a></b></p>';
    echo '</div>';
    ?>
    </div>
    <?php require(__DIR__ . '\home\inc_footer_index.php');?> 

</body>
</html>


<?php  
  //session_start();
  if(strcmp($_SESSION['link'],"")==0)
  echo "<script>document.getElementById('link').removeAttribute('href');</script>";

  if(isset($_SESSION['name'])) 
  echo "<script>document.getElementById('fullName').innerHTML='".$_SESSION['name']."'</script>";

  if(strcmp($_SESSION['accountType'],"Telecorsa")==0)
  {
    echo "<script>document.getElementById('changeAccountInfo').removeAttribute('hidden');</script>";

    echo "<script>document.getElementById('txt1').removeAttribute('readonly');</script>";
    echo "<script>document.getElementById('txt1').style.backgroundColor = 'yellow';</script>";
    echo "<script>document.getElementById('txt2').removeAttribute('readonly');</script>";
    echo "<script>document.getElementById('txt2').style.backgroundColor = 'yellow';</script>";
    echo "<script>document.getElementById('txt3').removeAttribute('readonly');</script>";
    echo "<script>document.getElementById('txt3').style.backgroundColor = 'yellow';</script>";
    echo "<script>document.getElementById('txt4').removeAttribute('readonly');</script>";
    echo "<script>document.getElementById('txt4').style.backgroundColor = 'yellow';</script>";
  }
  else 

?>
