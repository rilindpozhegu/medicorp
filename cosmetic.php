<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Tab Logo -->
    <link rel="icon" href="img/favicon-01.png">

    <title>Medicorp Gulf</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="build/styles.css?<?= filemtime('build/styles.css') ?>">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar.php';?>



<!-- NavigationBar -->
    <?php include 'slider_bar.php';?>
<!-- First Section Cover -->

<section class="cover_section_diagnostic cover_all_pages">
    <div class="container">
        <div class="row">
            <h1 class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1s">Cosmetic</h1>
            <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">Medicorp welcomes you to this recently opened department, a new jewel in its crown. We make it our mission to take you into a wonderful journey of health and beauty. </p>
            <a href="contact.php"><button class="button_default default_hover wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">Contact</button></a>
        </div>
    </div>
</section>



<!-- First section on the body -->

<section class="first_section_cosmetics">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
            <div class="col-md-6">
                <img src="img/cosmetic1.png" class="img-responsive">
            </div>
            <div class="col-md-6 text_cosmetic1">
                <h5>THE COSMETIC DEPARTMENT</h5>
                <p>Whether you are looking for hair laser removal, skin rejuvenation and tightening, scar and acne management, micro-dermabrasion, slimming and fat reduction, facials and peels and many many more treatments and options tailored to your needs and requirements. It is just one phone call away.</p>
                <p>We draw our philosophy of making these treatments and sessions in a medical luxurious setting in which top notch equipments, beauticians, doctors and nurses are available, along with all other medical and diagnostical services. Making sure you will receive the highest medical standards and professionalism as you experience at first hand MediaCorp’s special cosmetic and aesthetics department and what it has to offer.</p>
            </div>
        </div>
    </div>
</section>

<!-- Second Section cosmetics page #ccc -->

<section class="second_section_cosmetics">
    <div class="container">
        <div class="row box_second wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">
            <div class="col-md-6 no_padding">
                <img src="img/cosmetic2.png" class="img-responsive">
            </div>
            <div class="col-md-6 text_panel_cosmetics">
                <h4>Skin tightening and rejuvenation</h4>
                <p>Our laser and RF treatment are the top notch, cutting edge technology rendering your skin young and reverses the clock of time. Dramatically reduces the appearance of stretch marks, acne scars, poor skin tone, fine lines, wrinkles, and tighten loose or sagging skin.</p>
                <p>PRP treatment for face, neck and hair takes off years from your appearance with one session, your skin looks and feels smooth, radiant and younger. PRP is known to help improve and strengthen quality of hair too.</p>
                <p>PRP Dermapen procedures for face and neck.</p>
                <p>Mesotherapy</p>
            </div>
        </div>
        <div class="row box_second wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".4s">
            <div class="col-md-6 no_padding desktop-d-n">
                <img src="img/cosmetic3.png" class="img-responsive">
            </div>
            <div class="col-md-6 text_panel_cosmetics">
                <h4>Cosmetic Fillers and Botox</h4>
                <h5>Microdermabrasion</h5>
                <p>A procedure to exfoliate the outer skin layer, rendering your skin radiant and glowing with minimal breakouts.</p>
                <h5>Chemical Peels and treatments</h5>
                <p>Using only the highest and best quality products, all medically approved, you can chose from a wide range and options that best suit your needs, many options include sun damage management, uneven skin tone improvement and breakouts.</p>
            </div>
            <div class="col-md-6 no_padding mobile-d-n">
                <img src="img/cosmetic3.png" class="img-responsive">
            </div>
        </div>
        <div class="row box_second wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">
            <div class="col-md-6 no_padding">
                <img src="img/cosmetic4.png" class="img-responsive">
            </div>
            <div class="col-md-6 text_panel_cosmetics">
                <h4>Laser Hair removal</h4>
                <p>Fast and affordable with 50% hair reduction from the first session, with minimal pain. A difference you will feel and experience the moment you try.</p>
            </div>
        </div>
    </div>
</section>

   <!-- Contact Form Section -->
   <?php include 'contact_section_input.php';?>

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->
    
    <script type="text/javascript" src="build/scripts.js"></script>

    </body>
    </html>