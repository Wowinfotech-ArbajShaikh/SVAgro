<?php
class HomeModel extends CI_Model
{


//     public function insertContactEnquiry($dataArray)    // career enquiry
//   {
//     $this->load->database();
//     $this->db->insert('tb_contactus', $dataArray);
//     return true;
//   }




     public function getBannerOnHomePage(){
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_banner where banner_status='Active'");   
        return $query-> result_array(); 
    }

    public function getAllCetificates(){
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_certification where status='Active'");   
        return $query-> result_array();    
    }

    public function getAllGalleryImages(){
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_gallery where gallery_status='Active'");   
        return $query-> result_array(); 
    }

    public function getProductsOnHomePage(){
        $this -> load -> database();              
        $query = $this->db->query("SELECT *
        FROM tb_product
        LEFT JOIN tb_category
        ON tb_product.category_id = tb_category.category_id 
        WHERE tb_product.product_status='Active' order by tb_product.product_id desc limit 4");   
        return $query-> result_array(); 
    }
    
   
    public function getAllCategory(){
         $this -> load -> database();              
        $query = $this->db->query("select * from  tb_category where status='Active'");   
        return $query-> result_array();
    }
     public function getCategoryDetail($category_ids){
          $this -> load -> database();              
        $query = $this->db->query("select * from  tb_category where status='Active' and slug_title='$category_ids' ");   
        return $query-> result_array();
    }
    // public function getAllProductsHome(){
    //     $this -> load -> database();              
    //     $query = $this->db->query("select * from tb_product where product_status='Active'");   
    //     return $query-> result_array();
    // }


    public function getAllProducts($category_id){
        $this -> load -> database();              
       // $query = $this->db->query("select * from tb_product where product_status='Active' and category_id='$category_id'"); 
        $query = $this->db->query("SELECT *
                                   FROM tb_product
                                   LEFT JOIN tb_category
                                   ON tb_product.category_id = tb_category.category_id 
                                   WHERE tb_product.product_status='Active' AND tb_category.slug_title='$category_id'
                                  ;");     
        return $query-> result_array();
    }
   
    public function getProductsDetails($id){
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_product where product_slug_title='$id'");   
        return $query-> result_array();
    }

    public function  getProducts($id){
        $this->load->database();
        $query = $this->db->query("select * from tb_product where NOT product_id='$id'");
        return $query-> result_array();   
    }

    public function  getProductslimit($id){
        $this->load->database();
        $query = $this->db->query("SELECT *
        FROM tb_product
        LEFT JOIN tb_category
        ON tb_product.category_id = tb_category.category_id 
        WHERE tb_product.product_status='Active' order by tb_product.product_slug_title !='$id' DESC LIMIT 4");
        return $query-> result_array();   
    }

    public function insertProductEnquiry($dataArray){
        $this->load->database();
        $this->db->insert('tb_product_enquiry', $dataArray);
        return true;
    }

     public function getAllEvents(){
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_event where status='Active'");   
        return $query-> result_array();
    }

    public function getAllArticles(){
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_blogs where status='Active'");   
        return $query-> result_array();
    }

    public function getArticleDetails($id){
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_blogs where id='$id'");   
        return $query-> result_array();
    }

    public function  getArticles($id){
        $this->load->database();
        $query = $this->db->query("select * from tb_blogs where NOT id='$id'");
        return $query-> result_array();   
    }

    public function getArticleOnHomePage(){
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_blogs where status='Active' order by id desc limit 3");   
        return $query-> result_array(); 
    }

    public function getCareersData(){
        $this->load->database();
        $query = $this->db->query("select * from tb_career where career_status='Active'");
        return $query->result_array();
    }

    public function insertCareerEnquiry($dataArray){
        $this->load->database();
        $this->db->insert('tb_career_enquiry', $dataArray);
        return true; 
    }

    public function insertContactEnquiry($dataArray){
        $this->load->database();
        $this->db->insert('tb_contactus', $dataArray);
        return true;
    }
    
    public function getFooterProducts(){
        $this->load->database();
        $query = $this->db->query("select * from tb_product order by product_id DESC LIMIT 6");
        return $query->result_array();
    }

        public function getAllaward()
    {
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_award where status='Active'");   
        return $query-> result_array();
    }
   
        public function getAllpublication()
    {
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_publication where status='Active'");   
        return $query-> result_array();
    }

    public function getAlltestomonial()
    {
        $this -> load -> database();              
        $query = $this->db->query("select * from tb_testomonial where status='Active'");   
        return $query-> result_array();
    }



}
