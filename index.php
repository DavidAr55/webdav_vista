<?php
    $folio = $_GET['folio'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="Author" lang="es" content="Azurita Agency">
    <meta name="keywords" content="nine minutes pizza, 9 minutes pizza, pizza, pizza 9 minutos, nueve minutos pizza, pizza cerca de mi, pizza a domicilio, Nine Minutes Pizza">
    <meta name="description" lang="es" content="En Nine Minutes Pizza nos comprometemos a entregarle al cliente su pizza en nuestro tiempo récord que son 9 minutos, ven y disfruta de nuestras maravillosas promociones y pizzas de especialidad, pregunta por promociones. Te esperamos aquí.">
    <meta name="copyright" content="copyright © nineminutespizza.com.mx">
    <meta name="robots" content="index">

    <!-- Fuentes de google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    
    <!-- CSS estilos -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/form.css">

    <!-- Bootstrap 5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <!-- Barra de nabegacion de la pagina -->
    <nav class="contairner-nav">
        <div class="contairner-logotipo">
            <a href="http://www.davidar55.com/virtualizacion_web/home" title="Nine Minutes Pizza"><img src="http://www.davidar55.com/virtualizacion_web/images/logotipo_nineminutes.png"></a>
        </div>
        <div class="container-opciones-nav altern">
            <div class="nav-top">
                <div class="nav-top-right">
                    <p id="formato-texto-nav">redes sociales</p>
                    <a href="https://www.facebook.com/NineMinutesPizza/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/nineminutespizza/"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="nav-top-left">

                    <div class="container-sucursal-actual">
                        <label>
                            <p id="suc-nav">tu sucursal: <b>Federalismo</b></p>
                        </label>
                    </div>
                    <div class="container-num-tel">
                        <a style="color: white;" href="tel:33 1202 1853"><h3><i class="fa-solid fa-phone"></i> 33 1202 1853</h3></a> 
                    </div>

                    <div class="container-sucursal-actual"></div>
                    <div class="container-num-tel"></div>

                    <div class="container-login">
                        <a href="http://www.davidar55.com/virtualizacion_web/php/scripts/cerrar_sesion.php" id="formato-texto-nav">Cerrar sesión</a>
                        <a href="http://www.davidar55.com/virtualizacion_web/perfil"><i class="fa-solid fa-user"></i></a>
                    </div>

                    <div class="container-btn-carrito">
                        <a href="http://www.davidar55.com/virtualizacion_web/ver-carrito"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
            </div>
            <div class="nav-bottom">
                <ul id="formato-texto-nav">
                    <li><a href="http://www.davidar55.com/virtualizacion_web/home">INICIO</a></li>
                    <li><a href="http://www.davidar55.com/virtualizacion_web/buscar-sucursal">SUCURSALES</a></li>
                    <li><a href="http://www.davidar55.com/virtualizacion_web/promociones">PROMOCIONES</a></li>
                    <li><a href="http://www.davidar55.com/virtualizacion_web/menu">MENÚ</a></li>
                    <li><a href="http://www.davidar55.com/virtualizacion_web/especialidad">ESPECIALIDADES</a></li>
                    <li><h2><a href="http://www.davidar55.com/virtualizacion_web/home#ordenar-en-linea" id="ordenar">ORDENAR</a></h2></li>
                </ul>
            </div>
        </div>
        <div class="contariner-btn-menu">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
            <ul id="formato-texto-nav" class="ul-movil">
                <a href="http://www.davidar55.com/virtualizacion_web/home"><li><i class="fas fa-house"></i> Inicio</li></a>
                <a href="http://www.davidar55.com/virtualizacion_web/buscar-sucursal"><li><i class="fa-solid fa-shop"></i> Sucursales</li></a>
                <a href="http://www.davidar55.com/virtualizacion_web/promociones"><li><i class="fa-solid fa-percent"></i> Promociones</li></a>
                <a href="http://www.davidar55.com/virtualizacion_web/menu"><li><i class="fa-solid fa-pizza-slice"></i> Menú</li></a>
                <a href="http://www.davidar55.com/virtualizacion_web/especialidad"><li><i class="fa-solid fa-star"></i> Especialidades</li></a>
                <li class="line-li"></li>
                <a href="http://www.davidar55.com/virtualizacion_web/ver-carrito"><li class="icono-carrio-modal"><i class="fa-solid fa-cart-shopping car-btn"></i></li></a>

                <a href="http://www.davidar55.com/virtualizacion_web/perfil"><li><i class="fa-solid fa-user"></i> Mi perfil</li></a>
                <a href="http://www.davidar55.com/virtualizacion_web/php/scripts/cerrar_sesion.php"><li><i class="fa-solid fa-address-card"></i> Cerrar sesión</li></a>

            </ul>
        </div>
    </nav>

    <div class="container-main">
        <h1>Tiket de compra: </h1>
        <a href="pdf_<?php echo $folio; ?>.pdf">pdf_<?php echo $folio; ?>.pdf</a>
    </div>
    
    <!-- Pie de pagina con informacion de -->
    <footer>
        <div class="container-info-footer">
            <div class="container-divs">
                <div class="div-info" id="altern">
                    <img src="http://www.davidar55.com/virtualizacion_web/images/logotipo_nineminutes-blanco.png">
                    <div>
                        <p id="formato-texto-footer">© 2023 Nine minutes pizza.</p>
                        <p id="formato-texto-footer">Todos los derechos reservados.</p>
                    </div>
                </div>
                <div class="div-info">
                    <div>
                        <label>
                            <p id="formato-texto-footer"><b>tu sucursal: Federalismo</b></p>
                        </label>

                        <h3 class="titulos-footer"><b>Navegación</b></h3>
                        <ul class="lista-footer">
                            <li><a href="http://www.davidar55.com/virtualizacion_web/home" id="formato-texto-footer">inicio</a></li>
                            <li><a href="http://www.davidar55.com/virtualizacion_web/buscar-sucursal" id="formato-texto-footer">sucursales</a></li>
                            <li><a href="http://www.davidar55.com/virtualizacion_web/promociones" id="formato-texto-footer">promociones</a></li>
                            <li><a href="http://www.davidar55.com/virtualizacion_web/menu" id="formato-texto-footer">menú</a></li>
                            <li><a href="http://www.davidar55.com/virtualizacion_web/especialidad" id="formato-texto-footer">especialidades</a></li>
                        </ul>
                    </div>
                </div>
                <div class="div-info">
                    <div>

                        <a style="color: white;" href="tel:33 1202 1853" target="_blank"><h2 class="h3-num"><i class="fa-solid fa-phone"></i> 33 1202 1853</h2></a>

                        <h3 class="titulos-footer"><b>Siguenos en las redes</b></h3>
                        <ul class="ul-icons">
                            <li><a href="https://www.facebook.com/NineMinutesPizza/" id="formato-texto-footer" target="_blank"><i class="fa-brands fa-facebook icon-redes"></i></a></li>
                            <li><a href="https://www.instagram.com/nineminutespizza/" id="formato-texto-footer" target="_blank"><i class="fa-brands fa-instagram icon-redes"></i></a></li>
                        </ul>
                        <h3 class="titulos-footer"><b>Contáctanos</b></h3>
                        <p id="formato-texto-footer">contacto@nineminutes.com.mx</p>
                    </div>
                </div>
                <div class="div-info">
                    <div class="container_ordener_online">
                        <h2><a href="http://www.davidar55.com/virtualizacion_web/home#ordenar-en-linea" id="ordenar">ORDENAR EN LÍNEA</a></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-legal">
            <div class="legal-izq">
                <b id="formato-texto-footer">Legales</b>
            </div>
            <div class="legal-der">
                <p><a href="http://www.davidar55.com/virtualizacion_web/privacidad" id="formato-texto-footer">Aviso de privacidad</a></p>
            </div>
        </div>
    </footer>

    <!-- Java Script -->
    <script src="https://kit.fontawesome.com/4280206d6e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Swal2 -->
    <script src="https://kit.fontawesome.com/4280206d6e.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="js/getMetodo.js"></script>
    <!-- <script src="js/inputNumber.js"></script> -->
</body>
</html> 