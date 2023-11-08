<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SV Agro Solutions: Your dependable source for micronutrients & CRF fertilizer. Discover our ground-breaking products that improve soil health and crop yields.">
    <meta name="keywords" http-equiv="organic ferlizers manufacturers in pune,Agri product producers,agriculture products manufacturing, pesticides providers in pune, agri organic products manufacturers in pune, organic pesticides in pune, agricultural pesticides in pune, agricultural fertlizers in pune, agriculture pesticides manufacturers in pune, agriculture fertlizers manufacturers in pune,agriculture fertlizers suppliers in pune,agriculture pesticides suppliers in pune" />

    <link rel="canonical" href="https://svagrosolutions.com/home/gallery" />

    <link rel="alternate" hreflang="en-IN" href="https://svagrosolutions.com/home/gallery" />

    <meta property="og:title" content="sv agro solutions private limited">
    <meta property="og:site_name" content="sv agro solutions private limited">
    <meta property="og:url" content="https://svagrosolutions.com/home/gallery">
    <meta property="og:description" content="SV agro solutions is India's top farming consulting company. Get in touch for the best agriculture consultancy services in India at an affordable price.">
    <meta property="og:type" content="">
    <meta property=" og:image" content="https://wowinfotech.net/SVAgroWeb/SV_agroAdmin/upload/banner/03.jpg">

    <meta name=”twitter:card” content=”summary” />
    <meta name=”twitter:site” content=”https://svagrosolutions.com/home/gallery” />
    <meta name=”twitter:title” content=”sv agro solutions private limited” />
    <meta name=”twitter:description” content=”SV agro solutions is India's top farming consulting company. Get in touch for the best agriculture consultancy services in India at an affordable price.” />
    <meta name=”twitter:image” content=”https://wowinfotech.net/SVAgroWeb/SV_agroAdmin/upload/banner/03.jpg” />

    <!-- ========== Page Title ========== -->
    <title>Agricultural Products Manufacturer | SV Agro Solutions</title>


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
            <h4 class="ph-title">Gallery</h4>
            <ul class="agri-ul">
                <li><a href="<?php echo base_url() . 'home'; ?>">Home</a></li>
                <li><a class="active">Gallery</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section Ending Here -->

<!-- Gallery Section Start Here -->
<div class="shop-page padding-tb">
    <div class="container">
        <div class="section-wrapper">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-12">
                    <article>
                        <div class="shop-product-wrap grids row justify-content-center">
                            <?php foreach ($images as $value) { ?>



                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <img src="<?php echo base_url() . 'SV_agroAdmin/' . $value['gallery_img']; ?>" alt="shope" data-lightbox="models" class="img_size">
                                            <div class="product-action-link">
                                                <a href="<?php echo base_url() . 'SV_agroAdmin/' . $value['gallery_img']; ?>" data-lightbox="models"><i class="icofont-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="#"><?php echo $value['gallery_imgname']; ?></a></h6>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Gallery Section ENding Here -->
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