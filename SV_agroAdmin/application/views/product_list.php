<!DOCTYPE html>
<html lang="en">

<?php include('public/header.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="" src="" alt="" height="" width="">
    </div>

    <!-- Navbar -->
    <?php include('public/navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->



    <!-- /.sidebar -->
    <?php include('public/sidebar.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="container-fluid">


        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <center>
                  <h3 class="card-title"><b>Products List</b></h3>
                  <center>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalAdd" data-whatever="@getbootstrap" style="float:right"><i class="fa fa-plus"></i> ADD </button>
              </div>


              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>SR.NO</th>
                        <th>CATEGORY</th>
                        <th>उत्पादनाचे नाव</th>
                        <th>PRODUCT NAME</th>
                        <!-- <th>DESCRIPTION</th> -->
                        <th>IMAGE</th>
                        <!-- <th>DESCOUNT</th>
                      <th>PRICE</th> -->
                        <!-- <th>PRODUCT_DOSES</th> -->
                        <!-- <th>PRECAUTION</th> -->
                        <th>पॅकेजिंग</th>
                        <!-- <th>PDF</th> -->
                        <th>VIEW DETAILS</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>

                    <?php
                    $i = 1;
                    foreach ($product as $row) {
                      $id = $row['product_id'];
                    ?>
                      <tr>
                        <td><?php echo $i;
                            ?></td>

                        <td><?php echo $row['cat_name'];
                            ?></td>


                        <td><?php echo $row['product_name']; ?></td>
                        <td><?php echo $row['product_name_marathi']; ?></td>
                        <!-- <td><?php echo  substr($row['product_desc'], 0, 400);
                                  ?></td> -->
                        <td><img src="<?php echo base_url() . 'upload/' . str_replace("upload/", "", $row['product_img']); ?>" alt="product_img" width="50" height="50"></td>


                        <!-- <td><?php echo $row['product_discount'];
                                  ?></td>
                         <td><?php echo $row['product_price'];
                              ?></td> -->
                        <!-- <td><?php echo $row['product_doses'];
                                  ?></td> -->
                        <!-- <td><?php echo $row['precaution'];
                                  ?></td> -->
                        <td><?php echo $row['packing'];
                            ?></td>
                        <!-- <td><a href="<?php echo base_url() . 'upload/' . str_replace("upload/", "", $row['product_pdf']); ?>" alt="product_pdf" width="50" height="50">view_pdf</a></td> -->
                        <td><button type="button" class="btn btn-warning btn-sm" title="Update" data-toggle="modal" data-target="#exampleModal2_<?php echo $id; ?>" data-whatever="@getbootstrap">View</button></td>
                        <td> <?php $status = $row['product_status'];
                              if ($status == 'Active') { ?>
                            <a href="<?php echo base_url() . 'AdminData/product_status/' . $id; ?>" class="btn btn-success btn-sm"><?php echo $status; ?></a>
                          <?php } else { ?>
                            <a href="<?php echo base_url() . 'AdminData/product_status/' . $id; ?>" class="btn btn-danger btn-sm"><?php echo $status; ?></a>
                          <?php } ?>
                        </td>

                        <td><button type="button" class="btn btn-info btn-sm" title="Update" data-toggle="modal" data-target="#exampleModal_<?php echo $id; ?>" data-whatever="@getbootstrap"><i class="fa fa-edit"></i></button>



                      </tr>



                      <!--  -->
                      <div class="modal fade" id="exampleModal2_<?php echo $id;
                                                                ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                              <!-- <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-4">
                              <label for="">Product Image</label>
                            </div>
                            <div class="col-md-6">
                              <p><?php echo $row['product_name']; ?></p>
                            </div>
                          </div> -->


                              <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">उत्पादनाचे नाव</label>
                                </div>
                                <div class="col-md-7">
                                  <p><?php echo $row['product_name']; ?></p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">Product Name</label>
                                </div>
                                <div class="col-md-7">
                                  <p><?php echo $row['product_name_marathi']; ?></p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">Product Category</label>
                                </div>
                                <div class="col-md-7">
                                  <p><?php echo $row['cat_name']; ?></p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">उत्पादन वर्णन</label>
                                </div>
                                <div class="col-md-7">
                                  <p><?php echo $row['product_desc']; ?></p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">Product Description</label>
                                </div>
                                <div class="col-md-7">
                                  <p><?php echo $row['product_desc_marathi']; ?></p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">डोस</label>
                                </div>
                                <div class="col-md-7">
                                  <p>₹ <?php echo $row['quantity_of_use']; ?></p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">Dose</label>
                                </div>
                                <div class="col-md-7">
                                  <p><?php echo $row['quantity_of_use_english']; ?></p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">Product Packing</label>
                                </div>
                                <div class="col-md-7">
                                  <p><?php echo $row['packing']; ?></p>
                                </div>
                              </div>
                              <hr>
                              <!-- <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">Product Precaution</label>
                                </div>
                                <div class="col-md-7">
                                  <p><?php echo $row['precaution']; ?></p>
                                </div>
                              </div>
                              <hr> -->
                              <!-- <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">Product Doses</label>
                                </div>
                                <div class="col-md-7">
                                  <p><?php echo $row['product_doses']; ?></p>
                                </div>
                              </div>

                              <hr> -->
                              <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">Product Image</label>
                                </div>
                                <div class="col-md-7">
                                  <img src="<?php echo base_url() . 'upload/' . str_replace("upload/", "", $row['product_img']); ?>" width="100" height="200" alt="">

                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-4">
                                  <label class="text-success">Product pdf</label>
                                </div>
                                <div class="col-md-7">
                                  <a href="<?php echo base_url() . 'upload/' . str_replace("upload/", "", $row['product_pdf']); ?>" alt="product_pdf" width="50" height="50">Download(pdf)</a>

                                </div>
                              </div>



                            </div>


                          </div>
                        </div>
                      </div>
                      <!--  -->

                      <div class="modal fade" id="exampleModal_<?php echo $id;
                                                                ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><b>UPDATE PRODUCT</b></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="POST" action="<?php echo base_url() . 'AdminData/update_product';
                                                          ?>" class="form" id="form" enctype="multipart/form-data">

                                <input type="hidden" name="product_id" id="product_id" value="<?php echo $row['product_id']; ?>">
                                <!-- <input type="hidden" name="category_id" id="category_id" value="<?php echo $row['category_id']; ?>"> -->


                                <div class="form-group">
                                  <label for="exampleSelectRounded0">CATEGORY</label>
                                  <select class="form-control" id="category_id" name="category_id">
                                    <option value="">Select Category</option>
                                    <?php

                                    // print_r($category);
                                    foreach ($categoryData as $val) { ?>

                                      <option value="<?php echo $val['category_id'] ?>" <?php if ($row['category_id'] == $val['category_id']) {
                                                                                          echo 'selected="selected"';
                                                                                        } ?>><?php echo $val['name']; ?></option>

                                    <?php  }
                                    ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label> उत्पादनाचे नाव</label>
                                  <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>" placeholder="Enter product name" required>
                                </div>
                                <div class="form-group">
                                  <label> PRODUCT NAME</label>
                                  <input type="text" class="form-control" id="product_name_marathi" name="product_name_marathi" value="<?php echo $row['product_name_marathi']; ?>" placeholder="Enter product name" required>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <img src="<?php echo base_url() . 'upload/' . str_replace("upload/", "", $row['product_img']); ?>" width="100" height="100" alt=""><br>
                                      <label>PRODUCT IMAGE</label>
                                      <br>
                                      <input type="file" name="product_img" id="product_img" accept=".jpg,.png,.JPG,.PNG,.jpeg,.JPEG" value="<?php echo $row['product_img']; ?>">
                                      <p class="text-primary">Note: Image size should be 500 Kb</p>
                                    </div>
                                  </div>
                                  <!-- <div class="col-md-6">
                                  <div class="form-group">
                                    <label>PRODUCT PDF</label>
                                    <br>
                                    <input type="file" name="product_pdf" id="product_pdf" value="<?php echo $row['product_pdf']; ?>"><p class="text-primary">Note: PDF size should be 500 Kb</p>
                                  </div>

                                </div> -->


                                </div>

                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>डोस</label>
                                      <input type="text" class="form-control" id="quantity_of_use" name="quantity_of_use" value="<?php echo $row['quantity_of_use']; ?>" placeholder="Enter Quantity Of Use" required>
                                    </div>

                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>DOSE</label>
                                      <input type="text" class="form-control" id="quantity_of_use_english" name="quantity_of_use_english" value="<?php echo $row['quantity_of_use_english']; ?>" placeholder="Enter quantity of use english" required>
                                    </div>

                                  </div>
                                </div>
                                  <div class="row">
                                    <div class="col-md-6">

                                      <div class="form-group">
                                        <label>पॅकेजिंग</label>
                                        <input type="text" class="form-control" id="title" name="packing" value="<?php echo $row['packing']; ?>" placeholder="Enter packing" required>
                                      </div>
                                    </div>

                                    <div class="col-md-6">

                                      <div class="form-group">
                                        <label>PACKAGING</label>
                                        <input type="text" class="form-control" id="title" name="packing_english" value="<?php echo $row['packing_english']; ?>" placeholder="Enter packing" required>
                                      </div>
                                    </div>
                                  </div>
                                
                                
                                <br>
                                <div class="form-group">
                                  <label>उत्पादन वर्णन</label>
                                  <textarea class="ckeditor" name="product_desc" id="editor" value="" placeholder="Enter description" required><?php echo $row['product_desc']; ?></textarea>
                                </div>
                                <div class="form-group">
                                  <label>PRODUCT DESCRIPTION</label>
                                  <textarea class="ckeditor" name="product_desc_marathi" id="editor" value="" placeholder="Enter description" required><?php echo $row['product_desc_marathi']; ?></textarea>
                                </div>
                                <br>
                               

                                <center><button type="submit" class="btn btn-danger">UPDATE</button></center><br>
                              </form>


                            </div>


                          </div>
                        </div>
                      </div>
                    <?php $i++;
                    }
                    ?>
                  </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

    <!-- /.content-wrapper -->

    <div class="modal fade" id="exampleModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD PRODUCT</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo base_url() . 'AdminData/add_product';
                                        ?>" class="form" id="form" enctype="multipart/form-data">





              <div class="form-group">
                <label for="exampleSelectRounded0">CATEGORY</label>
                <select class="custom-select rounded-0" name="category_id" id="SELECT_MAIN_CATEGORY" required>
                  <option value="">Select Catagory</option>
                  <?php

                  // print_r($category);
                  foreach ($categoryData as $row) {
                    //print_r($category);

                    echo '<option value="' . $row['category_id'] . '">' . $row['name'] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div class="form-group">
                <label>उत्पादनाचे नाव</label>
                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" required>
              </div>

              <div class="form-group">
                <label> PRODUCT NAME</label>
                <input type="text" class="form-control" id="product_name_marathi" name="product_name_marathi" placeholder="Enter product name" required>
              </div>

              <!--
              <div class="form-group">

                <label for="exampleSelectRounded0">SUB_CATEGORY</label>

                <select class="custom-select rounded-0" name="subc_id" id="get_subcategory_output" required>
                  <option value="">Select SubCatagory</option>;

                </select>

              </div> -->

              <!-- <div class="form-group">
                <label> TITLE</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Sub Catagory Title" required>
              </div> -->



              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>PRODUCT IMAGE</label>
                    <br>
                    <input type="file" name="product_img" id="product_img" accept=".jpg,.png,.JPG,.PNG,.jpeg,.JPEG" required>
                    <p class="text-primary">Note: Image size should be 500 Kb</p>
                  </div>
                </div>
                <!-- <div class="col-md-6">
                  <div class="form-group">
                    <label>PRODUCT PDF</label>
                    <br>
                    <input type="file" name="product_pdf" id="product_pdf" required><p class="text-primary">Note: PDF size should be 800 Kb</p>
                  </div>

                </div> -->


              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>डोस</label>
                    <input type="text" class="form-control" id="quantity_of_use" name="quantity_of_use" placeholder="Enter quantity of use " required>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>DOSE</label>
                    <input type="text" class="form-control" id="quantity_of_use_english" name="quantity_of_use_english" placeholder="Enter quantity of use english" required>
                  </div>

                </div>
                </div>
                <div class="row">
                <div class="col-md-6">

                  <div class="form-group">
                    <label>पॅकेजिंग</label>
                    <input type="text" class="form-control" id="title" name="packing" placeholder="Enter packing" required>
                  </div>
                </div>

                <div class="col-md-6">

                  <div class="form-group">
                    <label>PACKAGING</label>
                    <input type="text" class="form-control" id="packing_english" name="packing_english" placeholder="Enter packing in English" required>
                  </div>
                </div>
                </div>

              <br>
              <div>
                <label>उत्पादन वर्णन</label>
                <textarea class="ckeditor" name="product_desc" id="editor" placeholder="Enter description" required></textarea>
              </div>
              <br>
              <div>
                <label>PRODUCT DESCRIPTION</label>
                <textarea class="ckeditor" name="product_desc_marathi" id="editor" placeholder="Enter description" required></textarea>
              </div>
              <br>
             

              <center><button type="submit" class="btn btn-danger">ADD</button></center><br>
            </form>


          </div>

          <br>

        </div>
      </div>
    </div>
  </div>


  <!-- Control Sidebar -->
  <?php include('public/script.php'); ?>
  <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables-buttons/js/dataTables.buttons.min.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'; ?>"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-12:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script>
    function testInput(event) {
      var value = String.fromCharCode(event.which);
      var pattern = new RegExp(/[a-zåäö ]/i);
      return pattern.test(value);
    }
    $('#my-field').bind('keypress', testInput);
  </script>
  <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/ckeditor/ckeditor.js"></script>
  <script>
    function DemoCtrl() {
      this.foo = 'foo';
      CKEDITOR.editorConfig = function(config) {
        config.extraPlugins = 'confighelper';
      };
      CKEDITOR.replace('editor1');
    }
    angular
      .module('gaigDemo', ['gaigUiBootstrap'])
      .controller('DemoCtrl', DemoCtrl);
  </script>
  <script>
    var timeout = 3000; // in miliseconds (3*1000)

    $('.bg-success').delay(timeout).fadeOut(300);
    $('.bg-danger').delay(timeout).fadeOut(300);
  </script>

</body>

</html>