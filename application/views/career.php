<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore exciting career opportunities at SV Agro Solutions, a leading agricultural technology company. Join our team of passionate professionals dedicated to revolutionizing the agricultural industry.">
    <meta name="keywords" http-equiv="fertilizer companies in pune, fertilizer manufacturers in pune,fertilizer producers in pune,pesticides manufacturers in pune,fertlizer plants in pune, fertlizers suppliers in pune,pesticides suppliers in pune,organic ferlizers manufacturers in pune,Agri product producers,sv agriculture products manufacturing, pesticides providers in pune,Farm management, farm maintenance, agri services providers, agriculture advisory pune,agri consulting services pune, agricultural consultancy in pune agricultural consultancy services in pune, agri services in pune, agri services providers pune, agri services providers in pune, agricultural consultancy in pune, organic farming company in pune,organic farming advisory in pune " />

    <link rel="canonical" href="https://svagrosolutions.com/home/career" />

    <link rel="alternate" hreflang="en-IN" href="https://svagrosolutions.com/home/career" />

    <meta property="" og:title"" content="sv agro solutions private limited">
    <meta property="" og:site_name"" content="sv agro solutions private limited">
    <meta property="" og:url"" content="https://svagrosolutions.com/home/career">
    <meta property="" og:description"" content="SV agro solutions is India's top farming consulting company. Get in touch for the best agriculture consultancy services in India at an affordable price.">
    <meta property="" og:type"" content="""">
    <meta property="" og:image"" content="https://wowinfotech.net/SVAgroWeb/SV_agroAdmin/upload/banner/03.jpg">

    <meta name=”twitter:card” content=”summary” />
    <meta name=”twitter:site” content=”https://svagrosolutions.com/home/career” />
    <meta name=”twitter:title” content=”sv agro solutions private limited” />
    <meta name=”twitter:description” content=”SV agro solutions is India's top farming consulting company. Get in touch for the best agriculture consultancy services in India at an affordable price.” />
    <meta name=”twitter:image” content=”https://wowinfotech.net/SVAgroWeb/SV_agroAdmin/upload/banner/03.jpg” />

    <!-- ========== Page Title ========== -->
    <title>Unlock Your Potential: Join SV Agro Solutions private limited</title>


    <?php include('public/header_main.php'); ?>

</head> <!-- Page Header Section Start Here -->
<body>

    <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P634CBZH" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
    
<section class="page-header bg_img padding-tb1">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-header-content-area">
            <h4 class="ph-title">Career</h4>
            <ul class="agri-ul">
                <li><a href="<?php echo base_url() . 'home'; ?>">Home</a></li>
                <li><a class="active">Career</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Page Header Section end Here -->
<a href="https://api.whatsapp.com/send?phone=+919637781012" class="floating" target="_blank">
    <i class="icofont-brand-whatsapp" aria-hidden="true" class="f_button" style="margin-top: 10px;font-size: 25px;"></i>
</a>
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
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="site-heading text-center">


                <h5 style="margin-top: 20px;">
                    We at SV Agro Solutions strive to create a meaningful work environment where real
                    growth takes place at each and every level, where hard work and teamwork are the
                    keys to achieving goals of Employees and Organization.
                    Our collaborative work style offers the support you need to make an impact on our
                    business, while enabling you to shape your career, in the path you have chosen.
                    Be a part of our journey and join us in creating a better business, better career and a
                    better farming community.</h5>

                </h6>
            </div>
        </div>
    </div>

</div>
<!-- Faq Page Section Start Here -->
<div class="faq-section padding-tb">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="tab-content faq-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="purchas" role="tabpanel" aria-labelledby="purchas-tab">

                        <div id="accordion">
                            <?php foreach ($career as $value) { ?>
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <button class="faq-item" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne_<?php echo $value['career_id']; ?>" aria-expanded="false" aria-controls="collapseOne">
                                            <?php echo $value['job_title']; ?>
                                        </button>
                                    </div>

                                    <div id="collapseOne_<?php echo $value['career_id']; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <p><strong>Number of Vacancies:</strong></p>
                                                </div>
                                                <div class="col-lg-9">
                                                    <p><?php echo $value['no_of_vaccancies']; ?></p>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <p><strong>Desired Profile :</strong></p>
                                                </div>
                                                <div class="col-lg-9">
                                                    <p class="career_text"><?php echo $value['desired_profile']; ?>
                                                    </p>

                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <p><strong>Experience:</strong></p>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <p><?php echo $value['experience']; ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <p><strong>Job Responsibilities:</strong></p>
                                                </div>
                                                <div class="col-lg-9">
                                                    <p class="career_text"><?php echo $value['job_responsibilities']; ?>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- Faq Page Section Ending Here -->

<div id="survey-container">
    <div class="container">
        <h2 class="text-center" id="title"> SEND <span class="light-text" style="font-weight: 300;">YOUR CV</span></h2>
        <form id="survey-form" action="<?php echo base_url() . 'Home/career_enquiry'; ?>" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label id="name-label" class="label" for="name">Your Name <span class="required">*</span></label>
                        <input id="candidate_name" name="candidate_name" class="row-input" onkeyup="LettersOnly(this)" type="text" placeholder="Enter your name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label id="email-label" class="label" for="email"> Email ID <span class="required">*</span></label>
                        <input id="email" name="email" class="row-input" type="email" placeholder="Enter your email" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label id="number-label" class="label" for="number"> Your Mobile No. <span class="required">*</span></label>
                        <input id="mobile_no" name="mobile_no" class="row-input" type="text" placeholder="Enter your Number" pattern="[789][0-9]{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyDown="if(this.value.length==10 && event.keyCode!=8 && event.keyCode!=9) return false;" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="dropdown">Position <span class="required">*</span></label>
                        <select id="dropdown" name="position" class="row-input" required>
                            <option selected>--Select Postion--</option>
                            <?php $query = $this->db->query("SELECT * FROM `tb_career` where career_status='Active'");
                            foreach ($query->result_array() as $qsc) { ?>
                                <option value="<?php echo $qsc['career_id']; ?>"><?php echo $qsc['job_title']; ?></option>
                            <?php } ?>
                            <!-- <option value="primary">Agri business </option>
                            <option value="secondary">Agri business Manager</option>    -->
                        </select>
                    </div>
                </div>
            </div>

            <label id="number-label" class="label" for="number">Upload Your Resume <span class="required">*</span></label>
            <input id="resume_file" name="resume_file" class="row-input" type="file" accept=".pdf,.PDF" required>
            <p class="text-primary">Note: PDF size should be 800 Kb</p>

            <label class="label" for="comments">
                Your Message</label>
            <textarea id="comments" type="text" name="message" placeholder="Enter other informations here..."></textarea>

            <center>
                <div class="form-group mt-3">
                    <div class="g-recaptcha" data-sitekey="6LcMa1cnAAAAAMZiRFtgPitsWVPkrYlgousCAhfd" data-callback="verifyCaptcha"></div>
                    <div id="g-recaptcha-error"></div>
                </div>
            </center>
            <center><button type="submit" onclick="sendCareerData()" class="lab-btn mt-2">Submit</button></center>
            <!-- <button id="submit" type="submit">Submit</button> -->
        </form>

    </div>

</div>

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