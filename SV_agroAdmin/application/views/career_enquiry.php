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
                  <h3 class="card-title"><b>Career Enquiry List</b></h3>
                  <center>
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalAdd" data-whatever="@getbootstrap" style="float:right"><i class="fa fa-plus"></i> ADD </button> -->
              </div>


              <!-- /.card-header -->
              <div class="card-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SR.NO</th>
                      <th>CANDIDATE NAME</th>
                      <th>EMAIL</th>
                      <th>MOBILE</th>
                      <th>RESUME FILE</th>
                      <th>DATE</th>
                      <th>STATUS</th>
                      <!-- <th>POSITION</th> -->
                      <!-- <th>MESSAGE</th> -->
                      <th>ACTION</th>
                    </tr>
                  </thead>
           
                    <?php

                    $i = 1;

                    foreach ($career_enquiry as $row) {
                      $id = $row['id'];
                    ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['candidate_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobile_no']; ?></td>
                        <td><a href="<?php echo base_url() . 'upload/' . str_replace("upload/", "", $row['resume_file']); ?>" alt="resume_file" width="50" height="50">view_pdf</a></td>
                       
                       <td><?php
                            $this->load->helper('date');
                            echo date("d-m-Y", strtotime($row['created_on'])); // format the timestamp as a string in the desired format
                            ?></td>
                             <td> <?php $status = $row['status'];
                                if ($status == 'Completed') { ?>
                              <a href="<?php echo base_url().'AdminData/career_enquiry_status/'.$id; ?>" class="text-success btn-sm"><?php echo $status; ?></a>
                            <?php } else { ?>
                              <a href="<?php echo base_url().'AdminData/career_enquiry_status/'.$id; ?>" class="text-danger btn-sm"><?php echo $status; ?></a>
                            <?php } ?>
                          </td>
                        <!-- <td><?php echo $row['position']; ?></td> -->
                        <!-- <td><?php echo $row['message']; ?></td> -->

                          <td>
                          <button type="button" class="btn btn-warning btn-sm" title="Update" data-toggle="modal" data-target="#exampleModal2_<?php echo $id; ?>" data-whatever="@getbootstrap">View</button>
                            <a href="<?php echo base_url().'AdminData/delete_career_enquiry/'.$id?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a></td>
                      </tr>

                      <div class="modal fade" id="exampleModal2_<?php echo $id;
                                                              ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog  modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Message</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                          <div class="row">
                                <div class="col-md-4">
                                   <h5 class="text-success">Candidate Name:
                                   </h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $row['candidate_name']; ?></h5>
                                </div>
                              </div>
                             
                              <div class="row">
                                <div class="col-md-4">
                                   <h5 class="text-success">Email:
                                   </h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $row['email']; ?></h5>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                   <h5 class="text-success">Mobile :
                                   </h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $row['mobile_no']; ?></h5>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                   <h5 class="text-success">Position :
                                   </h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $row['position']; ?></h5>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                   <h5 class="text-success">Message :
                                   </h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $row['message']; ?></h5>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                   <h5 class="text-success">Resume File :
                                   </h5>
                                </div>
                                <div class="col-md-8">
                                <a href="<?php echo base_url() . 'upload/' . str_replace("upload/", "", $row['resume_file']); ?>" alt="resume_file" width="50" height="50">Download</a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                   </div>

                      <div class="modal fade" id="exampleModal_<?php echo $id;
                                                                ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">UPDATE CAREER ENQUIRY</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="POST" action="<?php echo base_url() . 'AdminData/update_career_enquiry';
                                                          ?>" class="form" id="form" enctype="multipart/form-data">

                                <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">

                                <div class="form-group">
                                  <label> CANDIDATE NAME</label>
                                  <input type="text" class="form-control" id="candidate_name" name="candidate_name" value="<?php echo $row['candidate_name'];  ?>" placeholder="Enter Name" required>
                                </div>
                                <div class="form-group">
                                  <label> EMAIL</label>
                                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'];  ?>" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                  <label> MOBILE</label>
                                  <input type="text" class="form-control" id="mobile_no" name="mobile_no" value="<?php echo $row['mobile_no'];  ?>" pattern="[789][0-9]{9}" placeholder="Enter Mobile" required>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <img src="<?php echo 'ci3/upload/' . trim($row['resume_file'], "upload/"); ?>" alt="" width="200" height="200"><br>
                                      <label>RESUME FILE</label>
                                      <br>
                                      <input type="file" name="resume_file" id="resume_file" value="<?php echo $row['resume_file']; ?>" ><p class="text-primary">Note: PDF size should be 500 Kb</p>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label> POSITION</label>
                                      <input type="text" class="form-control" id="position" name="position" value="<?php echo $row['position'];  ?>" placeholder="Enter Position" required>
                                    </div>
                                  </div>
                                </div>



                                <div>
                                  <label>MESSAGE</label>
                                  <textarea class="ckeditor" name="message" id="editor" value="" placeholder="Enter Message" required><?php echo $row['message'];  ?></textarea>
                                </div>

                                <br>


                            </div>

                            <br>
                            <center><button type="submit" class="btn btn-danger">UPDATE</button></center><br>
                            </form>
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
            <h5 class="modal-title" id="exampleModalLabel">ADD CAREER ENQUIRY</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo base_url() . 'AdminData/add_career_enquiry';
                                        ?>" class="form" id="form" enctype="multipart/form-data">

              <!-- <div class="form-group">
                <label for="exampleSelectRounded0">CATEGORY</label>
                <select class="custom-select rounded-0" name="c_id" id="SELECT_MAIN_CATEGORY" required>
                  <option value="">Select Catagory</option>
                  <?php
                  //  foreach($category as $row)
                  // { 
                  //   echo '<option value="'.$row['c_id'].'">'.$row['title'].'</option>';
                  //  }
                  ?>
                </select>
              </div> -->
              <!-- 
              <div class="form-group">

                <label for="exampleSelectRounded0">SUB_CATEGORY</label>

                <select class="custom-select rounded-0" name="subc_id" id="get_subcategory_output" required>
                  <option value="">Select SubCatagory</option>;

                </select>

              </div> -->

              <div class="form-group">
                <label> CANDIDATE NAME</label>
                <input type="text" class="form-control" id="candidate_name" name="candidate_name" placeholder="Enter Name" required>
              </div>
              <div class="form-group">
                <label> EMAIL</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
              </div>
              <div class="form-group">
                <label> MOBILE</label>
                <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Mobile"   required>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>RESUME FILE</label>
                    <br>
                    <input type="file" name="resume_file" id="resume_file" required><p class="text-primary">Note: PDF size should be 500 Kb</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label> POSITION</label>
                    <input type="text" class="form-control" id="position" name="position" placeholder="Enter Position" required>
                  </div>
                </div>
              </div>



              <div>
                <label>MESSAGE</label>
                <textarea class="ckeditor" name="message" id="editor" placeholder="Enter Message" required></textarea>
              </div>

              <br>


          </div>

          <br>
          <center><button type="submit" class="btn btn-danger">ADD</button></center><br>
          </form>
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