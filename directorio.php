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
  <!-- Flickity CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>

    


  <!-- CSS y js básico plnantilla -->
  <script src="js/spinner.js"></script>
  <link rel="stylesheet" href="mycss/spinner.css">
  <link rel="stylesheet" href="mycss/header.css">
  <link rel="stylesheet" href="mycss/menu.css">
  <script src="https://code.jquery.com/jquery-latest.js"></script>
  <script src="js/menu.js"></script>
  <link rel="stylesheet" href="mycss/footer.css">

  <link rel="stylesheet" href="mycss/construccion.css">
  <link rel="stylesheet" href="mycss/directorio.css">


  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">



  <!-- Icono pestaña -->
  <link rel="icon" href="img/favicon/tecnm.ico"/>
  <!-- Titulo pestaña -->
  <title>ITSSAT – Directorio</title>


</head>


<body>


<div id="preloader">
  <div class="spinner"></div>
</div>


<?php include 'header.html'; ?>

<!-- Appr auto -->
<center>
<br><br><br><br><br><br><br><br><br> 
  <h2><span style="font-size: 115%;">Directorio</span></h2>
  <h2><span style="color: rgb(33, 38, 88);">Dirección General</span></h2>
</center>

<table>
  <thead>
      <tr>
          <th>
            <div class="header_directorio">
              <img src="img/favicon/grupo.png" alt="Área">
              <h3>Área</h3>
            </div>
          </th>

          <th>
            <div class="header_directorio">
              <img src="img/favicon/email_celeste.png" alt="Correo">
              <h3>Correo</h3>
          </div>
          </th>


          <th>
            <div class="header_directorio">
              <img src="img/favicon/telefono_azul.png" alt="Teléfono">
              <h3>Teléfono</h3>
          </div>
          </th>
      </tr>
  </thead>

  <tbody>
      <tr>
          <td>Área</td>
          <td>@@@</td>
          <td>###</td>
      </tr>
      <tr>
        <td>Área</td>
        <td>@@@</td>
        <td>###</td>
      </tr>
      <tr>
        <td>Área</td>
        <td>@@@</td>
        <td>###</td>
      </tr>
      <tr>
        <td>Área</td>
        <td>@@@</td>
        <td>###</td>
      </tr>
  </tbody>
</table>


<br><br><br>
<!-- Área -->
<center>
    <h2><span style="color: rgb(33, 38, 88);">Área</span></h2>
</center>
  
  <table>
    <thead>
        <tr>
            <th>
              <div class="header_directorio">
                <img src="img/favicon/grupo.png" alt="Área">
                <h3>Área</h3>
              </div>
            </th>
  
            <th>
              <div class="header_directorio">
                <img src="img/favicon/email_celeste.png" alt="Correo">
                <h3>Correo</h3>
            </div>
            </th>
  
  
            <th>
              <div class="header_directorio">
                <img src="img/favicon/telefono_azul.png" alt="Teléfono">
                <h3>Teléfono</h3>
            </div>
            </th>
        </tr>
    </thead>
  
    <tbody>
        <tr>
            <td>Área</td>
            <td>@@@</td>
            <td>###</td>
        </tr>
        <tr>
          <td>Área</td>
          <td>@@@</td>
          <td>###</td>
        </tr>
        <tr>
          <td>Área</td>
          <td>@@@</td>
          <td>###</td>
        </tr>
        <tr>
          <td>Área</td>
          <td>@@@</td>
          <td>###</td>
        </tr>
    </tbody>
  </table>
  






<!------------------------ Footer -------------------------->
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