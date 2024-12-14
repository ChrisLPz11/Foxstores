<?php
include "admin/connection.php";
$count_data = 0;

if (isset($_COOKIE['item']))  //this is for check cookies are available or nor
{
    foreach ($_COOKIE['item'] as $name1 => $value)   //this is for looping as per cookies if 3 cookies then loop move 3 times
    {
        $count_data = $count_data+1;;

    }
}
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <style type="text/css">
        ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color:black;
        }
        ::-moz-placeholder { /* Firefox 19+ */
            color:black;
        }
        :-ms-input-placeholder { /* IE 10+ */
            color:black;
        }
        :-moz-placeholder { /* Firefox 18- */
            color:black;
        }
    </style>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>
        <?php
        $res1=mysqli_query($link,"select * from about_contact_title");
        while($row1=mysqli_fetch_array($res1))
        {
            echo $row1["project_title"];
        }
        ?></title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.html">
    <link rel="shortcut icon" href="assets/ico/favicon.html">

    <!-- CSS Global -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap-select-1.9.3/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/owl-carousel2/assets/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/Swiper-3.2.7/dist/css/swiper.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/royalslider/skins/universal/rs-universal.css" rel="stylesheet">
    <link href="assets/plugins/royalslider/royalslider.css" rel="stylesheet">
    <link href="assets/plugins/subscribe-better-master/subscribe-better.css" rel="stylesheet" type="text/css">

    <!-- Icons Font CSS -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="assets/css/header.css" rel="stylesheet" type="text/css">

</head>


<body class="home page">

<!-- HEADER -->
<header id="masthead" class="clearfix" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
    <div class="site-subheader site-header">
        <div class="container theme-container">
            <!-- Language & Currency Switcher -->
            <ul class="pull-left list-unstyled list-inline">


            </ul>

            <!-- Mini Cart -->
            <ul class="pull-right list-unstyled list-inline">
                <li class="menu-item">
                    <input type="text" name="search" id="search" placeholder="Search">&nbsp;<span><i class="fa fa-search" style="color: white;font-size: 22px; cursor: pointer" onclick="search();"></i></span>
                </li>
                <?php
                if(isset($_SESSION["email"]))
                {
                    ?>
                    <li class="nav-dropdown">
                        <a href="#" style="color:white">Mi cuenta <i class="fa fa-angle-down" style="font-weight: bold; font-size:20px;"></i></a>
                        <ul class="nav-dropdown-inner list-unstyled accnt-list">
                            <li> <a href="my_order.php" style="color:black" >Mi Orden</a></li>
                            <li> <a href="edit_profile.php" style="color:black" >Editar Perfil</a></li>
                            <li> <a href="logout.php" style="color:black" >Cerrar sesión</a></li>

                        </ul>
                    </li>
                <?php
                }
                ?>


                <li class="menu-item">
                    <a href="cart.php" style="color:white">Carrito(<?php echo $count_data; ?>)</a>
                </li>
                <?php
                if(!isset($_SESSION["email"]))
                {
                    ?>
                    <li class="menu-item">
                        <a onclick="window.location='login.php'" data-toggle="modal" style="color:white">Login</a>
                    </li>
                <?php
                }
                ?>

            </ul>

        </div>
    </div>

    <div class="header-wrap" id="typo-sticky-header">
        <div class="container theme-container reltv-div">

            <div class="pull-right header-search visible-xs">
                <a id="open-popup-menu" class="nav-trigger header-link-search" href="javascript:void(0)" title="Menu">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="top-header pull-left">
                        <div class="logo-area">
                            <a href="index.php" class="thm-logo fsz-35">
                                <b class="bold-font-3 wht-clr"> <?php
                                    $res1=mysqli_query($link,"select * from about_contact_title");
                                    while($row1=mysqli_fetch_array($res1))
                                    {
                                        echo $row1["project_title"];
                                    }
                                    ?></title></b>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Navigation -->

                <div class="col-md-9 col-sm-9 static-div">
                    <div class="navigation pull-left">
                        <nav>
                            <div class="" id="primary-navigation">
                                <ul class="nav navbar-nav primary-navbar">
                                    <li class="dropdown active">
                                        <a onclick="window.location='index.php'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"  >Categoria <i class="fa fa-angle-down" style="font-weight: bold; font-size:20px;"></i></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index.php" style="color:black">Todos los Productos </a></li>

                                            <?php
                                            $res=mysqli_query($link,"select * from category");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                ?>
                                                <li><a href="index.php?category=<?php echo $row["category_name"]; ?>" style="color:black"><?php echo $row["category_name"]?></a></li>
                                            <?php
                                            }
                                            ?>

                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contacto</a></li>
                                    <li><a href="about.php">Acerca de</a></li>
                                </ul>
                            </div>

                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>



<script type="text/javascript">
    $(document).ready(function(){
    $('#search').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            if(document.getElementById('search').value=="")
            {
                alert("please write something on searchbox");
            }
            else
            {
                window.location='index.php?search='+document.getElementById('search').value;
            }

        }
        event.stopPropagation();
    });


    });

    function search()
    {
        if(document.getElementById('search').value=="")
        {
            alert("please write something on searchbox");
        }
        else
        {
            window.location='index.php?search='+document.getElementById('search').value;
        }

    }
</script>