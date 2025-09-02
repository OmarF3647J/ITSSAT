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
  <title>ITSSAT – Ing. Ubicación</title>



</head>


<body>

  
<?php include 'header.html'; ?>


<div id="preloader">
  <div class="spinner"></div>
</div>


<!-- Mapa -->
<br><br><br><br><br><br><br><br><br><br>
<h2>¡Vísitanos!</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15140.214781280141!2d-95.169389!3d18.435871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c272311db4bbeb%3A0x55cb48e28a387d4!2sTecNM-Campus%20-%20San%20Andr%C3%A9s%20Tuxtla!5e0!3m2!1ses-419!2smx!4v1737149286702!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



<!------------------------ wsp icon -------------------------->
<a href="https://wa.me/5212941016169?text=Hola, me gustaría saber más acerca de la carrera Ingeniería Informática">
  <div id="wsp" title="Whatsapp">
    <img src="img/favicon/whatsapp.png" width="60px">
  </div>
</a>


<?php include 'footer.html'; ?>



<!--------- Appr_auto fondo------->
<script>
  // Obtiene todos los elementos con la clase 'appear_auto'
document.addEventListener('DOMContentLoaded', () => {
  const elements = document.querySelectorAll('.appear_auto');
  
  // Añade la clase 'visible' al cargar la página
  elements.forEach(el => el.classList.add('visible'));
});
</script>

  <!-- WOW.js bounce -->
   <script>
     new WOW().init();  // Inicialización de WOW.js
   </script>



</body>
</html>