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
                <h1>All Orders</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">All Orders</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
            <!-- This is where the data table with default features is(download option) -->

        <!-- Start Table from main content->container fluid of allcafe -->

        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Orders</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>No/Id</th>
                        <th>Products Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th> 
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        
                        <tr>
                        <td>1</td>
                        <td>Banana</td>
                        <td>Desc</td>
                        <td>1000</td>
                        <td>Image</td>
                        <td>Fruits</td>
                        <td>ACTIVE</td>
                        <td>
                            <a href="editcafe.html"><button type="button" class="btn btn-primary">EDIT</button></a>
                            <a href="#"><button type="button" class="btn btn-danger">DELETE</button></a>
                        </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No/Id</th>
                        <th>Products Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th> 
                        <th>Category</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- /.card -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>

        <!-- End Table from main content->container fluid of allcafe -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php
    include('../layouts/footer.php');
?>