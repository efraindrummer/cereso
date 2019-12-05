<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
    #menu {
        width: 500px;
        margin: 0 auto
    }
    #menu>ul>li {
        float: left
    }
    #menu>ul>li a {
        display: block;
        width: 100px;
        height: 70px;
        background: yellow;
        text-align: center;
        line-height: 70px
    }
    #menu>ul>li>ul {
        display: none
    }
    #menu>ul>li>ul>li {
        position: relative
    }
    #menu>ul>li>ul>li>a {
        background: white
    }
    #menu>ul>li>ul>li>ul {
        position: absolute;
        left: 100px;
        top: 0;
        display: none
    }
    #menu>ul>li>ul>li>ul a {
        background: #ff0
    }
    #menu ul {
        list-style: none;
        margin: 0;
        padding: 0
    }
    </style>
    <style>
        body{
            background-image: url("fondo_menu.jpg");
        }
    </style>
</head>

<body>
    <nav id="menu">
        <ul>
            <li><a href="#">POLICIA.</a>
                <ul>
                    <li><a href="policia_insertar.php">INSERTAR.</a>
                    </li>
                    <li><a href="policia_consulta.php">CONSULTAR.</a>
                    </li>
                    <li><a href="policia_modificar.php">MODIFICAR.</a>
                    </li>
                    <li><a href="policia_eliminar.php">ELIMINAR.</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">ZONA.</a>
                <ul>
                    <li><a href="zona_insertar.php">INSERTAR.</a>
                    </li>
                    <li><a href="zona_consultar.php">CONSULTAR.</a>
                    </li>
                    <li><a href="zona_modificar.php">MODIFICAR.</a>
                    </li>
                    <li><a href="zona_eliminar.php">ELIMINAR.</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">REOS</a>
                <ul>
                    <li><a href="reo_insertar.php">INSERTAR.</a>
                    </li>
                    <li><a href="reo_consultar.php">CONSULTAR.</a>
                    </li>
                    <li><a href="reo_modificar.php">MODIFICAR.</a>
                    </li>
                    <li><a href="reo_eliminar.php">ELIMINAR.</a>
                    </li>
                    <li><a href="#">REOS_TRABAJAN.</a>
                        <ul>
                            <li><a href="trabajan_insertar.php">INSERTAR.</a>
                            </li>
                            <li><a href="trabajan_consultar.php">CONSULTAR.</a>
                            </li>
                            <li><a href="trabajan_modificar.php">MODIFICAR.</a>
                            </li>
                            <li><a href="trabajan_eliminar.php">ELIMINAR.</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">DELITOS.</a>
                <ul>
                    <li><a href="delitos_insertar.php">INSERTAR.</a>
                    </li>
                    <li><a href="delitos_consultar.php">CONSULTAR.</a>
                    </li>
                    <li><a href="delitos_modificar.php">MODIFICAR.</a>
                    </li>
                    <li><a href="delitos_eliminar.php">ELIMINAR.</a>
                    </li>
                </ul>
            </li>
            <li><a href="#">DELITO_REOS.</a>
                <ul>
                    <li><a href="delito_reos_insertar.php">INSERTAR.</a>
                    </li>
                    <li><a href="delito_reos_consultar.php">CONSULTAR.</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $menu = $('#menu').find('ul').find('li');

        $menu.hover(function() {
            $(this).children('ul').stop();
            $(this).children('ul').slideDown();
        }, function() {
            $(this).children('ul').stop();
            $(this).children('ul').slideUp();
        });
    });
    </script>
</body>

</html>