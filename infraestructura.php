
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="ITSSAT">
  <meta name="description" content="Página del Tecnológico Superior de San Andrés Tuxtla">
  <meta name="keywords" content="TecNM, Instituto Tecnológico Nacional de México, Tec, Tecnológico de San Andrés, Universidad, ITSSAT"/>
  

  <!-- Animate.css bounce -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- WOW.js bounce -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<!-- Flickity -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

  <!-- CSS y js básico plantilla -->
  <script src="js/spinner.js"></script>
  <link rel="stylesheet" href="mycss/spinner.css">


  <link rel="stylesheet" href="mycss/header.css">
  <link rel="stylesheet" href="mycss/menu.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="mycss/footer.css">

  <script src="js/menu.js"></script>

  <!-- CSS estilos de esta página -->
  <link rel="stylesheet" href="mycss/estilos_carreras.css">


  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">




  <!-- Icono pestaña -->
  <link rel="icon" href="img/favicon/tecnm.ico"/>
  <!-- Titulo pestaña -->
  <title>ITSSAT – Ing. Infraestructura</title>

  <style>
        
        .containerinsfra {
            width: 100%;
            gap: 1.5%;
            display: flex;
            padding: 2%;
            justify-content: center;
        }
        .large-cardinfra {
            width: 60%; 
            position: relative;
            overflow: hidden;
        }
        .small-cardinfra {
            width: 40%; 
            display: flex;
            flex-direction: column;
            gap: 18%;
        }
        
        .top-cardinfra {
            display: flex;
            gap: 4%;
            height: auto;
        }
        .bottom-cardinfra {
            height: auto;
        }
        .cardinfra {
            height: 140%;
            position: relative;
            overflow: hidden;
            border-radius: 5px;
        }
        .cardinfra img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Recorta la imagen sin deformarla */
            display: block; /* Elimina el espacio extra alrededor de la imagen */
        }
        .sombreado {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            font-size: 14px;
        }
        .texto_arriba {
            position: absolute;
            top: 10px;
            left: 10px;
            background:rgba(0, 0, 0, 0.45);
            color: white;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 3px;
        }
        .cont_inf {
            width: 31%; 
            padding: auto;
            position: relative;
            overflow: hidden;
        }

    @media only screen and (max-width: 768px) {
    .containerinsfra {
        flex-direction: column; 
        align-items: center; 
        gap: 20px; 
    }

    .large-cardinfra,
    .small-cardinfra,
    .cont_inf {
        width: 90%; /* Ajusta el ancho para que no ocupe toda la pantalla */
    }

    .small-cardinfra {
        gap: 10px;
    }

    .top-cardinfra {
        flex-direction: column; /* Las imágenes pequeñas también en columna */
        gap: 10px;
    }

    .cardinfra img {
        height: auto; /* Evita que las imágenes se distorsionen */
    }
}



    </style>
</head>


<body>

  
<?php include 'header.html';?>


<div id="preloader">
  <div class="spinner"></div>
</div>


<!-- Mapa -->
<br><br><br><br><br><br><br><br><br><br>
<H2>Infraestructura</H2>

    <div class="containerinsfra">

        <div class="large-cardinfra cardinfra">
            <img src="img\infraestrutura\EDI-A.jpg" alt="Edificio de Laboratorios y Talleres">
            <div class="texto_arriba">INFRAESTRUCTURA</div>
            <div class="sombreado">
                Febrero 2025
                <h3>Edificio A</h3>
            </div>
        </div>

        <div class="small-cardinfra">
            <div class="top-cardinfra">
                <div class="cardinfra">
                    <img src="img\infraestrutura\EDI-I2.jpg" alt="Edificio Académico A">
                    <div class="texto_arriba">INFRAESTRUCTURA</div>
                    <div class="sombreado">
                        Febrero 2025
                        <h3>Edificio I</h3>
                    </div>
                </div>
                <div class="cardinfra">
                    <img src="img\infraestrutura\DOMO.jpg" alt="Edificio Académico B">
                    <div class="texto_arriba">INFRAESTRUCTURA</div>
                    <div class="sombreado">
                        Febrero 2025
                        <h3>Domo-Cancha</h3>
                    </div>
                </div>
            </div>
            <div class="bottom-cardinfra cardinfra">
                <img src="img\infraestrutura\EDI-B.jpg" alt="Otra Infraestructura">
                <div class="texto_arriba">INFRAESTRUCTURA</div>
                <div class="sombreado">
                    Febrero 2025
                    <h3>Edificio B</h3>
                </div>
            </div>
        </div>
        

    </div>

    <div class="containerinsfra">

        <div class="small-cardinfra">
            <div class="top-cardinfra">
                <div class="cardinfra">
                    <img src="img\infraestrutura\CAMPO.jpg" alt="Edificio Académico A">
                    <div class="texto_arriba">INFRAESTRUCTURA</div>
                    <div class="sombreado">
                        Febrero 2025
                        <h3>Campo</h3>
                    </div>
                </div>
                <div class="cardinfra">
                    <img src="img\infraestrutura\EDI-D.jpg" alt="Edificio Académico B">
                    <div class="texto_arriba">INFRAESTRUCTURA</div>
                    <div class="sombreado">
                        Febrero 2025
                        <h3>Edificio D</h3>
                    </div>
                </div>
            </div>
            <div class="bottom-cardinfra cardinfra">
                <img src="img\infraestrutura\EDI-LSWL.jpg" alt="Otra Infraestructura">
                <div class="texto_arriba">INFRAESTRUCTURA</div>
                <div class="sombreado">
                    Febrero 2025
                    <h3>Edificio de Software Libre</h3>
                </div>
            </div>
        </div>

        <div class="large-cardinfra cardinfra">
            <img src="img\infraestrutura\BIBLIOTEC.jpg" alt="Edificio de Laboratorios y Talleres">
            <div class="texto_arriba">INFRAESTRUCTURA</div>
            <div class="sombreado">
                Febrero 2025
                <h3>Centro de Información</h3>
            </div>
        </div>

    </div>

    <div class="containerinsfra">

        <div class="cont_inf cardinfra">
            <img src="img\infraestrutura\EDI-H.jpg" alt="Edificio de Laboratorios y Talleres">
            <div class="texto_arriba">INFRAESTRUCTURA</div>
            <div class="sombreado">
                Febrero 2025
                <h3>Edificio H</h3>
            </div>
        </div>

        <div class="cont_inf cardinfra">
            <img src="img\infraestrutura\ARBOL.jpg" alt="Edificio de Laboratorios y Talleres">
            <div class="texto_arriba">INFRAESTRUCTURA</div>
            <div class="sombreado">
                Febrero 2025
                <h3>Árbol</h3>
            </div>
        </div>

        <div class="cont_inf cardinfra">
            <img src="img\infraestrutura\EDI-E.jpg" alt="Edificio de Laboratorios y Talleres">
            <div class="texto_arriba">INFRAESTRUCTURA</div>
            <div class="sombreado">
                Febrero 2025
                <h3>Edificio E</h3>
            </div>
        </div>

        

    </div>


<?php include 'footer.html'; ?>


</body>
</html>








