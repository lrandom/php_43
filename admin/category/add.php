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


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-primary btn-add">Add</button>

            <div class="my-form hidden">
                <form method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="field-name">Name</label>
                            <input type="name" class="form-control" name="name" id="field-name"
                                   placeholder="Enter Name">
                        </div>

                        <input type="hidden" name="action" value="add">
                        <input type="hidden" name="id">
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
        <script>
            const btnAdd = document.querySelector('.btn-add');
            btnAdd.addEventListener('click', function () {
                const myFormNode = document.querySelector('.my-form');
                myFormNode.querySelector('input[name="action"]').value = "add";
                myFormNode.querySelector('input[name="name"]').value = "";
                if (myFormNode) {
                    myFormNode.classList.remove('hidden');
                }
            });
        </script>
        <style>
            .hidden {
                display: none;
            }
        </style>
    </div>
</div>

