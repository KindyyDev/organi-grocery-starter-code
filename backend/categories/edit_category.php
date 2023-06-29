<?php
    include('../layouts/header.php');

    include('../layouts/nav_bar.php');
    include('../layouts/side_bar.php');
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add Category</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <!-- general form elements -->
                <div class="card card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter category name">
                    </div>
                    <div class="form-group">
                        <label for="image"><span>Image</span></label>
                        <br>
                        <input type="file" id="image" name="image" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status [ ]</label>
                        <input type="checkbox" name="status" class="form-control" placeholder="Enter status">
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


<?php
    include('../layouts/footer.php');
?>