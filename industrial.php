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
  <title>ITSSAT – Ing. Industrial</title>



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
  transform: translateY(20px); /* Desplazado hacia abajo */
  transition: opacity 2s ease, transform 2s ease; /* Transición suave */
}



/* Appear automatico */
.appear_auto{
  margin-top: 10vh; /* Asegurarse de que esté más abajo de la pantalla inicial */
  opacity: 0; /* Inicialmente invisible */
  transform: translateY(20px); /* Desplazado hacia abajo */
  transition: opacity 2s ease, transform 2s ease; /* Transición suave */
}

.appear_auto.visible {
  opacity: 1; /* Aparece gradualmente */
  transform: translateY(0); /* Se mueve a su posición original */
}


/* Imagen carrera */
.fondo_carrera{
  margin: 0;
  padding-top: 17%;
  padding-left: 15%;
  width: 100%;
  height: 600px;
  background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url("mycss/img_css/industrial/industrial_fondo.png");
  background-repeat: no-repeat;
  background-size: cover; /* Hace que la imagen ocupe todo el espacio disponible */
  background-position: center;
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

<?php include 'header.html'; ?>

<div id="preloader">
  <div class="spinner"></div>
</div>


<!-- Appr auto -->
<div class="color_origen" style="background-color: black;"><!-- fondo -->
  <div class="appear_auto">
    <div class="fondo_carrera">
      <div class="nombre_carrera">Ingeniería<br>Industrial</div>
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
              <p>M.E. Marta Gabriela Limon Orozco</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/correo_sinfondo.png" alt="Correo Electrónico" class="icon">
          <div>
              <div class="texto_contacto">Correo Electrónico</div>
              <p>ing_industrial@itssat.edu.mx</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/llamada.png" alt="Teléfono" class="icon">
          <div>
              <div class="texto_contacto">Teléfono</div>
              <p>(294) 947-9100 ext.129</p>
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
        Formar Profesionistas Competentes, con una educación Integral en el área de Ingeniería Industrial, capaces de impulsar el desarrollo de la región y comprometidos con la Mejora Continua.
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
        Ser reconocidos como la primera opción en la educación Superior en el área de Ingeniería Industrial, distinguidos por los altos estándares de Calidad y la continua actividad de Investigación que permitan impulsar el desarrollo productivo de la región y del país.
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
        Formar profesionales, éticos, líderes, creativos y emprendedores en el área de Ingeniería Industrial; competente para diseñar, implantar, administrar, innovar y optimizar sistemas de producción de bienes y servicios; con enfoque sistémico y sustentable en un entorno global.
        </p>
      </div>
    </div> 

  </div>
  <!--- FIN DEL PLAN DE ESTUDIOS--->

</center>

<br><br><br><br><br><br><br><br>



<center>
  <h2>¿Por qué estudiar Ingeniería Industrial?</h2>
</center>


<center>
  <div class="contPerfilesCampo">
    <div class="imagenPerfilesCampo">
          <center>
                   <img src="mycss/img_css/industrial/carrtel-industrial.png" width="100%" height="100%">
     
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
        El aspirante al ingresar a la carrera de Ingeniería Industrial deberá traer conocimientos y habilidades de Ciencias Exactas, con pensamiento creativo e innovador y trabajo colaborativo.
        </p>
        </div>
      </div>
    
      
      <a href="#openModalPerEg" class="contPlanEstuPerfil">Perfil de egreso</a>
      <div id="openModalPerEg" class="modalDialogPerEg">
        <div>
        <center><b style="font-size: 30px">Perfil de egreso</b></center>
        <a href="#closePerEg" title="Cerrar Ventana" class="closePerEg">X</a>
        <br>
          <ul style="text-align: justify; font-size: 80%; padding: 3% 4% 3% 4% ">
            <li>Diseña, mejora e integra sistemas productivos de bienes y servicios aplicando tecnologías para su optimización.</li>
            <li>Diseña, implementa y mejora sistemas de trabajo para elevar la productividad.</li>
            <li>Implanta sistemas de calidad utilizando métodos estadísticos para mejorar la competitividad de las organizaciones.</li>
            <li>Administra sistemas de mantenimiento en procesos de bienes y servicios para la optimización en el uso de los recursos.  </li>
            <li>Gestiona sistemas de seguridad, salud ocupacional de manera sustentable, en sistemas productivos de bienes y servicios atendiendo los lineamientos legales.</li>
            <li>Formula, evalúa y gestiona proyectos de inversión, sociales y de transferencia de tecnología para el desarrollo regional.</li>
            
          </lu>
        </div>
      </div>
      
      <a href="#openModalCamLa" class="contPlanEstuPerfil">Campo<br>Laboral</a>
      <div id="openModalCamLa" class="modalDialogCamLa">
        <div>
        <center><b style="font-size: 30px">Campo laboral</b></center>
        <a href="#closeCamLa" title="Cerrar Ventana" class="closeCamLa">X</a>
        <br>

          <ul style="text-align: justify; font-size: 80%; padding: 3% 4% 3% 4% ">
            <li>Procesos Productivos.</li>
            <li>Manufactura Automotriz.</li>
            <li>Manufactura Textil.</li>
            <li>Empresas de Autopartes.</li>
            <li>Empresas de Automatización Industrial.</li>
            <li>Empresas Metalmecánica.</li>
            <li>Empresas de Servicio.</li>
            <li>Empresas de Consultorías.</li>
            <li>Casas Certificadoras de Calidad.</li>
            <li>Empresas de Servicio de Logística, Terrestre, Aeroportuaria, Marina, Ferroviaria y Plataformas Logísticas.</li>
          </lu>
        
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
    <img src="mycss/img_css/industrial/img1.jpg" alt="Imagen 1">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/industrial/img2.jpg" alt="Imagen 2">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/industrial/img3.jpg" alt="Imagen 3">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/industrial/img4.jpg" alt="Imagen 4">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/industrial/img5.jpg" alt="Imagen 5">
  </div>
</div>



<br><br><br><br><br><br>


<!---Retícula de carrera--->

<button class="descargar_reticula" onclick="openModal('pdf/industrial/Reticula Ingenieria Industrial.pdf')">Descargar Retícula...</button>




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
          <button class="btn-pdf" onclick="openModal('pdf/industrial/1.RETICULA_IIND_ MODULO_GESTIONDECALIDADYPRODUCTIVIDAD_.pdf')">GESTIÓN DE <br>CALIDAD DE ESTUDIO</button>
          <button class="btn-pdf" onclick="openModal('pdf/industrial/1.RETICULA_IIND_MODULO_ MANUFACTURAFLEXIBLE-2024.pdf')">MANUFACTURA<br> FLEXIBLE</button>
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
              <button class="btn-pdf_docentes" onclick="openModal('pdf/industrial/marta gabriela limon.pdf')">
                  <img class="img-docente" src="mycss/img_css/industrial/docentes_industrial/mdocentes.png" alt="I.S.C. Marcos Cagal Ortiz">
                  <p class="role-docente">JEFE DE CARRERA: M.E. Marta Gabriela Limon Orozco</p>
              </button>
          </div>
          
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/industrial/elvira gomez.pdf')">
                <img class="img-docente" src="mycss/img_css/industrial/docentes_industrial/mdocentes.png" alt="M.E. Guadalupe Zetina Cruz">
                <p class="role-docente">M.I.I. Elvira Goméz Barrientos</p>
            </button>
          </div>
        
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/industrial/maria de la cruz.pdf')">
              <img class="img-docente" src="mycss/img_css/industrial/docentes_industrial/mdocentes.png" alt="M.T.I. Verónica Guerrero Hernández">
              <p class="role-docente">M.I.I. Maria de la Cruz Porras Arias</p>
            </button>
          </div>
      
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/industrial/socorro aguirre.pdf')">
              <img class="img-docente" src="mycss/img_css/industrial/docentes_industrial/mdocentes.png" alt="L.I. Sergio Pelayo Vaquero">
              <p class="role-docente">M.I.I. Socorro Aguirre Fernández</p>
            </button>
          </div>
  
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/industrial/INFORMACION DE LOS MAESTROS.pdf')">
                <img class="img-docente" src="mycss/img_css/industrial/docentes_industrial/hdocentes.png" alt="M.T.I. Juan Rafael Gonález Cadena">
                <p class="role-docente">M.I.A. Alejandro Ramírez Vazquez</p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/industrial/carlos martinez.pdf')">
              <img class="img-docente" src="mycss/img_css/industrial/docentes_industrial/hdocentes.png" alt="M.T.I. Rogelio Enrique Telona Torres">
              <p class="role-docente">M.C. Carlos Marínez Galán</p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/industrial/inocencio garcia.pdf')">
                <img class="img-docente" src="mycss/img_css/industrial/docentes_industrial/hdocentes.png" alt="M.T.I. Lorenzo Organista Oliveros">
                <p class="role-docente">M.I.I. Inocencio García Huerta</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/industrial/bernabe contreras.pdf')">
                <img class="img-docente" src="mycss/img_css/industrial/docentes_industrial/hdocentes.png" alt="M.T.I. María de Los Ángeles Pelayo Vaquero">
                <p class="role-docente">ING. Bernabé Contreras Contreras</p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/industrial/armando alvarado.pdf')">
                <img class="img-docente" src="mycss/img_css/industrial/docentes_industrial/hdocentes.png" alt="M.T.I. Rosario Carvajal Hernández">
                <p class="role-docente">M.I.I. Armando Alvarado Alvarado</p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/industrial/pedro jacome.pdf')">
                <img class="img-docente" src="mycss/img_css/industrial/docentes_industrial/hdocentes.png" alt="M.T.I. Rosario Carvajal Hernández">
                <p class="role-docente">M.I.A. Pedro Jácome Onofre</p>
            </button>
          </div>

      </div>
  </div>
</div>





<br><br><br><br><br><br><br><br>
<div class="gallery-title">Laboratorios</div>
<div class="carousel-container-l">
    <div class="main-image-l">
        <img id="featured-laboratorio" src="mycss/img_css/industrial/lab1.jpg" alt="Imagen Principal">
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
                <td>ACC-0906</td>
                <td>Fundamentos de Investigación</td>
                <td><a href="pdf/industrial/sem1/AC006 Fundamentos de Investigacion.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACA-0907</td>
                <td>Taller de Ética</td>
                <td><a href="pdf/industrial/sem1/AC007 Taller de Etica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0901</td>
                <td>Cálculo Diferencial</td>
                <td><a href="pdf/industrial/sem1/AC001 Calculo Diferencial.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INH-1029</td>
                <td>Taller de Herramientas Intelectuales</td>
                <td><a href="pdf/industrial/sem1/TALLER DE HERRAMIENTAS INTELECTUALES  v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1025</td>
                <td>Química</td>
                <td><a href="pdf/industrial/sem1/QUIMICA v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INN-1008</td>
                <td>Dibujo Industrial</td>
                <td><a href="pdf/industrial/sem1/DIBUJO INDUSTRIAL v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>INC-1009</td>
                <td>Electricidad y Electrónica Industrial</td>
                <td><a href="pdf/industrial/sem2/ELECTRICIDAD Y ELECTRONICA INDUSTRIAL v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1024</td>
                <td>Propiedades de los Materiales</td>
                <td><a href="pdf/industrial/sem2/PROPIEDAD DE LOS MATERIALES v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0902</td>
                <td>Cálculo Integral</td>
                <td><a href="pdf/industrial/sem2/AC002 Calculo Integral.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1053</td>
                <td>Probabilidad y Estadística</td>
                <td><a href="pdf/industrial/sem2/AE053 Probabilidad y Estadistica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INQ-1006</td>
                <td>Análisis de la Realidad Nacional</td>
                <td><a href="pdf/industrial/sem2/ANALISIS DE LA REALIDAD NACIONAL v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1030</td>
                <td>Taller de Liderazgo</td>
                <td><a href="pdf/industrial/sem2/TALLER DE LIDERAZGO.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>AEC-1048</td>
                <td>Metrología y Normalización</td>
                <td><a href="pdf/industrial/sem3/AE048 Metrologia y Normalizacion.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0903</td>
                <td>Álgebra Lineal</td>
                <td><a href="pdf/industrial/sem3/AC003 Algebra Lineal.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0904</td>
                <td>Cálculo Vectorial</td>
                <td><a href="pdf/industrial/sem3/AC004 Calculo Vectorial.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1018</td>
                <td>Economía</td>
                <td><a href="pdf/industrial/sem3/AE018 Economia.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEF-1024</td>
                <td>Estadística Inferencial I</td>
                <td><a href="pdf/industrial/sem3/AE024 Estadística Inferencial I.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INJ-1011</td>
                <td>Estudio del Trabajo I</td>
                <td><a href="pdf/industrial/sem3/ESTUDIO DEL TRABAJO I v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>INC-1023</td>
                <td>Procesos de Fabricación</td>
                <td><a href="pdf/industrial/sem4/PROCESOS DE FABRICACIÓN v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1013</td>
                <td>Física</td>
                <td><a href="pdf/industrial/sem4/FISICA v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1005</td>
                <td>Algoritmos y Lenguajes de Programación</td>
                <td><a href="pdf/industrial/sem4/ALGORITMOS Y LENGUAJES DE PROGRAMACIÓN v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1018</td>
                <td>Investigación de Operaciones I</td>
                <td><a href="pdf/industrial/sem4/INVESTIGACION DE OPERACIONES I v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEF-1025</td>
                <td>Estadística Inferencial II</td>
                <td><a href="pdf/industrial/sem4/AE025 Estadística Inferencial II.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INJ-1012</td>
                <td>Estudio del Trabajo II</td>
                <td><a href="pdf/industrial/sem4/ESTUDIO DEL TRABAJO II v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INF-1016</td>
                <td>Higiene y Seguridad Industrial</td>
                <td><a href="pdf/industrial/sem4/HIGIENE Y SEGURIDAD INDUSTRIAL .pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>INR-1003</td>
                <td>Administración de Proyectos</td>
                <td><a href="pdf/industrial/sem5/ADMINISTRACIÓN DE PROYECTOS v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1392</td>
                <td>Gestión de Costos</td>
                <td><a href="pdf/industrial/sem5/AE092 Gestion de Costos.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1001</td>
                <td>Administración de las Operaciones I</td>
                <td><a href="pdf/industrial/sem5/ADMINISTRACIÓN DE OPERACIONES I v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1019</td>
                <td>Investigación de Operaciones II</td>
                <td><a href="pdf/industrial/sem5/INVESTIGACION DE OPERACIONES II v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INF-1007</td>
                <td>Control Estadístico de la Calidad </td>
                <td><a href="pdf/industrial/sem5/CONTROL ESTADISTICO DE LA CALIDA v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INF-1010</td>
                <td>Ergonomía</td>
                <td><a href="pdf/industrial/sem5/ERGONOMIA v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACD-0908</td>
                <td>Desarrollo Sustentable</td>
                <td><a href="pdf/industrial/sem5/AC008 Desarrollo Sustentable.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>ACA-0909</td>
                <td>Taller de Investigación I</td>
                <td><a href="pdf/industrial/sem6/AC009 Taller de Investigacion I.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1037</td>
                <td>Ingeniería Económica</td>
                <td><a href="pdf/industrial/sem6/AE037 Ingenieria Economica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1002</td>
                <td>Administración de las Operaciones II</td>
                <td><a href="pdf/industrial/sem6/ADMINISTRACIÓN DE OPERACIONES II v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1027</td>
                <td>Simulación</td>
                <td><a href="pdf/industrial/sem6/SIMULACIÓN v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1004</td>
                <td>Administración del Mantenimiento</td>
                <td><a href="pdf/industrial/sem6/ADMINISTRACIÓN DEL MANTENIMIENTO V2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AED-1044</td>
                <td>Mercadotecnia</td>
                <td><a href="pdf/industrial/sem6/AE044 Mecadotecnia.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>ACA-0910</td>
                <td>Taller de Investigación II</td>
                <td><a href="pdf/industrial/sem7/AC010 Taller de Investigacion II.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1021</td>
                <td>Planeación Financiera</td>
                <td><a href="pdf/industrial/sem7/PLANEACION FINANCIERA v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1022</td>
                <td>Planeación y Diseño de Instalaciones</td>
                <td><a href="pdf/industrial/sem7/PLANEACION Y DISEÑO DE INSTALACIONES v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INF-1028</td>
                <td>Sistemas de Manufactura</td>
                <td><a href="pdf/industrial/sem7/SISTEMAS DE MANUFACTURA.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INH-1020</td>
                <td>Logística y Cadenas de Suministro</td>
                <td><a href="pdf/industrial/sem7/LOGISTICA y CADENA DE SUMINISTRO v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1015</td>
                <td>Gestión de los Sistemas de Calidad</td>
                <td><a href="pdf/industrial/sem7/GESTION DE LOS SISTEMAS DE LOS SITEMAS DE CALIDAD v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INR-1017</td>
                <td>Ingeniería de Sistemas</td>
                <td><a href="pdf/industrial/sem7/INGENIERIA DE SISTEMAS v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>AED-1030</td>
                <td>Formulación y Evaluación de Proyectos</td>
                <td><a href="pdf/industrial/sem8/AE030 Formulacion y Evaluacion de Proyectos.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>INC-1026 </td>
                <td>Relaciones Industriales</td>
                <td><a href="pdf/industrial/sem8/RELACIONES INDUSTRIALES v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
  const laboratorioImages = ['mycss/img_css/industrial/lab1.jpg', 'mycss/img_css/industrial/lab2.jpg', 'mycss/img_css/industrial/lab3.jpg', 'mycss/img_css/industrial/lab4.jpg'];

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