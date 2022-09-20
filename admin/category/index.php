<?php
session_start();
require_once './../../dals/CategoryDal.php';
$categoryDal = new CategoryDal();
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        $id = (int)$_GET['id'] ?? 0;
        if ($id > 0) {
            //xoa
            $categoryDal->delete($id);
        }
    }
}
if (isset($_POST['name'])) {
    if ($_POST['action'] == 'add') {
        $addedSuccess = $categoryDal->add(['name' => $_POST['name']]);
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
    } else if ($_POST['action'] == 'edit') {
        $editSuccess = $categoryDal->update($_POST['id'], ['name' => $_POST['name']]);
        if ($editSuccess) {
            $_SESSION['notify'] = [
                'message' => 'Edit success',
                'error_code' => 0
            ];
        } else {
            $_SESSION['notify'] = [
                'message' => 'Edit failed',
                'error_code' => 1
            ];
        }
    }
}

$page = $_GET['page'] ?? 1;
$list = $categoryDal->listAll($page);
$totalPage = ceil($categoryDal->getCount()->total / 10);
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


        <!-- Main content -->
        <div class="content">


            <div class="container-fluid">

                <div class="col-md-12">
                    <?php require_once 'add.php'; ?>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Bordered Table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($list as $item): ?>
                                    <tr>
                                        <td><?php echo $item->id; ?></td>
                                        <td><?php echo $item->name ?></td>
                                        <td>
                                            <a class="btn btn-danger"
                                               onclick="return confirm('Are you sure you want to delete ?')"
                                               href="?action=delete&id=<?php echo $item->id; ?>&page=<?php echo $page; ?>">Delete</a>
                                            <button class="btn btn-warning"
                                                    onclick="myFunc(<?php echo $item->id ?>,'<?php echo $item->name; ?>')">
                                                Edit
                                            </button>
                                            <script>
                                                function myFunc(id, name) {
                                                    const myFormNode = document.querySelector('.my-form');
                                                    const fieldName = myFormNode.querySelector('input[name="name"]');
                                                    fieldName.value = name;
                                                    myFormNode.querySelector('input[name="id"]').value = id;
                                                    myFormNode.querySelector('input[name="action"]').value = "edit";
                                                    myFormNode.classList.remove('hidden');
                                                }
                                            </script>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <?php for ($i = 0;
                                           $i < $totalPage;
                                           $i++) {
                                    ?>
                                    <li class="page-item <?php if ($page == ($i + 1)) {
                                        echo "active";
                                    } ?>"><a class="page-link"
                                             href="?page=<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a>
                                    </li>

                                    <?php
                                } ?>
                            </ul>
                        </div>
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
