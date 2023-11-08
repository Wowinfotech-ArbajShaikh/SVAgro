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
                  <h3 class="card-title"><b>Product Enquiry List</b></h3>
                  <center>

              </div>

              <?php if ($this->session->flashdata('success')) { ?>
                <div class="bg-success" style="width: 100%;">
                  <center><b>
                      <p><?= $this->session->flashdata('success'); ?></p>
                    </b></center>
                </div>
              <?php } ?>
              <?php if ($this->session->flashdata('error')) { ?>
                <div class="bg-danger" style="width: 100%;">
                  <center>
                    <p><?= $this->session->flashdata('error'); ?></p>
                  </center>
                </div>
              <?php } ?>

              <!-- /.card-header -->
              <div class="card-body">
               
              <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>SR.NO</th>
                          <th>CUSTOMER NAME</th>
                          <th>MOBILE</th>
                          <th>PRODUCT NAME</th>
                          <th>DATE</th>
                          <th>STATUS</th>
                          <th>ACTION</th>
                        </tr>
                      </thead>

                      <?php
                      $i = 1;

                      foreach ($product_enquiry as $row) {
                        $id = $row['id'];
                      ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $row['customer_name']; ?></td>
                          <td><?php echo $row['mobile_no']; ?></td>
                          <td><?php echo $row['product_name']; ?></td>
                          <td><?php
                            $this->load->helper('date');
                            echo date("d-m-Y", strtotime($row['createdOn'])); // format the timestamp as a string in the desired format
                            ?></td>
                          <td> <?php $status = $row['status'];
                                if ($status == 'Completed') { ?>
                              <a href="<?php echo base_url().'AdminData/product_enquiry_status/'.$id; ?>" class="text-success btn-sm"><?php echo $status; ?></a>
                            <?php } else { ?>
                              <a href="<?php echo base_url().'AdminData/product_enquiry_status/'.$id; ?>" class="text-danger btn-sm"><?php echo $status; ?></a>
                            <?php } ?>
                          </td>
                          <td>
                          <button type="button" class="btn btn-warning btn-sm" title="Update" data-toggle="modal" data-target="#exampleModal2_<?php echo $id; ?>" data-whatever="@getbootstrap">View</button>
  
                          <a href="<?php echo base_url().'AdminData/delete_product_enquiry/'.$id?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash-o"></i></a></td>

                        </tr>


                   <div class="modal fade" id="exampleModal2_<?php echo $id;
                                                              ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog  modal-md">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Product Enquiry Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <div class="row">
                                <div class="col-md-4">
                                   <h5 class="text-success">Customer Name:
                                   </h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $row['customer_name']; ?></h5>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4">
                                   <h5 class="text-success">Mobile:
                                   </h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $row['mobile_no']; ?></h5>
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
                                   <h5 class="text-success">Product Name :
                                   </h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $row['product_name']; ?></h5>
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
                          </div>
                        </div>
                      </div>
                   </div>

                      <?php $i++;
                      } ?>
                    </table>
                  </div>
               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>



    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->




    <!-- ./wrapper -->
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