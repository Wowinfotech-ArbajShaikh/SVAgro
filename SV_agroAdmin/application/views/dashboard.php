<?php include('public/header.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="" src="" alt="" height="" width="">
  </div>

  <!-- Navbar -->
  <?php include('public/navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('public/sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php //count($productinquiryCount);?>
                <p>Total Product: <?php foreach($total_product as $c){ print_r($c['count']); } ?></p>
            </div>
             
              <a href="<?php echo base_url().'AdminData/product';?>" class="small-box-footer">Read More</i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
               <?php //count($contactCount);?>
                <p>Total Product Enquiry: <?php foreach($total_product_enquiry as $c){ print_r($c['count']); } ?></p>
              </div>
           
              <a href="<?php echo base_url().'AdminData/product_Enquiery';?>" class="small-box-footer">Read More</i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php //count($bannerCount);?>
                <p>Total Banner: <?php foreach($total_banner as $c){ print_r($c['count']); } ?></p>
              </div>
             
              <a href="<?php echo base_url().'AdminData/banner';?>" class="small-box-footer"> Read More </i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php //count($bannerCount);?>
                <p>Total Award: <?php foreach($total_award as $c){ print_r($c['count']); } ?></p>
              </div>
             
              <a href="<?php echo base_url().'AdminData/award';?>" class="small-box-footer"> Read More </i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php //count($bannerCount);?>
                <p>Total Blog: <?php foreach($total_blog as $c){ print_r($c['count']); } ?></p>
              </div>
             
              <a href="<?php echo base_url().'AdminData/blog';?>" class="small-box-footer"> Read More </i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                 <?php //count($productCount);?>
                <p>Total Product Category :  <?php foreach($total_category as $c){ print_r($c['count']); } ?></p>
               </div>
              <a href="<?php echo base_url().'AdminData/category';?>" class="small-box-footer"> Read More </i></a>
            </div>
          </div>
          <!-- ./col -->
       
         <!-- ./col -->
        
         <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
               <?php //count($galleryCount);?>
                <p>Total Career: <?php foreach($total_career as $c){ print_r($c['count']); } ?></p>
              </div>
             
              <a href="<?php echo base_url().'AdminData/career';?>" class="small-box-footer">Read More</i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              
               <?php //count($TestimonialCount);?>
                <p>Total Testimonial: <?php foreach($total_testimonial as $c){ print_r($c['count']); } ?></p>
              </div>
            
              <a href="<?php echo base_url().'AdminData/testimonial';?>" class="small-box-footer"> Read More </i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php //count($certificateCount);?>
                <p>Total Event: <?php foreach($total_event as $c){ print_r($c['count']); } ?></p>
              </div>
              
              <a href="<?php echo base_url().'AdminData/event';?>" class="small-box-footer">Read More</i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
              <?php //count($certificateCount);?>
                <p>Total Certificate: <?php foreach($total_certification as $c){ print_r($c['count']); } ?></p>
              </div>
              
              <a href="<?php echo base_url().'AdminData/certificate';?>" class="small-box-footer">Read More</i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
              <?php //count($certificateCount);?>
                <p>Total Career Enquiry: <?php foreach($total_career_enquiry as $c){ print_r($c['count']); } ?></p>
              </div>
              
              <a href="<?php echo base_url().'AdminData/career_enquiry';?>" class="small-box-footer">Read More</i></a>
            </div>
          </div>

     


          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php //count($certificateCount);?>
                <p>Total Contact Enquiry: <?php foreach($total_contact_enquiry as $c){ print_r($c['count']); } ?></p>
              </div>
              
              <a href="<?php echo base_url().'AdminData/contact_enquiry';?>" class="small-box-footer">Read More</i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php //count($certificateCount);?>
                <p>Total Gallery: <?php foreach($total_gallery as $c){ print_r($c['count']); } ?></p>
              </div>
              
              <a href="<?php echo base_url().'AdminData/gallery';?>" class="small-box-footer">Read More</i></a>
            </div>
          </div>
            
            
        
          <!-- ./col -->
       


         
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
       
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php include('public/script.php');?>
  <!-- Content Wrapper. Contains page content -->
 
 
    <!-- Main content -->
   
</div>
              <!-- /.card-body -->
</div>
            <!-- /.card -->

           