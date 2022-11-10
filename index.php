<?php

include("cn.php");

$descuentos = "SELECT * FROM descuentos";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | Papelería Skyblue</title>
    <link rel="stylesheet" href=".\Css\detalles.css">
    <link rel="stylesheet" href=".\Css\contacto.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <header id="encabezado">

        <div class="logo">
            <div class="carrito_Item">

            </div>
            <div class="carrito_Item">
                <a href="index.php">
                    <img class="log" src=".\Imagenes\logo-Papeleria4.jpg" style="width: 100px;
                    height: 80px;
                    object-fit: contain;
                    object-position: center center;" alt="logo">
                </a>
            </div>

            <div class="carrito_Item" style="height: 60px; width: 50px;">
                <img src=".\Imagenes\carrito-de-compras.png" width="45" height="51.83" alt="compra">
            </div>
        </div>

        <div class="division">
            <hr>
        </div>

        <div class="nave_1" id="myTopnav">
            <a href="index.php">Inicio</a>
            <a href="contacto.html">Contacto</a>
            <a href="#Politicas">Políticas de la tienda</a>
            <a href="#Tienda">Tienda</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "nave_1") {
                    x.className += " responsive";
                } else {
                    x.className = "nave_1"
                }
            }
        </script>
    </header>

    <div class="bienvenida">
        <img src=".\Imagenes\bienvenida.jpg">
    </div>
    <article>
        <div class="bienvenidatext">
            <h1>Nuestros nuevos productos están aquí</h1>
        </div>
    </article>

    <div class="cartas-carrusel">
        <div class="titulo-best-seller">
            <h2 class="font_0" style="font-size: 56px; text-align: center;">
                <span style="font-size: 56px;"> Mejores Ofertas</span>
            </h2>
        </div>
        <section class="slider">
            <div class="contenedor">
                <ul id="autoWidth" class="cs-hidden">
                    <li class="item-a">
                        <div class="box">
                            <div class="slide-img">
                                <a href="#">
                                    <img src=".\Imagenes\Imagen-prueba1.jpg" alt="1">
                                </a>
                            </div>

                            <div class="detalles-box">
                                <a href="#">
                                    <div class="tipo">
                                        <span>
                                            <center>
                                                Lápiz Adhesivo Pritt 42 gramos
                                            </center>
                                        </span>
                                    </div>
                                    <div class="precio">$69.90</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="item-b">
                        <div class="box">
                            <div class="slide-img">
                                <a href="#">
                                    <img src=".\Imagenes\Imagen-prueba2.jpg" alt="1">
                                </a>
                            </div>

                            <div class="detalles-box">
                                <a href="#">
                                    <div class="tipo">
                                        <span>
                                            Sacapuntas Maped Igloo 2 piezas 
                                        </span>
                                    </div>
                                    <div class="precio">$23.50</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="item-c">
                        <div class="box">
                            <div class="slide-img">
                                <a href="#">
                                    <img src=".\Imagenes\Imagen-prueba3.jpg" alt="2">
                                </a>
                            </div>

                            <div class="detalles-box">
                                <a href="#">
                                    <div class="tipo">
                                        <span>
                                            Cuaderno Profesional Cuadro Grande Sigel 90 hojas
                                        </span>
                                    </div>
                                    <div class="precio">$24.90</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="item-d">
                        <div class="box">
                            <div class="slide-img">
                                <a href="#">
                                    <img src=".\Imagenes\Imagen-prueba4.jpg" alt="3">
                                </a>
                            </div>

                            <div class="detalles-box">
                                <a href="#">
                                    <div class="tipo">
                                        <span>
                                            Lápiz Paper M. Mirado No.2 Triangular 4 pzas
                                        </span>
                                    </div>
                                    <div class="precio">$22.50</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="item-f">
                        <div class="box">
                            <div class="slide-img">
                                <a href="#">
                                    <img src=".\Imagenes\Imagen-prueba5.jpg" alt="4">
                                </a>
                            </div>

                            <div class="detalles-box">
                                <a href="#">
                                    <div class="tipo">
                                        <span>
                                            Bolígrafos Azor Pin Point Punto Fino Multicolor 10 pzas
                                        </span>
                                    </div>
                                    <div class="precio">$59.90</div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <div class="cartas-carrusel2">
        <div class="todos-productos">
            <h5 class="font_0" style="font-size: 40px; text-align: left;">
                <span style="font-size: 40px;"> Todos los productos</span>
            </h5>
        </div>
        <section class="slider">
            <div class="contenedor">
                <ul id="autoWidth" class="cs-hidden">
                    <li class="item-a">
                        <div class="box">
                            <div class="slide-img">
                                <a href="#">
                                    <img src=".\Imagenes\pruebaprod1.jpg" alt="1">
                                </a>
                            </div>

                            <div class="detalles-box">
                                <a href="#">
                                    <div class="tipo">
                                        <span>
                                            Lápices de Colores Pastel 24 pz
                                        </span>
                                    </div>
                                    <div class="precio">$226.00</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="item-b">
                        <div class="box">
                            <div class="slide-img">
                                <a href="#">
                                    <img src=".\Imagenes\pruebaprod2.jpg" alt="1">
                                </a>
                            </div>

                            <div class="detalles-box">
                                <a href="#">
                                    <div class="tipo">
                                        <span>
                                            Set Juego Geometria
                                        </span>
                                    </div>
                                    <div class="precio">$149.00</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="item-c">
                        <div class="box">
                            <div class="slide-img">
                                <a href="#">
                                    <img src=".\Imagenes\pruebaprod3.jpg" alt="2">
                                </a>
                            </div>

                            <div class="detalles-box">
                                <a href="#">
                                    <div class="tipo">
                                        <span>
                                            Mochila Escolar Transparente
                                        </span>
                                    </div>
                                    <div class="precio">$849.00</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="item-d">
                        <div class="box">
                            <div class="slide-img">
                                <a href="#">
                                    <img src=".\Imagenes\pruebaprod4.jpg" alt="3">
                                </a>
                            </div>

                            <div class="detalles-box">
                                <a href="#">
                                    <div class="tipo">
                                        <span>
                                            Libreta 80 hojas
                                        </span>
                                    </div>
                                    <div class="precio">$279.00</div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="item-f">
                        <div class="box">
                            <div class="slide-img">
                                <a href="#">
                                    <img src=".\Imagenes\pruebaprod5.jpg" alt="4">
                                </a>
                            </div>

                            <div class="detalles-box">
                                <a href="#">
                                    <div class="tipo">
                                        <span>
                                            Lapicera Escolar Pop It
                                        </span>
                                    </div>
                                    <div class="precio">$349.00</div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <div class = "container-table">

        <div class="table_title"><h2 class = "tamaño">Descuentos de los Productos</h2></div>

        <div class="table_header"><p>Producto</p></div>

        <div class="table_header porcentaje_item"><p>Cantidad de Descuento</p></div>
        <?php $resultado = mysqli_query($conexion, $descuentos);

        while($row = mysqli_fetch_assoc($resultado)) { ?>
        <div class="table_item"> <p> <?php echo $row["producto"]; ?> </p> </div>
        <div class="porcentaje_item"> <p> <?php echo $row["porcentaje"]; ?> % </p></div>
        <?php } ?>
    </div>

    <div class="container">
        <h2 class="font_4" style="text-align:center; line-height:1.35em; font-size:40px;">
            <span class="color_15">Nuestros orígenes</span>
        </h2>
    
        <p class="font_9" style="text-align:center; line-height:1.875em; font-size:15px;">
            <span class="color_15">
                "Nuestra Papelería Skyblue de gran renombre ha ofrecido continuamente una variedad de productos de alta calidad y asequibles desde el día que se fundó."
                <br>
                <br>
                "Nuestra pasión por la excelencia nos condujo a materializar esta misión, siendo esta la parte fundamental que nos ha impulsado a seguir adelante. El equipo Papelería Skyblue sabe que cada producto es importante, por lo que haremos de tu experiencia de compra lo más placentera posible. Echa un vistazo a nuestra tienda, consulta nuestras ofertas especiales y haznos saber tus dudas."
            </span>
        </p>
    </div>
    


    
    <h2 class="sobrenombre">Escríbenos</h2>


    <form class="form">
    
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required class="form_input">
        </div>
        <div>
            <label for="email">Correo</label>
            <input type="email" name="mail" id="mail" placeholder="usuario@dominio.xy" required class="form_input">
        </div>
        <div class="textarea">
            <label for="asunto">Asunto</label>
            <textarea class="form_input"  placeholder="Escriba aqui su mensaje" maxlength="200"></textarea >
        </div>
        <div>
            <label for="telefono">Telefono</label>     
            <input type="telefono" placeholder="(81) 26458701" class="form_input">           
        </div>
        <input type="submit" value="Solicitar" >

    </form>

    <footer>
        <div class="correo">
            <h4>info@mysite.com</h4>
        </div>
        <div class="derechos">
            <h4> &copy2022 por Papeleria Skyblue</h4>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>