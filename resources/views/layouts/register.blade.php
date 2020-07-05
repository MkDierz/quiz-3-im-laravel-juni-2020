<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('sbadmin2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sbadmin2/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container mw-25">

    <div class="card  o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
{{--                <div class="col-lg-5 d-none d-lg-block"></div>--}}
                <div class="col">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="/register" method="post">
                            @csrf
                            <div class="form-group" >
                                <input name="name" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control form-control-user" id="InputEmail" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input name="user_fullname" type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input name="user_birth" type="date" class="form-control form-control-user" id="exampleInputEmail" placeholder="">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input name="password_confirmation" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">register</button>
                            <hr>

                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="/login">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('sbadmin2/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('sbadmin2/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
