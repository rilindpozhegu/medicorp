<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medicorp Gulf</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="build/styles.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar.php';?>

<!-- Maps Section Contact Page -->

<div class="map_section_contact map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5104.866984370907!2d55.25668418961188!3d25.213807529966488!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4242b1b5f3b3%3A0x8cfd3f59c116c2cc!2sMedicorp+Gulf+Medical+Clinic!5e0!3m2!1sen!2s!4v1493903045812" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>


<!-- Contact Inputs -->

<section class="inputs_contact_page">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".1s">
                <h1>Medicorp Gulf Medical Clinic</h1>
                <h5>Al Shafar Building 7, 1st Floor, Office 101, Al Wasl Road, Dubai United Arab Emirates</h5>
                <hr>
                <p>Telephone: +971 4 312 1000</p>
                <p>Fax: +971 43433020</p>
                <p>For email inquiries: info@medicorpgulf.ae</p>
            </div>   
            <div class="col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
                <h1>Get In Touch</h1>
                <h5>Send us an email by entering your details and any comments you may have in the form.</h5>
                <div class="col-md-6 small_padding-lr">
                    <input type="text " name="" placeholder="Your Name">
                </div>
                <div class="col-md-6 small_padding-lr">
                    <input type="email" name="" placeholder="Email">
                </div>
                <div class="col-md-6 small_padding-lr">
                    <input type="text " name="" placeholder="Subject">
                </div>
                <div class="col-md-6 small_padding-lr">
                    <input type="text " name="" placeholder="Phone">
                </div>
                <div class="col-md-12  small_padding-lr">
                    <textarea class="" rows="5" placeholder="Message"></textarea>
                </div>
                <div class="col-md-12  small_padding-lr">
                    <button class="button_default">Send</button>
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
        $('.map-container')
    .click(function(){
            $(this).find('iframe').addClass('clicked')})
    .mouseleave(function(){
            $(this).find('iframe').removeClass('clicked')});
    </script>