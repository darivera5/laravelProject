<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Consultar emprendedor - Sinapsis </title>
    <link rel="stylesheet" href="css/mycss.css">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark background-sinapsis">

        <a class="navbar-brand" href="home.php">
            <img src="img/Sinapsis.png" class="imgNavTop">
        </a>

        <button class="btn btn-link btn-sm order-1 order-lg-0 hamburger_btn" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>

        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <!-- Navbar-->
                <ul class="navbar-nav ml-auto ml-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                class="fas fa-user fa-fw"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Activity Log</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </form>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark nav-colorSinapsis" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">dashboard</div>
                        <a class="nav-link" href="home.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Inicio
                        </a>
                        <div class="sb-sidenav-menu-heading">USUARIOS</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                            aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            Emprendedores
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Registrar Emprendedor</a>
                                <a class="nav-link" href="consultarEmprendedor.php">Consultar Emprendedor</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Mentores
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="#">Registrar Mentor</a>
                                <a class="nav-link" href="#">Consultar Emprendedor</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer footer-nav-sinapsis">
                    <div class="small">Inició sesión como:</div>
                    Administrador
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <!--Contenido principal-->
            <main>
                <div class="container-fluid">
                    <h4 class="mt-4">Consultar emprendedor</h4>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item">Inicio</li>
                        <li class="breadcrumb-item">
                            Consultar emprendedor
                        </li>
                        <li class="breadcrumb-item active">
                            Realizar diagnostico
                        </li>
                    </ol>
                </div>

                <div class="container-fluid">
                    <nav>
                        <!-- Div que contiene las pestañas -->
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <!-- Pestaña del mes -->
                            <a class="nav-item nav-link active" id="info" data-toggle="tab" href="#infoEmprendedor"
                                role="tab" aria-controls="infoEmprendedor" aria-selected="true">
                                Información del emprendedor
                            </a>
                            <!-- Fin Pestaña del mes -->

                            <!-- Pestaña del mes -->
                            <a class="nav-item nav-link" id="mes_2" data-toggle="tab" href="#infoProyecto" role="tab"
                                aria-controls="infoProyecto" aria-selected="true">
                                Información del proyecto
                            </a>
                            <!-- Fin Pestaña del mes -->

                            <!-- Pestaña del mes -->
                            <a class="nav-item nav-link" id="mes_3" data-toggle="tab" href="#infoConsultor" role="tab"
                                aria-controls="infoConsultor" aria-selected="true">
                                Información consultor
                            </a>
                            <!-- Fin Pestaña del mes -->
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="infoEmprendedor" role="tabpanel"
                                aria-labelledby="mes_1">
                                <div class="row userInfo justify-content-center">
                                    <div class="col-lg-5 emprendedorInfo">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="textBold">Nombres:</label>
                                                    <br>
                                                    <label> Daniel Alexander </label>
                                                </div>
                                                <div>
                                                    <label class="textBold">Apellidos:</label>
                                                    <br>
                                                    <label> Muelas rivera </label>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="textBold">Cedula:</label>
                                                    <br>
                                                    <label> 1144097956 </label>
                                                </div>
                                                <div>
                                                    <label class="textBold">Fecha nacimiento:</label>
                                                    <br>
                                                    <label> 1997-08-15 </label>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="textBold">Celular:</label>
                                                    <br>
                                                    <label> 3108903571 </label>
                                                </div>
                                                <div>
                                                    <label class="textBold">Correo Electrónico:</label>
                                                    <br>
                                                    <label> daniel.muelas@uao.edu.co </label>
                                                </div>

                                            </div>
                                            <form>
                                                <div class="dropdown-divider"></div>
                                    </div>
                                    <div class="col-lg-5 emprendedorInfoPro">
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="textBold">Vinculo Universidad:</label>
                                                    <br>
                                                    <label> Estudiante pregrado </label>
                                                </div>
                                                <div>
                                                    <label class="textBold">Facultad:</label>
                                                    <br>
                                                    <label> Ingeniería </label>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="textBold">Programa:</label>
                                                    <br>
                                                    <label> Ingeniería informática </label>
                                                </div>
                                                <div>
                                                    <label class="textBold">Sector económico:</label>
                                                    <br>
                                                    <label> Medio </label>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="textBold">Dirección:</label>
                                                    <br>
                                                    <label> Calle 3B#95-40 Diagonal 25 </label>
                                                </div>
                                                <div>
                                                    <label class="textBold">Ciudad:</label>
                                                    <br>
                                                    <label> Santiago de Cali </label>
                                                </div>
                                            </div>
                                            <form>
                                                <div class="dropdown-divider"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="infoProyecto" role="tabpanel" aria-labelledby="mes_2">
                                <div class="row userInfo">
                                    <div class="projectTitle form-group mb-2">
                                        <label class="textBold">Nombre de la iniciativa:</label>
                                        <label>Espacio verde creando oxigeno para el futuro</label>
                                    </div>
                                </div>
                                <div class="projectInfo justify-content-center">
                                    <form>
                                        <div class="form-row align-items-center">
                                            <div class="col-md-6 my-1">
                                                <label for="exampleFormControlTextarea1">Descripción de la idea de
                                                    negocio</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>

                                            <div class="col-md-6 my-1">
                                                <label for="exampleFormControlTextarea1">Necesidad o problema que
                                                    soluciona</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-row align-items-center">
                                            <div class="col-md-6 my-1">
                                                <label for="exampleFormControlTextarea1">Defina cual es su principal
                                                    cliente
                                                    o usuario</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>

                                            <div class="col-md-6 my-1">
                                                <label for="exampleFormControlTextarea1">Mencione las validaciones que
                                                    ha realizado</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="checkForm">
                                                <label class="form-check-label textBold" for="inlineCheckbox2">
                                                    Instrumentos de validación: 
                                                </label>&nbsp&nbsp
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">
                                                    Entrevistas
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">
                                                    Encuestas
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">
                                                    Grupos focales
                                                </label>
                                            </div>
                                            <label class="form-check-label " for="inlineCheckbox2">
                                                    Otro: 
                                            </label>&nbsp&nbsp
                                            <input type="text" class="form-control" id="inputPassword2" placeholder="Otro">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="infoConsultor" role="tabpanel" aria-labelledby="mes_3">
                                consultor
                            </div>
                        </div>
            </main>
            <!--Fin del contenido principal-->
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            <img src="img/iconsUAO.png" class="footerImg">
                        </div>
                        <div class="footerInfo">
                            <p class="footerMsj">
                                Personería jurídica, Res. No. 0618, de la Gobernación del Valle del Cauca, del 20 de
                                febrero de 1970.
                                Universidad Autónoma de Occidente, Res. No. 2766, del Ministerio de Educación Nacional,
                                del 13 de noviembre de 2003.
                                Acreditación Institucional de Alta Calidad, Res. No. 16740, del 24 de agosto de 2017,
                                con vigencia hasta el 2021.
                                Universidad Vigilada MinEducación
                            </p>

                            <p class="footerBold">
                                La Universidad Autónoma de Occidente está sujeta a inspección y
                                vigilancia por el Ministerio de Educación Nacional - Artículo 39 del decreto 1295 de
                                2010
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>