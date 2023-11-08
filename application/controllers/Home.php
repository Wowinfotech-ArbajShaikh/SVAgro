<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel');
        $this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
    }

	public function index()
	{
		$data['products'] = $this -> HomeModel -> getProductsOnHomePage();
		$data['articles'] = $this -> HomeModel -> getArticleOnHomePage();
		$data['banner'] = $this -> HomeModel -> getBannerOnHomePage();
		$data['testomonial'] = $this -> HomeModel ->getAlltestomonial();
		$this->load->view('home', $data);
	}

	public function about_us()
	{
		$this->load->view('about');
	}
	public function award_and_recognitions()
	{
		$data['award'] = $this -> HomeModel -> getAllaward();
		$this->load->view('award_and_recognitions', $data);
	}
	public function our_Inspiration()
	{
		$this->load->view('our_Inspiration');
	}
	public function Management()
	{
		$this->load->view('Management');
	}

	public function publications()

	{
		$data['publication'] = $this -> HomeModel -> getAllpublication();
		$this->load->view('publications', $data);
	}

	public function certificate()
	{
		$data['certificates'] = $this -> HomeModel -> getAllCetificates();
		$this->load->view('certificate', $data);
	}

	public function gallery()
	{
		$data['images'] = $this -> HomeModel -> getAllGalleryImages();
		$this->load->view('gallery', $data);
	}

	public function article()
	{
		$data['articles'] = $this -> HomeModel -> getAllArticles();
		$this->load->view('blog', $data);
	}


	public function article_details($id)
	{
		// print_r($id);die();
		$data['details'] = $this -> HomeModel -> getArticleDetails($id);
		$data['blogs'] = $this -> HomeModel -> getArticles($id);
		$this->load->view('blog_detail', $data);
	}

	public function career()
	{
		$data['career'] = $this -> HomeModel -> getCareersData();
		$this->load->view('career', $data);
	}

	public function career_enquiry()
	{
		$candidate_name= $this -> input -> post('candidate_name');
		$email= $this -> input -> post('email');
        $mobile_no= $this -> input -> post('mobile_no');
        $position= $this -> input -> post('position');
        $message= $this -> input -> post('message');
     	//$captcha_response = trim($this->input->post('g-recaptcha-response'));


		$config['upload_path']      = './SV_agroAdmin/upload/upload_resume/';
        $config['allowed_types']    = '*';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

        if(! $this->upload->do_upload('resume_file')){

			$file = '';

		}else{

			$file = $this->upload->data()['file_name'];
		}

		$dataArray = array(
			'candidate_name' => $candidate_name,
			'email' => $email,
			'mobile_no' => $mobile_no,
			'position' => $position,
			'message' => $message,
			'resume_file' => 'upload_resume/'.$file
		);

		$r1 = $this-> HomeModel -> insertCareerEnquiry($dataArray);

		if($r1 == true){
			$this->session->set_flashdata('success','Submitted Successfully...!');
	        redirect('career');
		}
		else{
			$this->session->set_flashdata('error','Please Try Again.');
	        redirect('career');
		}
	}

	public function products($category_id)
	{
		$data['products'] = $this -> HomeModel -> getAllProducts($category_id);
		$this->load->view('product', $data);
	}

	// public function productsHome()
	// {
	// 	$data['products'] = $this -> HomeModel -> getAllProductsHome();
	// 	$this->load->view('product', $data);
	// }
	// public function biostimulants()
	// {
	// 	$data['biostimulants'] = $this -> HomeModel -> getAllProducts();
	// 	$this->load->view('biostimulants', $data);
	// }


	public function product_details($id,$id2)
	{
		
		$name = urldecode($id2);

		$data['products'] = $this -> HomeModel -> getProductslimit($id);
		$data['details'] = $this -> HomeModel -> getProductsDetails($name);
		$this->load->view('product_details', $data);
	}

	public function product_enquiry(){
		$customer_name= $this -> input -> post('customer_name');
		$mobile_no= $this -> input -> post('mobile_no');
        $message= $this -> input -> post('message');
        $product_name= $this -> input -> post('product_name');
        $email= $this -> input -> post('email');
        $product_id= $this -> input -> post('product_id');

		$cat_slug= $this -> input -> post('cat_slug');
		$prod_slug= $this -> input -> post('prod_slug');
		$prod_slug_encode = urldecode($prod_slug);

		$dataArray = array(
			'customer_name' => $customer_name,
			'mobile_no' => $mobile_no,
			'message' => $message,
			'product_name' => $product_name,
			'email' => $email,
			'product_id' => $product_id
		);
		//print_r($dataArray);die();
		$r1 = $this-> HomeModel -> insertProductEnquiry($dataArray);

		if($r1 == true){
			$this->session->set_flashdata('success','Enquiry Submitted..');
	        redirect('product/'.$cat_slug.'/'.$prod_slug_encode);
		}
		else{
			$this->session->set_flashdata('error','Please Try Again.');
	        redirect('product/'.$cat_slug.'/'.$prod_slug_encode);
		}
	}

	public function upcoming_events()
	{
		$data['events'] = $this -> HomeModel -> getAllEvents();
		$this->load->view('upcoming_events', $data);
	}

	public function contact_us()
	{
		$this->load->view('contact-us');
	}

	public function contact_enquiry(){
		$name= $this -> input -> post('name');
		$email= $this -> input -> post('email');
        $subject= $this -> input -> post('subject');
        $message= $this -> input -> post('message');

		$dataArray = array(
			'name' => $name,
			'email' => $email,
			'subject' => $subject,
			'message' => $message
		);

		$r1 = $this-> HomeModel -> insertContactEnquiry($dataArray);

		if($r1 == true){
			$this->session->set_flashdata('success','Enquiry Submitted..');
	        redirect('Home/contact_us');
		}
		else{
			$this->session->set_flashdata('error','Please Try Again.');
	        redirect('Home/contact_us');
		}
	}

	public function PrivacyPolicy()
	{
		$this->load->view('privacy_policy');
	}



}
