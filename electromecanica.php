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
  <title>ITSSAT – Ing. Informática</title>



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
  background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url("mycss/img_css/electro/fondo_electro.png");
  background-repeat: no-repeat;
  background-size: cover; /* Hace que la imagen ocupe todo el espacio disponible */
  background-position: center;
}


/*Estilos para TELEFONOS*/
@media only screen and (max-width: 768px) {
/*--------------------------------*/
.fondo_carrera{
    margin-top: 0;
    padding: 40% 0 8% 5%;
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
      <div class="nombre_carrera">Ingeniería<br>Electromecánica</div>
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
              <p>ING. Josue Angel Oliveros Gonzales</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/correo_sinfondo.png" alt="Correo Electrónico" class="icon">
          <div>
              <div class="texto_contacto">Correo Electrónico</div>
              <p> ing_electromecanica@itssat.edu.mx</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/llamada.png" alt="Teléfono" class="icon">
          <div>
              <div class="texto_contacto">Teléfono</div>
              <p>(294) 947-9100 ext.142</p>
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
          Formar Profesionistas Competentes, en el campo de la Ingeniería Electromecánica, dentro de un marco ético y de sustentabilidad, detonante del desarrollo tecnológico, científico, económico y social de la región.
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
          Ser reconocidos como la primera opción en la educación superior en el área de Ingeniería electromecánica, distinguidos por los altos estándares de calidad y la continua actividad de investigación que permita impulsar el desarrollo tecnológico y científico en un marco de sustentabilidad productiva de la región y el país.
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
          Formar profesionistas en ingeniería electromecánica con una alta capacidad para aplicar las nuevas tecnologías. Conocer y aplicar eficientemente las máquinas CNC, los programas de computación y los procesos de manufactura de tecnología avanzada para el diseño y manufactura de productos utilizando las fuentes alternas de energía gestionando los sistemas industriales para lograr la eficiencia energética de estos. Así como la identificación y diseño de controles automáticos en procesos industriales: Neumático, Electroneumático, Hidráulico, Electrohidráulico, Eléctrico y Electrónico.
        </p>
      </div>
    </div> 

  </div>
  <!--- FIN DEL PLAN DE ESTUDIOS--->

  </center>

<br><br><br><br><br><br><br><br>


<center>
  <h2>¿Por qué estudiar Ingeniería Electromecánica?</h2>
</center>


<center>
  <div class="contPerfilesCampo">
    <div class="imagenPerfilesCampo">
          <center>
            <img src="mycss/img_css/electro/promo-electro.jpg" width="100%" height="100%">
     
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
          El aspirante debe poseer una adecuada formación en física, química y matemáticas, e inclinación por el desarrollo tecnológico. Además, se requiere de las siguientes habilidades: Análisis y síntesis, creatividad, habilidad en los razonamientos analíticos, interés por aplicar la ciencia y la tecnología para satisfacer las necesidades de la sociedad, sentido de responsabilidad con respecto a las consecuencias que la aplicación de tecnologías pueda tener sobre el medio ambiente, facilidad de comunicación y disposición para el trabajo en equipo.
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
          El egresado de Ingeniería Electromecánica adquiere las habilidades en las competencias en Manufactura, Automatización y Eficiencia Energética para diseñar e implementar sistemas y dispositivos electromecánicos, utilizando estrategias para el uso eficiente de la energía en los sectores productivos y de servicios apegados a normas, así como para el control y/o automatización de los procesos productivos y los dispositivos en los sistemas electromecánicos. Aplicar herramientas computacionales de acuerdo a las tecnologías de vanguardia, para el diseño, simulación y operación de sistemas electromecánicos acordes a la demanda del sector industrial. Así mismo, fomentar en el egresado el desempeño de sus actividades profesionales considerando los aspectos éticos, humanos, desarrollo sustentable y responsabilidad social.
        </p>
        </div>
      </div>
      
      <a href="#openModalCamLa" class="contPlanEstuPerfil">Campo<br>Laboral</a>
      <div id="openModalCamLa" class="modalDialogCamLa">
        <div>
        <center><b style="font-size: 30px">Campo laboral</b></center>
        <a href="#closeCamLa" title="Cerrar Ventana" class="closeCamLa">X</a>
        <br>
        <ul style="text-align: justify; font-size: 80%; padding: 3% 4% 3% 4% ">
          <li>Instituciones públicas y privadas.</li>
          <li>Industria manufacturera.</li>
          <li>Industria de la transformación.</li>
          <li>Comercio de insumos y/o productos.</li>
          <li>Servicios de consultoría.</li>
          <li>Administración Pública.</li>
        </ul>
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
    <img src="mycss/img_css/electro/img1.jpg" alt="Imagen 1">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/electro/img2.jpg" alt="Imagen 2">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/electro/img3.jpg" alt="Imagen 3">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/electro/img4.jpg" alt="Imagen 4">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/electro/img5.jpg" alt="Imagen 5">
  </div>
</div>

 



<br><br><br><br><br><br>


<!---Retícula de carrera--->

<button class="descargar_reticula" onclick="openModal('pdf/electromecanica/Reticula Ingenieria Electromecanica.pdf')">Descargar Retícula...</button>



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
          <button class="btn-pdf" onclick="openModal('pdf/electromecanica/2.RETICULAIEME.pdf')">MANUFACTURA, AUTOMATIZACION INDUSTRIAL Y EFICIENCIA ENERGETICA</button>
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
              <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/JosueOliverosGonzalez.pdf')">
                  <img class="img-docente" src="mycss/img_css/electro/docentes_electro/JosueAngel01.jpg" alt="ING. Josue Angel Oliveros Gonzales">
                  <p class="role-docente">JEFE DE CARRERA: ING. Josue Angel Oliveros Gonzales</p>
              </button>
          </div>
          
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/juanLuis.pdf')">
                <img class="img-docente" src="mycss/img_css/electro/docentes_electro/Ing.-Juan-Luis-Baizabal-Chaparros.jpg" alt="ING. Juan Luis Baizabal Chaparros">
                <p class="role-docente">ING. Juan Luis Baizabal Chaparros</p>
            </button>
          </div>
        
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/juancarloscadena.pdf')">
              <img class="img-docente" src="mycss/img_css/electro/docentes_electro/MII.-Juan-Carlos-Cardenas-Tufino.jpg" alt="M.I.I Juan Carlos Cárdenas Tufiño">
              <p class="role-docente">M.I.I. Juan Carlos Cárdenas Tufiño</p>
            </button>
          </div>
      
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/jorgeadanlucho.pdf')">
              <img class="img-docente" src="mycss/img_css/electro/docentes_electro/Mtro.-Jorge-Adan-Lucho-Chigo.jpg" alt="M.E. Jorge Adán Lucho Chigo">
              <p class="role-docente">M.E. Jorge Adán Lucho Chigo</p>
            </button>
          </div>
  
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/blancanicandria.pdf')">
                <img class="img-docente" src="mycss/img_css/electro/docentes_electro/MII.-Blanca-Nicandria-Rios-Ataxca.jpg" alt="M.I.I. Blanca Nicandria Ríos Ataxca">
                <p class="role-docente">M.I.I. Blanca Nicandria Ríos Ataxca</p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/victorpalcruz.pdf')">
              <img class="img-docente" src="mycss/img_css/electro/docentes_electro/Ing.-Victor-Palma-Cruz.jpg" alt="ING. Víctor Palma Cruz">
              <p class="role-docente">ING. Víctor Palma Cruz</p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/carloscobaxin.pdf')">
                <img class="img-docente" src="mycss/img_css/electro/docentes_electro/MII.-Carlos-Cobaxin-Zuniga.jpg" alt="M.I.I. Carlos Cobaxin Zúniga">
                <p class="role-docente">M.I.I. Carlos Cobaxin Zúniga</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/guillermopalacios.pdf')">
                <img class="img-docente" src="mycss/img_css/electro/docentes_electro/MII.-Guillermo-Palacios-Pitalua.jpg" alt="M.T.I. María de Los Ángeles Pelayo Vaquero">
                <p class="role-docente">M.I.I. Guillermo Palacios Pitalúa</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/cosmehernandez.pdf')">
                <img class="img-docente" src="mycss/img_css/electro/docentes_electro/Ing.-Cosme-Hernandez-Linares.jpg" alt="ING. Cosme Hernández Linares">
                <p class="role-docente">ING. Cosme Hernández Linares</p>
            </button>
          </div>
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/robertovalencia.pdf')">
                <img class="img-docente" src="mycss/img_css/electro/docentes_electro/MC.-Roberto-Valencia-Benitez.jpg" alt="M.C. Roberto Valencia Benítez">
                <p class="role-docente">M.C. Roberto Valencia Benítez</p>
            </button>
        </div>
        
        <div class="card">
          <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/joelfrancisco.pdf')">
              <img class="img-docente" src="mycss/img_css/electro/docentes_electro/hdocentes.png" alt="D.R Joel Francisco Pava Chipol">
              <p class="role-docente">D.R Joel Francisco Pava Chipol</p>
          </button>
        </div>
      
        <div class="card">
          <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/estebandominguez.pdf')">
            <img class="img-docente" src="mycss/img_css/electro/docentes_electro/hdocentes.png" alt="M.I.I. Esteban Domínguez Fiscal">
            <p class="role-docente">M.I.I. Esteban Domínguez Fiscal</p>
          </button>
        </div>
    
        <div class="card">
          <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/alejandrooliveros.pdf')">
            <img class="img-docente" src="mycss/img_css/electro/docentes_electro/hdocentes.png" alt="ING. Alejandro Oliverio Copete">
            <p class="role-docente">ING. Alejandro Oliverio Copete</p>
          </button>
        </div>

        <div class="card">
          <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/INFORMACION DE LOS MAESTROS.pdf')">
              <img class="img-docente" src="mycss/img_css/electro/docentes_electro/hdocentes.png" alt="ING. Antonio Xolo Ámbros">
              <p class="role-docente">ING. Antonio Xolo Ámbros</p>
          </button>
        </div>

        <div class="card">
          <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/Franciscojavier.pdf')">
            <img class="img-docente" src="mycss/img_css/electro/docentes_electro/hdocentes.png" alt="M.I.I. Francisco Javier Torres Pérez">
            <p class="role-docente">M.I.I. Francisco Javier Torres Pérez</p>
          </button>
        </div>

        <div class="card">
          <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/hectormiguel.pdf')">
              <img class="img-docente" src="mycss/img_css/electro/docentes_electro/hdocentes.png" alt="M.C. Héctor Miguel Amador Chagala">
              <p class="role-docente">M.C. Héctor Miguel Amador Chagala</p>
          </button>
        </div>
        <div class="card">
          <button class="btn-pdf_docentes" onclick="openModal('pdf/electromecanica/angelrodriguez.pdf')">
              <img class="img-docente" src="mycss/img_css/electro/docentes_electro/hdocentes.png" alt="ING. Ángel Rodríguez Ruíz">
              <p class="role-docente">ING. Ángel Rodríguez Ruíz</p>
          </button>
        </div>
        

      </div>
  </div>
</div>



<br><br><br><br><br><br><br><br>
<div class="gallery-title">Laboratorios</div>
<div class="carousel-container-l">
    <div class="main-image-l">
        <img id="featured-laboratorio" src="mycss/img_css/electro/img1.jpg" alt="Imagen Principal">
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
        <li><a href="#tab1">1°</a></li>
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
                <td>ACA-0907</td>
                <td>Taller de Ética</td>
                <td><a href="pdf/electromecanica/sem1/AC007 Taller de Etica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0901</td>
                <td>Cálculo Diferencial</td>
                <td><a href="pdf/electromecanica/sem1/AC001 Calculo Diferencial.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMH-1016</td>
                <td>Introducción a la Programación</td>
                <td><a href="pdf/electromecanica/sem1/Introduccion a la programacion v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACD-0908</td>
                <td>Desarrollo Sustentable</td>
                <td><a href="pdf/electromecanica/sem1/AC008 Desarrollo Sustentable.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1058</td>
                <td>Química</td>
                <td><a href="pdf/electromecanica/sem1/AE058 Quimica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACC-0906</td>
                <td>Fundamentos de Investigación</td>
                <td><a href="pdf/electromecanica/sem1/AC006 Fundamentos de Investigacion.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>EME-1012</td>
                <td>Estática</td>
                <td><a href="pdf/electromecanica/sem2/Estatica v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0902</td>
                <td>Cálculo Integral</td>
                <td><a href="pdf/electromecanica/sem2/AC002 Calculo Integral.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0903</td>
                <td>Álgebra Lineal</td>
                <td><a href="pdf/electromecanica/sem2/AC003 Algebra Lineal.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1047</td>
                <td>Metrología y Normalización </td>
                <td><a href="pdf/electromecanica/sem2/AE047 Metrologia y Normalizacion.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EME-1028</td>
                <td>Tecnología de los Materiales</td>
                <td><a href="pdf/electromecanica/sem2/Tecnologia de los materiales v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEF-1390</td>
                <td>Dibujo Electromecánico</td>
                <td><a href="pdf/electromecanica/sem2/AE090 Dibujo Electromecanico.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>EME-1012</td>
                <td>Dinámica</td>
                <td><a href="pdf/electromecanica/sem3/Dinamica v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0904</td>
                <td>Cálculo Vectorial</td>
                <td><a href="pdf/electromecanica/sem3/AC004 Calculo Vectorial.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMC-1022</td>
                <td>Procesos de Manufactura</td>
                <td><a href="pdf/electromecanica/sem3/Procesos de manufactura v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMC-1011</td>
                <td>Electricidad y Magnetismo</td>
                <td><a href="pdf/electromecanica/sem3/electricidad y magnetismo v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMJ-1021</td>
                <td>Mecánica de Materiales</td>
                <td><a href="pdf/electromecanica/sem3/Mecanica de Materiales v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEE-1051</td>
                <td>Probabilidad y Estadística</td>
                <td><a href="pdf/electromecanica/sem3/AE051 Probabilidad y Estadistica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>EME-1005</td>
                <td>Análisis y Síntesis de Mecanismos</td>
                <td><a href="pdf/electromecanica/sem4/Análisis y Síntesis de Mecanismos v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0905</td>
                <td>Ecuaciones Diferenciales</td>
                <td><a href="pdf/electromecanica/sem4/AC005 Ecuaciones Diferenciales.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EME-1029</td>
                <td>Termodinámica</td>
                <td><a href="pdf/electromecanica/sem4/Termodinámica v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMF-1004</td>
                <td>Análisis de Circuitos Eléctricos de CD</td>
                <td><a href="pdf/electromecanica/sem4/Análisis de Circuitos de CD v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EME-1020</td>
                <td>Mecánica de Fluidos </td>
                <td><a href="pdf/electromecanica/sem4/Mecanica de fluidos v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEF-1021</td>
                <td>Electrónica Analógica </td>
                <td><a href="pdf/electromecanica/sem4/AE021 Electronica Analogica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>EMF-1009</td>
                <td>Diseño de Elementos de Máquinas</td>
                <td><a href="pdf/electromecanica/sem5/Diseño de elementos de maquinas v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMC-1010</td>
                <td>Diseño e Ingeniería Asistidos por Computadora</td>
                <td><a href="pdf/electromecanica/sem5/Diseño e ingenieria asistido por computadora v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EME-1030</td>
                <td>Transferencia de Calor</td>
                <td><a href="pdf/electromecanica/sem5/Transferencia de Calor v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMF-1003</td>
                <td>Análisis de Circuitos Eléctricos de CA</td>
                <td><a href="pdf/electromecanica/sem5/Analisis de Circuitos de CA v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMJ-1026</td>
                <td>Sistemas y Máquinas de Fluidos </td>
                <td><a href="pdf/electromecanica/sem5/Sistemas y maquinas de fluidos v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1022</td>
                <td>Electrónica Digital</td>
                <td><a href="pdf/electromecanica/sem5/AE022 Electronica Digital.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>EMC-1018</td>
                <td>Máquinas y Equipos Térmicos I</td>
                <td><a href="pdf/electromecanica/sem6/Maquinas y equipos Termicos I v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMJ-1002</td>
                <td>Ahorro de Energía</td>
                <td><a href="pdf/electromecanica/sem6/Ahorro de energia v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMF-1015</td>
                <td>Instalaciones Eléctricas</td>
                <td><a href="pdf/electromecanica/sem6/Instalaciones Electricas v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMJ-1017</td>
                <td>Máquinas Eléctricas</td>
                <td><a href="pdf/electromecanica/sem6/Maquinas Electricas v2.doc.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMJ-1001</td>
                <td>Administración y Técnicas de Mantenimiento</td>
                <td><a href="pdf/electromecanica/sem6/Administracion y tecnicas de mantenimiento v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACA-0909</td>
                <td>Taller de Investigación I</td>
                <td><a href="pdf/electromecanica/sem6/AC009 Taller de Investigacion I.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>EMC-1019</td>
                <td>Máquinas y Equipos Térmicos II</td>
                <td><a href="pdf/electromecanica/sem7/Maquinas y equipos Termicos II v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMF-1024</td>
                <td>Sistemas Eléctricos de Potencia </td>
                <td><a href="pdf/electromecanica/sem7/sistemas electricos de potencia v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMF-1006</td>
                <td>Controles Eléctricos</td>
                <td><a href="pdf/electromecanica/sem7/Controles electricos v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMJ-1014</td>
                <td>Ingeniería de Control Clásico</td>
                <td><a href="pdf/electromecanica/sem7/Ingeniería de Control Clásico v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACA-0910</td>
                <td>Taller de Investigación II</td>
                <td><a href="pdf/electromecanica/sem7/AC010 Taller de Investigacion II.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>EMF-1023</td>
                <td>Refrigeración y Aire Acondicionado</td>
                <td><a href="pdf/electromecanica/sem8/Refrigeracion y Aire acondicionado v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMF-1027</td>
                <td>Subestaciones Eléctricas</td>
                <td><a href="pdf/electromecanica/sem8/Subestaciones Electricas v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMJ-1025</td>
                <td>Sistemas Hidráulicos y Neumáticos de Potencia</td>
                <td><a href="pdf/electromecanica/sem8/Sistemas Hidraulicos  y Neumaticos de Potencia v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>EMC-1013</td>
                <td>Formulación y Evaluación de Proyectos</td>
                <td><a href="pdf/electromecanica/sem8/Formulacion y evaluacion de proyectos v2.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
  const laboratorioImages = ['mycss/img_css/electro/lab1.jpg', 'mycss/img_css/electro/lab2.jpg', 'mycss/img_css/electro/lab3.jpg', 'mycss/img_css/electro/lab4.jpg'];

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