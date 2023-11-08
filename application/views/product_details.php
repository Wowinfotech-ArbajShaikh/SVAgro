<style>
    .nav-tabs .nav-link.active {
        background-color: #5dc1e7;
    }
</style>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Experience the Power of Bioactive Plant Compounds & Biostimulants in Agriculture with SV Agro Solutions. Increase Crop Yield and Growth Naturally.">
    <meta name="keywords" http-equiv="fertilizer companies in pune, fertilizer manufacturers in pune,fertilizer producers in pune,pesticides manufacturers in pune,fertlizer plants in pune, fertlizers suppliers in pune,pesticides suppliers in pune,organic ferlizers manufacturers in pune,Agri product producers,sv agriculture products manufacturing, pesticides providers in pune,Farm management, farm maintenance, agri services providers, agriculture advisory pune,agri consulting services pune, agricultural consultancy in pune agricultural consultancy services in pune, agri services in pune, agri services providers pune, agri services providers in pune, agricultural consultancy in pune, organic farming company in pune,organic farming advisory in pune " />

    <link rel="canonical" href="https://svagrosolutions.com/home/career" />

    <link rel="alternate" hreflang="en-IN" href="https://svagrosolutions.com/home/career" />

    <meta property="" og:title="" content="sv agro solutions private limited">
    <meta property="" og:site_name="" content="sv agro solutions private limited">
    <meta property="" og:url="" content="https://svagrosolutions.com/home/career">
    <meta property="" og:description="" content="SV agro solutions is India's top farming consulting company. Get in touch for the best agriculture consultancy services in India at an affordable price.">
    <meta property="" og:type="" content="">
    <meta property="" og:image="" content="https://wowinfotech.net/SVAgroWeb/SV_agroAdmin/upload/banner/03.jpg">

    <meta name=”twitter:card” content=”summary” />
    <meta name=”twitter:site” content=”https://svagrosolutions.com/home/career” />
    <meta name=”twitter:title” content=”sv agro solutions private limited” />
    <meta name=”twitter:description” content=”SV agro solutions is India's top farming consulting company. Get in touch for the best agriculture consultancy services in India at an affordable price.” />
    <meta name=”twitter:image” content=”https://wowinfotech.net/SVAgroWeb/SV_agroAdmin/upload/banner/03.jpg” />

    <!-- ========== Page Title ========== -->
    <title><?php echo $this->uri->segment(2); ?> | Agricultural Biostimulants | SV Agro Solutions</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php include('public/header_main.php'); ?>

  

</head><!-- Page Header Section Start Here -->


<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P634CBZH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <section class="page-header bg_img padding-tb1">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title">Product Details</h4>
                <ul class="agri-ul">
                    <li><a href="index.html">Home</a></li>
                    <li><a class="active">Product Details</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->
    <center>
        <div class="col-md-9 mt-3">
            <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success" role="alert" id="success-alert">
                    <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php } ?>

            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger" role="alert" id="danger-alert">
                    <strong>Error !</strong> <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
        </div>
    </center>





    <!-- Shop Page Section start here -->
    <section class="shop-single ">
        <div class="container">


            <!-- </div> -->
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12 sticky-widget">
                    <div class="product-details" style="padding: 0px !important">
                        <?php foreach ($details as $value) {
                        ?>

                            <div class="row align-items-center">
                                <div class="col-md-3 col-12">
                                    <div class="product-thumb">
                                        <div class="swiper-container gallery-top">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="shop-item">
                                                        <div class="shop-thumb">
                                                            <img src="<?php echo base_url() . 'SV_agroAdmin/' . $value['product_img']; ?>" width="200px" height="300px" class="fix_height" alt="shop-single">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="shop-navigation d-flex flex-wrap">
                                            <div class="shop-nav shop-slider-prev"><i class="icofont-simple-left"></i></div>
                                            <div class="shop-nav shop-slider-next"><i class="icofont-simple-right"></i></div>
                                        </div> -->
                                        </div>

                                    </div>
                                </div>
                                <!-- <div class="col-md-1 col-12">
                            </div> -->
                                <div class="col-md-9 col-12">
                                    <!-- Nav tabs -->
                                    <div class="container">




                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#home">
                                                    <h5 style="color:green;"><b>Marathi</b></h5>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " data-toggle="tab" href="#menu1">
                                                    <h5 style="color:green;"><b>English</b></h5>
                                                </a>
                                            </li>

                                        </ul>



                                        <br>

                                        <div class="tab-content">
                                            <div id="home" class="container tab-pane fade active show"><br>
                                                <div class="post-content">
                                                    <h4><?php echo $value['product_name']; ?></h4>
                                                    <p>
                                                        <?php echo $value['product_desc']; ?>
                                                    </p>
                                                    <p>

                                                        <!-- <strong> Amount of use</strong> - <?php echo $value['product_doses']; ?> <br> -->

                                                        <strong>वापरण्याचे प्रमाण </strong> – <?php echo $value['quantity_of_use']; ?><br>
                                                        <strong>उपलब्ध पॅकिंग</strong> – <?php echo $value['packing']; ?><br>
                                                        <!-- <strong>उपलब्ध किंमत: </strong> – ₹<?php echo $value['product_price']; ?> -->
                                                    </p>
                                                    <!-- <button type="submit" class="button-3 " data-src=""  data-toggle="modal" data-target="#exampleModalCenter_<?php echo $value['product_id']; ?>">INQUIRY</button>         -->


                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $value['product_id']; ?>">Enquire Now</button>

                                                </div>
                                            </div>


                                            <div id="menu1" class="container tab-pane fade "><br>
                                                <div class="post-content">
                                                    <h4><?php echo $value['product_name_marathi']; ?></h4>
                                                    <p>
                                                        <?php echo $value['product_desc_marathi']; ?>
                                                    </p>
                                                    <p>

                                                        <!-- <strong> Amount of use</strong> - <?php echo $value['product_doses']; ?> <br> -->
                                                        <strong>Quantity of use</strong> – <?php echo $value['quantity_of_use_english']; ?><br>
                                                        <strong>Packing Available </strong> – <?php echo $value['packing_english']; ?><br>
                                                        <!-- <strong>Available Price : </strong> – ₹<?php echo $value['product_price']; ?> -->
                                                    </p>
                                                    <!-- <button type="submit" class="button-3 " data-src=""  data-toggle="modal" data-target="#exampleModalCenter_<?php echo $value['product_id']; ?>">INQUIRY</button>         -->


                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $value['product_id']; ?>">Enquire Now</button>

                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal_<?php echo $value['product_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#3cb815;">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Product Inquiry</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            <!-- <button type="button" class="close button-24" data-dismiss="modal" aria-label="Close"> -->
                                            <!-- <span aria-hidden="true">&times;</span>
                                        </button> -->
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-lg-12 col-12">
                                                <div class="contact-form">
                                                    <form action="<?php echo base_url() . 'home/product_enquiry'; ?>" method="POST" id="commentform" class="comment-form">
                                                        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                                                        <input type="hidden" name="cat_slug" value="<?php echo $this->uri->segment(2); ?>">
                                                        <input type="hidden" name="prod_slug" value="<?php echo $this->uri->segment(3); ?>">
                                                        <input type="text" name="customer_name" class="" placeholder="Name*" onkeyup="LettersOnly(this)" style="width:100%;" required>

                                                        <input type="email" name="email" class="" placeholder="Email*" required>

                                                        <input name="mobile_no" class="" type="text" placeholder="Mobile Number" maxlength="10" pattern="[789][0-9]{9}" onkeyup="NumbersOnly(this)" required>
                                                        <input type="text" name="product_name" class="" placeholder="Product Name*" value="<?php echo $value['product_name']; ?>" style="width:100%;" required>
                                                        <textarea text="text" name="message" id="role" cols="30" rows="6" placeholder="Message*" required></textarea>
                                                        <button type="submit" class="lab-btn">
                                                            <span>Submit Now</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary" id="contact-submit" data-submit="...Sending">Submit</button>
                                    </div>-->
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->

                            <!--<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Product Inquiry</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo base_url() . 'home/product_enquiry'; ?>" method="POST" id="commentform" class="comment-form">
      <div class="modal-body">
      <div class="form-group">
      <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>"></div>
                                                     <div class="form-group">
                                                    <input type="text" name="customer_name" class="" placeholder="Name*"  required>
                                                </div>
                                                 <div class="form-group">
                                                    <input type="email" name="email" class="" placeholder="Email*" required>
                                                  </div>
                                                    <input name="mobile_no" class="" type="text" placeholder="Mobile Number" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==10 && event.keyCode!=8 && event.keyCode!=9) return false;"required>
                                                    <input type="text" name="product_name" class="" placeholder="Product Name*" value="<?php echo $value['product_name']; ?>" style="width:100%;" required>
                                                    <textarea text="text" name="message" id="role" cols="30" rows="6" placeholder="Message*" required></textarea>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->

                    </div>
                </div>
            </div>







        <?php } ?>
        </div>

        </div>
        </div>
        </div>
    </section>
    <!-- Shop Page Section ending here -->


    <!-- product section start here -->
    <section class="product-section product-style2 bg-product padding-tb" style="  background: url(./assets/images/bg-icon.png) center center repeat;
background-size: contain;">
        <!-- <div class="shape-image">
        <img src="assets/images/product/shape/01.png" alt="abs-thumb" class="shape-1">
        <img src="assets/images/product/shape/02.png" alt="abs-thumb" class="shape-2">
    </div> -->
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                <h3> Related Products</h3>
                <!-- <p>Conveniently customize proactives into everaged interfaces without Globally</p> -->
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center">
                    <?php foreach ($products as $key => $value) { ?>
                        <div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="product-item-2">
                                <center>
                                    <a href="<?php echo base_url() . 'home/product_details/' . $value['product_id']; ?>">
                                        <div class="product-inner">
                                            <div class="product-thumb">
                                                <img src="<?php echo base_url() . 'SV_agroAdmin/' . $value['product_img']; ?>" alt="product">
                                            </div>
                                            <div class="product-content">
                                                <a href="#">
                                                    <h5><?php echo $value['product_name']; ?></h5>
                                                </a>
                                                <div class="cart-option">
                                                    <a href="<?php echo base_url() . 'product/'.$value['slug_title'].'/'. $value['product_slug_title']; ?>" class="lab-btn"><span>Read More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </center>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- product section ending here -->

    <?php include('public/footer_main.php'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#success-alert').fadeIn().delay(3000).fadeOut();
            $('#danger-alert').fadeIn().delay(3000).fadeOut();
        });
    </script>

    <script type="text/javascript">
        function LettersOnly(input) {
            var regex = /[^a-zA-Z ]/gi;
            input.value = input.value.replace(regex, "");
        }

        function NumbersOnly(input) {
            var regex1 = /[^0-9]/gi;
            input.value = input.value.replace(regex1, "");
        }
    </script>


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "SV Agro Solutions",
            "alternateName": "SV Agro Solutions",
            "url": "https://svagrosolutions.com/",
            "logo": "https://svagrosolutions.com/assets/images/logo/SV-Ecocert-New.png",
            "sameAs": [
                "https://www.facebook.com/svagrosolutions/?ref=br_rs",
                "https://instagram.com/svagrosolutions?igshid=NDk5N2NlZjQ=",
                "https://www.youtube.com/results?search_query=sv+agro+solutions+indapur+maharashtra"
            ]
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "SV Agro Solutions",
            "image": "https://svagrosolutions.com/assets/images/logo/SV-Ecocert-New.png",
            "@id": "",
            "url": "https://svagrosolutions.com/",
            "telephone": "+919637781012",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Chaitanya Mega Market, 1st Floor, Sriram Chowk, Akluj Naka, Tal. Indapur",
                "addressLocality": "pune",
                "postalCode": "413 132",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 18.11111490444106,
                "longitude": 75.02034015397332
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "00:00",
                "closes": "23:59"
            },
            "sameAs": [
                "https://www.facebook.com/svagrosolutions/?ref=br_rs",
                "https://instagram.com/svagrosolutions?igshid=NDk5N2NlZjQ=",
                "https://www.youtube.com/results?search_query=sv+agro+solutions+indapur+maharashtra"
            ]
        }
    </script>


</body>

</html>