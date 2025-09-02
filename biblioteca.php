
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
  <link rel="stylesheet" href="mycss/docentes.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">




  <!-- Icono pestaña -->
  <link rel="icon" href="img/favicon/tecnm.ico"/>
  <!-- Titulo pestaña -->
  <title>ITSSAT – Centro de Información</title>
  


<style>
  /* Label animado */
label{
	width: 200px;
	padding: 20px 50px 10px 50px;
	font-size: 170%;
	color: #ffffff;
	font-family: "Century Gothic", "Arial";
	border-bottom: 1px solid #61cef3;
	position: relative; /* Necesario para posicionar el pseudo-elemento */
	transition: color 0.3s ease; /* Transición para el color del texto */
}
label::after {
	content: ""; /* Obligatorio para pseudo-elementos */
	position: absolute;
	bottom: 0;
	left: 0;
	width: 0; /* Empieza con un ancho de 0 */
	height: 1px;
	background-color: #00ffae; /* Color inicial del borde */
	transition: width 0.5s ease; /* Efecto suave en la animación */
  }
  
  label:hover::after {
	width: 100%; /* Expande el borde hasta el ancho completo */
  }
  
  label:hover {
	color: #ffffff; /* Cambia el color del texto al pasar el cursor */
  }

.color_origen{
  width: 100%;
  transform: translateY(20px); /* Desplazado hacia abajo */
  transition: opacity 2s ease, transform 2s ease; /* Transición suave */
}



/* Appear automatico */
.appear_auto{
  margin-top: 10vh; /* Asegurarse de que esté más abajo de la pantalla inicial */
  opacity: 0; /* Inicialmente invisible */
  transform: translateY(20px); /* Desplazado hacia abajo */
  transition: opacity 2s ease, transform 2s ease; /* Transición suave */
  width: 100%;
}
.appear_auto img{
  width: 100%;
}

.appear_auto.visible {
  opacity: 1; /* Aparece gradualmente */
  transform: translateY(0); /* Se mueve a su posición original */
  width: 100%;
}


/* Imagen carrera */
.fondo_carrera{
  margin: 0;
  padding-top: 17%;
  padding-left: 15%;
  width: 100%;
  height: 600px;
  background: linear-gradient(rgba(0, 0, 0, 0.545), rgba(0, 0, 0, .2)), url("img/infraestrutura/BIBLIOTEC.jpg");
  background-repeat: no-repeat;
  background-size: cover; /* Hace que la imagen ocupe todo el espacio disponible */
  background-position: center;
}
.fondo_carrera img{
  width: 100%;
}

/*Estilos para TELEFONOS*/
@media only screen and (max-width: 768px) {
/*--------------------------------*/
.fondo_carrera{
    margin-top: 0;
    padding: 40% 0 8% 10%;
  }

  .nombre_carrera{
    margin-top: 15%;
    font-family: "Lexend","Century Gothic", Arial;
    font-weight: 500;
    font-size: 350%;
    width: 95%;
  }
}

  /*Estilos para pantallas mas GRANDES*/
  @media only screen and (min-width: 1367px) {

.fondo_carrera{
    padding-top: 10%;
  }
}


</style>

</head>


<body>


<div id="preloader">
  <div class="spinner"></div>
</div>


<?php include 'header.html'; ?>


<!-- Appr auto -->
<div class="color_origen" style="background-color: black;"><!-- fondo -->
  <div class="appear_auto">
    <div class="fondo_carrera">
      <div class="nombre_carrera">Centro de<br>información</div>
    </div>
  </div>
</div>


<!--appear scroll-->
<div id="content">

  <center>
  <!---Información y botones de contacto--->
    <h2>Contáctanos</h2>


    <div class="contacto-container">
      <div class="contacto-item">
          <img src="img/favicon/reloj.png" alt="Horario" class="icon">
          <div>
              <div class="texto_contacto">Horario de Atención</div>
              <p>9:00 a 17:00 hrs.</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/cliente.png" alt="Jefe de división" class="icon">
          <div>
              <div class="texto_contacto">Jefe de Centro de información</div>
              <p>Nombre</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/correo_sinfondo.png" alt="Correo Electrónico" class="icon">
          <div>
              <div class="texto_contacto">Correo Electrónico</div>
              <p>@@@</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/llamada.png" alt="Teléfono" class="icon">
          <div>
              <div class="texto_contacto">Teléfono</div>
              <p>####</p>
          </div>
      </div>
  </div>




    <a href="https://wa.me/5212941016169?text=Hola, me gustaría saber más acerca de la carrera Ingeniería Informática">
      <div title="Clic para enviar mensaje" class="btn_enviawsp">
        Quiero hablar con una persona...
      </div>
    </a>
  </center>

</div><!--end appear-->




<br><br><br><br><br><br><br><br><br>
<!---Misión, Visión y Objetivo General--->

 

<!------------------------ wsp icon -------------------------->

<a href="https://wa.me/5212941016169?text=Hola, me gustaría saber más acerca de la carrera Ingeniería Informática">
  <div id="wsp" title="Whatsapp">
    <img src="img/favicon/whatsapp.png" width="60px">
  </div>
</a>




<!------------------------ Footer -------------------------->
<?php include 'footer.html'; ?>




<!-- close modales -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Selecciona todas las ventanas modales
    const modals = document.querySelectorAll(".modalDialogMision, .modalDialogVision, .modalDialogObGe, .modalDialogPerIn, .modalDialogPerEg, .modalDialogCamLa");

    modals.forEach((modal) => {
      modal.addEventListener("click", function (event) {
        // Si el usuario hace clic fuera del contenido interno del modal, lo cierra
        if (event.target === modal) {
          window.location.hash = " "; // Redirige a un hash vacío para ocultar el modal
        }
      });
    });
  });
</script>

<!-- crsel -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var flkty = new Flickity('.main-gallery', {
      cellAlign: 'left',
      contain: true,
      wrapAround: true,
      autoPlay: 3000, // Cambio automático cada 3 segundos
      pauseAutoPlayOnHover: false, // No detener al pasar el cursor
      prevNextButtons: true, // Habilita botones de navegación
      selectedAttraction: 0.01,
      friction: 0.2
    });

    flkty.on('select', function () {
      flkty.playPlayer(); // Reinicia el autoplay después de cualquier acción
    });

    // Evitar que el autoplay se detenga al usar los botones de flecha
    var prevButton = document.querySelector('.flickity-prev-next-button.previous');
    var nextButton = document.querySelector('.flickity-prev-next-button.next');

    [prevButton, nextButton].forEach(function(button) {
      button.addEventListener('click', function() {
        flkty.playPlayer();
      });
    });

    
  });
</script>



<!-- Se agregan las imagenes tanto de la galeria como de los laboratorios -->
<script>
  const laboratorioImages = ['mycss/img_css/info/a5.jpg', 'mycss/img_css/info/labsol.jpg', 'mycss/img_css/info/lab2.jpg', 'mycss/img_css/info/lab4.jpg'];

  function setupGallery(images, featuredId, thumbnailsId) {
      const featuredImage = document.getElementById(featuredId);
      const thumbnailsContainer = document.getElementById(thumbnailsId);
      thumbnailsContainer.innerHTML = images.map((img, index) => `<img class="thumbnail-l" src="${img}" alt="Imagen ${index + 1}" data-index="${index}">`).join('');
      const thumbnails = thumbnailsContainer.querySelectorAll('.thumbnail-l');

      let currentIndex = 0;
      function changeImage(index) {
          featuredImage.style.opacity = 0;
          setTimeout(() => {
              featuredImage.src = images[index];
              featuredImage.style.opacity = 1;
          }, 500);
          thumbnails.forEach(thumb => thumb.classList.remove('active'));
          thumbnails[index].classList.add('active');
          currentIndex = index;
      }

      thumbnails.forEach(thumb => {
          thumb.addEventListener('click', () => {
              clearInterval(autoSlide);
              changeImage(thumb.dataset.index);
              autoSlide = setInterval(() => changeImage((currentIndex + 1) % images.length), 3000);
          });
      });

      let autoSlide = setInterval(() => changeImage((currentIndex + 1) % images.length), 3000);
      changeImage(0);
  }

  window.onload = () => {
      setupGallery(laboratorioImages, 'featured-laboratorio', 'laboratorio-thumbnails');
  };
</script>
<!-------------------- Fin Galerias------------------->



<!--------- Nav Tablas Semestres ------->
<script>
  document.addEventListener("DOMContentLoaded", function () {
  const tabLinks = document.querySelectorAll(".tab-links a");
  const tabs = document.querySelectorAll(".tab");

  tabLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();

      // Eliminar la clase "active" de todas las pestañas y enlaces
      tabLinks.forEach((item) => item.parentElement.classList.remove("active"));
      tabs.forEach((tab) => tab.classList.remove("active"));

      // Agregar la clase "active" a la pestaña y enlace seleccionados
      link.parentElement.classList.add("active");
      const target = document.querySelector(link.getAttribute("href"));
      target.classList.add("active");
    });
  });
});
</script>


<!--------- Appr_auto fondo------->
<script>
    // Obtiene todos los elementos con la clase 'appear_auto'
  document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.appear_auto');
    
    // Añade la clase 'visible' al cargar la página
    elements.forEach(el => el.classList.add('visible'));
  });
</script>


<!--------- Appr up contacto ------->
<script>
  // JavaScript
  const content = document.getElementById('content');

  // Función para verificar si el elemento está en el viewport
  function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
  }

  // Evento de scroll
  window.addEventListener('scroll', () => {
    if (isInViewport(content)) {
      content.classList.add('visible'); // Añade la clase para hacerlo visible
    }
  });
</script>


  <!-- WOW.js bounce -->
   <script>
     new WOW().init();  // Inicialización de WOW.js
   </script>



  <!------------- JavaScript manejo de ventana modal PDF -------->
  <script>
    function openModal(pdfUrl) {
      document.getElementById("pdf-viewer").src = pdfUrl;
      document.getElementById("modal").style.display = "flex";
    }

    function closeModal() {
      document.getElementById("modal").style.display = "none";
      document.getElementById("pdf-viewer").src = ""; // Limpiar la fuente del iframe al cerrar
    }
  </script>


  <!------------------------ Tablas -------------------------->
  <script>  
        function showTable(tableId) {  
            // Ocultar todas las tablas  
            const tables = document.querySelectorAll('.table-container > div');  
            tables.forEach(table => {  
                table.classList.add('hidden');  
            });  
            // Mostrar la tabla seleccionada  
            document.getElementById(tableId).classList.remove('hidden');  
        }
  </script> 






</body>
</html>