<!doctype html>
<html>
<head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/mainsub.css">
    <meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/theme.css">
    <meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/menu.css">
    <meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <title>online connext company</title>
    <script type="text/javascript">
      function MM_preloadImages() 
      { //v3.0
        var d=document; 
        if(d.images)
        { 
          if(!d.MM_p)d.MM_p = new Array();
          var i, j = d.MM_p.length, a = MM_preloadImages.arguments; 
          for(i=0; i<a.length; i++)
          if(a[i].indexOf("#")!=0)
          { 
            d.MM_p[j] = new Image; 
            d.MM_p[j++].src = a[i];
          }
        }
      }
    </script>
</head>



<body>

    <?php 
      session_start();  
      if(isset($_SESSION['name']))require(__DIR__ . '\home\inc_header_login.php');
      else require(__DIR__ . '\home\inc_header.php');
    ?>    
    
    <div id="wrapper"></div>      
      <div class="content" style="margin-top:0; padding-top:0px; background:url(images/bodybg.jpg) top center no-repeat #010101">
        <div class="contactbac">
          <div class="container" style="background:#FFF; padding-top:0px">
            <div class="notlogin">
              <div class="col-8">
                <div class="unrecognized1">
                    <h3>CONNECT US</h3>
                </div>
          
                <div class="social-authenticate1">
                    <div class="connect0">
                      <a href="https://www.facebook.com/TeleCorsa100" target="_blank"><img src="images/sub/connect_03.png"  alt=""/></a></div>
                    <div class="connect0">
                      <a href="https://plus.google.com/108563627988573125242" target="_blank"><img src="images/sub/connect_05.png"  alt=""/></a></div>
                    <div class="connect0">
                      <a href="https://shop.line.me/web/m/shop/84687" target="_blank"><img src="images/sub/connect_09.png"  alt=""/></a></div>
                    <div class="connect0">
                      <a href="https://twitter.com/Telesystemthai" target="_blank"><img src="images/sub/connect_07.png"  alt=""/></a></div>
                    <div class="connect0">
                      <a href="https://www.instagram.com/telecorsa_ts" target="_blank"><img src="images/sub/connect_01.png"  alt=""/></a></div>
                    <div class="connect0">
                      <a href="https://www.youtube.com/user/TELEWorldThai" target="_blank"><img src="images/sub/connect_11.png"  alt=""/></a></div>
                </div>
              </div>  
            </div>          
          </div>              
        </div>
      </div>
    </div>

    <?php require(__DIR__ . '\home\inc_footer.php');?> 

</body>
</html>


<?php  
  //session_start();
  if(isset($_SESSION['name'])) 
  echo "<script>document.getElementById('fullName').innerHTML='".$_SESSION['name']."'</script>";
?>
