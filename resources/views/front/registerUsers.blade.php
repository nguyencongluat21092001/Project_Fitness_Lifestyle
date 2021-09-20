<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="frontend/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="frontend/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Đăng ký</h1>
                                <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span clsass="text-alert">'.$message.'</span>';
                                    Session::put('message',null);
                                }
                                ?>
                            </div>
                            <form action="{{ route('store.users')}}" method="POST"class="user">
                                @method("POST")
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="post_name" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Tên">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" name="post_phone"class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Điện thoại">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="post_email"class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Địa chỉ Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="post_password"class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Mật khẩu">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="post_repeatpassword"class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Nhập lại mật khẩu">
                                    </div>
                                </div>
                                <div class=" btn-user btn-block">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Đăng ký
                                    </button>
                                </div>
                                <hr>
                                <a class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Đăng ký với Google
                                </a>
                                <a class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Đăng ký với Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="loginusers">Bạn đã sẵn sàng đăng nhập?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="frontend/admin/vendor/jquery/jquery.min.js"></script>
    <script src="frontend/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="frontend/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="frontend/admin/js/sb-admin-2.min.js"></script>

</body>

</html>