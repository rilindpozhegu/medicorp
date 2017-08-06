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
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> </head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
   <!-- NavigationBar -->
   <?php include 'navigation_bar.php';?>
   <!-- First Section Cover -->
   <section class="cover_section_home cover_all_pages">
      <div class="container">
         <div class="row">
            <h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">Welcome To MediCorp Gulf</h1>
            <p class="wow fadeInUp justified-text" data-wow-duration="1s" data-wow-delay=".1s"
            id="table_top_section">The MediCorp Gulf Medical Clinic (MMC) is one of the most prestigious
               and dedicated private treatment facilities in the GCC. We have built
               our reputation on a passion for first class healthcare and for creating
               an environment that puts patients completely at ease.</p>
            <p class="wow fadeInUp justified-text" data-wow-duration="1s" data-wow-delay=".2s">This commitment to excellence has attracted some of the world’s finest specialist physicians to work in our Family Medicine, Ent,  Gynanenacology &amp; Obstetrics, Dentistry, General Medicine, Pediatrics and Dermatologu, interventional cardiology, plastic surgery, chiropractic, internal medicine and endocrinology/diabetes departments. </p>
         </div>
      </div>
   </section>
   <div class="second_section_home_samebg">
      <!-- Homepage TAb-First two -->
      <section class="home_tab_two wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
         <div class="container">
            <div class="push_two_up">
               <div>
                  <div class="row">
                     <!-- Nav tabs -->
                     <ul class="nav nav-pills nav-justified home_tab_cover">
                        <li role="presentation" class="active"><a href="#tab_one" aria-controls="home" role="tab" data-toggle="tab">Make an Appointment</a>                           </li>
                        <li role="presentation">
                           <a href="#tab_two" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-heartbeat" aria-hidden="true"></i> Client
                              testimonials</a>
                        </li>
                     </ul>
                  </div>
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div role="tabpanel" class="tab-pane active row" id="tab_one">
                        <div class="col-md-3">
                           <h4><i class="fa fa-clock-o" aria-hidden="true"></i> WORKING TIME</h4>
                           <table style="width:100%">
                              <tr>
                                 <td>
                                    <p>Saturday - Thursday</p>
                                 </td>
                                 <td>
                                    <p>&nbsp;<i class="fa fa-minus" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;</p>
                                 </td>
                                 <td>
                                    <p>9:00 - 21:30</p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <p>Friday</p>
                                 </td>
                                 <td>
                                    <p>&nbsp;<i class="fa fa-minus" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;</p>
                                 </td>
                                 <td>
                                    <p>Closed</p>
                                 </td>
                              </tr>
                           </table>
                        </div>
                        <div class="col-md-3 cont-info_scon">
                           <h4>CONTACT INFO</h4>
                           <p>MediCorp Gulf</p>
                           <p>info@medicorpgulf.ae</p>
                           <p>+971-4-312-1000</p>
                           <p>Al Shafar Building 7, 1st Floor,
                              <br> Office 101, Al Wasl Road, Dubai
                              <br>United Arab Emirates</p>
                        </div>
                        <div class="col-md-6">
                           <h4>SEND A MESSAGE</h4>
                           <div class="col-md-6 small_padding-lr">
                              <input type="text" name="" placeholder="Full Name" class="full_na_inp"> </div>
                           <div class="col-md-6 small_padding-lr">
                              <input type="email" name="" placeholder="Email" class="full_em_inp"> </div>
                           <div class="col-md-6 small_padding-lr">
                              <input type="text" name="" placeholder="Phone" class="full_ph_inp"> </div>
                           <div class="col-md-6 small_padding-lr">
                              <select>
                                 <option value="select">Select Clinic</option>
                                 <option value="serv1">ENT/OTOLARYNGOLOGY</option>
                                 <option value="serv2">OBSTETRICS & GYNECOLOGY</option>
                                 <option value="serv3">DENTISTRY</option>
                                 <option value="serv4">FAMILY MEDICINE</option>
                                 <option value="serv5">GENERAL SURGERY & ENDOCRINOLOGY</option>
                                 <option value="serv6">RADIOLOGY</option>
                                 <option value="serv7">CARDIOLOGY</option>
                                 <option value="serv8">INTERNAL MEDICINE</option>
                                 <option value="serv9">CHIROPRACTIC</option>
                              </select>
                           </div>
                           <div class="col-md-12 small_padding-lr">
                              <textarea placeholder="If you select other, please specify"
                              rows="4"></textarea>
                           </div>
                           <div class="col-md-12 small_padding-lr">
                              <button>Make an Appointment</button>
                           </div>
                        </div>
                     </div>
                     <div role="tabpanel" class="tab-pane row testimonial_home_text_img"
                     id="tab_two">
                     <div class="owl-carousel owl-theme">
                       <div class="item">
                          <div class="col-md-4"> <img src="img/testimonial-01.png" class="img-responsive"></div>
                          <div class="col-md-8">
                             <h1>Jenny Morris</h1>
                             <p>Dear Dr. Heba, <br>
                             "You have restored my trust and faith in dentists again! Thank you.<br>
                             So thorough your attention to detail and careful, sensitive approach has been a pleasure to endure and have been one hundred per cent happy with my treatment and results and you have found a permanent client in me!"<br>
                             Many thanks,</p>
                          </div>
                       </div>
                       <div class="item">
                          <div class="col-md-4"> <img src="img/testimonial-01.png" class="img-responsive"></div>
                          <div class="col-md-8">
                             <h1>MD</h1>
                             <p>"My first ever adult dental extraction experience with Dr. Heba, she explained everything to me
                              prior the procedure. During the entire procedure, I was relaxed and comfortable. Truly I am a
                              witness to how Dr.Heba’s caring hands are designed perfectly for the craft she has chosen, a
                              dental surgeon.<br>
                              Along with an Angel’s touch and gentle attitude towards me; thank you for a pain free and zero
                              complication extractions!"</p>
                          </div>
                       </div>
                       <div class="item">
                          <div class="col-md-4"> <img src="img/testimonial-01.png" class="img-responsive"></div>
                          <div class="col-md-8">
                             <h1>Farah</h1>
                             <p>Dr. Heba Javed<br>"Took good care of me during my emergency and helped a lot. I would recommend her to my family and friends, such a good dentist is difficult to find in Dubai."<br>
                             Thank you and all the best, </p>
                          </div>
                       </div>
                       <div class="item">
                          <div class="col-md-4"> <img src="img/testimonial-01.png" class="img-responsive"></div>
                          <div class="col-md-8">
                             <h1>Linda Stanly</h1>
                             <p>Dear Dr. Heba, <br>
                             "Thank you for always fitting me in on a short notice when I pass through Dubai! All treatments went smoothly and without pain especially the extractions. The end results have worked out nicely. Will see you again when next I pass through Dubai"</p>
                          </div>
                       </div>
                       <div class="item">
                          <div class="col-md-4"> <img src="img/testimonial-01.png" class="img-responsive"></div>
                          <div class="col-md-8">
                             <h1>Emir Mom </h1>
                             <p>Dear Dr. Heba, <br>
                             "You are a star! thank you ever so much I have never met any dentist who made my son convinced to sit and actually worked on his teeth. You are a Queen, Thank you"</p>
                          </div>
                       </div>
                       <div class="item">
                          <div class="col-md-4"> <img src="img/testimonial-01.png" class="img-responsive"></div>
                          <div class="col-md-8">
                             <h1>David Lawrence</h1>
                             <p>"I have deeply appreciated the high level of care and detail with which you have transformed my teeth! They were a bit of a mess and you never once made me feel bad – I could not praise highly enough both what you have done and the way which you have done it."</p>
                          </div>
                       </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="more_infos_homepagetwo" id="parallax_slide_bg">
         <div class="container">
            <div class="row">
               <div class="home_horizon_panel row wow fadeInUp" data-wow-duration="1s"
               data-wow-delay=".2s">
                  <div class="col-md-7">
                     <h4>ABOUT MEDICORP GULF</h4>
                     <p>The MediCorp Gulf medical clinic (MMC) is one of the most prestigious
                        and dedicated private treatment and diagnostic facilities
                        in the GCC. We have built our reputation on a passion for
                        first class healthcare and for creating an environment that
                        puts patients completely at ease.</p>
                     <a href="contact.php">
                        <button class="button_default default_hover">Contact</button>
                     </a>
                  </div>
                  <div class="col-md-5 no_padding"> <img src="img/random/image1_ho-01.png" class="img-responsive no_padding">                     </div>
               </div>
               <div class="home_horizon_panel row wow fadeInUp" data-wow-duration="1s"
               data-wow-delay=".3s">
                  <div class="col-md-5 no_padding"> <img src="img/random/image2_ho-01.png" class="img-responsive no_padding">                     </div>
                  <div class="col-md-7">
                     <h4>Our Vision</h4>
                     <p>MediCorp Gulf is committed to providing first class, up-to-the-minute
                        medical care that adheres to globally recognized standards.
                        We strive to involve patients in making informed decisions
                        about their own health, while being sensitive to cultural
                        diversity and the unique needs of every individual.</p>
                     <a
                     href="contact.php">
                        <button class="button_default default_hover">Contact</button>
                        </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
   <!-- Plastic section -->
   <section class="plastic_section_medi">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <h3>MEDICORP PLASTIC SURGERY</h3>
               <h1>CONFIDENCE<br>IS BEAUTIFUL</h1>
               <p>MediCorp Gulf is committed to providing first class, up-to-the-minute
                  medical care that adheres to globally recognized standards. We
                  strive to involve patients in making informed decisions about their
                  own health, while being sensitive to cultural diversity and the
                  unique needs of every individual.</p>
               <a href="cosmetic.php">
                  <button>View More <i class="fa fa-angle-right" aria-hidden="true"></i></button>
               </a>
            </div>
         </div>
      </div>
   </section>
   <!-- Services Section -->
   <?php include 'services_section.php';?>
   <!-- Gallery Section -->
   <?php include 'gallery_all.php';?>
   <!-- Packages & Promotions -->
   <section class="package_promotions_section_h">
      <div class="container">
         <div class="row">
            <h1 class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">Packages & Promotions</h1>
            <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">
               <div class="promotion_panel_home">
                  <div class="promotion_title">
                     <h2>Package 1</h2> </div>
                  <div class="promotion_main_body">
                     <table style="width:100%">
                        <tr>
                           <th>Procedure</th>
                           <th>Price</th>
                           <th>Nos</th>
                        </tr>
                        <tr>
                           <td>
                              <p>Consultation and Ultrasound</p>
                           </td>
                           <td>
                              <p>5,000.00</p>
                           </td>
                           <td>
                              <p>10</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Nuchal Traslucency (NT) Scan AT 12 weeks</p>
                           </td>
                           <td>
                              <p>600.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Beta HCG</p>
                           </td>
                           <td>
                              <p>270.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Blood Group (ABO & RH)</p>
                           </td>
                           <td>
                              <p>110.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Human Immunodeficiency Virus (HIV)</p>
                           </td>
                           <td>
                              <p>220</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>HBsAG (Hepatitis B Surface Antigen)</p>
                           </td>
                           <td>
                              <p>170.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>VDRL (Syphillis Test)</p>
                           </td>
                           <td>
                              <p>280.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Rubella IgG AND IgM</p>
                           </td>
                           <td>
                              <p>520.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Random Blood Sugar (RBS)</p>
                           </td>
                           <td>
                              <p>70.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Glucose Tolerance Test (GTT) at 26 weeks</p>
                           </td>
                           <td>
                              <p>230.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Thyroid Stimulating Hormone (TSH)</p>
                           </td>
                           <td>
                              <p>300.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Complete Blood Count (CBC)</p>
                           </td>
                           <td>
                              <p>140.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Urine Analysis</p>
                           </td>
                           <td>
                              <p>70.00</p>
                           </td>
                           <td>
                              <p>80</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>High Vaginal Swab (HVS)</p>
                           </td>
                           <td>
                              <p>155.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>John</p>
                           </td>
                           <td>
                              <p>Doe</p>
                           </td>
                           <td>
                              <p>80</p>
                           </td>
                        </tr>
                        <tfoot>
                           <tr>
                              <td>
                                 <p>Total Price</p>
                              </td>
                              <td>
                                 <p>8,123 AED</p>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <p>Rounded Off Price</p>
                              </td>
                              <td>
                                 <p>8,123 AED</p>
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".5s">
               <div class="promotion_panel_home">
                  <div class="promotion_title">
                     <h2>Package 2</h2> </div>
                  <div class="promotion_main_body">
                     <table style="width:100%">
                        <tr>
                           <th>Procedure</th>
                           <th>Price</th>
                           <th>Nos</th>
                        </tr>
                        <tr>
                           <td>
                              <p>Consultation and Ultrasound</p>
                           </td>
                           <td>
                              <p>5,000.00</p>
                           </td>
                           <td>
                              <p>10</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Nuchal Traslucency (NT) Scan AT 12 weeks</p>
                           </td>
                           <td>
                              <p>600.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Beta HCG</p>
                           </td>
                           <td>
                              <p>270.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Blood Group (ABO & RH)</p>
                           </td>
                           <td>
                              <p>110.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Human Immunodeficiency Virus (HIV)</p>
                           </td>
                           <td>
                              <p>220</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>HBsAG (Hepatitis B Surface Antigen)</p>
                           </td>
                           <td>
                              <p>170.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>VDRL (Syphillis Test)</p>
                           </td>
                           <td>
                              <p>280.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Rubella IgG AND IgM</p>
                           </td>
                           <td>
                              <p>520.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Random Blood Sugar (RBS)</p>
                           </td>
                           <td>
                              <p>70.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Glucose Tolerance Test (GTT) at 26 weeks</p>
                           </td>
                           <td>
                              <p>230.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Thyroid Stimulating Hormone (TSH)</p>
                           </td>
                           <td>
                              <p>300.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Complete Blood Count (CBC)</p>
                           </td>
                           <td>
                              <p>140.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Urine Analysis</p>
                           </td>
                           <td>
                              <p>70.00</p>
                           </td>
                           <td>
                              <p>80</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>High Vaginal Swab (HVS)</p>
                           </td>
                           <td>
                              <p>155.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>John</p>
                           </td>
                           <td>
                              <p>Doe</p>
                           </td>
                           <td>
                              <p>80</p>
                           </td>
                        </tr>
                        <tfoot>
                           <tr>
                              <td>
                                 <p>Total Price</p>
                              </td>
                              <td>
                                 <p>8,123 AED</p>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <p>Rounded Off Price</p>
                              </td>
                              <td>
                                 <p>8,123 AED</p>
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".6s">
               <div class="promotion_panel_home">
                  <div class="promotion_title">
                     <h2>Package 3</h2> </div>
                  <div class="promotion_main_body">
                     <table style="width:100%">
                        <tr>
                           <th>Procedure</th>
                           <th>Price</th>
                           <th>Nos</th>
                        </tr>
                        <tr>
                           <td>
                              <p>Consultation and Ultrasound</p>
                           </td>
                           <td>
                              <p>5,000.00</p>
                           </td>
                           <td>
                              <p>10</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Nuchal Traslucency (NT) Scan AT 12 weeks</p>
                           </td>
                           <td>
                              <p>600.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Beta HCG</p>
                           </td>
                           <td>
                              <p>270.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Blood Group (ABO & RH)</p>
                           </td>
                           <td>
                              <p>110.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Human Immunodeficiency Virus (HIV)</p>
                           </td>
                           <td>
                              <p>220</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>HBsAG (Hepatitis B Surface Antigen)</p>
                           </td>
                           <td>
                              <p>170.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>VDRL (Syphillis Test)</p>
                           </td>
                           <td>
                              <p>280.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Rubella IgG AND IgM</p>
                           </td>
                           <td>
                              <p>520.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Random Blood Sugar (RBS)</p>
                           </td>
                           <td>
                              <p>70.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Glucose Tolerance Test (GTT) at 26 weeks</p>
                           </td>
                           <td>
                              <p>230.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Thyroid Stimulating Hormone (TSH)</p>
                           </td>
                           <td>
                              <p>300.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Complete Blood Count (CBC)</p>
                           </td>
                           <td>
                              <p>140.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>Urine Analysis</p>
                           </td>
                           <td>
                              <p>70.00</p>
                           </td>
                           <td>
                              <p>80</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>High Vaginal Swab (HVS)</p>
                           </td>
                           <td>
                              <p>155.00</p>
                           </td>
                           <td>
                              <p>1</p>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <p>John</p>
                           </td>
                           <td>
                              <p>Doe</p>
                           </td>
                           <td>
                              <p>80</p>
                           </td>
                        </tr>
                        <tfoot class="table_footer">
                           <tr>
                              <td>
                                 <p>Total Price</p>
                              </td>
                              <td>
                                 <p>8,123 AED</p>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <p>Rounded Off Price</p>
                              </td>
                              <td>
                                 <p>8,123 AED</p>
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Staff Section Slick Homepage -->
   <?php include 'staff_section.php';?>
   <!-- Join Our Team Section -->
   <section class="join_team_home">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h2 class=" wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".1s">JOIN</h2>
               <h1 class=" wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".2s">OUR TEAM</h1>
               <p class=" wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay=".4s">To maintain our incomparable standards of individual care, only highly
                  trained professionals with a long history of experience can work
                  as direct medical service providers at MediCorp Gulf.</p>
               <p class=" wow fadeInLeft"
               data-wow-duration="0.5s" data-wow-delay=".6s">As job opportunities arise we will advertise them on this page. Alternatively,
                  if you believe you are a good fit for our high flying team feel
                  free to email: HR@medicorpgulf.ae with your CV and a covering letter
                  or use the form to submit your resume.</p>
               <button class="button_default default_hover wow fadeInLeft"
               data-wow-duration="0.5s" data-wow-delay=".6s">Apply Now</button>
            </div>
            <div class="col-md-6">
               <h2 class=" wow fadeInRight" data-wow-duration="0.5s" data-wow-delay=".1s">FREQUENT</h2>
               <h1 class=" wow fadeInRight" data-wow-duration="0.5s" data-wow-delay=".3s">QUESTIONS</h1>
               <div id="integration-list" class="integration-list">
                  <ul class=" wow fadeInRight" data-wow-duration="0.5s" data-wow-delay=".1s">
                     <li>
                        <a class="expand">
                           <div class="right-arrow">+</div>
                           <div>
                              <h5>What medical problems/concerns do you care for?</h5> </div>
                        </a>
                        <div class="detail">
                           <div>
                              <p>We specialize in family medicine, ENT, gynaenacology&
                                 obstetrics, dentistry, general medicine, and dermatology
                                 clinics. We also offer state of the art Diagnostic
                                 services that includes a full range of laboratory
                                 tests as well as radiology and imaging services
                                 that include; MRI, CT Scan, Ultrasound and Digital
                                 Xray.</p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a class="expand">
                           <div class="right-arrow">+</div>
                           <div>
                              <h5>Who will provide the care?</h5> </div>
                        </a>
                        <div class="detail">
                           <div>
                              <p>Our facility is staffed by highly qualified, registered
                                 physicians and nurses</p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a class="expand">
                           <div class="right-arrow">+</div>
                           <div>
                              <h5>Do I need an appointment to come to the clinic?</h5> </div>
                        </a>
                        <div class="detail">
                           <div>
                              <p>Yes, if you want your visit to be on time and to avoid
                                 delays. We also receive “walk ins”.</p>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a class="expand">
                           <div class="right-arrow">+</div>
                           <div>
                              <h5>Where are you located?</h5> </div>
                        </a>
                        <div class="detail">
                           <div>
                              <p><a href="contact.php" style="text-decoration: none;">Please , Click Here To Get The Location Map</a></p>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Section For the Lastest Newses -->
   <section class="lastes_news_home">
      <div class="container">
         <div class="row">
            <div class="panel_of_news_home row wow fadeInUp" data-wow-duration="0.5s"
            data-wow-delay=".1s">
               <div class="col-md-6 no_padding"> <img src="img/random/hostpital_1_ho-01.png" class="img-responsive"
                  style="margin-top: -2px;"> </div>
               <div class="col-md-6 no_padding">
                  <div class="small_panel_new_ho">
                     <h5>Accurate Diagnosis is essential for any successful treatment and follow up.</h5>
                     <p>Babel promises unique dining experience in iconic new location
                        Kuwait, 14 December 2016: The award-winning Lebanese brand
                        Babel, known for its authenticity, exquisite culinary offering
                        and dining experience, has opened its first outlet outside
                        of Lebanon at a stunning custom-built location...</p>
                     <a
                     href="news1.php" style="color: white; text-decoration: none;">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                  </div>
               </div>
            </div>
            <div class="panel_of_news_home row wow fadeInUp" data-wow-duration="0.5s"
            data-wow-delay=".2s">
               <div class="col-md-6 no_padding desktop-d-n"> <img src="img/random/hostpital_1_ho-01.png" class="img-responsive"
                  style="margin-top: -2px;"> </div>
               <div class="col-md-6 no_padding">
                  <div class="small_panel_new_ho">
                     <h5>Accurate Diagnosis is essential for any successful treatment and follow up.</h5>
                     <p>Babel promises unique dining experience in iconic new location
                        Kuwait, 14 December 2016: The award-winning Lebanese brand
                        Babel, known for its authenticity, exquisite culinary offering
                        and dining experience, has opened its first outlet outside
                        of Lebanon at a stunning custom-built location...</p>
                     <a
                     href="news1.php" style="color: white; text-decoration: none;">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                  </div>
               </div>
               <div class="col-md-6 no_padding mobile-d-n"> <img src="img/random/hostpital_1_ho-01.png" class="img-responsive"
                  style="margin-top: -2px;"> </div>
            </div>
         </div>
      </div>
   </section>
   <div class="clearfix"></div>
   <!-- Sponsors -->
   <section class="sponosrs_homepage">
      <hr>
      <div class="container">
         <div class="row">
            <h1 class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".1s">Accepted Insurance Companies</h1>
            <div class="home_sponsors">
               <div class="sponsors_small_img"> <img src="img/logos/logo1-01.png"> </div>
               <div class="sponsors_small_img">
               <img src="img/logos/logo2-01.png"> </div>
               <div class="sponsors_small_img">
               <img src="img/logos/logo1-01.png"> </div>
               <div class="sponsors_small_img">
               <img src="img/logos/logo2-01.png"> </div>
               <div class="sponsors_small_img">
               <img src="img/logos/logo1-01.png"> </div>
               <div class="sponsors_small_img">
               <img src="img/logos/logo2-01.png"> </div>
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
   <script type="text/javascript">
     $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          nav:false,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          }
      })
   </script>
</body>

</html>