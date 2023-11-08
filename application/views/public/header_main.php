<?php
$controller = $this->router->fetch_class(); // You can Match controller name
 $method = $this->router->fetch_method(); // You can Match mathod name
?>

<!DOCTYPE html>
<html lang="en">
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P634CBZH');
</script>


<!-- <title>SV Agro Solutions Pvt.Ltd.</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

<!-- google fonts -->
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"> -->
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="">
<link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logo/SV-Ecocert-New.png'; ?>" alt="SV Agro Solutions" title="SV Agro Solutions" type="image/x-icon">

<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/animate.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/all.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/icofont.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/lightcase.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/swiper.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/style.css'; ?>">


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-7010MG12RQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-7010MG12RQ');
</script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> -->
<!-- preloader start here -->
<!-- <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div> -->
<!-- preloader ending here -->

<!-- Header section start here -->
<header class="header-section">
    <div class="header-top bg-black d-none d-lg-block">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7 col-12">
                    <div class="ht-left">
                        <ul class="agri-ul d-flex flex-wrap">
                            <li><i class="icofont-envelope"></i><span> <a href="mailto:info@svagrosolutions.com" style="color:white ;" target="_blank">info@svagrosolutions.com</a></span></li>
                            <li><i class="icofont-phone"></i><span><a href="tel://+919637781012" style="color:white ;" target="_blank">+919637781012</a></span></li>
                            <!-- <li><i class="icofont-stopwatch"></i><span>Mon - Fri 09:00 - 18:00</span></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="ht-right">
                        <div class="scocial-media">
                            <a href="https://www.facebook.com/svagrosolutions/?ref=br_rs" class="facebook" target="_blank"><i class="icofont-facebook"></i></a>

                            <!-- <a href="#" class="linkedin" target="_blank"><i class="icofont-linkedin"></i></a> -->

                            <a href="https://www.youtube.com/results?search_query=sv+agro+solutions+indapur+maharashtra" class="vimeo" target="_blank"><i class="icofont-youtube-play"></i></a>
                            <a href="https://instagram.com/svagrosolutions?igshid=NDk5N2NlZjQ=" target="_blank"><i class="icofont-instagram"></i></a></li>
                            <a href="https://api.whatsapp.com/send?phone=+919637781012" target="_blank"><i class="icofont-brand-whatsapp"></i></a></li>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="primary-menu">
                    <div class="logo">
                        <a href="<?php echo base_url() . ''; ?>"><img src="<?php echo base_url() . 'assets/images/logo/SV-Ecocert-New.png'; ?>" alt="SV Agro Solutions" title="SV Agro Solutions" style="width: 181px;"></a>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="icofont-navigation-menu"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="main-area">
                            <div class="main-menu">
                                <ul class="agri-ul">
                                    <li class="<?php if ($controller == 'Home' && $method == '') {
                                                    echo 'active';
                                                } ?>">
                                        <a href="<?php echo base_url().''; ?>">Home</a>
                                    </li>
                                    <!-- <li class="active"><a href="<?php echo base_url() . 'home'; ?>">Home</a> -->

                                    <!-- </li> -->
                                    <li>
                                        <?php
                                        $style = "";
                                        if ($method == "about_us" || $method == "certificate" ||  $method == "our_Inspiration" || $method == "Management") {
                                            $style = "color:#3cb815;";
                                        } ?>
                                        <a style="<?= $style ?>" href="Javascript:void(0);">About Us</a>
                                        <ul class="agri-ul">
                                            <li><a href="<?php echo base_url() . 'about-us'; ?>">About Us</a></li>
                                            <li><a href="<?php echo base_url() . 'certificate'; ?>">Certificate</a></li>
                                            <li><a href="<?php echo base_url() . 'our-inspiration'; ?>">Our Inspiration </a></li>
                                            <li><a href="<?php echo base_url() . 'management'; ?>">Management
                                                </a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <?php
                                        $cat = $this->HomeModel->getAllCategory();

                                        ?>

                                        <?php
                                        $style = "";
                                        if ($method == "products") {
                                            $style = "color:#3cb815;";
                                        } ?>
                                        <a href="#" style="<?= $style ?>" >Products</a>
                                        <ul class="agri-ul">
                                            <?php
                                            foreach ($cat as $ccc) {
                                            ?>
                                                <li><a  href="<?php echo base_url() . 'product/category/' . $ccc['slug_title']; ?>"><?php echo $ccc['name']; ?></a></li>
                                            <?php
                                            }
                                            ?>

                                        </ul>
                                    </li>
                                    <li>

                                        

                                        <?php
                                        $style = "";
                                        if (
                                            $controller == "Home" && $method == "upcoming_events" ||
                                            $controller == "Home" && $method == "award_and_recognitions" ||
                                            $controller == "Home" && $method == "publications" ||
                                            $controller == "Home" && $method == "gallery"
                                        ) {
                                            $style = "color:#3cb815;";
                                        } ?>
                                        <a style="<?= $style ?>" href="Javascript:void(0);">Event</a>

                                        <ul class="agri-ul">
                                            <li><a href="<?php echo base_url() . 'upcoming-events'; ?>">Upcoming Events</a></li>
                                            <li><a href="<?php echo base_url() . 'award-and-recognitions'; ?>">Awards & Recognitions </a></li>
                                            <li><a href="<?php echo base_url() . 'publications' ?>">Publications</a></li>
                                            <li><a href="<?php echo base_url() . 'gallery'; ?>">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li class="<?php //if ($controller == "Home" && $method == "article") {echo "active";}else{echo ""; } 
                                                    ?>"> <a href="<?php //echo base_url(); 
                                                                    ?>">Our Articles</a></li> -->
                                    <li class="<?php if ($controller == 'Home' && $method == 'article') {
                                                    echo 'active';
                                                } ?>">
                                        <a href="<?php echo base_url('article'); ?>">Our Articles</a>
                                    </li>

                                    <li class="<?php if ($controller == 'Home' && $method == 'career') {
                                                    echo 'active';
                                                } ?>">
                                        <a href="<?php echo base_url('career'); ?>">Career</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="header-btn">
                                <a href="<?php echo base_url() . 'contact-us'; ?>" class="lab-btn"><span>Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- Header section ending here -->

<a href="https://wa.me/+919637781012/? " class="floating" target="_blank">
    <i class="icofont-brand-whatsapp" aria-hidden="true" class="f_button" style="margin-top: 10px;font-size: 25px;"></i>
</a>

<div class="section14">
    <div class="sticky-social1">
        <ul class="social14">
            <li class="fb"><a href="http://facebook.com/svagrosolutions" target="_blank"><i class="icofont-facebook" aria-hidden="true"></i></a></li>
            <li class="pin"><a href="https://www.youtube.com/results?search_query=sv+agro+solutions+indapur+maharashtraQ" target="_blank"><i class="icofont-brand-youtube" aria-hidden="true"></i></a></li>
            <!--  <li class="vim"><a href="" target="_blank"><i class="icofont-linkedin"></i></a></li>-->
            <li class="instagram"><a href="https://instagram.com/svagrosolutions?igshid=NDk5N2NlZjQ=" target="_blank"><i class="icofont-instagram"></i></a></li>
            <li class="whatapp_new"><a href="https://api.whatsapp.com/send?phone=+919637781012" target="_blank"><i class="icofont-brand-whatsapp"></i></a></li>
            <!-- <li class="twitter"><a href="" target="_blank"><i class="icofont-twitter"></i></a></li>-->
        </ul>
    </div>
</div>