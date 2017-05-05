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

<section class="first_section_career_page">
    <div class="container">
        <div class="row">
            <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1s">Careers with MediCorp Gulf</h1>
        </div>
    </div>
</section>


<section class="second_section_career_page">
    <div class="container">
        <div class="row">
              <div class="col-md-6 ">
                <img src="img/random/image1_ho-01.png" class="img-responsive">
            </div>
            <div class="col-md-6 text_inside small_padding_t">
                <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1s">To maintain our incomparable standards of individual care, only highly trained professionals with a long history of experience can work as direct medical service providers at MediCorp Gulf.</p>
                <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">As job opportunities arise we will advertise them on this page. Alternatively, if you believe you are a good fit for our high flying team feel free to email: HR@medicorpgulf.ae with your CV and a covering letter or use the form to submit your resume.</p>
                <a href="contact.php"><button class="button_default default_hover wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">Contact</button></a>
            </div>
        </div>
    </div>
</section>

<section class="job_postion_career">
    <div class="container">
        <div class="row">
            <h1 class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1s">Open Position</h1>
            <div class="col-md-4">
                <div class="small_panel_career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1s">
                    <h2>Job <br> Title</h2>
                    <p>As job opportunities arise we will advertise them on this page. Alternatively, if you believe you are a good fit for our high flying team feel free to email: HR@medicorpgulf.ae with your CV and a covering letter or use the form to submit your resume ..</p>
                    <a href="contact.php"><button class="button_default default_hover">Contact</button></a>
                </div>
            </div>  

            <div class="col-md-4">
                <div class="small_panel_career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
                    <h2>Job <br> Title</h2>
                    <p>As job opportunities arise we will advertise them on this page. Alternatively, if you believe you are a good fit for our high flying team feel free to email: HR@medicorpgulf.ae with your CV and a covering letter or use the form to submit your resume ..</p>
                    <a href="contact.php"><button class="button_default default_hover">Contact</button></a>
                </div>
            </div> 

            <div class="col-md-4">
                <div class="small_panel_career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">
                    <h2>Job <br> Title</h2>
                    <p>As job opportunities arise we will advertise them on this page. Alternatively, if you believe you are a good fit for our high flying team feel free to email: HR@medicorpgulf.ae with your CV and a covering letter or use the form to submit your resume ..</p>
                    <a href="contact.php"><button class="button_default default_hover">Contact</button></a>
                </div>
            </div> 
        </div>
    </div>
</section>


<!-- Section of Informations CareerPage -->
<section class="careere_info_section wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">
    <div class="container">
        <div class="row">
        <h1>Fill <span>To Apply</span></h1>
        <p>CONTACT DETAILS</p>
            <div class="col-md-3 small_padding-lr">
                <input name="username" type="text"  placeholder="Full Name" class="full_na_inp" >
            </div>
            <div class="col-md-3 small_padding-lr">
                <input name="username" type="email" placeholder="Email" class="full_em_inp">
            </div>
            <div class="col-md-3 small_padding-lr">
                <input name="username" type="text"  placeholder="Phone" class="full_ph_inp">
            </div>
            <div class="col-md-3 small_padding-lr">
                <input name="username" type="text"  placeholder="Gender">
            </div>
            <div class="clearfix"></div>

            <div class="col-md-6 no_padding second_line_career_in">
            <p>CONTACT DETAILS</p>
                <ul class="choose_time_inp">
                    <div class="col-md-6  small_padding-lr">
                      <li>
                        <input type="radio" id="f-option" name="selector">
                        
                        <div class="check"></div>
                        <label for="f-option">Full Time</label>
                      </li>
                    </div> 
                    <div class="col-md-6  small_padding-lr">
                      <li>
                        <input type="radio" id="s-option" name="selector">
                        <label for="s-option">Part Time</label>
                        
                        <div class="check"><div class="inside"></div></div>
                      </li>
                    </div>
                </ul>
            </div>
            <div class="col-md-3 small_padding-lr select_input">
            <p>JOB ROLE</p>

                <select>
                    <option value="" disabled selected>Select Your Job Role</option>
                    <option value="hurr">Doctor</option>
                    <option>Dentist</option>
                </select>
            </div>

            <div class="col-md-3 small_padding-lr upload_buttons_inp">
            <p>UPLOAD YOUR FILES</p>
                <div class="col-md-6 small_padding-lr"> 
                    <button class="default_hover"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Resume</button>
                </div>
                <div class="col-md-6 small_padding-lr">
                    <button class="default_hover"><i class="fa fa-cloud-upload" aria-hidden="true"></i> Cover Letter</button>
                </div>
            </div>
            <div class="col-md-12 apply_grid_inp small_padding-lr">
                <button>Apply Now</button>
            </div>
        </div>
    </div>
</section>

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>
</body>

</html>
