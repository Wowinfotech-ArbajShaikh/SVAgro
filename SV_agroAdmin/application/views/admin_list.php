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
                                    <h3 class="card-title"><b>Admin List</b></h3>
                                    <center>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalAdd" data-whatever="@getbootstrap" style="float:right"><i class="fa fa-plus"></i> ADD </button>

                            </div>
                            <?php if ($this->session->flashdata('success')) { ?><!---stataus flahdata-->
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
                                                <th>NAME</th>
                                                <th>EMAIL</th>
                                                <th>PASSWORD</th>
                                                <th>MOBILE</th>
                                                <th>IMAGE</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                        </thead>

                                        <?php
                                        $i = 1;
                                        foreach ($user as $row) {
                                            $id = $row['admin_id'];
                                        ?>
                                            <tr>

                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['admin_name']; ?></td>
                                                <td><?php echo $row['admin_email']; ?></td>
                                                <td><?php echo $row['admin_pwd']; ?></td>
                                                <td><?php echo $row['admin_mob']; ?></td>
                                                <td> <img src="<?php echo base_url() . 'upload/' . str_replace("upload/", "", $row['admin_img']); ?>" alt="admin_img" sizes="" width="50" height="50"> </td>



                                                <td> <?php $status = $row['admin_status'];
                                                        if ($status == 'Active') { ?>
                                                        <a href="<?php echo base_url() . 'AdminData/user_status/' . $id; ?>" class="btn btn-success"><?php echo $status; ?></a>
                                                    <?php } else { ?>
                                                        <a href="<?php echo base_url() . 'AdminData/user_status/' . $id; ?>" class="btn btn-danger"><?php echo $status; ?></a>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-secondary" title="Update" data-toggle="modal" data-target="#exampleModal_<?php echo $id; ?>" data-whatever="@getbootstrap"><i class="fa fa-edit"></i></button>
                                                </td>
                                                </td>
                                            </tr>


                                            <div class="modal fade" id="exampleModal_<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog  modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">UPDATE USER</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form method="POST" action="<?php echo base_url() . 'AdminData/update_user';
                                                                                        ?>" class="form" id="form" enctype="multipart/form-data">

                                                                <input type="hidden" name="admin_id" value="<?php echo $row['admin_id'];
                                                                                                            ?>" id="">

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label> NAME</label>
                                                                            <input type="text" class="form-control" id="admin_name" name="admin_name" value="<?php echo $row['admin_name'];  ?>" placeholder="Enter name" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> EMAIL</label>
                                                                            <input type="text" class="form-control" id="admin_email" name="admin_email" value="<?php echo $row['admin_email'];  ?>" placeholder="Enter email" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>IMAGE</label>
                                                                            <br>
                                                                            <input type="file" name="admin_img" id="admin_img" value="<?php echo $row['admin_img'];  ?>"><p class="text-primary">Note: Image size should be 500 Kb</p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label> PASSWORD</label>
                                                                            <input type="text" class="form-control" id="admin_pwd" name="admin_pwd" value="<?php echo $row['admin_pwd'];  ?>" placeholder="Enter password" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> MOBILE</label>
                                                                            <input name="admin_mob" class="" value="<?php echo $row['admin_mob'];  ?>" type="text" placeholder="Enter Mobile Number" maxlength="10" pattern="[789][0-9]{9}"   onkeyup="NumbersOnly(this)" required>

                                                                        </div>
                                                                    </div>
                                                                </div>





                                                                <br>


                                                        </div>

                                                        <br>
                                                        <center><button type="submit" class="btn btn-danger">UPDATE USER</button></center><br>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>

                                        <?php $i++;
                                        } ?>
                                    </table>
                                </div>
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


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <div class="modal fade" id="exampleModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="<?php echo base_url() . 'AdminData/add_user';
                                                ?>" class="form" id="form" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> NAME</label>
                                    <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Enter Name" required>
                                </div>
                                <div class="form-group">
                                    <label> EMAIL</label>
                                    <input type="email" class="form-control" id="admin_email" name="admin_email" placeholder="Enter Title" required>
                                </div>
                                <div class="form-group">
                                    <label>IMAGE</label>
                                    <br>
                                    <input type="file" name="admin_img" id="admin_img" required><p class="text-primary">Note: Image size should be 500 Kb</p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> PASSWORD</label>
                                    <input type="text" class="form-control" id="admin_pwd" name="admin_pwd" placeholder="Enter Password" required>
                                </div>
                                <div class="form-group">
                                    <label> MOBILE</label>
                                    <input name="admin_mob" class="" value="" type="text" placeholder="Enter Mobile Number" maxlength="10" pattern="[789][0-9]{9}"   onkeyup="NumbersOnly(this)" required>

                                </div>
                            </div>

                        </div>





                        <br>


                </div>

                <br>
                <center><button type="submit" class="btn btn-danger">ADD USER</button></center><br>
                </form>
            </div>
        </div>
    </div>
    </div>





    <!-- jQuery -->
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
    <script type="text/javascript">
		function LettersOnly(input) {
           var regex = /[^a-zA-Z ]/gi;
           input.value = input.value.replace(regex, "");
       }
       function NumbersOnly(input) {
           var regex1 = /[^0-9]/gi;
           input.value = input.value.replace(regex1, "");
       }
	</script>

</body>

</html>