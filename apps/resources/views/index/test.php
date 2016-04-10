<head>
</head>
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">

<script src="js/jquery-1.9.1.min.js"></script> 
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function() {

      $("#owl-demo").owlCarousel({
        items : 4
      });

      $('.link').on('click', function(event){
        var $this = $(this);
        if($this.hasClass('clicked')){
          $this.removeAttr('style').removeClass('clicked');
        } else{
          $this.css('background','').addClass('clicked');
        }
      });


    });
</script>
<body>

        <div class="row">
                    <div class="span12">
        
                      <div id="owl-demo" class="owl-carousel">
                        
                        <a class="item link"><img src="images/content/girlex_03.jpg" width="209" height="196"  alt=""/></a>
                        <a class="item link"><img src="images/content/girlex_05.jpg" width="209" height="196"  alt=""/></a>
                        <a class="item link"><img src="images/content/girlex_07.jpg" width="209" height="196"  alt=""/></a>
                        <a class="item link"><img src="images/content/girlex_09.jpg" width="209" height="196"  alt=""/></a>
                        <a class="item link"><img src="images/content/girlex_03.jpg" width="209" height="196"  alt=""/></a>
                        <a class="item link"><img src="images/content/girlex_05.jpg" width="209" height="196"  alt=""/></a>
                        <a class="item link"><img src="images/content/girlex_07.jpg" width="209" height="196"  alt=""/></a>
                        <a class="item link"><img src="images/content/girlex_09.jpg" width="209" height="196"  alt=""/></a>
        
        
                      </div>
                    </div>
                  </div>
</body>



