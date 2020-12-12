<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Comments</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active">Comments</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <?php
    if(isset($_SESSION['error'])){
        echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h5><i class='icon fas fa-ban'></i> Error!</h5>
              " . $_SESSION['error'] . "
            </div>
          ";
        unset($_SESSION['error']);
    }
    if(isset($_SESSION['success'])){
        echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h5><i class='icon fas fa-check'></i> Successful!</h5>
              " . $_SESSION['success'] . "
            </div>
          ";
        unset($_SESSION['success']);
    }
    ?>
    <div class="row">
        <div class="col-12">

            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="comments" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment text</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach($comments as $comment) {
                            $status = ($comment->show_comment) ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Don\'t show</span>';

                            echo "
                                         <tr>
                                            <td>{$comment->id}</td>
                                            <td>{$comment->name}</td>
                                            <td>{$comment->email}</td>
                                            <td>{$comment->text}</td>
                                            <td>{$status}</td>
                                            <td>
                                                <button class=\"btn btn-warning btn-sm edit\" data-id=\"{$comment->id}\"><i class=\"fa fa-pen-alt\"></i> Edit</button>
                                            </td>
                                        </tr>";
                        }

                        ?>

                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment text</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

<?php include '../templates/includes/comment_modals.php'; ?>