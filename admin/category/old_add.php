<?php
session_start();
if (isset($_POST['name'])) {
    echo $_POST['name'];
    $name = $_POST['name'];
    require_once './../../dals/CategoryDal.php';
    $categoryDal = new CategoryDal();
    $addedSuccess = $categoryDal->add(['name' => $name]);
    //flash session
    if ($addedSuccess) {
        $_SESSION['notify'] = [
            'message' => 'Add success',
            'error_code' => 0
        ];
    } else {
        $_SESSION['notify'] = [
            'message' => 'Add failed',
            'error_code' => 1
        ];
    }
}
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<?php
include_once './../commons/head.php';
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <?php include_once './../commons/nav.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once './../commons/aside.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <?php
        if (isset($_SESSION['notify'])) {
            ?>

            <div class="alert <?php if ($_SESSION['notify']['error_code'] == 0) {
                echo "alert-success";
            } else {
                echo "alert-danger";
            } ?> alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas <?php if ($_SESSION['notify']['error_code'] == 0) {
                        echo "fa-check";
                    } else {
                        echo "fa-ban";
                    } ?>"></i> Alert!</h5>
                <?php echo $_SESSION['notify']['message']; ?>
            </div>
            <?php
            unset($_SESSION['notify']);
        }
        ?>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="field-name">Name</label>
                                        <input type="name" class="form-control" name="name" id="field-name"
                                               placeholder="Enter Name">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php include_once './../commons/footer.php' ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<?php
include_once './../commons/script.php'
?>
</body>
</html>
