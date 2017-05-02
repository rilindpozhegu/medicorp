<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="build/styles.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar.php';?>

<!-- <div class="container">
        <div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="img/1-1600.jpg" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood Jetty on Coniston Water an old archive shot similar to an old post but a little later on.</p>">
                    <a href="">
                        <img class="img-responsive" src="img/thumb-1.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/2-375.jpg 375, img/2-480.jpg 480, img/2.jpg 800" data-src="img/2-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="img/thumb-2.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-src="img/13-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="img/thumb-13.jpg">
                    </a>
                </li>
                <li class="col-xs-6 col-sm-4 col-md-3" data-responsive="img/4-375.jpg 375, img/4-480.jpg 480, img/4.jpg 800" data-src="img/4-1600.jpg" data-sub-html="<h4>Bowness Bay</h4><p>A beautiful Sunrise this morning taken En-route to Keswick not one as planned but I'm extremely happy I was passing the right place at the right time....</p>">
                    <a href="">
                        <img class="img-responsive" src="img/thumb-4.jpg">
                    </a>
                </li>
            </ul>
        </div>
</div>
 -->





<section class="lastest_news_home">
    <div class="container">
        <div class="row">  
            <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">Latest News</h1>
            <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s" style="padding-bottom: 30px;">See some of the latest news regarding Emirates Graphic as well as the web design, branding, and marketing industry. For articles written by our staff, please consult the blog posts featured on this website.</p>   
            <div class="responsive slider">                   
                <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="conferences_panel">
                        <img src="img/blog/choosing the right logo_Thumbnail.png">
                        <div class="text_insdide_pan">
                            <span>6 January 2017, UAE</span>
                            <h5>Choosing right “Logo” for<br> Branding</h5>
                            <hr>
                            <p style="text-align: left;">A Picture speaks a thousand words, but Logos do something more, they define...</p>
                            <a href="http://www.emiratesgraphic.com/emirates-graphic/blog/choose_right_logo.php"><button class="button_style_red_xs button_main button__aylen">Read More</button></a>
                        </div>
                    </div>
                </div>                           
                <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="conferences_panel">
                        <img src="img/blog/digital marketing_Thumbnail.png">
                        <div class="text_insdide_pan">
                            <span>6 March 2017, UAE</span>
                            <h5>DIGITAL <br>MARKETING</h5>
                            <hr>
                            <p style="text-align: left;">This is a huge topic, so let's start by defining exactly what we mean when...</p>
                            <a href="http://www.emiratesgraphic.com/emirates-graphic/blog/digital_marketing.php"><button class="button_style_red_xs button_main button__aylen">Read More</button></a>
                        </div>
                    </div>
                </div>                           
                <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="conferences_panel">
                        <img src="img/blog/Logo Tips_Thumbnail.png">
                        <div class="text_insdide_pan">
                            <span>6 March 2017, UAE</span>
                            <h5>7 Essential Logo Design Tips <br>For Aspiring Entrepreneurs</h5>
                            <hr>
                            <p style="text-align: left;">In entrepreneurship, you can have a great idea, a fantastic prototype, and...</p>
                            <a href="http://www.emiratesgraphic.com/emirates-graphic/blog/logo_tips.php"><button class="button_style_red_xs button_main button__aylen">Read More</button></a>
                        </div>
                    </div>
                </div>

                <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="conferences_panel">
                        <img src="img/blog/Logo Tips_Thumbnail.png">
                        <div class="text_insdide_pan">
                            <span>6 March 2017, UAE</span>
                            <h5>7 Essential Logo Design Tips <br>For Aspiring Entrepreneurs</h5>
                            <hr>
                            <p style="text-align: left;">In entrepreneurship, you can have a great idea, a fantastic prototype, and...</p>
                            <a href="http://www.emiratesgraphic.com/emirates-graphic/blog/logo_tips.php"><button class="button_style_red_xs button_main button__aylen">Read More</button></a>
                        </div>
                    </div>
                </div>         
            </div>           
        </div>
    </div>
</section>


<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>


    <script type="text/javascript">
        $('.responsive').slick({
          dots: true,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 3,
          autoplay: true,
          arrows: true,
          autoplaySpeed: 4000,
          responsive: [
            {
              breakpoint: 1024,
              arrows: false,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false
              }
            },
            {
              dots: false,
              breakpoint: 600,
              arrows: false,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              dots: false,
              breakpoint: 480,
              arrows: false,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });

    </script>
</body>

</html>
