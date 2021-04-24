
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
    @php

    @endphp

    <div id="header-users">
        <!--start Header-->
        <nav class="navbar navbar-expand-md navbar-light bg-transparent">
            <div class="bloc_logo col-2">
            <a href="./" class="navbar-brand text-primary"><i class="fa fa-cube"></i> ACHAT<b>COM</b></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
              <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <!--nav Services -->
            <!-- if connecter -->
            <div id="menu-services" class="col-7">
                <!--start Services Name-->
                @yield('services')
                <!--end Services Name-->
          </div>
             <!-- if non-connecter -->
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start col-3" >

                <div class="nav-item dropdown">
                  <a href="#" data-toggle="dropdown" class="dropdown user-action btn btn-primary  text-gray text-uppercase text-decoration-none">
                    <i class="fa fa-user-circle mr-1"></i>Administrateur</a>
                  <div class="dropdown-menu">
                    <a  class="dropdown-item" data-toggle="modal" data-target="#ModalProfil">
                    <i class="fa fa-user-o"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('logout_admin')}}" class="dropdown-item"><i class="fa fa-sign-out"></i> Déconnexion</a>
                  </div>
                </div>

            </div>
          </nav>
        <!--end Header-->
    </div>
    <!--Main section-->
    <div id="main-section">
         <!-- content page -->
        <div id="content" class="py-4" >
            <div id="content-services">
                <div class="row mx-auto">
                    <div class="card shadow col-md-11 bg-light mx-auto">
                      <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            @yield('Holder')
                            @include('administrateur.profile')
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div id="footer-users" class="main-footer bg-light pt-3 ">
        @include('includes.admin.footer')
    </div>

    <!-- JavaScript files-->
    <!-- Compiled and minified JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->
    <script src="../../../assets/js/jquery/jquery.min.js "></script>
    <script src="../../../assets/js/popper.js/umd/popper.min.js "> </script>
    <script src="../../../assets/js/bootstrap/bootstrap.min.js "></script>
    <script src="../../../assets/js/script/front.js "></script>
    <!-- Main File-->
    <script src="../../../assets/js/script/toastr.min.js "></script>
    <!-- Dump all dynamic scripts into template -->
    @yield('scripts')
    <script>
        function toast(message,header) {

            toastr.success(message, 'Message', {
                timeOut: 1200,
                progressBar: true
            });
        }
        //Cherch user
        $(document).on('click', '.find_btn', function (e) {
            e.preventDefault();
            $name= $('#txt_find').val();
            $.ajax({
                type: 'GET',
                 url: "{{route('user_find')}}",
                data: {'name': $name},
                success: function (data) {

                $('tbody').html(data);

                }, error: function (reject) {


                }
            });

        });


        //Show Password
        function showPass(className){
           // alert(className);
            let tdPass = document.getElementsByClassName(className)[0];
            let iconPass = document.getElementById(className);

            if(tdPass.id=="0"){
                document.getElementsByClassName(className)[0].style = "-webkit-text-security:none;";
                document.getElementsByClassName(className)[0].id = "1";
                iconPass.className = " fa fa-eye-slash"
            }
            else{
                document.getElementsByClassName(className)[0].style = "-webkit-text-security:disc;";
                document.getElementsByClassName(className)[0].id = "0";
                iconPass.className = "fa fa-eye"
            }

        }

        //delete user
        $(document).on('click', '.delete_btn', function (e) {
            e.preventDefault();

            if(confirm('Voulez vous supprimer ce utilisateur ?')){
                let user_id = this.name;
            $.ajax({
                type: 'post',
                 url: "{{route('user_delete')}}",
                data: {
                    '_token': "{{csrf_token()}}",
                    'id' :user_id
                },
                success: function (data) {

                    $('.row_'+user_id).remove();
                    toast(data.success);
                }, error: function (reject) {


                }
            });
      }
    });

    </script>
</body>

</html>
