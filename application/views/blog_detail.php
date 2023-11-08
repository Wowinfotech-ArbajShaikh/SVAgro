<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SV Agro Solutions: Leading the way for agrochemical firms in the future. Discover our game-changing solutions for successful sustainable agriculture." />

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
    <title>Best Agro Products Company | SV Agro Solutions</title>


    <?php include('public/header_main.php'); ?>

</head>


<?php foreach ($details as $key => $value) {
    $date = $value['createdOn'];
    $new_date = date("F d, Y", strtotime($date));
?>
    <!-- Page Header Section Start Here -->

    <body>

    <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P634CBZH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    <section class="page-header bg_img padding-tb1">
        <div class="overlay"></div>
        <div class="container">
            <div class="page-header-content-area">
                <h4 class="ph-title"><?php echo $value['name']; ?></h4>
                <ul class="agri-ul">
                    <li><a href="<?php echo base_url() . 'home'; ?>">Home</a></li>
                    <li><a class="active"><?php echo $value['name']; ?></a></li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Blog Section Start Here -->
    <div class="blog-section blog-single padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center">

                    <div class="col-lg-9 col-12">
                        <article>
                            <div class="post-item-2">
                                <div class="post-inner">
                                    <div class="post-thumb">
                                        <center>
                                            <img src="<?php echo base_url() . 'SV_agroAdmin/' . $value['blog_image']; ?>" alt="blog" style="height: 500px;width:500px;">
                                        </center>
                                    </div>
                                    <div class="post-content">
                                        <h4><?php echo $value['name']; ?></h4>
                                        <div class="meta-post">
                                            <p><span class="post-date">Posted On:<a href="#"><?php echo $new_date; ?></a></span></p>
                                        </div>
                                        <?php echo $value['description']; ?>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php } ?>

                <div class="col-lg-3 col-md-7 col-12">
                    <aside>
                        <div class="widget widget-post">
                            <div class="widget-header">
                                <h5>Recent Post</h5>
                            </div>
                            <ul class="agri-ul widget-wrapper">

                            
                                <?php
                                 foreach ($blogs as $key => $value) {
                                    $pr_i = $this->uri->segment(3);
                                    if ($value['id'] <= 7 && $pr_i != $value['id']) {
                                        $date = $value['createdOn'];
                                        $new_date = date("F d, Y", strtotime($date));
                                ?>
                                        <li class="d-flex flex-wrap justify-content-between">
                                            <div class="post-thumb">
                                                <a href="<?php echo base_url() . 'home/article'; ?>"><img src="<?php echo base_url() . 'SV_agroAdmin/' . $value['blog_image']; ?>" alt="product"></a>
                                            </div>
                                            <div class="post-content">
                                                <a href="<?php echo base_url() . 'article/grape-farm-and-negative-charge/' . $value['id']; ?>">
                                                    <h6><?php echo $value['name']; ?></h6>
                                                </a>
                                                <p><?php echo $new_date; ?></p>
                                            </div>
                                        </li>
                                <?php
                                    } else {
                                    }
                                } ?>
                            </ul>
                            <center><a href="<?php echo base_url() . 'article/article_details/' . $value['id']; ?>" class="btn btn-success" style="color:#fff;">Read More</a></center>
                        </div>
                    </aside>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section ENding Here -->
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