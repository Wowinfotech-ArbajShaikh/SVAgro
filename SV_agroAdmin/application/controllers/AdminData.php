<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminData extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('DataModel');
      $this->load->library('form_validation');
      $this->load->helper('url');
      $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
      $this->load->library('upload');
   }

   public function login()
   {
     if($this->session->userdata('admin_id')!='')
     {
       redirect('AdminData/dashboard');
     }
     else
      {
         $this->load->view('Login_form');
      }
   }

   public function verify_admin()
   {
      //Validation for login form
      $this->form_validation->set_rules('admin_email', 'Email', 'required|valid_email'); //is_unique[ragistration.email]
      $this->form_validation->set_rules('admin_pwd', 'Password', 'required');
      if ($this->form_validation->run() == false) {
         $this->load->view('Login_form');
      } else {
         $email    =   $this->input->post('admin_email');
         $password =   $this->input->post('admin_pwd');
         $result = $this->DataModel->verifyuser($email, $password);
         //print_r($result);die();
         if ($result == '') {
            redirect('AdminData/dashboard');
            //$this->load->view('dashboard');
         } else {
            $this->session->set_flashdata('error', $result);
            $this->load->view('Login_form');
         }
      }
   }


   public function logout()
   {
      $this->session->sess_destroy();
      redirect('AdminData/login');

   }

   //################# Display #####################################################################

   public function dashboard()
   {
       $data['total_product'] = $this->DataModel->getTotalProduct();
       $data['total_career'] = $this->DataModel->getTotalCareer();
       $data['total_blog'] = $this->DataModel->getTotalBlog();
       $data['total_event'] = $this->DataModel->getTotalEvent();
       $data['total_category'] = $this->DataModel->getTotalCategory();
       $data['total_banner'] = $this->DataModel->getTotalBanner();
       $data['total_gallery'] = $this->DataModel->getTotalGallery();
       $data['total_certification'] = $this->DataModel->getTotalCertification();
       $data['total_award'] = $this->DataModel->getTotalAward();
       $data['total_product_enquiry'] = $this->DataModel->getTotalProductEnquiry();
       $data['total_career_enquiry'] = $this->DataModel->getTotalCareerEnquiry();
       $data['total_testimonial'] = $this->DataModel->getTotalTestimonial();
       $data['total_contact_enquiry'] = $this->DataModel->getTotalContactEnquiry();



      $this->load->view('dashboard',$data);
   }

   public function user()
   {
      $data['user'] = $this->DataModel->getAlluser();
      $this->load->view('admin_list', $data);
   }

   public function product_Enquiery()
   {
      $data['product_enquiry'] = $this->DataModel->getAllproductEnquiery();
      $this->load->view('productinquiery_list', $data);
   }

   public function testimonial()
   {
      $data['testimonial'] = $this->DataModel->getAllTestimonial();
      $this->load->view('testimonial_list', $data);
   }

   public function award()
   {
      $data['award'] = $this->DataModel->getAllAward();
      $this->load->view('award_list', $data);
   }

   public function blog()
   {
      $data['blog'] = $this->DataModel->getAllBlog();
      $this->load->view('blog_list', $data);
   }


   public function banner()
   {
     if(empty($_SESSION['admin_id']))
     {
       return redirect('AdminData/login');
     }
     else{
      $data['banner'] = $this->DataModel->getAllBanner();
      $this->load->view('banner_list', $data);
     }
   }

   public function event()
   {
      if(empty($_SESSION['admin_id']))
     {
       return redirect('AdminData/login');
     } else{
      $data['event'] = $this->DataModel->getAllEvent();
      $this->load->view('event_list', $data);
     }
   }

   public function category()
   {
      if(empty($_SESSION['admin_id']))
     {
       return redirect('AdminData/login');
     } else{
      $data['category'] = $this->DataModel->getAllCategory();
      $this->load->view('category_list', $data);
     }
   }

   public function certificate()
   {
      if(empty($_SESSION['admin_id']))
     {
       return redirect('AdminData/login');
     } else{
      $data['certificate'] = $this->DataModel->getAllCertificate();
      $this->load->view('certificate_list', $data);
     }
   }


   public function gallery()
   {
      if(empty($_SESSION['admin_id']))
     {
       return redirect('AdminData/login');
     } else{
      $data['gallery'] = $this->DataModel->getAllGallery();
      $this->load->view('gallery_list', $data);
     }
   }

   public function product()
   {
      if(empty($_SESSION['admin_id']))
     {
       return redirect('AdminData/login');
     } else{
     // $data['product'] = $this->DataModel->getAllProduct();
      $data['product'] = $this->DataModel->join_product_category();
      $data['categoryData'] = $this->DataModel->getAllCategoryActive();
      $this->load->view('product_list', $data);
     }
   }

   public function publication()
   {
      if(empty($_SESSION['admin_id']))
      {
        return redirect('AdminData/login');
      } else{
      $data['publication'] = $this->DataModel->getAllPublication();
      $this->load->view('publication_list', $data);
      }
   }

   public function career()
   {
      if(empty($_SESSION['admin_id']))
     {
       return redirect('AdminData/login');
     } else{
      $data['career'] = $this->DataModel->getAllCareer();
      $this->load->view('career_list', $data);
     }
   }

   public function career_enquiry()
   {
      if(empty($_SESSION['admin_id']))
      {
        return redirect('AdminData/login');
      } else{
      $data['career_enquiry'] = $this->DataModel->getAllCareerEnquiry();
      $this->load->view('career_enquiry', $data);
      }
   }
   public function  contact_enquiry()
   {

      if(empty($_SESSION['admin_id']))
     {
       return redirect('AdminData/login');
     } else{
      $data['contact_enquiry'] = $this->DataModel->getAllContactEnquiry();
      $this->load->view('contact_enquiry', $data);
     }
   }



   //################# Insert #####################################################################

   public function add_user()
   {
      $admin_name = $this->input->post('admin_name');
      $admin_email = $this->input->post('admin_email');
      $admin_pwd= $this->input->post('admin_pwd');
      $admin_mob = $this->input->post('admin_mob');

      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('admin_img')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'admin_name' => $admin_name,
         'admin_email' => $admin_email,
         'admin_pwd' => $admin_pwd,
         'admin_mob' => $admin_mob,
         'admin_img' => 'upload/' . $file
      );


      // print_r($dataArray);die();

      $r1 = $this->DataModel->insertUser($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', 'User Submitted..');
         redirect('AdminData/user');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/user');
      }
   }




   public function add_product()
   {
      $product_name = $this->input->post('product_name');
      $product_name_marathi = $this->input->post('product_name_marathi');
      $product_desc = $this->input->post('product_desc');
      $product_desc_marathi = $this->input->post('product_desc_marathi');
      $quantity_of_use = $this->input->post('quantity_of_use');
      $quantity_of_use_english = $this->input->post('quantity_of_use_english');
      $product_doses = $this->input->post('product_doses');
    //   $precaution = $this->input->post('precaution');
      $packing = $this->input->post('packing');
      $packing_english = $this->input->post('packing_english');
      $category_id =$this->input->post('category_id');


      $slug= str_replace(' ','-', $product_name);
      $product_name_slug = rtrim($slug,"',.,:,?,/");
      

      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('product_img')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      // if (!$this->upload->do_upload('product_pdf')) {

      //    $file1 = '';
      // } else {

      //    $file1 = $this->upload->data()['file_name'];
      // }

      $dataArray = array(
         'product_name' => $product_name,
         'product_name_marathi' => $product_name_marathi,
         'product_desc' => $product_desc,
         'product_desc_marathi' => $product_desc_marathi,
         'quantity_of_use' => $quantity_of_use,
         'quantity_of_use_english' => $quantity_of_use_english,
         'product_doses' => $product_doses,
        //  'precaution' => $precaution,
         'packing' => $packing,
         'packing_english' => $packing_english,
         'category_id' => $category_id,
         'product_img' => 'upload/' . $file,

         'product_slug_title'=>$product_name_slug
         // 'product_pdf' => 'upload/' . $file1


      );


      // print_r($dataArray);die();



      $r1 = $this->DataModel->insertPoduct($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Product Submitted..');
         redirect('AdminData/product');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/product');
      }
   }


   public function add_publication()
   {
      $name = $this->input->post('name');

      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('image')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'name' => $name,
         'image' => 'upload/' . $file
      );


      // print_r($dataArray);die();

      $r1 = $this->DataModel->insertPublication($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Publication Submitted..');
         redirect('AdminData/publication');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/publication');
      }
   }

   public function add_certificate()
   {
      $name = $this->input->post('name');

      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('certification_image')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'name' => $name,
         'certification_image' => 'upload/' . $file
      );


      // print_r($dataArray);die();

      $r1 = $this->DataModel->insertCertificate($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', 'certificate Submitted..');
         redirect('AdminData/certificate');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/certificate');
      }
   }


   public function add_testimonial()
   {
      $name = $this->input->post('name');
      $title = $this->input->post('title');
      $description = $this->input->post('description');
      $video_url = $this->input->post('description');

      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('image')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'name' => $name,
         'title' => $title,
         'description' => $description,
         'video_url' => $video_url,
         'image' => 'upload/' . $file
      );


      // print_r($dataArray);die();

      $r1 = $this->DataModel->insertTestimonial($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Testimonial Submitted..');
         redirect('AdminData/testimonial');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/testimonial');
      }
   }

   public function add_banner()
   {
      $banner_name = $this->input->post('banner_name');

      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('banner_image')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'banner_name' => $banner_name,
         'banner_image' => 'upload/' . $file
      );


      // print_r($dataArray);die();

      $r1 = $this->DataModel->insertBanner($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Banner Submitted..');
         redirect('AdminData/banner');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/banner');
      }
   }

   public function add_blog()
   {
      $name = $this->input->post('name');
      $description = $this->input->post('description');

      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('blog_image')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'name' => $name,
         'description' => $description,
         'blog_image' => 'upload/' . $file
      );


      //print_r($dataArray);die();

      $r1 = $this->DataModel->insertBlog($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Blog Submitted..');
         redirect('AdminData/blog');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/blog');
      }
   }


   public function add_award()
   {
      $title = $this->input->post('title');

      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('image')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'title' => $title,
         'image' => 'upload/' . $file
      );


      //print_r($dataArray);die();

      $r1 = $this->DataModel->insertAward($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Award Submitted..');
         redirect('AdminData/award');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/award');
      }
   }

   public function add_event()
   {
      $name = $this->input->post('name');
      $description = $this->input->post('description');

      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('image')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'name' => $name,
         'description' => $description,
         'image' => 'upload/' . $file
      );


      //print_r($dataArray);die();

      $r1 = $this->DataModel->insertEvent($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Event Submitted..');
         redirect('AdminData/event');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/event');
      }
   }



   public function add_gallery()
   {
      $gallery_imgname = $this->input->post('gallery_imgname');

      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('gallery_img')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'gallery_imgname' => $gallery_imgname,
         'gallery_img' => 'upload/' . $file
      );

      // print_r($file);die();

      $r1 = $this->DataModel->insertGallery($dataArray);

      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Gallery Inserted..');
         redirect('AdminData/gallery');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/gallery');
      }
   }

   public function add_category()
   {
      $name = $this->input->post('name');
      $meta_title = $this->input->post('meta_title');
      $meta_keyword = $this->input->post('meta_keyword');
      $meta_description = $this->input->post('meta_description');


      $slug= str_replace(' ','-', $name);
      $name_slug = rtrim($slug,"',.,:,?,/");
      $category_slug = strtolower($name_slug);

      $dataArray = array(
         'name' => $name,
         'slug_title'=> $category_slug,
         'meta_title'=> $meta_title,
         'meta_description'=> $meta_description,
         'meta_keyword'=> $meta_keyword
       );

      // print_r($file);die();

      $r1 = $this->DataModel->insertCategory($dataArray);

      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Category Inserted..');
         redirect('AdminData/category');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/category');
      }
   }


   public function add_career()
   {
      $job_title = $this->input->post('job_title');
      $no_of_vaccancies = $this->input->post('no_of_vaccancies');
      $desired_profile = $this->input->post('desired_profile');
      $experience = $this->input->post('experience');
      $job_responsibilities = $this->input->post('job_responsibilities');

      //$captcha_response = trim($this->input->post('g-recaptcha-response'));


      // $config['upload_path']      = './upload/';
      // $config['allowed_types']    = '*';
      // $this->load->library('upload', $config);
      // $this->upload->initialize($config);

      // if (!$this->upload->do_upload('product_img')) {

      //    $file = '';
      // } else {

      //    $file = $this->upload->data()['file_name'];
      // }

      $dataArray = array(
         'job_title' => $job_title,
         'no_of_vaccancies' => $no_of_vaccancies,
         'desired_profile' => $desired_profile,
         'experience' => $experience,
         'job_responsibilities' => $job_responsibilities
         // 'product_img' => 'upload/' . $file
      );


      // print_r($file);die();

      $r1 = $this->DataModel->insertCareer($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', ' Successfully....!');
         redirect('AdminData/career');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/career');
      }
   }

   public function add_career_enquiry()
   {
      $candidate_name = $this->input->post('candidate_name');
      $email = $this->input->post('email');
      $mobile_no = $this->input->post('mobile_no');
      $position = $this->input->post('position');
      $message = $this->input->post('message');
      //$captcha_response = trim($this->input->post('g-recaptcha-response'));


      $config['upload_path']      = './upload/';
      $config['allowed_types']    = '*';
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('resume_file')) {

         $file = '';
      } else {

         $file = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'candidate_name' => $candidate_name,
         'email' => $email,
         'mobile_no' => $mobile_no,
         'position' => $position,
         'message' => $message,
         'resume_file' => 'upload/' . $file
      );


      // print_r($file);die();

      $r1 = $this->DataModel->insertCareerEnquiry($dataArray);


      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Enquiry Submitted..');
         redirect('AdminData/career_enquiry');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/career_enquiry');
      }
   }

   //################# Update #####################################################################

   public function update_user() //update banner
   {
      $id =   $this->input->post('admin_id');
      $admin_name = $this->input->post('admin_name');
      $admin_email = $this->input->post('admin_email');
      $admin_pwd = $this->input->post('admin_pwd');
      $admin_mob = $this->input->post('admin_mob');

      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('admin_img')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }
      $dataArray = array(
         'admin_name' => $admin_name,
         'admin_email' => $admin_email,
         'admin_mob' => $admin_mob,
         'admin_pwd' => $admin_pwd,
         'admin_img'   => $file
      );
      $dataArray['admin_img'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['admin_img']);
      }

      $result = $this->DataModel->updateUser($dataArray, $id);
      //print_r($dataArray);die();

      // // print_r($file);
      // ///die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/user');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }

   public function update_product() //update banner
   {
      $id =   $this->input->post('product_id');
      $category_id =$this->input->post('category_id');
      $product_name = $this->input->post('product_name');
      $product_name_marathi = $this->input->post('product_name_marathi');
      $product_desc_marathi = $this->input->post('product_desc_marathi');
      $product_desc = $this->input->post('product_desc');
      $quantity_of_use = $this->input->post('quantity_of_use');
      $quantity_of_use_english = $this->input->post('quantity_of_use_english');
      $product_doses = $this->input->post('product_doses');
    //   $precaution = $this->input->post('precaution');
      $packing = $this->input->post('packing');
      $packing_english = $this->input->post('packing_english');


      $slug= str_replace(' ','-', $product_name);
      $product_name_slug = rtrim($slug,"',.,:,?,/");
      

      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('product_img')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }

      if (!$this->upload->do_upload('product_pdf')) {
         $file1 = '';
      } else {
         $file1 = $this->upload->data()['file_name'];
      }

      $dataArray = array(
         'product_name' => $product_name,
         'product_name_marathi' => $product_name_marathi,
         'product_desc' => $product_desc,
         'product_desc_marathi' => $product_desc_marathi,
         'quantity_of_use' => $quantity_of_use,
         'quantity_of_use_english' => $quantity_of_use_english,
         'product_doses' => $product_doses,
        //  'precaution' => $precaution,
         'packing' => $packing,
         'category_id' => $category_id,

         'product_img'   => $file,
         'product_pdf'   => $file1,
         'packing_english' =>$packing_english,
         'product_slug_title' => $product_name_slug

      );

      $dataArray['product_img'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['product_img']);
      }

      $dataArray['product_pdf'] = 'upload/' . $file1; //withaut update image but display image as it is in admin pannel
      if ($file1 == "") {
         unset($dataArray['product_pdf']);
      }

      $result = $this->DataModel->updateProduct($dataArray, $id);
      //print_r($dataArray);die();

      // // print_r($file);
      // ///die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/product');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }

   public function update_publication() //update banner
   {
      $id =   $this->input->post('id');
      $name = $this->input->post('name');

      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('image')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }
      $dataArray = array(
         'name' => $name,
         'image'   => $file
      );
      $dataArray['image'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['image']);
      }

      $result = $this->DataModel->updatePublication($dataArray, $id);
      //print_r($dataArray);die();

      // // print_r($file);
      // ///die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/publication');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }

   public function update_certificate() //update banner
   {
      $id =   $this->input->post('id');
      $name = $this->input->post('name');

      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('certification_image')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }
      $dataArray = array(
         'name' => $name,
         'certification_image'   => $file
      );
      $dataArray['certification_image'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['certification_image']);
      }

      $result = $this->DataModel->updateCertificate($dataArray, $id);
      //print_r($dataArray);die();

      // // print_r($file);
      // ///die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/certificate');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }


   public function update_testimonial() //update banner
   {
      $id =   $this->input->post('id');
      $name = $this->input->post('name');
      $title = $this->input->post('title');
      $description = $this->input->post('description');
      $video_url = $this->input->post('video_url');

      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('image')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }
      $dataArray = array(
         'name' => $name,
         'title' => $title,
         'description' => $description,
         'video_url' => $video_url,
         'image'   => $file
      );
      $dataArray['image'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['image']);
      }

      $result = $this->DataModel->updateTestimonial($dataArray, $id);
      //print_r($dataArray);die();

      // // print_r($file);
      // ///die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/testimonial');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }



   public function update_banner() //update banner
   {
      $id =   $this->input->post('banner_id');
      $banner_name = $this->input->post('banner_name');

      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('banner_image')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }
      $dataArray = array(
         'banner_name' => $banner_name,
         'banner_image'   => $file
      );
      $dataArray['banner_image'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['banner_image']);
      }

      $result = $this->DataModel->updateBanner($dataArray, $id);
      //print_r($dataArray);die();

      // // print_r($file);
      // ///die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/banner');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }




   public function update_blog() //update banner
   {
      $id =   $this->input->post('id');
      $name = $this->input->post('name');
      $description = $this->input->post('description');

      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('blog_image')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }
      $dataArray = array(
         'name' => $name,
         'description' => $description,
         'blog_image'   => $file
      );
      $dataArray['blog_image'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['blog_image']);
      }

      $result = $this->DataModel->updateBlog($dataArray, $id);
      // print_r($result);die();

      // // print_r($file);
      // ///die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/blog');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }

   public function update_award() //update banner
   {
      $id =   $this->input->post('id');
      $title = $this->input->post('title');

      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('image')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }
      $dataArray = array(
         'title' => $title,
         'image'   => $file
      );
      $dataArray['image'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['image']);
      }

      $result = $this->DataModel->updateAward($dataArray, $id);
      // print_r($result);die();

      // // print_r($file);
      // ///die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/award');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }


   public function update_event() //update banner
   {
      $id =   $this->input->post('id');
      $name = $this->input->post('name');
      $description = $this->input->post('description');

      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('image')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }
      $dataArray = array(
         'name' => $name,
         'description' => $description,
         'image'   => $file
      );
      $dataArray['image'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['image']);
      }

      $result = $this->DataModel->updateEvent($dataArray, $id);
      // print_r($result);die();

      // // print_r($file);
      // ///die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/event');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }

   public function update_gallery() // update gallery
   {
      $id =   $this->input->post('gallery_imgid');
      $gallery_imgname = $this->input->post('gallery_imgname');


      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);

      if (!$this->upload->do_upload('gallery_img')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }
      $dataArray = array(
         'gallery_imgname' => $gallery_imgname,
         'gallery_img'   => $file
      );

      $dataArray['gallery_img'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['gallery_img']);
      }

      $result = $this->DataModel->updateGallery($dataArray, $id);

      //  print_r($dataArray);die();

      // print_r($dataArray);
      // die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/gallery');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }



   public function update_category() // update category
   {
      $id =   $this->input->post('category_id');
      $name = $this->input->post('name');
      $meta_title = $this->input->post('meta_title');
      $meta_keyword = $this->input->post('meta_keyword');
      $meta_description = $this->input->post('meta_description');

      $slug= str_replace(' ','-', $name);
      $name_slug = rtrim($slug,"',.,:,?,/");
      $category_slug = strtolower($name_slug);


      $dataArray = array(
         'name' => $name,
         'slug_title'=> $category_slug,
         'meta_title'=> $meta_title,
         'meta_description'=> $meta_description,
         'meta_keyword'=> $meta_keyword
      );

      //  print_r($dataArray);die();
      $result = $this->DataModel->updateCategory($dataArray, $id);


      // print_r($file);
      // die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/category');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }

   public function update_career_enquiry() //  career enquiry
   {
      $id =   $this->input->post('id');
      $candidate_name = $this->input->post('candidate_name');
      $email = $this->input->post('email');
      $mobile_no = $this->input->post('mobile_no');
      $position = $this->input->post('position');
      $message = $this->input->post('message');

      $config['upload_path']  = './upload/';
      $config['allowed_types'] = "*";
      /*$config['max_size'] = 0;*/
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('resume_file')) {
         $file = '';
      } else {
         $file = $this->upload->data()['file_name'];
      }
      $dataArray = array(
         'candidate_name' => $candidate_name,
         'email' => $email,
         'mobile_no' => $mobile_no,
         'position' => $position,
         'message' => $message,
         'resume_file'   => $file
      );
      $dataArray['resume_file'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      if ($file == "") {
         unset($dataArray['resume_file']);
      }
      //  print_r($dataArray);die();
      $result = $this->DataModel->updateCareerEnquiry($dataArray, $id);


      // print_r($file);
      // die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/career_enquiry');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }

   public function update_career() //update banner
   {
      $id =   $this->input->post('career_id');
      $job_title = $this->input->post('job_title');
      $no_of_vaccancies = $this->input->post('no_of_vaccancies');
      $experience = $this->input->post('experience');
      $desired_profile = $this->input->post('desired_profile');
      $job_responsibilities = $this->input->post('job_responsibilities');

      // $config['upload_path']  = './upload/';
      // $config['allowed_types'] = "*";
      // /*$config['max_size'] = 0;*/
      // $this->load->library('upload', $config);
      // $this->upload->initialize($config);
      // if (!$this->upload->do_upload('product_img')) {
      //    $file = '';
      // } else {
      //    $file = $this->upload->data()['file_name'];
      // }
      $dataArray = array(
         'job_title' => $job_title,
         'no_of_vaccancies' => $no_of_vaccancies,
         'experience' =>$experience,
         'desired_profile' => $desired_profile,
         'job_responsibilities' => $job_responsibilities
         // 'product_img'   => $file
      );
      // $dataArray['product_img'] = 'upload/' . $file; //withaut update image but display image as it is in admin pannel
      // if ($file == "") {
      //    unset($dataArray['product_img']);
      // }

      $result = $this->DataModel->updateCareer($dataArray, $id);
      // print_r($result);die();

      // // print_r($file);
      // ///die();
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Updated Successfully');
         redirect('AdminData/career');
      } else {
         $this->session->set_flashdata('error', 'Record Not Inserted.Please Try again');
      }
   }
   //################# Delete #####################################################################

   public function delete_contact_enquiry($career_id)
   {
     $this->load->model("DataModel");
     $r1=$this->DataModel->deleteContactEnquiry($career_id);

     if ($r1 == true) {
        $this->session->set_flashdata('success', 'Career Enquiry Deleted..');
        redirect('AdminData/contact_enquiry');
     } else {
        $this->session->set_flashdata('error', 'Please Try Again.');
        redirect('AdminData/contact_enquiry');
     }
   }
    public function delete_career_enquiry($career_id)
    {
      $this->load->model("DataModel");
      $r1=$this->DataModel->deleteCareerEnquiry($career_id);

      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Career Enquiry Deleted..');
         redirect('AdminData/career_enquiry');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/career_enquiry');
      }
    }


    public function delete_product_enquiry($product_id)
    {
      $this->load->model("DataModel");
      $r1=$this->DataModel->deleteProductEnquiry($product_id);

      if ($r1 == true) {
         $this->session->set_flashdata('success', 'Product Enquiry Deleted..');
         redirect('AdminData/product_Enquiery');
      } else {
         $this->session->set_flashdata('error', 'Please Try Again.');
         redirect('AdminData/product_Enquiery');
      }
    }


   //################# Status all #####################################################################

   public function career_enquiry_status($id) //for status
   {
      $data['result'] = $this->DataModel->getCareerEnquiryStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['status'];
      }
      $status = $statusval == 'Completed' ? 'Pending' : 'Completed';
      $data = array(
         'status' => $status
      );
      $result = $this->DataModel->updateCareerEnquiry($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/career_enquiry");
      }
   }


   public function product_enquiry_status($id) //for status
   {
      $data['result'] = $this->DataModel->getProductEnquiryStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['status'];
      }
      $status = $statusval == 'Completed' ? 'Pending' : 'Completed';
      $data = array(
         'status' => $status
      );
      $result = $this->DataModel->updateProductEnquiry($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/product_Enquiery");
      }
   }


   public function contact_status($id) //for status
   {
      $data['result'] = $this->DataModel->getContactStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['status'];
      }
      $status = $statusval == 'Completed' ? 'Pending' : 'Completed';
      $data = array(
         'status' => $status
      );
      $result = $this->DataModel->updateContact($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/contact_enquiry");
      }
   }




   public function user_status($id) //for status
   {
      $data['result'] = $this->DataModel->getUserStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['admin_status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'admin_status' => $status
      );
      $result = $this->DataModel->updateUser($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/user");
      }
   }

   public function career_status($id) //for status
   {
      $data['result'] = $this->DataModel->getCareerStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['career_status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'career_status' => $status
      );
      $result = $this->DataModel->updateCareer($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/career");
      }
   }


   public function award_status($id) //for status
   {
      $data['result'] = $this->DataModel->getAwardStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'status' => $status
      );
      $result = $this->DataModel->updateAward($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/award");
      }
   }

   public function testimonial_status($id) //for status
   {
      $data['result'] = $this->DataModel->getTestimonialStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'status' => $status
      );
      $result = $this->DataModel->updateTestimonial($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/testimonial");
      }
   }


   public function category_status($id) //for status
   {
      $data['result'] = $this->DataModel->getCategoryStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'status' => $status
      );
      $result = $this->DataModel->updateCategory($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/category");
      }
   }

   public function product_status($id) //for status
   {
      $data['result'] = $this->DataModel->getProductStatus($id); //for status product

      foreach ($data['result'] as $row) {
         $statusval = $row['product_status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'product_status' => $status
      );
      $result = $this->DataModel->updateProduct($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/product");
      }
   }

   public function gallery_status($id) //for status
   {
      $data['result'] = $this->DataModel->getGalleryStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['gallery_status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'gallery_status' => $status
      );
      $result = $this->DataModel->updateGallery($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/gallery");
      }
   }

   public function blog_status($id) //for status
   {
      $data['result'] = $this->DataModel->getBlogStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'status' => $status
      );
      $result = $this->DataModel->updateBlog($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/blog");
      }
   }

   public function publication_status($id) //for status
   {
      $data['result'] = $this->DataModel->getPublicationStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'status' => $status
      );
      $result = $this->DataModel->updatePublication($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/publication");
      }
   }

   public function banner_status($id) //for status
   {
      $data['result'] = $this->DataModel->getBannerStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['banner_status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'banner_status' => $status
      );
      $result = $this->DataModel->updateBanner($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/banner");
      }
   }

   public function event_status($id) //for status
   {
      $data['result'] = $this->DataModel->getEventStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'status' => $status
      );
      $result = $this->DataModel->updateEvent($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/event");
      }
   }

   public function certificate_status($id) //for status
   {
      $data['result'] = $this->DataModel->getCertificateStatus($id); //for status gallery

      foreach ($data['result'] as $row) {
         $statusval = $row['status'];
      }
      $status = $statusval == 'Active' ? 'Deactive' : 'Active';
      $data = array(
         'status' => $status
      );
      $result = $this->DataModel->updateCertificate($data, $id);
      if ($result > 0) {
         $this->session->set_flashdata('success', 'Status Updated Successfully');
         redirect("AdminData/certificate");
      }
   }

   // public function product_category()
   // {
   //    $data1['product'] = $this->DataModel->join_product_category();

   //    $data['category'] = $this->DataModel->getAllCategory();
   //  //  echo '<pre>';
   //   // print_r($c[0]['name']);
   //     $this->load->view('product_list',$data);
   // }



}
