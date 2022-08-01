<?php
session_start();
$correo = $_SESSION['Auntentificar'];

if(!isset($correo)){

    header("location: .../Inicio.html");
    
}else{

    

   
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG RESTAURANTE</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/styless.css">
</head>

<body>


    <header class="site-header">
        <div class="contenedor">
            <div class="barra">
                <a href="Principal.php">
                    <h1 class="no-margin">Kaliska <span> GOURMET</span></h1>
                </a>

                <nav class="navegacion">
                <a href="../../nosotros.html"><i class="fas fa-users"></i>&nbsp;Nosotros</a>
                    <a href="../../menu.html"><i class="fab fa-elementor"></i>&nbsp;Menu</a>
                    <a href="../../contacto.html"><i class="fas fa-address-book"></i>&nbsp;Contacto</a>
                  <?php  echo "<center><a href= 'SalirTrabajador.php'><i class='fas fa-power-off'></i>&nbsp; Cerrar Sesión </a></center>"; ?>
                </nav>
            </div>
            <!-- cierre barra-->
            <div class="texto-header">
            <?php  echo "<center><h2>Bienvenido Usuario con el correo $correo </h2></center>"; ?>
            <p>deleita tu paladar con las mejores recetas</p>
                <h2 class="no-margin">El mejor restaurante de la ciudad</h2>
            </div>
        </div>
    </header>


    <div class="contenido-principal contenedor">
        <main class="blog">
            <h2>Nuestro blog</h2>
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="../../img/blog1.jpg" alt="imagen blog">
                </div>
               
                 <!--imagen-->
                 <div class="contenido-blog">
                    <h3 class="no-margin">CAMARONES ASADOS</h3>
                    <p>Precalentar la parrilla a fuego medio. Ensartar a los camarones en unos pinchos de metal o de madera (si son de los últimos, asegúrese de remojar antes en agua durante 30 minutos para evitar que se quemen).
                        Añadir la mantequilla en una cacerola pequeña. Derretir por completo y llevar a ebullición.
                        Agregar la ralladura de limón, el jugo de limón y el ajo, revolver a fuego medio durante aproximadamente un minuto o hasta que el ajo empiece a dorarse un poco. Retirarlo del calor.
                        Barnizar ambos lados de los camarones con la salsa de mantequilla. Espolvorear con el condimento.
                        Colocar los camarones en la parrilla aproximadamente 5 minutos por cada lado hasta que se cuezan y empiecen a dorar ligeramente pasando la brocha de tanto en tanto.
                        Regar la mantequilla de limón restante sobre los camarones. Retirar del calor y servir inmediatamente.</p>
                        <a href="../../tutoriales.html" class="btn btn-primario"><i class="fas fa-film"></i>&nbsp;TUTORIAL</a>&nbsp;&nbsp;
                    <a href="#miModal" class="btn btn-primario"><i class="fas fa-utensils"></i>&nbsp;INGREDIENTES</a>

                    <div id="miModal" class="modal">
                        <div class="modal-contenido">
                        <a href="#">X</a>
                        <h3 style="color: #FFFFFF;">INGREDIENTES</h3>
			            <FONT FACE="Arial" SIZE="5"><p style="color:#FFFFFF"><b>
                           - 1 kilo de camarones grandes, pelados y limpios <br>
                           - 8 cucharadas de mantequilla <br>
                           - La ralladura y el jugo de un limón <br>
                            - 1 cucharada de ajo picado <br>
                           - 1 cucharada de sazonador con hierbas italianas</p></b> </FONT>        
			  </div>  
              </div>  
                </div>
            </article>


            <article class="entrada-blog">
                <div class="imagen">
                    <img src="../../img/blog2.jpg" alt="imagen blog">
                </div>
                <!--imagen2-->
                <div class="contenido-blog">
                    <h3 class="no-margin">MOJARRA</h3>
                    <p>Las mojarras deben estar limpias y sin escamas.
                        Ponemos en el molcajete o mortero los ajo, la sal, la pimienta y el comino.
                        Maceramos los ingrediente en el molcajete. Cuando ya se forma una especie de pasta,
                        incorporamos el jugo de limón y el aceite, mezclamos bien.
                        Con un cuchillo les hacemos 4-5 cortes a cada pescado por los dos lados.
                        Ponemos el adobo dentro de cada corte y adentro del vientre. Por la parte de afuera solo 
                        un poco y retirar el exceso pues el ajo en el que queda en la piel se quema y toma un color oscuro.
                        Espolvorear poca harina de trigo por cada lado incluyendo las aletas y la cola. Retirar el exceso sacudiéndolas un poco.
                        Es importante que el sartén tenga el tamaño del pescado para que se fría uniformemente. Depende del sartén podemos freír
                        las tres de una sola vez o de a una en una. Suficiente aceite vegetal a temperatura media alta.
                        Seis a siete minutos por cada lado, dependiendo del tamaño hasta que estén bien doradas y crocantes.
                        Escurrir bien y servir la Mojarra acompañada de arroz con coco, ensalada, patacones y cascos de limón.</p>
                        <a href="../../tutoriales.html" class="btn btn-primario"><i class="fas fa-film"></i>&nbsp;TUTORIAL</a>&nbsp;&nbsp;
                        <a href="#miModal2" class="btn btn-primario"><i class="fas fa-utensils"></i>&nbsp;INGREDIENTES</a>

                        <div id="miModal2" class="modal2">
                            <div class="modal-contenido2">
                            <a href="#">X</a>
                            <h3 style="color: #FFFFFF;">INGREDIENTES</h3>
                            <FONT FACE="Arial" SIZE="4"><p style="color:#FFFFFF"><b>
                              - 3 mojarras o pargo rojo (red snapper)<br>
                              - 10 dientes ajo grandes<br>
                              - 1/2 cdta sal<br>
                               - 1/2 cdta pimienta negra molida<br>
                               - 1/2 cdta comino<br>
                               - 1/2 limón verde zumo<br>
                               - 1 cdta aceite de oliva o el que tengan<br>
                               - harina de trigo para espolvorear<br>
                               - aceite vegetal para freír</p></b> </FONT>        
                  </div>  
                  </div>  
                    </div>
            </article>
            
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="../../img/blog3.jpg" alt="imagen blog">
                </div>
                <!--imagen-->
                <div class="contenido-blog">
                    <h3 class="no-margin">FILETE DE SALMON</h3>
                    <p>Calienta a fuego muy alto una plancha o una sartén grande. Échale un chorro pequeño de aceite de oliva.
                        Condimenta el salmón con sal y pimienta y ponlo a cocinar en la sartén.
                        Dependiendo del grosor de las piezas, el pescado puede tomar más tiempo en cocinarse bien. Calcula 2 minutos por cada lado.
                        Luego puedes bajar la temperatura de la plancha a la mitad y dejar que se termine de cocinar si lo quieres bien hecho.
                        Como el salmón es un pescado graso, parte de sus propios jugos lo van a cocinar, y esto es bueno.
                        Una vez listo el pescado, retira la sartén o plancha del fuego y pon cada rodaja de salmón en un plato.
                        Échales un generoso chorro de limón recién exprimido si es de tu antojo y disfruta.</p>
                        <a href="../../tutoriales.html" class="btn btn-primario"><i class="fas fa-film"></i>&nbsp;TUTORIAL</a>&nbsp;&nbsp;
                        <a href="#miModal3" class="btn btn-primario"><i class="fas fa-utensils"></i>&nbsp;INGREDIENTES</a>

                        <div id="miModal3" class="modal3">
                            <div class="modal-contenido3">
                            <a href="#">X</a>
                            <h3 style="color: #FFFFFF;">INGREDIENTES</h3>
                            <FONT FACE="Arial" SIZE="5"><p style="color:#FFFFFF"><b>
                               - 2 piezas de salmón fresco rodajas o filetes <br>
                               - Aceite de oliva <br>
                               - 1 limón <br>
                               - Sal al gusto <br>
                               - Pimienta negra al gusto </p></b> </FONT>          
                  </div>  
                  </div>  
                    </div>
            </article>
        </main>
    </div>


    <!--contenido principal-->
    <footer class="site-footer">
        <div class="contenedor">
            <div class="barra">
                <p class="no-margin">kaliska<span>GOURMET</span></p>

                <nav class="navegacion">
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>&nbsp;@kaliskaGOURMET</a>
                    <a><i class="far fa-envelope"></i>&nbsp;kaliskaGOURMET@gmail.com</a>
                    <a><i class="fab fa-whatsapp"></i>&nbsp;3232777809</a>
                </nav>

            </div>
        </div>

    </footer>

</body>

</html>