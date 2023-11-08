<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <!-----<img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
    <img src="<?php echo base_url() . 'upload/logo/logo.png'; ?>" alt="Logo" width="230" height="120">
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="<?php echo base_url() . 'AdminData/dashboard'; ?>" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="<?php echo base_url() . 'AdminData/add_product'; ?>" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              Product List
            </p>
          </a>
        </li> -->


        <li class="nav-item">

          <a href="#" class="nav-link">
            <i class=""></i>
            <p>
              PRODUCTS
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="<?php echo base_url() . 'Category/list'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Category</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="<?php echo base_url() . 'SubCategory/list'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Sub Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'SubSubCategory/list'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Sub Sub Category</p>
              </a>
            </li> -->
            <!--  <li class="nav-item">
                <a href="<?php echo base_url() . 'SubSubSubCategory/list'; ?>" class="nav-link">
                  <i class="nav-icon fa fa-list-alt"></i>
                  <p>Sub Sub Sub Category</p>
                </a>
              </li> -->

            <li class="nav-item">
              <a href="<?php echo base_url() . 'AdminData/category'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'AdminData/product'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Products</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class=""></i>
            <p>
              GALLERY
            </p>
            <i class="right fas fa-angle-left"></i>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="<?php echo base_url() . 'AdminData/gallery'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Gallary Image</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'AdminData/certificate'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Certificate</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'AdminData/award'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Award</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'AdminData/event'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
          <a href="<?php echo base_url() . 'AdminData/publication'; ?>" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Publication</p>
          </a>
        </li>

          </ul>
        </li>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class=""></i>
            <p>
              ENQUIRY MASTER
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url() . 'AdminData/product_Enquiery'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Product Enquiries</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?php echo base_url() . 'Contact/list'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Contact Enquiries</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="<?php echo base_url() . 'AdminData/career_enquiry'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Career Enquiries</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url() . 'AdminData/contact_enquiry'; ?>" class="nav-link">
                <i class="nav-icon fa fa-list-alt"></i>
                <p>Contact Enquiries</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url() . 'AdminData/testimonial'; ?>" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Testimonial</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url() . 'AdminData/career'; ?>" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Career</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() . 'AdminData/blog'; ?>" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Blog</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() . 'AdminData/banner'; ?>" class="nav-link">
            <i class="nav-icon fa fa-list-alt"></i>
            <p>Banner</p>
          </a>
        </li>
        <!-- <a href="<?php echo base_url() . 'AdminData/user'; ?>" class="nav-link">
          <i class=""></i>
          <p>
          <i class="nav-icon fa fa-user"></i>
            ADMIN

          </p>
        </a> -->
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>