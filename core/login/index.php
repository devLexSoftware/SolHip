<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap Template</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../recursos/css/compiled.min.css" rel="stylesheet">

   <style>

          input:-webkit-autofill { -webkit-box-shadow: 0 0 0px 1000px white inset; }

        .intro-2 {
            background: url("http://mdbootstrap.com/img/Photos/Others/img%20(42).jpg")no-repeat center center;
            background-size: cover;
        }
        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }
        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }
        @media (max-width: 768px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }
        .hm-gradient .full-bg-img {
            background: -webkit-linear-gradient(45deg, rgba(83, 125, 210, 0.4), rgba(178, 30, 123, 0.4) 100%);
            background: -webkit-gradient(linear, 45deg, from(rgba(29, 236, 197, 0.4)), to(rgba(96, 0, 136, 0.4)));
            background: linear-gradient(to 45deg, rgba(29, 236, 197, 0.4), rgba(96, 0, 136, 0.4) 100%);
        }
        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }

         .md-form .prefix {
            font-size: 1.5rem;
            margin-top: 1rem;
        }
        .md-form label {
            color: #ffffff;
        }
        h6 {
            line-height: 1.7;
        }
        @media (max-width: 740px) {
            .full-height,
            .full-height body,
            .full-height header,
            .full-height header .view {
                height: 1040px;
            }
        }

    </style>
</head>

<body>

    <!--Main Navigation-->
    <header>



        <!--Intro Section-->
        <section class="view intro-2 hm-gradient">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="d-flex align-items-center content-height">
                        <div class="row flex-center pt-1 mt-1">
                            <div class="col-md-6 text-center text-md-left mb-1">
                                <div class="white-text">
                                    <h1 class="h1-responsive font-bold wow fadeInLeft" data-wow-delay="0.3s">Solidez Hipotecaria</h1>
                                    <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="" style="width:1000px;">

                                    </div>
                                    <br>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-5 offset-xl-1">
                                <!--Form-->
                                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="card-body">
                                        <!--Header-->
                                        <div class="text-center">
                                            <h3 class="white-text"><i class="fa fa-user white-text"></i> Login:</h3>
                                            <hr class="hr-light">
                                        </div>

                                        <form class="form" action="actions/loginS.php" method="post" autocomplete="off">
                                          <!--Body-->
                                          <div class="md-form">
                                              <i class="fa fa-user prefix white-text active"></i>
                                              <input type="text" id="form3" class="form-control"  autocomplete="off" name="user1">
                                              <label for="form3" class="active">Nombre de usuario</label>
                                          </div>

                                          <div class="md-form">
                                              <i class="fa fa-lock prefix white-text active"></i>
                                              <input type="password" id="form4" class="form-control" autocomplete="off" name="pass1">
                                              <label for="form4" class="active">Password</label>
                                          </div>

                                          <div class="text-center">
                                              <button class="btn btn-indigo" type="submit">Iniciar</button>
                                          </div>
                                        </form>


                                    </div>
                                </div>
                                <!--/.Form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </header>
    <!--Main Navigation-->



    <!-- SCRIPTS -->
    <script type="text/javascript" src="../../recursos/js/compiled.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>
