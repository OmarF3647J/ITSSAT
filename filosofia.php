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


  <!-- CSS y js básico plnantilla -->
  <script src="js/spinner.js"></script>
  <link rel="stylesheet" href="mycss/spinner.css">
  <link rel="stylesheet" href="mycss/header.css">
  <link rel="stylesheet" href="mycss/menu.css">
  <script src="https://code.jquery.com/jquery-latest.js"></script>

  <link rel="stylesheet" href="mycss/footer.css">

  <link rel="stylesheet" href="mycss/construccion.css">

  <script src="js/menu.js"></script>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">


  <!-- Icono pestaña -->
  <link rel="icon" href="img/favicon/tecnm.ico"/>
  <!-- Titulo pestaña -->
  <title>ITSSAT – Filosofía</title>



  <style>
    /* General Reset */
    .titulo{
      width: 100%;
      text-align: center;
      font-size: 600%;
      background: linear-gradient(to right, #0039e3, #0432bd, #042a4e, #0432bd, #0039e3);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .container-fil {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin: 1% auto 0;
    }

    .card_fil {
      background-color: white;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      padding: 20px;
      width: 40%;
      margin: 20px;
      text-align: justify;
    }

    .text_card {
      font-size: 60px;
      font-family: Poppins, sans-serif;
      background: linear-gradient(90deg, #bf8c4c 0, #445a58 100%);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin: 0;
    }


    .card_fil p {
      font-size: 1rem;
      color: #333;
      line-height: 1.6;
    }


    /*VALORES*/
    .container-valores {
      display: flex;
      flex-wrap: wrap;
      
      justify-content: center;
      width: 80%;
      margin: 1% auto 0;
      padding: 0;
    }
    .tarjeta_valores{
      background: white;
      width: 40%;
      margin: 3% 5% 1% 1%;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 1rem;
    }

    .contenedor_texto {
      width: 90%;
      margin: -8% 0% 5% 5%;
      display: flex;
      text-align: justify;
    }
    .tarjeta_texto {
      margin: 5% 0% 5% 5%;
      width: 80%;
      border-radius: 1rem;
      font-size: 1.2rem;
      font-weight: 600;
      
    }

    .tarjeta_valores:hover {
      background-color: #f3f3f3;
      cursor: pointer;
    }

    .icono {
      color: #0056ff;
      font-size: 1.5rem;
      margin-right: 1rem;
    }

    /*Estilos para TELEFONOS*/
    @media only screen and (max-width: 768px) {
      .titulo {
      font-size: 50px;
      }

      .card_fil {
      padding: 20px;
      width: 90%;
      margin: 15px;
      text-align: justify;
    }

    .tarjeta_valores{
      width: 95%;
      margin-bottom: 5%;
    }


    }
  </style>

</head>


<body>

<?php include 'header.html'; ?>


<div id="preloader">
  <div class="spinner"></div>
</div>





<br><br><br><br><br><br><br><br>

  <div class="container-fil">
    
<h1 class="titulo">Filosofía Institucional</h1>
    <br> <br>
    <div class="card_fil">
      <h2 class="text_card">Misión</h2>
      <p>Ser un Instituto de Educación Superior formador de profesionistas para el desarrollo económico de la sociedad, mediante un proceso de aprendizaje integral.</p>
    </div>
    <div class="card_fil">
      <h2 class="text_card">Visión</h2>
      <p>Ser el Instituto Tecnológico con mayor fortaleza en el Estado, reconocido como la primera opción de Educación Superior, fomentando respeto, compromiso y honestidad, generando calidad a través de la mejora continua.</p>
    </div>
  </div>


  <br>
  <br>
  
  <h1 class="titulo">Valores</h1>
  <div class="container-valores">
    <br><br><br>
      <div class="tarjeta_valores">
        <div class="tarjeta_texto">
          <span class="icono">&#9658;</span>
          Compromiso
        </div>
        <br><br>
        <div class="contenedor_texto">
          <p>Es el deber contraído con fidelidad entre el instituto y sus trabajadores, como el medio para lograr un mejor servicio educativo.</p>
        </div>
      </div>
      
      <div class="tarjeta_valores">
        <div class="tarjeta_texto">
          <span class="icono">&#9658;</span>
          Perseverancia
        </div>
        <br><br>
        <div class="contenedor_texto">
          <p>Es el esfuerzo constante para alcanzar las metas institucionales.</p>
        </div>
      </div>

      <div class="tarjeta_valores">
        <div class="tarjeta_texto">
          <span class="icono">&#9658;</span>
          Tolerancia y respeto mutuo
        </div>
        <br><br>
        <div class="contenedor_texto">
          <p>Es la decisión firme de no transgredir los derechos, pensamientos y cultura de los integrantes del instituto y su entorno.</p>
        </div>
      </div>

      <div class="tarjeta_valores">
        <div class="tarjeta_texto">
          <span class="icono">&#9658;</span>
          Gentileza
        </div>
        <br><br>
        <div class="contenedor_texto">
          <p>Es la cortesía que ofrece el instituto al interior y el exterior en todos sus servicios.</p>
        </div>
      </div>

  </div>



<?php include 'footer.html'; ?>

<!------------------ Js menu menú responsivo----------------->


</body>
</html>