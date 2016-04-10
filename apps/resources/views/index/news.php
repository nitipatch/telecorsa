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
<script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
</script>
<title>online connext company</title>

<style type="text/css">
</style>
</head>

<body>

    		<?php require('inc_header.php');?>
            <div id="wrapper">
            <div id="effect-6" class="effects clearfix">
            <div class="img" style="width:50%; height:100%">
                <img src="images/jpg/1.jpg" alt="">
                <div class="overlay">

                    <div class="expand">
                    <a href="newsdetail.php">เปิดคลิปสุดประทับใจ! ปิน ดูแล โบว์ แทน ปอ ได้ดีเยี่ยม!!</a>
                    <p class="newscarousel">นอกจากให้คำมั่นสัญญากับพี่ชายที่แสนดี ปอ ทฤษฎี ว่าจะดูแล น้องมะลิ อย่างดีที่สุดแล้ว! ป๊อปปี้ วิทวัส กับ ปิน ชวนันท์ น้องชาย สัญญาจะทำหน้าที่ดูแลพี่สะใภ้ โบว์ แวนดา ให้ดีที่สุดเหมือนกัน วันนี้เรามีคลิปสุดประทับใจระหว่างที่ หนุ่มปิน คอยดูแล พี่โบว์ เพราะถือเป็นครอบครัวเดียวกัน! เห็นแบบนี้แล้ว พี่ปอ ไม่ต้องห่วง  หนุ่มป๊อปปี้-หนุ่มปิน ทำหน้าที่แทนได้เป็นอย่างดี.....!!!
</p>
                    <div>
                    	<ul style="margin-top:10px">
                        	<li style="width:34px; float:left"><a href="11"><img src="images/sub/social_03.png"  alt=""/></a></li>
                            <li style="width:34px; float:left"><a href="12"><img src="images/sub/social_04.png"  alt=""/></a></li>
                            <li style="width:34px; float:left"><a href="13"><img src="images/sub/social_05.png"  alt=""/></a></li>
                        </ul>
                    
                    </div>
                    </div>
                    
                </div>
            </div>
            <div class="img" style="height:100%">
                <img src="images/jpg/2.jpg" alt="">
                <div class="overlay">
                    <div class="expandmedium">
                    <a href="newsdetail.php">เปิดคลิปสุดประทับใจ! ปิน ดูแล โบว์ แทน ปอ ได้ดีเยี่ยม!!</a>
                    <p class="newscarousel">นอกจากให้คำมั่นสัญญากับพี่ชายที่แสนดี ปอ ทฤษฎี ว่าจะดูแล น้องมะลิ อย่างดีที่สุดแล้ว! ป๊อปปี้ วิทวัส กับ ปิน ชวนันท์ น้องชาย สัญญาจะทำหน้าที่ดูแลพี่สะใภ้ โบว์ แวนดา ให้ดีที่สุดเหมือนกัน วันนี้เรามีคลิปสุดประทับใจระหว่างที่ หนุ่มปิน คอยดูแล พี่โบว์ เพราะถือเป็นครอบครัวเดียวกัน! เห็นแบบนี้แล้ว พี่ปอ ไม่ต้องห่วง  หนุ่มป๊อปปี้-หนุ่มปิน ทำหน้าที่แทนได้เป็นอย่างดี.....!!!.</p>
                    <div>
                    	<ul style="margin-top:10px">
                        	<li style="width:34px; float:left"><a href="11"><img src="images/sub/social_03.png"  alt=""/></a></li>
                            <li style="width:34px; float:left"><a href="12"><img src="images/sub/social_04.png"  alt=""/></a></li>
                            <li style="width:34px; float:left"><a href="13"><img src="images/sub/social_05.png"  alt=""/></a></li>
                        </ul>
                    
                    </div>
                    </div>
                </div>
            </div>
            <div class="img">
                <img src="images/jpg/3.jpg" alt="">
                <div class="overlay">
                    <div class="expandsmall">
                    <a href="#">เปิดคลิปสุดประทับใจ! ปิน ดูแล โบว์ แทน ปอ ได้ดีเยี่ยม!!</a>
                          <p class="newscarousel">นอกจากให้คำมั่นสัญญากับพี่ชายที่แสนดี ปอ ทฤษฎี ว่าจะดูแล น้องมะลิ อย่างดีที่สุดแล้ว! ป๊อปปี้ วิทวัส กับ ปิน ชวนันท์ น้องชาย สัญญาจะทำหน้าที่ดูแลพี่สะใภ้
       </p>
                    <div>
                    	<ul style="margin-top:10px">
                        	<li style="width:34px; float:left"><a href="11"><img src="images/sub/social_03.png"  alt=""/></a></li>
                            <li style="width:34px; float:left"><a href="12"><img src="images/sub/social_04.png"  alt=""/></a></li>
                            <li style="width:34px; float:left"><a href="13"><img src="images/sub/social_05.png"  alt=""/></a></li>
                        </ul>
                    
                    </div>
                    </div>
                </div>
            </div>
            <div class="img">
                <img src="images/jpg/4.jpg" alt="">
                <div class="overlay">
                    <div class="expandsmall">
                    <a href="newsdetail.php">เปิดคลิปสุดประทับใจ! ปิน ดูแล โบว์ แทน ปอ ได้ดีเยี่ยม!!</a>
                          <p class="newscarousel">นอกจากให้คำมั่นสัญญากับพี่ชายที่แสนดี ปอ ทฤษฎี ว่าจะดูแล น้องมะลิ อย่างดีที่สุดแล้ว! ป๊อปปี้ วิทวัส กับ ปิน ชวนันท์ น้องชาย สัญญาจะทำหน้าที่ดูแลพี่สะใภ้
       </p>
                    <div>
                    	<ul style="margin-top:10px">
                        	<li style="width:34px; float:left"><a href="11"><img src="images/sub/social_03.png"  alt=""/></a></li>
                            <li style="width:34px; float:left"><a href="12"><img src="images/sub/social_04.png"  alt=""/></a></li>
                            <li style="width:34px; float:left"><a href="13"><img src="images/sub/social_05.png"  alt=""/></a></li>
                        </ul>
                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
            	<div class="container">
                	
                
                </div>
            
            <div class="content">
            	<div class="container">
            	  <div class="col-8">
                  <div class=" moreTopStories"><h5>MORE TOP STORIES / JANUARY 28, 2016</h5></div>
                	<div class=" col-5">
                	  <div class="maintopstorybody2">
                    		<div class="maintopstorybodypic0">
                            	<a href="newsdetail.php" target="_blank"><img src="images/sub/howtopic.jpg"  alt=""/>
                   	    </a></div>
                        <div class="maintopstorybodydetail">
                      
                      	<p><a href="newsdetail.php">If you've tried all the tricks -- dimming your screen, closing apps and turning off unused antennae -- but your laptop's battery still can't hold a charge, it might be time to replace the battery.</a></p>

<p><a href="newsdetail.php">A battery's capacity (the amount of energy it can hold) depletes over time. Eventually, your once high-endurance laptop might only last a couple hours. Same goes for phones and tablets.</a></p>

<p>By <span class="red-dark">Ian Sherr</span>
</p>
                      </div>
                      </div>
                      <div></div>
                      <div class="newsmain-0">
                        <div class="mainnewmain-1 "> <img src="images/hotproduct2.jpg" width="190" height="143"  alt=""/>
                          <div class="mainnewsmain-content"> <a href="#">เปิดตัว ASUS ZenFone Go สมาร์ทโฟนน้องใหม่</a> <br>
                            <br>
                            <span>by </span><span class=" red-dark">Microsoft</span></div>
                        </div>
                        <div class="mainnewmain-1 "> <img src="images/hotproduct2.jpg" width="190" height="143"  alt=""/>
                          <div class="mainnewsmain-content"> <a href="#">เปิดตัว ASUS ZenFone Go สมาร์ทโฟนน้องใหม่</a> <br>
                            <br>
                            <span>by </span><span class=" red-dark">Microsoft</span></div>
                        </div>
                      </div>
                      <div class="newsmain-0">
                        <div class="mainnewmain-1 "> <img src="images/hotproduct2.jpg" width="190" height="143"  alt=""/>
                          <div class="mainnewsmain-content"> <a href="#">เปิดตัว ASUS ZenFone Go สมาร์ทโฟนน้องใหม่</a> <br>
                            <br>
                            <span>by </span><span class=" red-dark">Microsoft</span></div>
                        </div>
                        <div class="mainnewmain-1 "> <img src="images/hotproduct2.jpg" width="190" height="143"  alt=""/>
                          <div class="mainnewsmain-content"> <a href="#">เปิดตัว ASUS ZenFone Go สมาร์ทโฟนน้องใหม่</a> <br>
                            <br>
                            <span>by </span><span class=" red-dark">Microsoft</span></div>
                        </div>
                      </div>
                	</div>
                    <div class="col-6 colmargin">
                    	<div class="mainnewstyle2">
                        	<div class="mainnewstyle21"><a href="newsdetail.php"><img src="images/sub/tmobile.png"  alt=""/></a></div>
                          <div class="mainnewstyle22">
                          	<span><a href="newsdetail.php">T-Mobile adds Amazon Prime Video, Univision Now to Binge On</a></span>
                            <p><br>By <span class="red-dark">Ian Sherr</span></p>
                          </div>
                        </div>
                        <div class="mainnewstyle2">
                        	<div class="mainnewstyle21"><a href="newsdetail.php"><img src="images/sub/tmobile.png"  alt=""/></a></div>
                          <div class="mainnewstyle22">
                          	<span><a href="newsdetail.php">T-Mobile adds Amazon Prime Video, Univision Now to Binge On</a></span>
                            <p><br>By <span class="red-dark">Ian Sherr</span></p>
                          </div>
                        </div>
                        <div class="mainnewstyle2">
                        	<div class="mainnewstyle21"><a href="newsdetail.php"><img src="images/sub/tmobile.png"  alt=""/></a></div>
                          <div class="mainnewstyle22">
                          	<span>T-Mobile adds Amazon Prime Video, Univision Now to Binge On</span>
                            <p><br>By <span class="red-dark">Ian Sherr</span></p>
                          </div>
                        </div>
                        <div class="maintopstorybody2">
                    		<div class="maintopstorybodypic">
                            	<a href="#"><img src="images/sub/howtopic.jpg"  alt=""/>
                   	    </a></div>
                        <div class="maintopstorybodydetail">
                      
                      	<p>If you've tried all the tricks -- dimming your screen, closing apps and turning off unused antennae -- but your laptop's battery still can't hold a charge, it might be time to replace the battery.</p>

<p>A battery's capacity (the amount of energy it can hold) depletes over time. Eventually, your once high-endurance laptop might only last a couple hours. Same goes for phones and tablets.</p>

<p>By <span class="red-dark">Ian Sherr</span>
</p>
                      </div>
                      </div>
                      
                      
                    </div>
                </div>
                <div class="col-4">
                 	<div class="moreTopStories">
                    	<h5>CNET NEWS SPECIAL REPORTS</h5>
                    </div>
                  <div class="specialreport">
                   	<div class="specialreportstyle2">
                        	<div class="specialreport21"><a href="newsdetail.php"><img src="images/sub/052214-6134.jpg"  alt=""/></a></div>
                      <div class="specialreport22">
                          	<h5><a href="newsdetail.php">T-Mobile adds Amazon Prime Video</a></h5>
                       	<span>T-Mobile adds Amazon Prime Video, Univision Now to Binge On</span>
                            <p><br>By <span class="red-dark">Ian Sherr</span></p>
                          </div>
                      </div>
                   	<div class="specialreportstyle2">
                        	<div class="specialreport21"><a href="newsdetail.php"><img src="images/sub/052214-6134.jpg"  alt=""/></a></div>
                      <div class="specialreport22">
                          	<h5><a href="newsdetail.php">T-Mobile adds Amazon Prime Video</a></h5>
                       	<span>T-Mobile adds Amazon Prime Video, Univision Now to Binge On</span>
                            <p><br>By <span class="red-dark">Ian Sherr</span></p>
                          </div>
                      </div>
                    <div class="specialreportstyle2">
                        	<div class="specialreport21"><img src="images/sub/052214-6134.jpg"  alt=""/></div>
                      <div class="specialreport22">
                          	<h5>T-Mobile adds Amazon Prime Video</h5>
                       	<span>T-Mobile adds Amazon Prime Video, Univision Now to Binge On</span>
                            <p><br>By <span class="red-dark">Ian Sherr</span></p>
                          </div>
                      </div>
                    <div class="specialreportstyle2">
                        	<div class="specialreport21"><img src="images/sub/052214-6134.jpg"  alt=""/></div>
                      <div class="specialreport22">
                          	<h5>T-Mobile adds Amazon Prime Video</h5>
                       	<span>T-Mobile adds Amazon Prime Video, Univision Now to Binge On</span>
                            <p><br>By <span class="red-dark">Ian Sherr</span></p>
                          </div>
                      </div>
                    <div class="specialreportstyle2">
                        	<div class="specialreport21"><img src="images/sub/052214-6134.jpg"  alt=""/></div>
                      <div class="specialreport22">
                          	<h5>T-Mobile adds Amazon Prime Video</h5>
                       	<span>T-Mobile adds Amazon Prime Video, Univision Now to Binge On</span>
                            <p><br>By <span class="red-dark">Ian Sherr</span></p>
                          </div>
                      </div>
                    <div class="specialreportstyle2">
                        	<div class="specialreport21"><img src="images/sub/052214-6134.jpg"  alt=""/></div>
                      <div class="specialreport22">
                          	<h5>T-Mobile adds Amazon Prime Video</h5>
                       	<span>T-Mobile adds Amazon Prime Video, Univision Now to Binge On</span>
                            <p><br>By <span class="red-dark">Ian Sherr</span></p>
                          </div>
                      </div>
                    <div class="specialreportstyle2">
                        	<div class="specialreport21"><img src="images/sub/052214-6134.jpg"  alt=""/></div>
                      <div class="specialreport22">
                          	<h5>T-Mobile adds Amazon Prime Video</h5>
                       	<span>T-Mobile adds Amazon Prime Video, Univision Now to Binge On</span>
                            <p><br>By <span class="red-dark">Ian Sherr</span></p>
                          </div>
                      </div>
                    
                    </div>
                
                </div>
           		 </div>
            </div>
            
            </div>
</div>
     
    <?php require('inc_footer.php');?>
    

<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34160351-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
