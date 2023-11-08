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
                  <h3 class="card-title"><b>Gallery Image List</b></h3>
                  <center>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalAdd" data-whatever="@getbootstrap" style="float:right"><i class="fa fa-plus"></i> ADD </button>

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
                        <th>GALLERY IMAGE NAME</th>
                        <th>IMAGE</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </thead>

                    <?php
                    $i = 1;
                    foreach ($gallery as $row) {
                      $id = $row['gallery_imgid'];
                    ?>
                      <tr>

                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['gallery_imgname']; ?></td>
                        <td><img src="<?php echo base_url() . 'upload/' . str_replace("upload/", "", $row['gallery_img']); ?>" alt="gallery_img" width="50" height="50"></td>
                        <td> <?php $status = $row['gallery_status'];
                              if ($status == 'Active') { ?>
                            <a href="<?php echo base_url() . 'AdminData/gallery_status/' . $id; ?>" class="btn btn-success btn-sm"><?php echo $status; ?></a>
                          <?php } else { ?>
                            <a href="<?php echo base_url() . 'AdminData/gallery_status/' . $id; ?>" class="btn btn-danger btn-sm"><?php echo $status; ?></a>
                          <?php } ?>
                        </td>

                        <td>
                          <button type="button" class="btn btn-info btn-sm" title="Update" data-toggle="modal" data-target="#exampleModal_<?php echo $id; ?>" data-whatever="@getbootstrap"><i class="fa fa-edit"></i></button>
                      </tr>


                      <div class="modal fade" id="exampleModal_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog  modal-md">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">UPDATE GALLERY IMAGE</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="POST" action="<?php echo base_url() . 'AdminData/update_gallery'; ?>" class="form" id="form" enctype="multipart/form-data">

                                <input type="hidden" name="gallery_imgid" id="gallery_imgid" value="<?php echo $row['gallery_imgid'] ?>">

                                <div class="form-group">
                                  <label>GALLERY IMAGE NAME</label>
                                  <input type="text" class="form-control" id="gallery_imgname" name="gallery_imgname" value="<?php echo $row['gallery_imgname']; ?>" placeholder="Enter image name" required>
                                </div>

                                <div class="form-group">
                                <img src="<?php echo base_url() . 'upload/' . str_replace("upload/", "", $row['gallery_img']); ?>" alt="gallery_img" width="100" height="100"><br>
                                  <label>GALLERY IMAGE</label>
                                  <br>
                                  <input type="file" name="gallery_img" accept=".jpg,.png,.JPG,.PNG,.jpeg,.JPEG" value="<?php echo $row['gallery_img']; ?>"><p class="text-primary">Note: Image size should be 500 Kb</p>
                                </div>

                                <center><button type="submit" class="btn btn-danger">UPDATE</button></center><br>
                              </form>
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

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>

  <div class="modal fade" id="exampleModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ADD GALLARY IMAGE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url() . 'AdminData/add_gallery'; ?>" class="form" id="form" enctype="multipart/form-data">

            <div class="form-group">
              <label>GALLERY IMAGE NAME</label>
              <input type="text" class="form-control" id="gallery_imgname" name="gallery_imgname" placeholder="Enter Image Name" required>
            </div>

            <div class="form-group">
              <label>GALLERY IMAGE</label>


              <br>
              <input type="file" name="gallery_img" accept=".jpg,.png,.JPG,.PNG,.jpeg,.JPEG" required><p class="text-primary">Note: Image size should be 500 Kb</p>
            </div>

            <center><button type="submit" class="btn btn-danger">ADD</button></center><br>
          </form>
        </div>
      </div>
    </div>
  </div>


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
  <!-- // $('#my-field').bind('keypress', testInput); -->




</body>

</html>