<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>AgenteDirecto | Perfil Empresas </title>
  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="global/css/bootstrap.min.css">
  <link rel="stylesheet" href="global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="global/vendor/waves/waves.css">
  <link rel="stylesheet" href="global/vendor/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/examples/css/pages/profile.css">
  <link rel="stylesheet" href="global/vendor/slick-carousel/slick.css">
  <link rel="stylesheet" href="assets/examples/css/structure/ribbon.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="global/vendor/media-match/media.match.min.js"></script>
    <script src="global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="global/vendor/modernizr/modernizr.js"></script>
  <script src="global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>

<body class="page-profile">
 
    <!-- user nav -->
    <?php include('layouts/user.php');?>

    <?php //include('layouts/menu.php');?>

    <?php //include('layouts/menu-sup.php'); ?>

  <!-- Page -->
  <div class="page animsition">
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">

        <div class="col-md-3">
          <!-- Page Widget -->
          
           <div class="widget widget-shadow text-center">
            <div class="widget-header">
              <div class="widget-header-content">
                <a class="avatar avatar-lg" href="javascript:void(0)">
                  <img src="global/portraits/5.jpg" alt="...">
                </a>
                <h4 class="profile-user">Nombre de la Empresa</h4>
                <p class="profile-job">Rubro</p>
                <p class="profile-job">Nivel de Verificación: <b class="text-success">Alto</b></p>
                <div class="profile-social">
                  <a class="icon bd-twitter" href="javascript:void(0)"></a>
                  <a class="icon bd-facebook" href="javascript:void(0)"></a>
                  <!--a class="icon bd-dribbble" href="javascript:void(0)"></a>
                  <a class="icon bd-github" href="javascript:void(0)"></a-->
                </div>
               
              </div>
            </div>
          </div>
          <!-- End Page Widget -->
        </div>
        <div class="col-md-6">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body nav-tabs-animate nav-tabs-horizontal">
              <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                  <li class="active" role="presentation"><a data-toggle="tab" href="#activities" aria-controls="activities"
                    role="tab">Generar Cotización <!--span class="badge badge-danger">5</span--></a>
                  </li>
                  <li role="presentation"><a data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Licitaciones</a></li>
                  <li role="presentation"><a data-toggle="tab" href="#messages" aria-controls="messages"
                    role="tab">Adquisiciones</a>
                  </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">

                  
                  <div class="col-md-8">

                  </div>  

                <div class="col-md-4">


                </div>  

                  <!--a class="btn btn-block btn-default profile-readMore" href="javascript:void(0)"
                  role="button">Show more</a-->
                </div>
                <div class="tab-pane animation-slide-left" id="profile" role="tabpanel">
                  
                </div>
                <div class="tab-pane animation-slide-left" id="messages" role="tabpanel">
                 
                </div>
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>

        <div class="col-md-3">
          <!-- Page Widget -->
          
           <div class="widget widget-shadow text-center">
            <div class="widget-header">
              <div class="widget-header-content">
                <a class="avatar avatar-lg" href="javascript:void(0)">
                  <img src="global/portraits/5.jpg" alt="...">
                </a>
                <h4 class="profile-user">Nombre de la Empresa</h4>
                <p class="profile-job">Rubro</p>
                <p class="profile-job">Nivel de Verificación: <b class="text-success">Alto</b></p>
                <div class="profile-social">
                  <a class="icon bd-twitter" href="javascript:void(0)"></a>
                  <a class="icon bd-facebook" href="javascript:void(0)"></a>
                  <!--a class="icon bd-dribbble" href="javascript:void(0)"></a>
                  <a class="icon bd-github" href="javascript:void(0)"></a-->
                </div>
               
              </div>
            </div>
          </div>
          <!-- End Page Widget -->
        </div>
    <!-- Media Content -->
    </div>
  </div>
       
      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Footer -->
  <?php include('layouts/footer.php') ?>
  <!-- Core  -->
  <script src="global/vendor/jquery/jquery.js"></script>
  <script src="global/vendor/bootstrap/bootstrap.js"></script>
  <script src="global/vendor/animsition/animsition.js"></script>
  <script src="global/vendor/asscroll/jquery-asScroll.js"></script>
  <script src="global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
  <script src="global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
  <script src="global/vendor/waves/waves.js"></script>
  <!-- Plugins -->
  <script src="global/vendor/switchery/switchery.min.js"></script>
  <script src="global/vendor/intro-js/intro.js"></script>
  <script src="global/vendor/screenfull/screenfull.js"></script>
  <script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="global/vendor/slick-carousel/slick.js"></script>
 
  <!-- Scripts -->
  <script src="global/js/core.js"></script>
  <script src="assets/js/site.js"></script>
  <script src="assets/js/sections/menu.js"></script>
  <script src="assets/js/sections/menubar.js"></script>
  <script src="assets/js/sections/gridmenu.js"></script>
  <script src="assets/js/sections/sidebar.js"></script>
  <script src="global/js/configs/config-colors.js"></script>
  <script src="assets/js/configs/config-tour.js"></script>
  <script src="global/js/components/asscrollable.js"></script>
  <script src="global/js/components/animsition.js"></script>
  <script src="global/js/components/slidepanel.js"></script>
  <script src="global/js/components/switchery.js"></script>
  <script src="global/js/components/tabs.js"></script>
  <script src="global/js/components/matchheight.js"></script>
  <script src="global/js/components/jvectormap.js"></script>
  <script src="global/js/components/peity.js"></script>
  <script src="global/js/components/owl-carousel.js"></script>
  <script src="assets/examples/js/uikit/carousel.js"></script>
  
</body>
</html>