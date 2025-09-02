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
  <script src="https://code.jquery.com/jquery-latest.js"></script>
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
  <title>ITSSAT – Ing. en Administración</title>



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
    background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url("mycss/img_css/administracion/admin-fondo.png");
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
      padding: 40% 0 8% 8%;
    }
  
    .nombre_carrera{
      margin-top: 15%;
      font-family: "Lexend","Century Gothic", Arial;
      font-weight: 500;
      font-size: 250%;
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
<?php include 'header.html'; ?>



<div id="preloader">
  <div class="spinner"></div>
</div>


<!-- Appr auto -->
<div class="color_origen" style="background-color: black;"><!-- fondo -->
  <div class="appear_auto">
    <div class="fondo_carrera">
      <div class="nombre_carrera">Licenciatura en Administración</div>
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
              <div class="texto_contacto">Jefe de división</div>
              <p>Carlos de Jesús Morteo Peñá</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/correo_sinfondo.png" alt="Correo Electrónico" class="icon">
          <div>
              <div class="texto_contacto">Correo Electrónico</div>
              <p>lic_admon@itssat.edu.mx</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/llamada.png" alt="Teléfono" class="icon">
          <div>
              <div class="texto_contacto">Teléfono</div>
              <p>(294) 947-9100 ext.125</p>
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

<center>
<h2>Identidad</h2>
    

<br><br>
<div class="contsPlanEstu">

    <a href="#openModalMision" class="contPlanEstu">MISIÓN</a>
    <div id="openModalMision" class="modalDialogMision">
      <div>

        <center><b style="font-size: 30px; font-family: 'Arial', Arial;">Misión</b></center>

        <a href="#closeMision" title="Cerrar Ventana" class="closeMision">X</a>
        <br>
        <p style="text-align: justify;">
        Consolidar la Licenciatura en Administración como proveedor del capital humano altamente capacitado en las diferencias competencias que deben caracterizar al profesional de esta área con sentidos humanísticos, comprometido con la formación integral de la comunidad estudiantil para su desarrollo profesional.
        </font>
        </p>
      </div>
    </div>

    
    <a href="#openModalVision" class="contPlanEstu">VISIÓN</a>
    <div id="openModalVision" class="modalDialogVision">
      <div>
    <center><b style="font-size: 30px; font-family: 'Arial', Arial;">Visión</b></center>
        <a href="#closeVision" title="Cerrar Ventana" class="closeVision">X</a>
        <br>
        <p style="text-align: justify;">
        Contribuir a la formación integral de licenciados en administración mediante la ejecución de programas educativos, con base a las exigencias de una sociedad globalizada.
        </p>
      </div>
    </div>

    
    <a href="#openModalObGe" class="contPlanEstu">OBJETIVO GENERAL</a>
    <div id="openModalObGe" class="modalDialogObGe">
      <div>
    <center><b style="font-size: 30px; font-family: 'Arial', Arial;">Objetivo general</b></center>
        <a href="#%20" title="Cerrar Ventana" class="closeObGe">X</a>
        <br>
        <p style="text-align: justify;">
        Formar profesionistas capacitados en la creación y desarrollo de nuevas empresas que contribuyan al desarrollo sustentable de la región y del país.
        </p>
      </div>
    </div> 

  </div>
  <!--- FIN DEL PLAN DE ESTUDIOS--->

  </center>

<br><br><br><br><br><br><br><br>


<center>
  <h2>¿Por qué estudiar Licenciatura en Administracion</h2>
</center>


<center>
  <div class="contPerfilesCampo">
    <div class="imagenPerfilesCampo">
          <center>
                   <img src="mycss/img_css/administracion/promo-admon.png" width="100%" height="100%">
     
          </center>
  </div>

  <div class="cont_botones_perfiles">

    <div class="contsDerechoPerfil">


  
      <a href="#openModalPerIn" class="contPlanEstuPerfil">Perfil de ingreso</a>
      <div id="openModalPerIn" class="modalDialogPerIn">
        <div>
        <center><b style="font-size: 30px">Perfil de ingreso</b></center>
        <a href="#closePerIn" title="Cerrar Ventana" class="closePerIn">X</a>
        <br>
        <p style="text-align: justify;">
        El aspirante a ingresar deberá tener conocimientos y uso básico de las tic´s, creatividad, actitudes y habilidades de organización, actitud de servicio, capacidad de comunicación oral y escrita, capacidad de colaboración y trabajo en equipo, hábitos de estudio y de trabajo intelectual independiente.
        </p>
        </div>
      </div>
    
      
      <a href="#openModalPerEg" class="contPlanEstuPerfil">Perfil de egreso</a>
      <div id="openModalPerEg" class="modalDialogPerEg">
        <div>
        <center><b style="font-size: 30px">Perfil de egreso</b></center>
        <a href="#closePerEg" title="Cerrar Ventana" class="closePerEg">X</a>
        <br>
        <p style="text-align: justify;">
          En todo tipo de organizaciones: del ámbito internacional, nacional, regional o local; de tamaño grande, mediana, pequeña o micro; del sector comercial, industrial o de servicios; de capital privado o de gobierno; en áreas de recursos humanos, finanzas, ventas y mercadotecnia, producción o recursos materiales; inclusive creando su propia empresa.
        </p>
        </div>
      </div>
      
      <a href="#openModalCamLa" class="contPlanEstuPerfil">Campo<br>Laboral</a>
      <div id="openModalCamLa" class="modalDialogCamLa">
        <div>
        <center><b style="font-size: 30px">Campo laboral</b></center>
        <a href="#closeCamLa" title="Cerrar Ventana" class="closeCamLa">X</a>
        <br>
        <p style="text-align: justify;">
        Desarrollara habilidades directivas y de vinculación del sector publico y privado basado en las ética y la responsabilidad social que le permiten integrar y coordinar equipos interdisciplinarios, para favorecer el crecimiento de la organización y su entorno global; será un agente de cambios con habilidad de potenciar el capital humano para la solución de problemas y tomas de decisiones para la organizaciones afrontan; aplicara conocimientos técnicas y bases metodológicas de dirección y control para la instrumentación de técnicas en una empresa; participara en asuntos públicos a través de su integración en los organismos del estado, estados internacionales, partidos políticos y organizaciones no partidarias y será capaz de definir propuestas emprendedoras y de mejora, con apego a la normatividad económica y social de sustentabilidad de los recursos; manejara las TIC’S en los negocios y en la mercadotecnia; diseñara estrategias adecuadas de comercialización en los diversos mercados potenciales y mostrara las capacidades de liderazgo para integrar y motivar equipos de trabajo en la educación toma de decisiones para el cumplimientos de objetivos organizacionales.
        </p>
        </div>
      </div>
    
      </div>
    </div>
  </div>
</center>


<br><br><br><br>





<!---Carrusel--->

<div class="main-gallery js-flickity" 
  data-flickity-options='{
    "cellAlign": "left", 
    "contain": true, 
    "wrapAround": true, 
    "autoPlay": 3000, 
    "pauseAutoPlayOnHover": false, 
    "prevNextButtons": true, 
    "selectedAttraction": 0.01, 
    "friction": 0.2 
  }'>

  
  <div class="gallery-cell">
    <img src="mycss/img_css/administracion/img1.jpg" alt="Imagen 1">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/administracion/img2.jpg" alt="Imagen 2">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/administracion/img3.jpg" alt="Imagen 3">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/administracion/img4.jpg" alt="Imagen 4">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/administracion/img5.jpg" alt="Imagen 5">
  </div>
</div>

 



<br><br><br><br><br><br>


<!---Retícula de carrera--->

<button class="descargar_reticula" onclick="openModal('pdf/informatica/Reticula Ingenieria Informatica.pdf')">Descargar Retícula...</button>



<!---Especialidades--->
<!---bounce left--->
<center>
<div class="wow animate__animated animate__bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">

    <div class="titulo_reticula">
      Especialidades
    </div>

    <!-- Botón PDF especialidad -->
    <div class="reticula">
          <!-- Botón PDF especialidad -->
          <button class="btn-pdf" onclick="openModal('pdf/administracion/5.RETICULALADM_.pdf')">DIRECCION DE SERVICIOS EMPRESARIALES</button>
    </div>

</div><!-- end boounce -->
</center>




<!-- Fondo y contenido de la ventana modal PDF-->
<div id="modal" class="modal-background">
  <div class="modal-content">
    <span class="close-btn" onclick="closeModal()">×</span>
    <iframe id="pdf-viewer" src=""></iframe> <!-- Iframe vacío para cargar los PDFs -->
  </div>
</div>



<br><br><br><br><br><br>
<center>
  <h2>Docentes</h2>
</center>


<div class="contenedor-docentes">
  <div class="docentes">
      
      <div class="grid">
          <div class="card">
              <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/INFORMACION DE LOS MAESTROS.pdf')">
                  <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/hdocentes.png" alt="I.S.C. Marcos Cagal Ortiz">
                  <p class="role-docente">JEFE DE CARRERA: Carlos de Jesús Morteo Peña</p>
              </button>
          </div>
          
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/LILIANAIRASEMAAGUIRRECARDOZA.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/mdocentes.png" alt="M.E. Guadalupe Zetina Cruz">
                <p class="role-docente">M.C.A. Liliana Irasema Aguirre Cardoza </p>
            </button>
          </div>
        
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/MANUELDEJESUSCANOBUSTAMANTE.pdf')">
              <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/hdocentes.png" alt="M.T.I. Verónica Guerrero Hernández">
              <p class="role-docente">LIC. Manuel de Jesús Cano Bustamante</p>
            </button>
          </div>
      
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/EUGENIOCHAVEZORTIZ.pdf')">
              <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/hdocentes.png" alt="L.I. Sergio Pelayo Vaquero">
              <p class="role-docente">M.C.A. Eugenio Chávez Ortiz</p>
            </button>
          </div>
  
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/MARIADELCARMENDAVIDMIROS.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/mdocentes.png" alt="M.T.I. Juan Rafael Gonález Cadena">
                <p class="role-docente">M.C.A. María del Carmen David Miros </p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/PATRICIAELIZABETHDAVIDMIROS.pdf')">
              <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/mdocentes.png" alt="M.T.I. Rogelio Enrique Telona Torres">
              <p class="role-docente">M.C.A. Patricia Elizabeth David Miros</p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/OFELIAENRIQUEZORDAZ.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/mdocentes.png" alt="M.T.I. Lorenzo Organista Oliveros">
                <p class="role-docente">M.C.J.Y.S. Ofelia Enríque Ordaz</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/RODOLFOOLVERAAVENDA.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/hdocentes.png" alt="M.T.I. María de Los Ángeles Pelayo Vaquero">
                <p class="role-docente">L.A.E. Rodolfo Olvera Avendaño</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/ERIKADELCARMENPAEZCHACHA.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/mdocentes.png" alt="M.T.I. Rosario Carvajal Hernández">
                <p class="role-docente">M.C.A. Erika del Carmen Páez Chacha</p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/ALVARORAMOSVILLEGAS.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/hdocentes.png" alt="M.T.I. Lorenzo Organista Oliveros">
                <p class="role-docente">M.C.A. Álvaro Ramos Villegas</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/AARONSANCHEZISIDORO.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/hdocentes.png" alt="M.T.I. María de Los Ángeles Pelayo Vaquero">
                <p class="role-docente">M.C.A. AARÓN SÁNCHEZ ISIDORO</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/FRANCISCOTOTOMACHUCHO.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/hdocentes.png" alt="M.T.I. Rosario Carvajal Hernández">
                <p class="role-docente">M.C.A. Francisco Toto Machucho</p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/JOSELUISVAZQUEZTOTO.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/hdocentes.png" alt="M.T.I. Lorenzo Organista Oliveros">
                <p class="role-docente">M.C.J.Y.S. José Luis Vázquez Toto</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/INFORMACION DE LOS MAESTROS.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/hdocentes.png" alt="M.T.I. María de Los Ángeles Pelayo Vaquero">
                <p class="role-docente">M.I.I. Inocencio Garcia Huerta</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/INFORMACION DE LOS MAESTROS.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/mdocentes.png" alt="M.T.I. Rosario Carvajal Hernández">
                <p class="role-docente">Lucero López Cabaxin</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/INFORMACION DE LOS MAESTROS.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/mdocentes.png" alt="M.T.I. Lorenzo Organista Oliveros">
                <p class="role-docente">Lucila Marín Santos</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/administracion/INFORMACION DE LOS MAESTROS.pdf')">
                <img class="img-docente" src="mycss/img_css/administracion/docentes_admon/hdocentes.png" alt="M.T.I. María de Los Ángeles Pelayo Vaquero">
                <p class="role-docente">Emmanuel Mendoza Canela</p>
            </button>
          </div>
          
      </div>
  </div>
</div>






<br><br><br><br><br><br><br><br>
<div class="gallery-title">Laboratorios</div>
<div class="carousel-container-l">
    <div class="main-image-l">
        <img id="featured-laboratorio" src="mycss/img_css/administracion/lab1.png" alt="Imagen Principal">
    </div>
    <div class="thumbnails-l" id="laboratorio-thumbnails">
        <!-- Las imágenes se añaden dinámicamente -->
    </div>
</div>






<br><br><br><br><br><br><br>
<!-------------------- Navtablas------------------->
<center>
<div class="cont_tablas_semestres">

<h2>Semestres</h2>
<br><br>


  <div class="tabs">

      <!-- Pestañas -->
      <ul class="tab-links" style="justify-content: center; background: #0f273e;">
        <li class="active"><a href="#tab1">1°</a></li>
        <li><a href="#tab2">2°</a></li>
        <li><a href="#tab3">3°</a></li>
        <li><a href="#tab4">4°</a></li>
        <li><a href="#tab5">5°</a></li>
        <li><a href="#tab6">6°</a></li>
        <li><a href="#tab7">7°</a></li>
        <li><a href="#tab8">8°</a></li>
        <li><a href="#tab9">9°</a></li>
      </ul>

      <!-- Contenido de cada pestaña -->
      <div class="tab-content">

          <div id="tab1" class="tab active">
            <table class="custom-table">
              <!-- Primera fila con fondo diferente (títulos) -->
              <tr class="table-header">
                <th>Clave</th>
                <th>Asignatura</th>
                <th>Contenido</th>
              </tr>
              <!-- Filas de contenido -->
              <tr>
                <td>LAC-1035 </td>
                <td>Teoría General de la Administración </td>
                <td><a href="pdf/administracion/sem1/LAC-1035 Teoria General de la Administracion_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAV-1025</td>
                <td>Informática para la Administración</td>
                <td><a href="pdf/administracion/sem1/LAV-1025 Informática para la Administración_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACA-0907</td>
                <td>Taller de Ética</td>
                <td><a href="pdf/administracion/sem1/AC007 Taller de Etica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACC-0906</td>
                <td>Fundamentos de Investigación</td>
                <td><a href="pdf/administracion/sem1/AC006 Fundamentos de Investigacion.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1027</td>
                <td>Matemáticas Aplicadas a la Administración</td>
                <td><a href="pdf/administracion/sem1/LAD-1027 Matematicas Aplicadas a la Administracion_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1006</td>
                <td>Contabilidad General</td>
                <td><a href="pdf/administracion/sem1/LAD-1006 Contabilidad General_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>

            </table>
          </div>

          <div id="tab2" class="tab">
            <table class="custom-table">
              <!-- Primera fila con fondo diferente (títulos) -->
              <tr class="table-header">
                <th>Clave</th>
                <th>Asignatura</th>
                <th>Contenido</th>
              </tr>
              <!-- Filas de contenido -->
              <tr>
                <td>LAF-1019</td>
                <td>Función Administrativa I</td>
                <td><a href="pdf/administracion/sem2/LAF-1019 Funcion Administrativa I_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1016</td>
                <td>Estadística para la Administración I </td>
                <td><a href="pdf/administracion/sem2/LAD-1016 Estadística para la Administración I_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAF-1010</td>
                <td>Derecho Laboral y Seguridad Social </td>
                <td><a href="pdf/administracion/sem2/LAF-1010 Derecho Laboral Seguridad Social_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAC-1004</td>
                <td>Comunicación Corporativa </td>
                <td><a href="pdf/administracion/sem2/LAC-1004 Comunicación Corporativa_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAC-1034</td>
                <td>Taller de Desarrollo Humano</td>
                <td><a href="pdf/administracion/sem2/LAC-1034 Taller de Desarrollo Humano_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1008</td>
                <td>Costos de Manufactura</td>
                <td><a href="pdf/administracion/sem2/LAD-1008 Costos de manufactura_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>

            </table>
          </div>

          <div id="tab3" class="tab">
            <table class="custom-table">
              <!-- Primera fila con fondo diferente (títulos) -->
              <tr class="table-header">
                <th>Clave</th>
                <th>Asignatura</th>
                <th>Contenido</th>
              </tr>
              <!-- Filas de contenido -->
              <tr>
                <td>LAD-1020</td>
                <td>Función Administrativa II</td>
                <td><a href="pdf/administracion/sem3/LAD-1020 Funcion Administrativa II_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1017</td>
                <td>Estadística para la Administración II</td>
                <td><a href="pdf/administracion/sem3/LAD-1017 Estadística para la administración II_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1009</td>
                <td>Derecho Empresarial</td>
                <td><a href="pdf/administracion/sem3/LAD-1009 Derecho Empresarial_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1003</td>
                <td>Comportamiento Organizacional</td>
                <td><a href="pdf/administracion/sem3/LAD-1003 Comportamiento Organizacional_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAC-1013</td>
                <td>Dinámica Social</td>
                <td><a href="pdf/administracion/sem3/LAC-1013 Dinamica Social_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1007</td>
                <td>Contabilidad Gerencial</td>
                <td><a href="pdf/administracion/sem3/LAD-1007 Contabilidad Gerencial_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>

            </table>
          </div>

          <div id="tab4" class="tab">
            <table class="custom-table">
              <!-- Primera fila con fondo diferente (títulos) -->
              <tr class="table-header">
                <th>Clave</th>
                <th>Asignatura</th>
                <th>Contenido</th>
              </tr>
              <!-- Filas de contenido -->
              <tr>
                <td>LAD-1023</td>
                <td>Gestión Estratégica del Capital Humano I </td>
                <td><a href="pdf/administracion/sem4/LAD-1023 Gestion Estrategica del Capital Humano I_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1031</td>
                <td>Procesos Estructurales</td>
                <td><a href="pdf/administracion/sem4/LAD-1031 Procesos Estructurales_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1028</td>
                <td>Métodos Cuantitativos para  la Administración</td>
                <td><a href="pdf/administracion/sem4/LAD-1028 Metodos Cuantitativos para la Administración_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAF-1021</td>
                <td>Fundamentos de Mercadotecnia</td>
                <td><a href="pdf/administracion/sem4/LAF-1021 Fundamentos de Mercadotecnia_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1014</td>
                <td>Economía Empresarial</td>
                <td><a href="pdf/administracion/sem4/LAD-1014 Economia Empresarial_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1079</td>
                <td>Matemáticas Financieras</td>
                <td><a href="pdf/administracion/sem4/AE079 Matematicas Financieras.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>

            </table>
          </div>

          <div id="tab5" class="tab">
            <table class="custom-table">
              <!-- Primera fila con fondo diferente (títulos) -->
              <tr class="table-header">
                <th>Clave</th>
                <th>Asignatura</th>
                <th>Contenido</th>
              </tr>
              <!-- Filas de contenido -->
              <tr>
                <td>LAD-1024</td>
                <td>Gestión Estratégica del Capital Humano II</td>
                <td><a href="pdf/administracion/sem5/LAD-1024 Gestión Estratégica Capital Humano II_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1070</td>
                <td>Derecho Fiscal</td>
                <td><a href="pdf/administracion/sem5/AE070 Derecho Fiscal.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1080</td>
                <td>Mezcla de Mercadotecnia</td>
                <td><a href="pdf/administracion/sem5/AE080 Mezcla de Mercadotecnia.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1077</td>
                <td>Macroeconomía</td>
                <td><a href="pdf/administracion/sem5/AE077 Macroeconomia.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AED-1068 </td>
                <td>Administración Financiera I</td>
                <td><a href="pdf/administracion/sem5/AE068 Administracion Financiera I.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACD-0908</td>
                <td>Desarrollo Sustentable</td>
                <td><a href="pdf/administracion/sem5/AC008 Desarrollo Sustentable.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>

            </table>
          </div>

          <div id="tab6" class="tab">
            <table class="custom-table">
              <!-- Primera fila con fondo diferente (títulos) -->
              <tr class="table-header">
                <th>Clave</th>
                <th>Asignatura</th>
                <th>Contenido</th>
              </tr>
              <!-- Filas de contenido -->
              <tr>
                <td>LAM-1022</td>
                <td>Gestión de la Retribución</td>
                <td><a href="pdf/administracion/sem6/LAM-1022 Gestión de la  Retribución_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAF-1032</td>
                <td>Producción</td>
                <td><a href="pdf/administracion/sem6/LAF-1032 Producción_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACA-0909</td>
                <td>Taller de Investigación I</td>
                <td><a href="pdf/administracion/sem6/AC009 Taller de Investigacion I.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1033</td>
                <td>Sistemas de Información de Mercadotecnia</td>
                <td><a href="pdf/administracion/sem6/LAD-1033 Sistemas de Información de Mercadotecnia_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAA-1026</td>
                <td>Innovación y Emprendedurismo</td>
                <td><a href="pdf/administracion/sem6/LAA-1026 Innovación y Emprendedurismo_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1002</td>
                <td>Administración Financiera II</td>
                <td><a href="pdf/administracion/sem6/LAD-1002 Administración Financiera II_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>

            </table>
          </div>

          <div id="tab7" class="tab">
            <table class="custom-table">
              <!-- Primera fila con fondo diferente (títulos) -->
              <tr class="table-header">
                <th>Clave</th>
                <th>Asignatura</th>
                <th>Contenido</th>
              </tr>
              <!-- Filas de contenido -->
              <tr>
                <td>LAB-1029</td>
                <td>Plan de Negocios</td>
                <td><a href="pdf/administracion/sem7/LAB-1029 Plan de Negocios_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAC-1030</td>
                <td>Procesos de Dirección</td>
                <td><a href="pdf/administracion/sem7/LAC-1030 Procesos de Direccion_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACA-0910</td>
                <td>Taller de Investigación II</td>
                <td><a href="pdf/administracion/sem7/AC010 Taller de Investigacion II.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1001</td>
                <td>Administración de la Calidad</td>
                <td><a href="pdf/administracion/sem7/LAD-1001 Administracion de la Calidad_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAC-1015</td>
                <td>Economía Internacional</td>
                <td><a href="pdf/administracion/sem7/LAC-1015 Economia Internacional_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1012</td>
                <td>Diagnóstico y Evaluación Empresarial </td>
                <td><a href="pdf/administracion/sem7/LAD-1012 Diagnóstico y Evaluación Empresarial_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>

            </table>
          </div>

          <div id="tab8" class="tab">
            <table class="custom-table">
              <!-- Primera fila con fondo diferente (títulos) -->
              <tr class="table-header">
                <th>Clave</th>
                <th>Asignatura</th>
                <th>Contenido</th>
              </tr>
              <!-- Filas de contenido -->
              <tr>
                <td>LAC-1005</td>
                <td>Consultoría Empresarial</td>
                <td><a href="pdf/administracion/sem8/LAC-1005 Consultoria  Empresarial_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1018</td>
                <td>Formulación y Evaluación de Proyectos</td>
                <td><a href="pdf/administracion/sem8/LAD-1018 Formulacion y Evaluacion de Proyectos_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>LAD-1011</td>
                <td>Desarrollo Organizacional</td>
                <td><a href="pdf/administracion/sem8/LAD-1011 Desarrollo Organizacional_OK_2016.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>

            </table>
          </div>

          <div id="tab9" class="tab">
            <br><p>Asignaturas noveno semestre</p>
          </div>


      </div><!-- Fin de cada pestaña -->
  </div>
 
</div>

</center><!------------------------ Fin Cont NavTablas -------------------------->
<br><br>


<!------------------------ wsp icon -------------------------->

<a href="https://wa.me/5212941016169?text=Hola, me gustaría saber más acerca de la carrera Ingeniería Informática">
  <div id="wsp" title="Whatsapp">
    <img src="img/favicon/whatsapp.png" width="60px">
  </div>
</a>



<!------------------------ contador de visitas -------------------------->

<?php
include 'contador_visitas/contador.php'; // Asegúrate de incluir el archivo donde está la función

$visitas = contador(); // Llamar a la función

echo "Esta página ha sido visitada $visitas veces.";
?>



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
  const laboratorioImages = ['mycss/img_css/administracion/lab1.png', 'mycss/img_css/administracion/lab2.png', 'mycss/img_css/administracion/lab3.png', 'mycss/img_css/administracion/lab4.jpg'];

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