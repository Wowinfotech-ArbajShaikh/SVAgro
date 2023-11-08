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
                  <h3 class="card-title"><b>Gallery Category List</h3></b>
                  <center>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalAdd" data-whatever="@getbootstrap" style="float:right"><i class="fa fa-plus"></i> ADD </button>
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
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SR.NO</th>
                      <th>TITLE</th>
                      <th>STATUS</th>
                      <th>ACTION</th>
                  </thead>

                  <?php
                  $i = 1;
                  foreach ($fetch as $row) {
                    $id = $row['id'];
                  ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['title']; ?></td>

                      <td>
                        <?php $status = $row['status'];
                        if ($status == 'Active') { ?>
                          <a href="<?php echo base_url() . 'GallaryCategory/status_update/' . $id; ?>" class="btn btn-success"><?php echo $status; ?></a>
                        <?php } else { ?>
                          <a href="<?php echo base_url() . 'GallaryCategory/status_update/' . $id; ?>" class="btn btn-danger"><?php echo $status; ?></a>
                        <?php } ?>
                      </td>

                      <td>
                        <!----for update modal-->
                        <button type="button" class="btn btn-danger" title="Update" data-toggle="modal" data-target="#exampleModal_<?php echo $id; ?>" data-whatever="@getbootstrap"><i class="fa fa-edit"></i></button>
                    </tr>


                    <div class="modal fade" id="exampleModal_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog  modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Gallery Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <form method="POST" action="<?php echo base_url() . 'GallaryCategory/gallerycategory_update'; ?>" class="form" id="form" name="form">
                              <input type="hidden" name="id" name="fname" value="<?php echo $row['id']; ?>">

                              <div class="form-group">
                                <label>TITLE</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Image Title" value="<?php echo $row['title']; ?>" required>
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

    <div class="modal fade" id="exampleModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Gallery Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?php echo base_url() . 'GallaryCategory/add_gallerycategory'; ?>" class="form" id="form">
              <div class="form-group">
                <label>GALLERY CATEGORY TITLE</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Category Title" required>
              </div>
          </div>
          <center><button type="submit" class="btn btn-secondary">ADD</button></center><br>
          </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#success-alert').fadeIn().delay(1000).fadeOut();
        $('#danger-alert').fadeIn().delay(1000).fadeOut();
      });
    </script>
</body>

</html>