<div class="login-box">
    <div class="login-logo">
        <a href="javascript:void(0)">Admin Panel</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
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
            <p class="login-box-msg">Enter your username and password to login</p>

            <form action="/login" method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->