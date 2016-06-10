<!DOCTYPE html >
<html class="no-js css-menubar" lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="bootstrap admin template">
        <meta name="author" content="">
        <title>AgenteDirecto | Adquisiciones </title>
        <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="global/css/bootstrap.min.css">
        <link rel="stylesheet" href="global/css/bootstrap-extend.css">
        <link rel="stylesheet" href="assets/css/site.css">
        <!-- Plugins -->
        <link rel="stylesheet" href="global/vendor/animsition/animsition.css">
        <link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.css">
        <link rel="stylesheet" href="global/vendor/switchery/switchery.css">
        <link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
        <link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
        <link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">

        <link rel="stylesheet" href="global/vendor/ladda-bootstrap/ladda.css">
        <link rel="stylesheet" href="assets/examples/css/uikit/buttons.css">

        <link rel="stylesheet" href="global/vendor/select2/select2.css">
        <link rel="stylesheet" href="global/vendor/waves/waves.css">
        <link rel="stylesheet" href="assets/examples/css/apps/media.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="global/fonts/material-design/material-design.css">
        <link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
        <!--link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'-->
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

    <body class="app-media">

        <!-- user nav -->
        <?php include('layouts/user.php'); ?>

        <?php //include('layouts/menu.php');?>

        <?php //include('layouts/menu-sup.php'); ?>

        <!-- Page -->
        <div class="page animsition">
            <div class="page-content container">
                <div class="row" data-plugin="matchHeight" data-by-row="true">

                    <div class="clearfix"></div>





                    <div class="panel">
                        <form action="#" class="form-group form-horizontal form-material row">
                            <div class="panel-body">

                                <div class="col-md-3 col-xs-12 text-center " id="step1">
                                    <div class="input-group">
                                        <i class="input-group-addon md-assignment-check" aria-hidden="true"></i>
                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" placeholder="Adquisición o Elemento a buscar" autocomplete="off" value="Impresora 3D">
                                    </div>
                                </div>

                                <div class="col-md-3 col-xs-12 text-center" id="step2">
                                    <div class="input-group">
                                        <i class="input-group-addon md-city" aria-hidden="true"></i>
                                        <input type="text" class="form-control" id="inputBasicFirstName" name="inputFirstName" placeholder="Rubro" autocomplete="off" value="Tecnología e Innovación">
                                    </div>
                                </div>

                                <div class="col-md-3 col-xs-12 " id="step3">
                                    <div class="input-group">
                                        <i class="input-group-addon md-pin-drop" aria-hidden="true"></i>

                                        <select class="form-control" data-plugin="select2" data-placeholder="Ubicación"
                                             <option value="">País</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Bolivia">Bolivia</option> 
                                            <option value="Brasil">Brasil</option> 
                                            <option value="Chile">Chile</option> 
                                            <option value="Colombia">Colombia</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Espana">España</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Mexico">México</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Panama">Panamá</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Perú</option>
                                            <option value="Dominicana">República Dominicana</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Venezuela" selected="">Venezuela</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3 col-xs-12 text-center" id="step4">
                                    <div class="input-group">
                                        <button class="btn btn-success waves-effect waves-light" type="button">Buscar Adquisición</button>

                                        <a href="#" class="site-tour-trigger">
                                            <button class="btn btn-warning waves-effect waves-light" type="button">
                                                <i class="icon md-pin-help" aria-hidden="true"></i>
                                            </button>
                                        </a>  
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>






                    <div class="clearfix"></div>


                    <div class="page bg-white animsition col-md-9">
                        <!-- Media Sidebar -->

                        <!-- Media Content -->
                        <div class="page-main">
                            <!-- Media Content Header -->
                            <div class="blocks ">
                                <div class="page-header col-md-6 col-xs-12">
                                    <h4 class="page-title">Impresoras </h4>
                                    <div class="page-title result">
                                         65 adquisiciones
                                    </div>
                                </div>
                                <div class="page-content-actions col-md-6 col-xs-12">

                                    <div class="pull-right filter">
                                        <span>Filtrar por</span>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-pure dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                Tipo
                                                <span class="icon md-chevron-down" aria-hidden="true"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right animation-scale-up animation-top-right animation-duration-250"
                                                role="menu">
                                                <li><a href="javascript:void(0)">Agregadas Recientemente</a></li>
                                                <li><a href="javascript:void(0)">Mas populares</a></li>
                                                <li><a href="javascript:void(0)">Mejor Ranking</a></li>
                                                <li><a href="javascript:void(0)">Rubro</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-pure dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                Publicado
                                                <span class="icon md-chevron-down" aria-hidden="true"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right animation-scale-up animation-top-right animation-duration-250"
                                                role="menu">
                                                <li><a href="javascript:void(0)">Agregadas Recientemente</a></li>
                                                <li><a href="javascript:void(0)">Mas populares</a></li>
                                                <li><a href="javascript:void(0)">Mejor Ranking</a></li>
                                                <li><a href="javascript:void(0)">Rubro</a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-pure dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false">
                                                Ranking
                                                <span class="icon md-chevron-down" aria-hidden="true"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right animation-scale-up animation-top-right animation-duration-250"
                                                role="menu">
                                                <li><a href="javascript:void(0)">Agregadas Recientemente</a></li>
                                                <li><a href="javascript:void(0)">Mas populares</a></li>
                                                <li><a href="javascript:void(0)">Mejor Ranking</a></li>
                                                <li><a href="javascript:void(0)">Rubro</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <!-- Media Content -->
                            <div class="page-content page-content-table">
                                <!-- Actions -->

                                <!-- Media -->
                                <div class="media-list is-list padding-bottom-50">
                                    <ul class="blocks blocks-100 blocks-xlg-4 blocks-lg-3 blocks-md-3 blocks-ms-2 blocks-xs-2"
                                        data-plugin="animateList" data-child=">li">

                                        <?php //for($i = 1; $i < 10; $i++) { ?>
                                        
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/gimalca-logo.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>Compra de Computadores e Impresoras</b> 
                                                    </div>
                                                    <div class="description">Compra de Computadores e Impresoras solicitadas por distintos departamento de la empresa</div>
                                                    <div class=""><b>Gimalca Soluciones</b> - Caracas, Venezuela</div>


                                                    <div class="time">
                                                        <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                        <b>Fin - 10d</b>
                                                    </div>



                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/gimalca-logo.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>Provisión, Mantención, Soporte Equipos Computación</b> 
                                                    </div>
                                                    <div class="description">Se solicita proveedor para el mantenimiento y soporte de equipo de computación</div>
                                                    <div class=""><b>Gimalca Soluciones</b> - Caracas, Venezuela</div>


                                                    <div class="time">
                                                        <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                        <b>Fin - 8d</b>
                                                    </div>


                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/british-american-tobacco-squarelogo.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>Solicita Adquisicion de Laptops DELL</b> 
                                                    </div>
                                                    <div class="description">Se requieren 20 portátiles</div>
                                                    <div class=""><b>British American Tobacco</b> - Caracas, Venezuela</div>


                                                    <div class="time">
                                                        <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                        <b>Fin - 8d</b>
                                                    </div>



                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">
                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/accenture-squarelogo-1446040583582.png" alt="...">

                                                </div>



                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>Compra de materiales de libreria y artículos de oficina</b> 
                                                    </div>
                                                    <div class="description">materiales de libreria y artículos de oficina</div>
                                                    <div class=""><b>Accenture</b> - Caracas, Venezuela</div>

                                                    <div class="time">
                                                        <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                        <b>Fin - 8d</b>
                                                    </div>

                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/british-american-tobacco-squarelogo.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>ALQUILER EQUIPOS DE COMPUTACION PORTATIL</b> 
                                                    </div>
                                                    <div class="description">Se requiere proveedor de alquiler de equipos de computación</div>
                                                    <div class=""><b>British American Tobacco</b> - Caracas, Venezuela</div>

                                                    <div class="time">
                                                        <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                        <b>Fin - 7d</b>
                                                    </div>

                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/company-logo-empty-ad.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>ADQUISICIÓN DE EQUIPO EN COMPUTACIÓN VARIOS</b> 
                                                    </div>
                                                    <div class="description">Compra de unos 10 computadores </div>
                                                    <div class=""><b>Anónimo</b> - Caracas, Venezuela</div>

                                                    <div class="time">
                                                        <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                        <b>Fin - 7d</b>
                                                    </div>

                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/ge-squarelogo-1432804551502.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>EQUIPOS COMPUTACIONES Y EQUIPOS Y ACCESORIOS DE TV</b> 
                                                    </div>
                                                   <div class="description">Compra de unos 10 computadores </div>
                                                    <div class=""><b>Anónimo</b> - Caracas, Venezuela</div>

                                                    <div class="time">
                                                        <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                        <b>Fin - 6d</b>
                                                    </div>



                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/company-logo-empty-ad.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>EQUIPAMIENTO AUDIOVISUAL Y OTROS </b> 
                                                    </div>
                                                    <div class="description">Buscamos presupuesto para el montaje de un cuarto audiovisual </div>
                                                    <div class=""><b>Anónimo</b> - Caracas, Venezuela</div>

                                                    <div class="time">
                                                        <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                        <b>Fin - 6d</b>
                                                    </div>



                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/alpina-squarelogo-1451482455372.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>INSTALACION DE ALIMENTADORES Y TABLEROS DISTRUBUCION EQ. UPS</b> 
                                                    </div>
                                                    <div class="description">Servicio de instalación cuarto de servidores </div>
                                                    <div class=""><b>Alpina</b> - Caracas, Venezuela</div>

                                                    <div class="time">
                                                        <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                        <b>Fin - 5d</b>
                                                    </div>



                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/cliente-covemat-alimentos-polar.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>Adquisición de materiales de red</b> 
                                                    </div>
                                                    <div class="description">Se solicita proveedor de cableado e instalación de Redes</div>
                                                    <div class=""><b>Alimentos Polar</b> - Caracas, Venezuela</div>


                                                     <div class="time">
                                                        <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                        <b>Fin - 5d</b>
                                                    </div>



                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/glaxosmithkline-consumer-healthcare-squarelogo-1443440407876.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>MANTENCIÓN IMPRESORAS HP</b> 
                                                    </div>
                                                    <div class="description">Mantenimiento a equipos en desuso</div>
                                                    <div class=""><b>Glaxosmithkline</b> - Caracas, Venezuela</div>

                                                    <div class="time">
                                                         <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                         <b>Fin - 5d</b>
                                                    </div>

                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/marriott-squarelogo.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>ADQUISICIÓN DE CONECTORES VIDEO DE ALTA RESOLUCIÓN</b> 
                                                    </div>
                                                    <div class="description">Conectores para 30 televisores con resolución 4k</div>
                                                    <div class=""><b>Marriot Hotels</b> - Caracas, Venezuela</div>

                                                    <div class="time">
                                                         <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                         <b>Fin - 5d</b>
                                                    </div>



                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/procter-and-gamble-squarelogo.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>Tintas y toner stock bodega</b> 
                                                    </div>
                                                    <div class="description">Suministros de tinta para impresoras y fotocopiadoras</div>
                                                    <div class=""><b>Procter and Gamble</b> - Caracas, Venezuela</div>


                                                    <div class="time">
                                                         <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                         <b>Fin - 5d</b>
                                                    </div>



                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media-item" data-toggle="slidePanel" data-url="panel-adquisiciones.tpl">

                                                <div class="image-wrap icon-company">

                                                    <img class="image img-rounded" src="assets/images/logos/gimalca-logo.png" alt="...">

                                                </div>

                                                <div class="info-wrap">

                                                    <div class="title">
                                                        <b>SUMINISTRO DE PIEZAS Y PARTES PARA EQUIPOS COMPUTACIONALES</b> 
                                                    </div>
                                                    <div class="description">Buscamos servicio tecnico para computadoras averiadas</div>
                                                    <div class=""><b>Gimalca Soluciones</b> - Caracas, Venezuela</div>


                                                    <div class="time">
                                                         <i class="icon md-time text-success" style="font-size: 16px" aria-hidden="true"></i>
                                                         <b>Fin - 5d</b>
                                                    </div>



                                                </div>
                                                <div class="info-wrap  share">
                                                    <div class="btn-group" style="margin-top: 0px;">
                                                        <div class="btn-group" role="group">
                                                            <button type="button" class="btn btn-icon btn-pure" data-toggle="button">
                                                                <i class="icon md-favorite-outline text" aria-hidden="true"></i>
                                                                <i class="icon md-favorite text-active text-danger" aria-hidden="true"></i>
                                                            </button>
                                                            <button class="btn btn-icon btn-pure btn-default" data-original-title="Aplicar en Empresa" data-toggle="tooltip"
                                                                    data-container="body" data-placement="top" 
                                                                    type="button">
                                                                <i class="icon md-tag" aria-hidden="true"></i>
                                                            </button>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <?php //} ?>


                                    </ul>


                                    <div class="example text-right">
                                        <nav>
                                            <ul class="pagination pagination-no-border">
                                                <li class="disabled">
                                                    <a href="javascript:void(0)" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                    </a>
                                                </li>
                                                <li class="active"><a href="javascript:void(0)">1 <span class="sr-only">(current)</span></a></li>
                                                <li><a href="javascript:void(0)">2</a></li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                <li><a href="javascript:void(0)">4</a></li>
                                                <li><a href="javascript:void(0)">5</a></li>
                                                <li>
                                                    <a href="javascript:void(0)" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xlg-3 col-md-3">
                        <div class="panel">
                            <img src="assets/images/google-addsword-treehousef.jpg" class="  img-responsive" />
                        </div>
                        
                    </div>
                    <div class="col-xlg-3 col-md-3">
                        <!-- Example Panel With List Group Inner -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Empresas Destacadas</h3>
                            </div>
                            <div class="panel-body">
                                <p>Ranking de las mejores empresas calificadas en Mayo</p>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/banco-occidental-de-descuento-bod-squarelogo-1463748559387.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Banco Occidental de Descuento</h4>
                                                <div>Banca - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/falabella-squarelogo.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Falabella</h4>
                                                <div>Retail - Colombia</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/empresas-polar-squarelogo.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Empresas Polar</h4>
                                                <div>Alimentos - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/gimalca-logo.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Gimalca Soluciones</h4>
                                                <div>Tecnologia - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/telefónica-squarelogo-1387199262364.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Telefónica</h4>
                                                <div>Telecomunicacion - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/huawei-technologies-squarelogo.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Huawei</h4>
                                                <div>Tecnologia - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/corpoelec-squarelogo.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Corpoelec</h4>
                                                <div>Electricidad - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/nestlé-squarelogo-1436648145305.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Nestlé</h4>
                                                <div>Alimentos - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/alcatel-lucent-squarelogo.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Alcatel</h4>
                                                <div>Telefonia - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/banesco-squarelogo.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Banesco</h4>
                                                <div>Banca - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/cantv-squarelogo-1447671211534.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">CANTV</h4>
                                                <div>Telecomunicación - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/general-motors-squarelogo.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">General Motors</h4>
                                                <div>Automotor - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/directv-squarelogo.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">DIRECTV</h4>
                                                <div>Televisión - Brasil</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left">
                                                <a class="avatar" href="javascript:void(0)">
                                                    <img class="img-responsive" src="assets/images/logos/mcdonald-s-squarelogo-1432804488976.png" alt="...">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">MacDonal's</h4>
                                                <div>Alimentos - Venezuela</div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Example Panel List Group Inner -->
                    </div>
                    <div class="col-xlg-3 col-md-3">
                        <div class="panel">
                            <img src="assets/images/google-addsword-ef.jpg" class="  img-responsive" />
                        </div>
                        
                    </div>

                    <div class="modal fade" id="examplePositionCenter" aria-hidden="true" aria-labelledby="examplePositionCenter"
                         role="dialog" tabindex="-1">
                        <div class="modal-dialog modal-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">í</span>
                                    </button>
                                    <h4 class="modal-title">Empresa</h4>
                                </div>
                                <div class="modal-body">

                                    <div class="col-md-6">
                                        <ul class="list-group list-group-full">
                                            <li class="list-group-item">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a class="avatar" href="javascript:void(0)">
                                                            <img class="img-responsive" src="global/portraits/1.jpg" alt="...">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Bill Portones</h4>
                                                        <small>CEO</small>
                                                    </div>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6 text-center">

                                        <div class="list-group">
                                            <a class="list-group-item">
                                                <h4 class="list-group-item-heading">Grado de Verificación</h4>
                                                <p class="list-group-item-text">Nivel <b class="text-success">Premium</b></p>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="example table-responsive">
                                            <table class="table text-center">
                                                <tbody>
                                                    <tr>
                                                        <td><b>Website</b></td>
                                                        <td>www.google.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Tamaño</b></td>
                                                        <td>1000 a 5000 empleados</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Rubros</b></td>
                                                        <td>Rubro1, Rubro2, Rubro3</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Sede Principal</b></td>
                                                        <td>www.google.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Competencias</b></td>
                                                        <td>Microsoft, Apple</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                                <!--div class="modal-footer">
                                  <button type="button" class="btn btn-default btn-pure" data-dismiss="modal">Cerrar</button>
                                </div-->
                            </div>
                        </div>
                    </div>



                    <!-- Aqui va el de register -->
                    <div class="modal fade" id="exampleMultipleOne" aria-hidden="true" aria-labelledby="exampleMultipleOne"
                         role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">ó</span>
                                    </button>
                                    <h4 class="modal-title">Regístrate en AgenteDirecto</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="">
                                        <div class="form-group form-material row">
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="firstname" placeholder="Nombre Completo"
                                                       autocomplete="off" />
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="lastname" placeholder="Teléfono"
                                                       autocomplete="off" />
                                            </div>
                                        </div>

                                        <div class="form-group form-material row">
                                            <div class="col-sm-6">

                                                <select class="form-control" id="select">
                                                    <option value="">País</option>
                                                    <option value="Argentina" >Argentina</option>
                                                    <option value="Bolivia" >Bolivia</option> 
                                                    <option value="Brasil" >Brasil</option> 
                                                    <option value="Chile" >Chile</option> 
                                                    <option value="Colombia" >Colombia</option>
                                                    <option value="Costa Rica" >Costa Rica</option>
                                                    <option value="Cuba" >Cuba</option>
                                                    <option value="Ecuador" >Ecuador</option>
                                                    <option value="El Salvador" >El Salvador</option>
                                                    <option value="Espana" >España</option>
                                                    <option value="Guatemala" >Guatemala</option>
                                                    <option value="Honduras" >Honduras</option>
                                                    <option value="Mexico" >México</option>
                                                    <option value="Nicaragua" >Nicaragua</option>
                                                    <option value="Panama" >Panamá</option>
                                                    <option value="Paraguay" >Paraguay</option>
                                                    <option value="Peru" >Perú</option>
                                                    <option value="Dominicana" >República Dominicana</option>
                                                    <option value="Uruguay" >Uruguay</option>
                                                    <option value="Venezuela" >Venezuela</option>
                                                </select>
                                                <!--input type="text" class="form-control" name="firstname" placeholder="País"
                                                autocomplete="off" /-->
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="lastname" placeholder="Empresa"
                                                       autocomplete="off" />
                                            </div>
                                        </div>

                                        <div class="form-group form-material">
                                            <input type="email" class="form-control" name="email" placeholder="Email"
                                                   autocomplete="off" />
                                        </div>
                                        <div class="form-group form-material">
                                            <input type="password" class="form-control" name="password" placeholder="Password"
                                                   autocomplete="off" />
                                        </div>
                                        <div class="form-group form-material">
                                            <div class="checkbox-custom checkbox-default">
                                                <input type="checkbox" id="inputCheckboxAgree" name="inputCheckboxesAgree" checked
                                                       autocomplete="off" />
                                                <label for="inputCheckboxAgree">Estoy de acuerdo con las políticas y terminos - <a href="#">Ver terminos y condiciones</a></label>
                                            </div>
                                        </div>
                                        <div class="form-group form-material">
                                            <button type="button" class="btn btn-primary">Ingresar</button>
                                        </div>
                                    </form>
                                    <p>¿Ya tienes cuenta? Ingresa <a data-target="#exampleMultipleTwo"
                                                                     data-toggle="modal" data-dismiss="modal">aquí</a></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary btn-pure" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  aqui va el sign in --> 
                    <div class="modal fade" id="exampleMultipleTwo" aria-hidden="false" role="dialog"
                         tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">!</span>
                                    </button>
                                    <h4 class="modal-title">Iniciar Sesión</h4>
                                </div>
                                <div class="modal-body">

                                    <form class="">
                                        <div class="form-group form-material row">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="firstname" placeholder="Email"
                                                       autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="form-group form-material row">
                                            <div class="col-sm-12">
                                                <input type="password" class="form-control" name="lastname" placeholder="Password"
                                                       autocomplete="off" />
                                            </div>
                                        </div>
                                        <div class="form-group form-material text-center">
                                            <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                                        </div>
                                    </form>

                                    <p class="text-center">No tienes cuenta?  <a data-target="#exampleMultipleOne"
                                                                                  data-toggle="modal" data-dismiss="modal">Regístrate en AgenteDirecto</a>
                                    </p>

                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)"
                                       role="button">Cerrar</a>
                                </div>
                            </div>
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

        <script src="global/vendor/ladda-bootstrap/spin.js"></script>
        <script src="global/vendor/ladda-bootstrap/ladda.js"></script>
        <script src="global/js/components/buttons.js"></script>
        <script src="global/js/components/ladda-bootstrap.js"></script>

        <script src="global/vendor/select2/select2.full.min.js"></script>
        <script src="global/js/components/select2.js"></script>

        <script src="assets/examples/js/dashboard/v1.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>