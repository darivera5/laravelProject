<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inicio - Sinapsis </title>
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
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
                        <a class="nav-link" href="home.php">
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
                                <a class="nav-link" href="consultarEmprendedor">Consultar Emprendedor</a>
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
                                <a class="nav-link" href="registrarMentores">Registrar Mentor</a>
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
            <main>
                <div class="container-fluid">
                    <h4 class="mt-4">Registrar Mentor</h4>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item ">Inicio</li>
                        <li class="breadcrumb-item active">Registrar Mentor</li>
                    </ol>
                </div>

                <div class="container-fluid">

               
             <form action="add"  method="post" >
                <div class="row">
                    <div class="col-xl-6">
                    
                        <div class="card bg-light">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Información Personal </div>
                            <div class="card-body">
                                <div class="form-group">
                            
                                    <div class="form-row ">
                            
                                        <div class="form-group col-md-6">
                                            <label for="cedula">Cedula</label>
                                            <input type="text" name="cedula" class="form-control " required >
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="codigo">Codigo</label>
                                            <input type="text" name="codigo" class="form-control" required  >
                                            
                                        </div>

                                    </div>
                                </div>

                            <div class="form-group">

                                <div class="form-row">

                                    <div class="form-group col-md-6">

                                        <label for="cedula">Nombre</label>
                                        <input type="text" name="nombre" class="form-control" required >
                                       

                                    </div>

                                    <div class="form-group col-md-6">

                                        <label for="apellido">Apellido</label>
                                        <input type="text" name="apellido" class="form-control" required >
                                        

                                    </div>

                                </div>

                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="celular">Celular</label>
                                            <input type="text" name="celular" class="form-control" required >
                                            
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="genero">Genero</label>
                                        <select type="text" name="genero" class="form-control"  required >
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Prefiere no especificar">Prefiere no especificar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                            <label for="correo">Correo Electronico</label>
                                            <input type="email" name="correo" class="form-control"  placeholder="example@uao.edu.co" required >
                                       
                                    </div>

                                    <div class="form-group col-md-6">
                                            <label for="contraseña">Contraseña</label>
                                            <input type="password" name="contraseña" class="form-control" required >
                                            
                                    </div><br><br>

                                </div>

                            </div>
                            </div>

                        </div>    
                              
                    </div>
            
                    <div class="col-xl-6">
                    <div class="card card bg-light"> 
                    <div class="card-header">Información laboral</div>
                    <div class="card-body">
                    <div class="form-group">
                            
                            <div class="form-row ">
                    
                                <div class="form-group col-md-6">
                                    <label for="especialidad">Especialidad</label>
                                    <input type="text" name="especialidad" class="form-control " required >
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="horario">Horarios</label>
                                    <input type="text" name="horario" class="form-control" required  >
                                    
                                </div>

                            </div>
                        </div>

                    <div class="form-group">

                        <div class="form-row">

                            <div class="form-group col-md-6">

                                <label for="cargo">Cargo</label>
                                <input type="text" name="cargo" class="form-control" required >
                               
                            </div>

                        </div>

                    </div>
                    
                    </div>
                    
                    </div><br><br>
                    <div class="card bg-light">
                    <div class="card-header">Acciones</div>
                    <div class="card-body">
                    <div class="form-group">

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <button type="submit" class="btn btn-primary separation">Registrar</button>
                            </div>

                            <div class="form-group col-md-4">
                                <a href="resgistrarMentores" class="btn btn-primary separation">Limpiar</a>
                            </div>

                            <div class="form-group col-md-4">
                                <a href="home" class="btn btn-primary separation">Cancelar</a>
                            </div>

                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                </form>  
            </div>
            </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            <img src="img/iconsUAO.png" class="footerImg">
                        </div>
                        <div class="footerInfo">
                            <p class="footerMsj">
                                Personería jurídica, Res. No. 0618, de la Gobernación del Valle del Cauca, del 20 de febrero de 1970.
                                Universidad Autónoma de Occidente, Res. No. 2766, del Ministerio de Educación Nacional, del 13 de noviembre de 2003.
                                Acreditación Institucional de Alta Calidad, Res. No. 16740, del 24 de agosto de 2017, con vigencia hasta el 2021.
                                Universidad Vigilada MinEducación
                            </p> 
                                
                            <p class="footerBold">
                                La Universidad Autónoma de Occidente está sujeta a inspección y 
                                vigilancia por el Ministerio de Educación Nacional - Artículo 39 del decreto 1295 de 2010
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
    <script src="js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</html>