<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/minton/layouts/horizontal/blue/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2019 03:22:31 GMT -->
<head>
    <meta charset="utf-8"/>
    <title>TodoApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"/>

</head>

<body>

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">

                            <span><img src="uploads/logo-todo.png" alt="" height="80"></span>


                        </div>

                        @if(session()->has('error'))
                            <div class="alert alert-danger">{{session()->get('error')}}</div>
                        @endif

                        <form action="{{route('users.auth')}}" method="post">

                            @csrf

                            <div class="form-group mb-3">
                                <label for="emailaddress">Username</label>
                                <input class="form-control" type="text" name="username" id="username" required=""
                                       placeholder="Enter your username">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" required="" name="password" required=""
                                       id="password"
                                       placeholder="Enter your password">
                            </div>


                            <div class="form-group mb-0 text-center">
                                <button class="btn btn-primary btn-block" type="submit"> Log In</button>
                            </div>

                        </form>


                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p><a href="pages-recoverpw.html" class="text-muted ml-1"></a></p>

                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->


<footer class="footer footer-alt">
    2016 - 2019 &copy; Minton theme by <a href="#" class="text-muted">Coderthemes</a>
</footer>

<!-- Vendor js -->
<script src="assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="assets/js/app.min.js"></script>

</body>

<!-- Mirrored from coderthemes.com/minton/layouts/horizontal/blue/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2019 03:22:33 GMT -->
</html>
