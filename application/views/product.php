<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <?php
           $category_slug = $this->uri->segment(3);
           $q1=$this->db->query("SELECT * FROM tb_category WHERE  slug_title='$category_slug' AND status= 'Active' LIMIT 1");
           foreach($q1->result_array() as $val)
           { 
            //print_r($val);
              ?>
                        
    <title><?php echo $val['meta_title']; ?></title>
    <meta name="description" content="<?php echo $val['meta_description']; ?>">
    <meta name="keywords" http-equiv="<?php echo $val['meta_keyword']; ?>" />
 <?php } ?>
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php include('public/header_main.php'); ?>

  

</head><!-- Page Header Section Start Here -->
<!-- Page Header Section Start Here -->
<body>

    <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P634CBZH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

<section class="page-header bg_img padding-tb1">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <?php
            $category_ids = $this->uri->segment(3);
            $catdata = $this->HomeModel->getCategoryDetail($category_ids);
            foreach ($catdata as $cq) {
                $cat_name = $cq['name'];
            }
            ?>
            <h4 class="ph-title"><?php echo $cat_name; ?></h4>
            <ul class="agri-ul">
                <li><a href="<?php echo base_url() . 'home'; ?>">Home</a></li>
                <li><a class="active"><?php echo $cat_name; ?></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- product section start here -->
<section class="product-section product-style2 bg-product padding-tb" style="  background: url(./assets/images/bg-icon.png) center center repeat;
background-size: contain;">
    <!-- <div class="shape-image">
        <img src="<?php echo base_url() . 'assets/images/product/shape/01.png'; ?>" alt="abs-thumb" class="shape-1">
        <img src="<?php echo base_url() . 'assets/images/product/shape/02.png'; ?>" alt="abs-thumb" class="shape-2">
    </div>-->
    <div class="container">
        <?php
        $productscount = count($products);
        if ($productscount > 0) {
        ?>
            <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                <h3> Our Products</h3>
                <!-- <p>Conveniently customize proactives into everaged interfaces without Globally</p> -->
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center">

                    <?php

                    foreach ($products as $key => $value) : ?>
                        <div class="col-xl-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="product-item-2 ">
                                <div class="product-inner new_p ">
                                    <a href="<?php echo base_url() . 'product/'.$value['slug_title'].'/'. $value['product_slug_title']; ?>">
                                        <center>
                                            <div class="product-thumb ">
                                                <img src="<?php echo base_url() . 'SV_agroAdmin/' . $value['product_img']; ?>" alt="product">
                                            </div>
                                        </center>
                                        <div class="product-content">
                                            <a href="<?php echo base_url() . 'product/'.$value['slug_title'].'/'. $value['product_slug_title']; ?>">
                                                <h5><?php echo $value['product_name']; ?></h5>
                                            </a>
                                            <div class="cart-option">
                                                <a href="<?php echo base_url() . 'product/'.$value['slug_title'].'/'. $value['product_slug_title']; ?>" class="lab-btn"><span>Read More</span></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                } else {
                    ?>
                    <div class="container ">
                        <div class="row justify-content-center">

                            <div class="col-md-6">
                                <div class="wrapper231 bg_img_1">
                                    <h1 class="h12">Coming Soon</h1>
                                    <p class="p12">Under Construction</p>

                                    <div class="zero-content1"><a href="<?php echo base_url(); ?>" class="lab-btn"><span>Back to Home</span></a></div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
                <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.4s">
                <a href="#" class="lab-btn"><span>View Product</span></a>
            </div> -->
            </div>
    </div>
</section>
<!-- product section ending here -->
<!--coming soon start  -->
<!-- fore zero fore page start here -->
<!-- <section class="fore-zero padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="zero-item text-center" style="background-color: aliceblue;">
                        <h2>coming soon</h2>
                        <div class="zero-thumb">
                            <img src= "<?php echo base_url() . 'assets/images/new_oip.jpg'; ?>" alt="404">
                        </div>
                        <div class="zero-content">
                            <a href="index.html" class="lab-btn"><span>Back to Home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->





<?php include('public/footer_main.php'); ?>

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