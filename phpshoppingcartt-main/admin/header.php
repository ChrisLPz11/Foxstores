<?php
if(!isset($_SESSION["username"]))
{
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from html.alfisahr.com/prudence/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 Nov 2017 09:21:50 GMT -->
<head>
    <title>Panel del Adminsitrador</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link href="assets/plugins/DataTables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>

<div id="page-container">
    <nav id="sidebar" class="sidenav">
        <div class="sidebar-wrapper">
            <div class="profile-sidebar">
                <div class="avatar">
                    <img src="images/adminimage.jpg" alt="">
                </div>
                <div class="profile-name">
                    <?php echo $_SESSION["username"]; ?>


                </div>
                <div class="profile-title">
                    Administrador
                </div>
            </div>



            <!-- ============= menu starts from here -->

            <ul class="main-menu" id="menus">
                <li>
                    <a  href="dashboard.php">
                        <span class="icon ti-home"></span>Dashboard
                    </a>
                </li>



                <li>
                    <a class="pr-mn collapsed" data-toggle="collapse" href="#uielements" aria-expanded="true">
                        <span class="icon ti-notepad"></span>Productos
                    </a>
                    <ul id="uielements" class="collapse" data-parent="#menus">
                        <li><a href="addproduct.php">Añadir nuevo producto</a></li>
                        <li><a href="view_product.php">Ver producto</a></li>
                    </ul>
                </li>
                <li>
                    <a  href="category.php">
                        <span class="icon fa fa-tasks "></span>Categoria
                    </a>
                </li>
                <li>
                    <a  href="add_photo.php">
                        <span class="icon fa fa-tasks "></span>Add Slider
                    </a>
                </li>
                <li>
                    <a  href="project_name.php">
                        <span class="icon fa fa-tasks "></span>Nombre del proyecto
                    </a>
                </li>
                <li>
                    <a  href="update_about.php">
                        <span class="icon fa fa-tasks "></span>Acerca de
                    </a>
                </li>
                <li>
                    <a  href="update_contact.php">
                        <span class="icon fa fa-tasks "></span>Contacto
                    </a>
                </li>
                <li>
                    <a  href="order.php">
                        <span class="icon ti-shopping-cart "></span>Ordenes
                    </a>
                </li>
                <li>
                    <a  href="users.php">
                        <span class="icon ti-user"></span>Usuarios
                    </a>
                </li>

                <li>
                        <a href="logout.php">  <span class="icon ti-power-off"></span>Cerrar sesión</a>

                </li>



            </ul>

            <!-- ============ menu ends here-->


        </div>
    </nav>
    <header id="page-header" class="pageheader">
        <div class="content-header">
            <div class="navbar-header">
                <button type="button" class="btn-bars btn">
                    <span class="ti-menu"></span>
                </button>
                <div class="app-title">
                   <p style="font-weight: bold">Administrador</p>
                </div>
                <div class="mobile-nav">
                    <button class="btn" type="button" id="mobileBtn">
                        <i class="ti-layout-grid2-alt"></i></button>
                </div>
            </div>
            <ul class="nav navbar-nav navbar-right">

                <li class="rightSidebar">
                  <a href="logout.php" style="color: white; font-size: 15px">  <i class="fa fa-power-off"></a></i>
                </li>
            </ul>
        </div>
    </header>
    <aside id="right-sidebar" class="r_sidebar">
        <div class="content-wrapper"><a href="javascript:void(0)" class="close-btn">
                <span class="ti-close"></span>
            </a>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="today-tab" data-toggle="tab" href="#today"
                       aria-expanded="true">Hoy</a></li>
                <li class="nav-item"><a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting">Configuración</a>
                </li>
            </ul>
            <div class="tab-content sidebar-wrapper scrollbar-inner" id="myTabContent">
                <div class="tab-pane fade show active" id="today">
                    <div class="today-date"><span class="strong"><span id="prMonth"></span> <span
                                id="prDate"></span></span>, <span id="prYear"></span>
                        <span id="prDay"></span>
                    </div>
                    <div class="block-tab">
                        <div class="block-title"><span class="ti-time"></span> Cronograma
                        </div>
                        <ul class="schedule-list list-unstyled">
                            <li>
                                <div class="time">
                                    09.00<span>AM</span></div>
                                <div class="point"></div>
                                <div class="schedule-info">
                                    Reunión informativa con la división de productos
                                    <span class="location"><span class="ti-location-pin"></span> New York, NA</span>
                                </div>
                            </li>
                            <li>
                                <div class="time">11.00<span>AM</span>
                                </div>
                                <div class="point"></div>
                                <div class="schedule-info">
                                    Reunión con el cliente
                                    <span class="location"><span class="ti-location-pin"></span> Oficina del cliente</span>
                                </div>
                            </li>
                            <li>
                                <div class="time">
                                    01.30<span>PM</span></div>
                                <div class="point"></div>
                                <div class="schedule-info">
                                    Puesta en marcha del proyecto<span class="location"><span class="ti-location-pin"></span> Oficina</span>
                                </div>
                            </li>
                            <li>
                                <div class="time">
                                    04.00<span>AM</span></div>
                                <div class="point"></div>
                                <div class="schedule-info">
                                    Discusión pública en la oficina<span class="location"><span
                                            class="ti-location-pin"></span> Cafetaria</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="block-tab">
                        <div class="block-title"><span class="ti-flag"></span> Registro de actividad
                        </div>
                        <ul class="activity-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="ti-image"></span>
                                </div>
                                <div class="log-info">
                                    El perfil de la foto ha sido actualizado
                                    <small>2 min atrás</small>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="ti-email"></span>
                                </div>
                                <div class="log-info">
                                    Nuevo correo electrónico a <strong>John Cenna</strong> enviado
                                    <small>4 hrs atrás</small>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="ti-email"></span>
                                </div>
                                <div class="log-info">Redactar un nuevo correo electrónico
                                    <small>6 hrs atrás</small>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="ti-email"></span></div>
                                <div class="log-info">Redactas un nuevo correo electrónico
                                    <small>1 day atrás</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="setting">
                    <ul class="setting-list list-unstyled">
                        <li class="header">
                            Sistema principal
                        </li>
                        <li>
                            <div class="setting-name">
                                Notificationes
                            </div>
                            <div class="switch"><input type="checkbox" class="js-switch" data-size="small" checked/>
                            </div>
                        </li>
                        <li>
                            <div class="setting-name">
                                Actualizaciones automáticas
                            </div>
                            <div class="switch">
                                <input type="checkbox" class="js-switch"/>
                            </div>
                        </li>
                        <li>
                            <div class="setting-name">
                                Ubicación
                            </div>
                            <div class="switch">
                                <input type="checkbox" class="js-switch" data-size="small" checked/>
                            </div>
                        </li>
                        <li class="header">Asistente
                        </li>
                        <li>
                            <div class="setting-name">
                                Mostrar asistente
                            </div>
                            <div class="switch">
                                <input type="checkbox" class="js-switch" data-size="small"/>
                            </div>
                        </li>
                        <li class="header">
                            Apariciones
                        </li>
                        <li>
                            <div class="setting-name">
                                Guardar historial
                            </div>
                            <div class="switch">
                                <input type="checkbox" class="js-switch" data-size="small" checked/>
                            </div>
                        </li>
                        <li>
                            <div class="setting-name">
                                Resultados rápidos
                            </div>
                            <div class="switch">
                                <input type="checkbox" class="js-switch" data-size="small"/>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </aside>
