<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SV Agro Solutions: Your dependable source for CRF fertilizer and micronutrients. Explore our ground-breaking products that improve agricultural yields and soil health.">
    <meta name="keywords" http-equiv="fertilizer companies in pune, fertilizer manufacturers in pune,fertilizer producers in pune,pesticides manufacturers in pune,fertlizer plants in pune, fertlizers suppliers in pune,pesticides suppliers in pune,organic ferlizers manufacturers in puneAgri product producers,sv agriculture products manufacturing, pesticides providers in pune,gricultural consultancy in pune, organic farming company in pune,organic farming advisory in pune" />

    <link rel="canonical" href="https://svagrosolutions.com/home/article" />

    <link rel="alternate" hreflang="en-IN" href="https://svagrosolutions.com/home/article" />

    <meta property="og:title" content="sv agro solutions private limited">
    <meta property="og:site_name" content="sv agro solutions private limited">
    <meta property="og:url" content="https://svagrosolutions.com/home/article">
    <meta property="og:description" content="SV agro solutions is India's top farming consulting company. Get in touch for the best agriculture consultancy services in India at an affordable price.">
    <meta property="og:type" content="">
    <meta property="og:image" content="https://wowinfotech.net/SVAgroWeb/SV_agroAdmin/upload/banner/03.jpg">

    <meta name=”twitter:card” content=”summary” />
    <meta name=”twitter:site” content=”https://svagrosolutions.com/home/article” />
    <meta name=”twitter:title” content=”sv agro solutions private limited” />
    <meta name=”twitter:description” content=”SV agro solutions is India's top farming consulting company. Get in touch for the best agriculture consultancy services in India at an affordable price.” />
    <meta name=”twitter:image” content=”https://wowinfotech.net/SVAgroWeb/SV_agroAdmin/upload/banner/03.jpg” />

    <!-- ========== Page Title ========== -->
    <title>Natural micronutrients | SV Agro Solutions</title>


    <?php include('public/header_main.php'); ?>

</head>
<!-- Page Header Section Start Here -->

<body>

    <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P634CBZH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
<section class="page-header bg_img padding-tb1">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <h4 class="ph-title"> Our Articles </h4>
            <ul class="agri-ul">
                <li><a href="<?php echo base_url() . 'home'; ?>">Home</a></li>
                <li><a class="active">Our Articles</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- shop page Section Start Here -->
<div class="shop-page padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12">
                    <article>
                        <!-- <div class="shop-title d-flex flex-wrap justify-content-between">
                            <p></p>
                            <div class="product-view-mode">
                                <a class="active" data-target="grids"><i class="icofont-ghost"></i></a>
                                <a data-target="lists"><i class="icofont-listing-box"></i></a>
                            </div>
                        </div>
-->
                        <div class="shop-product-wrap grids row justify-content-center">
                            <?php foreach ($articles as $key => $value) { ?>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="<?php echo base_url() . 'home/article_details/' . $value['id']; ?>">
                                                <img src="<?php echo base_url() . 'SV_agroAdmin/' . $value['blog_image']; ?>" alt="shope" style="height: 320px;">
                                                <!-- <div class="product-action-link">
                                            <a href="<?php echo base_url() . 'SV_agroAdmin/' . $value['blog_image']; ?>" ></a>
                                            
                                        </div> -->
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="#">
                                                    <?php echo $value['name']; ?></a></h6>
                                            <h6>
                                                <div class="cart-option ">
                                                    <a href="<?php echo base_url() . 'article/grape-farm-and-negative-charge/' . $value['id']; ?>" class="lab-btn blog_button"><span>Read More</span></a>
                                                </div>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="product-list-item">
                                        <div class="product-thumb">
                                            <img src="<?php echo base_url() . 'SV_agroAdmin/' . $value['blog_image']; ?>" alt="shope">
                                            <div class="product-action-link">
                                                <a href="<?php echo base_url() . 'SV_agroAdmin/' . $value['blog_image']; ?>" data-rel="lightcase"><i class="icofont-eye"></i></a>

                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="#"><?php echo $value['name']; ?></a></h6>

                                            <p><?php echo $value['description']; ?></p>
                                            <div class="cart-option ">
                                                <a href="#" class="lab-btn blog_button"><span>Read More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <!--<div class="paginations">
                            <ul class="agri-ul d-flex flex-wrap justify-content-center">
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a href="#">2</a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a class="dot">...</a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a href="#">9</a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a href="#">10</a>
                                </li>
                                <li>
                                    <a href="#">11</a>
                                </li>
                            </ul>
                        </div>-->
                    </article>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- shop page Section ENding Here -->

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