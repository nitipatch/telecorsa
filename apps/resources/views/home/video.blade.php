<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/mainsub.css">
<meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/theme.css">
<meta charset="utf-8"> <link rel="stylesheet" type="text/css" href="css/menu.css">
<meta name="description" content="Image overlay hover effects with CSS3 transitions. When we hover over an image, a neat transition will occur." />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css" />

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        if (Modernizr.touch) 
        {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){if (!$(this).hasClass("hover"))$(this).addClass("hover");});
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover"))$(this).closest(".img").removeClass("hover");
            });
        } 
        else 
        {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){$(this).addClass("hover");})
            // handle the mouseleave functionality
            .mouseleave(function(){$(this).removeClass("hover");});
        }
    });
</script>

<title>online connext company</title>
</head>


<body>
    <?php 
        session_start();  
        if(isset($_SESSION['name']))require(__DIR__ . '\home\inc_header_login.php');
        else require(__DIR__ . '\home\inc_header.php');
    ?>             


    <div id="wrapper">        
        <div id="effect-6" class="effects clearfix">

            <div class="img" style="width:50%; height:100%" id="largeFbNewsImg">
                <div class="overlay">
                    <div class="expand" id="largeFbNews">
                        <div>
                            <ul style="margin-top:10px" id="largeFbNewsLink">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="img" style="height:100%" id="mediumFbNewsImg">
                <div class="overlay">
                    <div class="expandmedium" id="mediumFbNews">
                        <div>
                            <ul style="margin-top:10px" id="mediumFbNewsLink">
                            </ul>
                        </div>
                  </div>
            </div>
            
            </div>
            <div class="img" id="smallAFbNewsImg">
                <div class="overlay">
                    <div class="expandsmall" id="smallAFbNews">
                        <div>
                            <ul style="margin-top:10px" id="smallAFbNewsLink">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img" id="smallBFbNewsImg">
                <div class="overlay">
                    <div class="expandsmall" id="smallBFbNews">
                        <div>
                            <ul style="margin-top:10px" id="smallBFbNewsLink">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
       
        <br><br>

        <div id="effect-6" class="effects clearfix">

            <div class="img" style="width:50%; height:100%" id="largeIgNewsImg">
                <div class="overlay">
                    <div class="expand" id="largeIgNews">
                        <div>
                            <ul style="margin-top:10px" id="largeIgNewsLink">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="img" style="height:100%" id="mediumIgNewsImg">
                <div class="overlay">
                    <div class="expandmedium" id="mediumIgNews">
                        <div>
                            <ul style="margin-top:10px" id="mediumIgNewsLink">
                            </ul>
                        </div>
                  </div>
            </div>
            
            </div>
            <div class="img" id="smallAIgNewsImg">
                <div class="overlay">
                    <div class="expandsmall" id="smallAIgNews">
                        <div>
                            <ul style="margin-top:10px" id="smallAIgNewsLink">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="img" id="smallBIgNewsImg">
                <div class="overlay">
                    <div class="expandsmall" id="smallBIgNews">
                        <div>
                            <ul style="margin-top:10px" id="smallBIgNewsLink">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <div class="content">
            <div class="container">
            	  <div class="col-8">
                    
                    <div class=" moreTopStories" id="moreTopStories"></div>
                    <div class=" col-5">

                    	  <div class="maintopstorybody2">
                        		<div class="maintopstorybodypic0">
                                	<a href="newsdetail.php" target="_blank"><img src="images/sub/howtopic.jpg"  alt=""/></a>
                            </div>
                            <div class="maintopstorybodydetail">
                                  <p><a href="newsdetail.php">
                                    If you've tried all the tricks -- dimming your screen, closing apps and turning off unused antennae -- but your laptop's battery still can't hold a charge, it might be time to replace the battery.
                                  </a></p>
                                  <p><a href="newsdetail.php">
                                    A battery's capacity (the amount of energy it can hold) depletes over time. Eventually, your once high-endurance laptop might only last a couple hours. Same goes for phones and tablets.
                                  </a></p>
                                  <p>By <span class="red-dark">Ian Sherr</span></p>
                            </div>
                        </div>
                        <div></div>
                        <div class="newsmain-0">
                            <div class="mainnewmain-1 "> 
                                <img src="images/hotproduct2.jpg" width="190" height="143"  alt=""/>
                                <div class="mainnewsmain-content"> 
                                    <a href="#">เปิดตัว ASUS ZenFone Go สมาร์ทโฟนน้องใหม่</a> 
                                    <br>
                                    <br>
                                    <span>by </span><span class=" red-dark">Microsoft</span>
                                </div>
                            </div>
                            <div class="mainnewmain-1 "> 
                                <img src="images/hotproduct2.jpg" width="190" height="143"  alt=""/>
                                <div class="mainnewsmain-content"> 
                                    <a href="#">เปิดตัว ASUS ZenFone Go สมาร์ทโฟนน้องใหม่</a> 
                                    <br>
                                    <br>
                                    <span>by </span><span class=" red-dark">Microsoft</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="newsmain-0">
                            <div class="mainnewmain-1 "> 
                                <img src="images/hotproduct2.jpg" width="190" height="143"  alt=""/>
                                <div class="mainnewsmain-content"> 
                                    <a href="#">เปิดตัว ASUS ZenFone Go สมาร์ทโฟนน้องใหม่</a> 
                                    <br>
                                    <br>
                                    <span>by </span><span class=" red-dark">Microsoft</span>
                                </div>
                            </div>
                            <div class="mainnewmain-1 "> 
                                <img src="images/hotproduct2.jpg" width="190" height="143"  alt=""/>
                                <div class="mainnewsmain-content"> 
                                    <a href="#">เปิดตัว ASUS ZenFone Go สมาร์ทโฟนน้องใหม่</a> 
                                    <br>
                                    <br>
                                    <span>by </span><span class=" red-dark">Microsoft</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 colmargin">
                        <div class="mainnewstyle2">
                            <div class="mainnewstyle21">
                                <a href="newsdetail.php"><img src="images/sub/tmobile.png"  alt=""/></a>
                            </div>
                            <div class="mainnewstyle22">
                                <span><a href="newsdetail.php">T-Mobile adds Amazon Prime Video, Univision Now to Binge On</a></span>
                                <p><br>By <span class="red-dark">Ian Sherr</span></p>
                            </div>
                        </div>
                        <div class="mainnewstyle2">
                            <div class="mainnewstyle21">
                                <a href="newsdetail.php"><img src="images/sub/tmobile.png"  alt=""/></a>
                            </div>
                            <div class="mainnewstyle22">
                                <span><a href="newsdetail.php">T-Mobile adds Amazon Prime Video, Univision Now to Binge On</a></span>
                                <p><br>By <span class="red-dark">Ian Sherr</span></p>
                            </div>
                        </div>
                        <div class="mainnewstyle2">
                            <div class="mainnewstyle21">
                                <a href="newsdetail.php"><img src="images/sub/tmobile.png"  alt=""/></a>
                            </div>
                            <div class="mainnewstyle22">
                                <span>T-Mobile adds Amazon Prime Video, Univision Now to Binge On</span>
                                <p><br>By <span class="red-dark">Ian Sherr</span></p>
                            </div>
                        </div>
                        <div class="maintopstorybody2">
                    		    <div class="maintopstorybodypic">
                                <a href="#"><img src="images/sub/howtopic.jpg"  alt=""/></a>
                            </div>
                            <div class="maintopstorybodydetail">
                                <p>If you've tried all the tricks -- dimming your screen, closing apps and turning off unused antennae -- but your laptop's battery still can't hold a charge, it might be time to replace the battery.</p>
                                <p>A battery's capacity (the amount of energy it can hold) depletes over time. Eventually, your once high-endurance laptop might only last a couple hours. Same goes for phones and tablets.</p>
                                <p>By <span class="red-dark">Ian Sherr</span></p>
                            </div>
                        </div>  
                    </div>
                </div>
                
                <div class="col-4">
                   	<div class="moreTopStories"><h5>TELECORSA NEWS SPECIAL REPORTS</h5></div>
                    <div class="specialreport" id="spReport"></div>
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

    date_default_timezone_set('Asia/Bangkok');
    $datetime = date("d/m/Y",time());
    echo "<script>$('#moreTopStories').append('<h5>MORE TOP STORIES ON ".$datetime."</h5>')</script>";

    $conn = new mysqli("localhost","root","","testdatabase");
    $conn->set_charset('utf8');
/////////////////////////////////////
    $reports = $conn->query("SELECT picture,topic,content,reporter FROM special_reports");
    $reportFields = [[]];
    $i = 0;
    while($report = $reports->fetch_assoc()) 
      $reportFields[$i++] = array($report['picture'],$report['topic'],$report['content'],$report['reporter']);
////////////////////////////////////
    $conn->close();

    $FbJson = file_get_contents('https://graph.facebook.com/telecorsa100/posts?access_token=CAAJWzX0gIgQBALhVMk9C7HHRGk1JpDet3z4pmqrLjGkIL9kyFBUmcVF38GpfEYl5WEqRzkd67KU4S4xn5AWH4ZCsPC2LiFHqqK7bHogySbzlrSsf1MXW6bto7Px8d5WS7qBalZBpG1QZA3PBaFm5kiXUxVRxu9RpY53SeCKW6unMcmQ6oA4NpNU3oZCwAhwZD');
    $FbNews = json_decode($FbJson, true);
    $IgJson = file_get_contents('https://api.instagram.com/v1/users/2338630029/media/recent/?access_token=1578172368.1677ed0.4bbaa05f6dc94577ba947c739de62536');
    $IgNews = json_decode($IgJson, true);
?>


<script type="text/javascript">
    $( document ).ready(function()
    {
        var FbNews = <?php echo json_encode($FbNews);?>;        
        var IgNews = <?php echo json_encode($IgNews);?>;        
        var i,j=0,s,a,b,c,t,x;

        for(i=0;i<=20;i++)
        {
            x = FbNews['data'][i];                
            t = x['type'];
            if(t.localeCompare("video")==0)
            {
                j++; 
                     if(j==1)s='large';
                else if(j==2)s='medium';
                else if(j==3)s='smallA';
                else if(j==4)s='smallB';
                a = x['source'];
                b = x['name'];
                d = x['message'];
                e = x['actions'][0]['link'];
                if(typeof x['description'] != 'undefined')c = x['description'];
                else c = d.substring(0,d.indexOf('#'));
                $('#'+s+'FbNewsImg').prepend('<iframe src="'+a+'" width="560" height="315" frameborder="0" allowfullscreen></iframe>');
                $('#'+s+'FbNews').prepend('<a href="'+e+'" target="_blank">'+b+'</a><p class="newscarousel">'+c+'</p>');
                $('#'+s+'FbNewsLink').prepend('<li style="width:34px; float:left"><a href="'+e+'" target="_blank"><img src="images/sub/social_03.png"  alt=""/></a></li>');
            }
            if(j==4)break;
        }

        j=0;
        for(i=0;i<=20;i++)
        {
            x = IgNews['data'][i];                
            t = x['type'];
            if(t.localeCompare("image")==0)
            {
                j++; 
                     if(j==1)s='large';
                else if(j==2)s='medium';
                else if(j==3)s='smallA';
                else if(j==4)s='smallB';
                a = x['images']['standard_resolution']['url'];
                b = x['caption']['text'];
                c = x['link'];
                $('#'+s+'IgNewsImg').prepend('<img src="'+a+'" alt="">');
                $('#'+s+'IgNews').prepend('<a href="'+c+'" target="_blank">'+t+'</a><p class="newscarousel">'+b+'</p>');
                $('#'+s+'IgNewsLink').prepend('<li style="width:34px; float:left"><a href="'+c+'" target="_blank"><img src="images/sub/social_02.png"  alt=""/></a></li>');
            }
            if(j==4)break;
        }
         
        
        var reportFields = <?php echo json_encode($reportFields);?>;
        for(var i=0;i<reportFields.length;i++)
        $('#spReport').append('<div class="specialreportstyle2">'+ 
                                  '<div class="specialreport21"><img src="images/sub/'+ reportFields[i][0] +'"  alt=""/></div>'+
                                  '<div class="specialreport22">'+
                                      '<h5>'+ reportFields[i][1] +'</h5>'+
                                      '<span>'+ reportFields[i][2] +'</span>'+
                                      '<p><br>By <span class="red-dark">'+ reportFields[i][3] +'</span></p>'+
                                  '</div>'+
                              '</div>');
    });
</script>



