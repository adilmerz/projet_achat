<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ACHAT-COM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Compiled and minified CSS -->
    <!--<link rel="stylesheet" href="../../../https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css ">-->
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../../../assets/css/bootstrap/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../../../assets/css/style/fontastic.css ">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700 ">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../../../assets/css/style/style.default.css " id="theme-stylesheet">
    <!-- toastr stylesheet - for Notifications-->
    <link rel="stylesheet" href="../../../assets/css/style/toastr.min.css ">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../../../assets/css/style/custom.css ">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../../../assets/images/icon/favicon.ico ">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!--Dynamic StyleSheets added from a view would be pasted here-->
    <style>
        body {
            background-image: url("https://images.squarespace-cdn.com/content/54b92d53e4b0876afab0e8c1/1464812672705-UYNBWKVTNAHPL3CMFR7V/shutterstock_234589129.jpg?format=2500w&content-type=image%2Fjpeg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>

<body>
    <div id="header-users">
        <!--start Header-->
        @include("includes.header_empty")
        <!--end Header-->
    </div>
    <!--Main section-->
    <div id="main-section">
        <!-- content page -->
        <div id="content" class="my-4 container py-4 bg-light">
            @yield('Holder')
        </div>
    </div>
    <footer>
        <div>
            <div>
                <div>
                      <!-- copyright -->
                      <div class="container  mx-auto text-center py-4 text-muted bg-light">
                        <p>ACHAT COM &copy; 2021</p>
                      </div>
                </div>
            </div>
    </footer>
    <!-- JavaScript files-->
    <!-- Compiled and minified JavaScript -->
    <script src="../../../assets/js/jquery/jquery.min.js "></script>
    <script src="../../../assets/js/popper.js/umd/popper.min.js "> </script>
    <script src="../../../assets/js/bootstrap/bootstrap.min.js "></script>
    <script src="../../../assets/js/jquery.cookie/jquery.cookie.js "> </script>
    <script src="../../../assets/js/chart.js/Chart.min.js "></script>
    <script src="../../../assets/js/jquery-validation/jquery.validate.min.js "></script>
    <script src="../../../assets/js/script/charts-home.js "></script>
    <script src="../../../assets/js/script/front.js "></script>
    <!-- Main File-->
    <script src="../../../assets/js/script/toastr.min.js "></script>
    <!-- Dump all dynamic scripts into template -->
    <!--@yield('scripts')-->
    <script>
        function toast(message, header) {

            toastr.success(message, 'Message', {
                timeOut: 1200,
                progressBar: true
            });
        }

    </script>
</body>

</html>