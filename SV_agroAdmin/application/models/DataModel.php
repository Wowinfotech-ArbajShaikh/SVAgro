<?php
class DataModel extends CI_Model
{
  function _construct()
  {
    parent::__construct();
    $this->load->database();
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
  }


  function verifyuser($email, $password) //for login
  {
    $this->db->where('admin_email', $email);
    $this->db->from('tb_admin');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result_array() as $row) {

        $dbemail = $row['admin_email'];
        $dbpassword = $row['admin_pwd'];

        if ($dbemail == $email)
        {
          $this->session->set_userdata('admin_id', $row['admin_id']);
        }
        else
        {
          return "Wrong Email";
        }



        if ($dbpassword == $password) {
          $this->session->set_userdata('', $row['admin_id']);
        } else {
          return "Wrong Password";
        }
      }
    } else {
      return "Invalid Email!";
    }
  }

  //################## Status ##################################################

  public function  getCareerEnquiryStatus($id) //for status career
  {
    $query = $this->db->query("select * from tb_career_enquiry where id='$id'");
    return $query->result_array();
  }

  public function  getProductEnquiryStatus($id) //for status career
  {
    $query = $this->db->query("select * from tb_product_enquiry where id='$id'");
    return $query->result_array();
  }

  public function  getContactStatus($id) //for status career
  {
    $query = $this->db->query("select * from tb_contactus where contact_id='$id'");
    return $query->result_array();
  }

  public function getUserStatus($id) //for status career
  {
    $query = $this->db->query("select * from tb_admin where admin_id='$id'");
    return $query->result_array();
  }

  public function getCareerStatus($id) //for status career
  {
    $query = $this->db->query("select * from tb_career where career_id='$id'");
    return $query->result_array();
  }

  public function getAwardStatus($id) //for status award
  {
    $query = $this->db->query("select * from tb_award where id='$id'");
    return $query->result_array();
  }

  public function getTestimonialStatus($id) //for status testimonial
  {
    $query = $this->db->query("select * from tb_testomonial where id='$id'");
    return $query->result_array();
  }

  public function getCategoryStatus($id) //for status category
  {
    $query = $this->db->query("select * from tb_category where category_id='$id'");
    return $query->result_array();
  }

  public function getProductStatus($id) //for status product
  {
    $query = $this->db->query("select * from tb_product where product_id='$id'");
    return $query->result_array();
  }

  public function getPublicationStatus($id) //for status publication
  {
    $query = $this->db->query("select * from tb_publication where id='$id'");
    return $query->result_array();
  }

  public function getGalleryStatus($id) //for status gallery
  {
    $query = $this->db->query("select * from tb_gallery where gallery_imgid='$id'");
    return $query->result_array();
  }

  public function getBannerStatus($id) //for status banner
  {
    $query = $this->db->query("select * from tb_banner where banner_id='$id'");
    return $query->result_array();
  }

  public function getBlogStatus($id) //for status blog
  {
    $query = $this->db->query("select * from tb_blogs where id='$id'");
    return $query->result_array();
  }

  public function getEventStatus($id) //for status event
  {
    $query = $this->db->query("select * from tb_event where id='$id'");
    return $query->result_array();
  }

  public function getCertificateStatus($id) //for status certificate
  {
    $query = $this->db->query("select * from tb_certification where id='$id'");
    return $query->result_array();
  }

  //################## Insert ##################################################
  public function  insertUser($dataArray)         // product
  {
    $this->load->database();
    $this->db->insert('tb_admin', $dataArray);
    return true;
  }


  public function  insertPoduct($dataArray)         // product
  {
    $this->load->database();
    $this->db->insert('tb_product', $dataArray);
    return true;
  }

  public function  insertPublication($dataArray)         // publication
  {
    $this->load->database();
    $this->db->insert('tb_publication', $dataArray);
    return true;
  }

  public function  insertTestimonial($dataArray)         // testimonial
  {
    $this->load->database();
    $this->db->insert('tb_testomonial', $dataArray);
    return true;
  }

  public function  insertBanner($dataArray)         // banner
  {
    $this->load->database();
    $this->db->insert('tb_banner', $dataArray);
    return true;
  }

  public function  insertBlog($dataArray)         // blog
  {
    $this->load->database();
    $this->db->insert('tb_blogs', $dataArray);
    return true;
  }


  public function  insertAward($dataArray)         // award
  {
    $this->load->database();
    $this->db->insert('tb_award', $dataArray);
    return true;
  }


  public function  insertEvent($dataArray)         // event
  {
    $this->load->database();
    $this->db->insert('tb_event', $dataArray);
    return true;
  }

  public function  insertGallery($dataArray)         // gallery
  {
    $this->load->database();
    $this->db->insert('tb_gallery', $dataArray);
    return true;
  }

  public function insertCategory($dataArray)         // category
  {
    $this->load->database();
    $this->db->insert('tb_category', $dataArray);
    return true;
  }


  public function insertProductEnquiry($dataArray)   // product enquiry
  {
    $this->load->database();
    $this->db->insert('tb_product_enquiry', $dataArray);
    return true;
  }

  public function insertCareer($dataArray)           // career
  {
    $this->load->database();
    $this->db->insert('tb_career', $dataArray);
    return true;
  }

  public function insertCareerEnquiry($dataArray)    // career enquiry
  {
    $this->load->database();
    $this->db->insert('tb_career_enquiry', $dataArray);
    return true;
  }

  public function insertCertificate($dataArray)    // career enquiry
  {
    $this->load->database();
    $this->db->insert('tb_certification', $dataArray);
    return true;
  }

  //################## Update ##################################################


  public function updateCareerEnquiry($data, $id) //update product
  {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->update('tb_career_enquiry', $data);
    return true;
  }

  public function updateProductEnquiry($data, $id) //update product
  {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->update('tb_product_enquiry', $data);
    return true;
  }


  public function updateContact($data, $id) //update product
  {
    $this->load->database();
    $this->db->where('contact_id', $id);
    $this->db->update('tb_contactus', $data);
    return true;
  }



  public function updateUser($data, $id) //update product
  {
    $this->load->database();
    $this->db->where('admin_id', $id);
    $this->db->update('tb_admin', $data);
    return true;
  }

  public function updateProduct($data, $id) //update product
  {
    $this->load->database();
    $this->db->where('product_id', $id);
    $this->db->update('tb_product', $data);
    return true;
  }

  public function updatePublication($data, $id) //update publication
  {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->update('tb_publication', $data);
    return true;
  }

  public function updateCertificate($data, $id) //update publication
  {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->update('tb_certification', $data);
    return true;
  }

  public function updateTestimonial($data, $id) //update testimonial
  {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->update('tb_testomonial', $data);
    return true;
  }
  public function updateBanner($data, $id) //update banner
  {
    $this->load->database();
    $this->db->where('banner_id', $id);
    $this->db->update('tb_banner', $data);
    return true;
  }

  public function updateBlog($data, $id) //update blog
  {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->update('tb_blogs', $data);
    return true;
  }

  public function updateAward($data, $id) //update award
  {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->update('tb_award', $data);
    return true;
  }

  public function updateEvent($data, $id) //update event
  {
    $this->load->database();
    $this->db->where('id', $id);
    $this->db->update('tb_event', $data);
    return true;
  }

  public function updateGallery($data, $id) //update gallery
  {
    $this->load->database();
    $this->db->where('gallery_imgid', $id);
    $this->db->update('tb_gallery', $data);
    return true;
  }


  public function updateCategory($data, $id) //update category
  {
    $this->load->database();
    $this->db->where('category_id', $id);
    $this->db->update('tb_category', $data);
    return true;
  }


  // public function updateCareerEnquiry($data, $id) //update career enquiry
  // {
  //   $this->load->database();
  //   $this->db->where('id', $id);
  //   $this->db->update('tb_career_enquiry', $data);
  //   return true;
  // }

  public function updateCareer($data, $id) //update career
  {
    $this->load->database();
    $this->db->where('career_id', $id);
    $this->db->update('tb_career', $data);
    return true;
  }

  //################## Delete ##################################################

  public function deleteContactEnquiry($id) // delete career enquiry
  {
    $this->db->where('contact_id', $id);
    $this->db->delete('tb_contactus');
    return true;
  }

  public function deleteCareerEnquiry($id) // delete career enquiry
  {
    $this->db->where('id', $id);
    $this->db->delete('tb_career_enquiry');
    return true;
  }

  public function deleteProductEnquiry($id) // delete product enquiry
  {
    $this->db->where('id', $id);
    $this->db->delete('tb_product_enquiry');
    return true;
  }

  //################## Dispaly ##################################################

  public function getAlluser()
  {
    $query = $this->db->query("SELECT *  FROM `tb_admin` order by admin_id DESC");
    return $query->result_array();
  }

  public function getAllproduct()
  {
    $query = $this->db->query("SELECT *  FROM `tb_product` order by product_id DESC");
    return $query->result_array();
  }

  public function getAllproductEnquiery()
  {
    $query = $this->db->query("SELECT *  FROM `tb_product_enquiry` order by id DESC");
    return $query->result_array();
  }

  public function getAllTestimonial()
  {
    $query = $this->db->query("SELECT *  FROM `tb_testomonial` order by id DESC");
    return $query->result_array();
  }

  public function getAllAward()
  {
    $query = $this->db->query("SELECT *  FROM `tb_award` order by id DESC");
    return $query->result_array();
  }

  public function getAllBlog()
  {
    $query = $this->db->query("SELECT *  FROM `tb_blogs` order by id DESC");
    return $query->result_array();
  }

  public function getAllCareerEnquiry()
  {
    $query = $this->db->query("SELECT *  FROM `tb_career_enquiry` order by id DESC");
    return $query->result_array();
  }

  public function getAllBanner()
  {
    $query = $this->db->query("SELECT *  FROM `tb_banner` order by banner_id DESC");
    return $query->result_array();
  }

  public function getAllEvent()
  {
    $query = $this->db->query("SELECT *  FROM `tb_event` order by id DESC");
    return $query->result_array();
  }

  public function getAllCategory()
  {
    $query = $this->db->query("SELECT *  FROM `tb_category` order by category_id DESC");
    return $query->result_array();
  }

  public function getAllCategoryActive()
  {
    $query = $this->db->query("SELECT *  FROM `tb_category` WHERE status='Active' order by category_id DESC");
    return $query->result_array();
  }

  public function getAllCertificate()
  {
    $query = $this->db->query("SELECT *  FROM `tb_certification` order by id DESC");
    return $query->result_array();
  }

  public function getAllGallery()
  {
    $query = $this->db->query("SELECT *  FROM `tb_gallery` order by gallery_imgid DESC");
    return $query->result_array();
  }

  public function getAllPublication()
  {
    $query = $this->db->query("SELECT *  FROM `tb_publication` order by id DESC");
    return $query->result_array();
  }


  public function  getAllContactEnquiry()
  {
    $query = $this->db->query("SELECT *  FROM `tb_contactus` order by contact_id DESC");
    return $query->result_array();
  }
  public function getAllCareer()
  {
    $query = $this->db->query("SELECT *  FROM `tb_career` order by career_id DESC");
    return $query->result_array();
  }


  //################## Total (Count) ##################################################
  public function getTotalContactEnquiry()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_contactus");
    return $query->result_array();
  }


  public function getTotalProduct()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_product");
    return $query->result_array();
  }

  public function getTotalCategory()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_category");
    return $query->result_array();
  }

  public function getTotalAward()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_award");
    return $query->result_array();
  }

  public function getTotalBlog()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_blogs");
    return $query->result_array();
  }
  public function getTotalEvent()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_event");
    return $query->result_array();
  }

  public function getTotalCareer()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_career");
    return $query->result_array();
  }

  public function getTotalBanner()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_banner");
    return $query->result_array();
  }

  public function  getTotalProductEnquiry()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_product_enquiry");
    return $query->result_array();
  }
  public function  getTotalCareerEnquiry()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_career_enquiry");
    return $query->result_array();
  }
  public function getTotalTestimonial()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_testomonial");
    return $query->result_array();
  }

  public function getTotalGallery()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_gallery");
    return $query->result_array();
  }

  public function getTotalCertification()
  {
    $query = $this->db->query("SELECT COUNT(*) as count FROM tb_certification");
    return $query->result_array();
  }


  public function join_product_category()
  {


    $query = $this->db->query("SELECT p.product_id,p.product_name,p.product_desc,p.product_desc_marathi,p.product_img,p.product_name_marathi,p.quantity_of_use,p.quantity_of_use_english,p.packing,p.packing_english,p.product_pdf,p.product_status,
                                      c.category_id,c.name as cat_name
                               FROM tb_product p
                               LEFT JOIN tb_category c
                               ON p.category_id = c.category_id");
    return $query->result_array();
  }

}
