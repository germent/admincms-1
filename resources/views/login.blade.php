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
    
    <style><?php include 'C:\laravel\gudangapps\vendor\fontawesome-free\css\all.min.css'; ?></style>
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <style><?php include 'C:\laravel\gudangapps\resources\css\sb-admin-2.min.css'; ?></style>
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9" style=" justify-content:center; display:flex;">

                <div class="card o-hidden border-0 shadow-lg my-5" style="width:600px; ">
                    <div class="card-body p-0" style="width:600px;">
                        <!-- Nested Row within Card Body -->
                        <div >
                            <div >
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Gudang Apps!</h1>
                                    </div>
                                    <form class="user" action="/logincek" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user" name="username" placeholder="Enter Username..." required>
                                        </div>
                                        <div class="form-group">    
                                            <input type="password" class="form-control form-control-user" name="password"  placeholder="Password" required >
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit" name="submit">Login</button>

                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
   
    <script href="C:\laravel\gudangapps\vendor\jquery\jquery.min.js"></script>
    <script href="C:\laravel\gudangapps\vendor\bootstrap\js\bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script href="C:\laravel\gudangapps\vendor\jquery-easing\jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script href="C:\laravel\gudangapps\resources\js\sb-admin-2.min.js"></script>

</body>

</html>
<!-- 
