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
                <h1>Add Description</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add Description</li>
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
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter product name">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <label for="exampleInputPassword1">Description</label>
                            </div>
                            <textarea id="summernote" type="text" id="description" name="description" class="form-control" placeholder="Enter description">

                            </textarea>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="image"><span>Image</span></label>
                        <br>
                        <input type="file" id="image" name="image" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category</label>
                        <select class="form-control" name="category_id">
                            <option selected disabled>Select Category</option>
                                <option value=""></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Status [Trending News? Mark Box ]</label>
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