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
  <title>ITSSAT – Ing. Mecatronica</title>



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
  background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url("mycss/img_css/meca/titulo_meca_escritorio.png");
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
      <div class="nombre_carrera">Ingeniería<br>Mecatrónica</div>
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
              <p>ING. Yosafat Mortera Elias</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/correo_sinfondo.png" alt="Correo Electrónico" class="icon">
          <div>
              <div class="texto_contacto">Correo Electrónico</div>
              <p>ing_mecatronica@itssat.edu.mx</p>
          </div>
      </div>
      <div class="contacto-item">
          <img src="img/favicon/llamada.png" alt="Teléfono" class="icon">
          <div>
              <div class="texto_contacto">Teléfono</div>
              <p>(294) 947-9100 ext - </p>
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
          El Programa Educativo de Ingeniería Mecatrónica busca satisfacer las necesidades de los estudiantes, otorgando un proceso académico de alta calidad, para tener ingenieros de excelencia, creativos, humanistas, e investigadores, con una sólida base científica, capaz de desarrollar de manera eficiente sus competencias profesionales; en el área de la Mecatrónica y de esta manera, contribuir al desarrollo de su zona de su influencia, estado y país.
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
          Ser un programa Educativo líder en la formación de Ingenieros Mecatrónicos y que sea reconocido nacional e internacionalmente.
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
          Formar profesionistas en la ingeniería Mecatrónica con capacidad analítica, crítica y creativa que le permita diseñar, proyectar, construir, innovar y administrar equipos y sistemas Mecatrónicos en el sector social y productivo; así como integrar, operar y mantenerlos, con un compromiso ético y de calidad en un marco de desarrollo sustentable.
        </p>
      </div>
    </div> 

  </div>
  <!--- FIN DEL PLAN DE ESTUDIOS--->

  </center>

<br><br><br><br><br><br><br><br>


<center>
  <h2>¿Por qué estudiar Ingeniería Mecatrónica?</h2>
</center>


<center>
  <div class="contPerfilesCampo">
    <div class="imagenPerfilesCampo">
          <center>
                   <img src="mycss/img_css/meca/oferta_educativa_mecatronica.png" width="100%" height="100%">
     
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
          Los aspirantes a ingresar deben a ser egresados del nivel medio superior en el área de ciencias exactas.
        </p>
        </div>
      </div>
    
      
      <a href="#openModalPerEg" class="contPlanEstuPerfil">Perfil de egreso</a>
      <div id="openModalPerEg" class="modalDialogPerEg">
        <div>
        <center><b style="font-size: 30px">Perfil de egreso</b></center>
        <a href="#closePerEg" title="Cerrar Ventana" class="closePerEg">X</a>
        <br>
        <p style="text-align: justify;   font-size: 12px;">
          El egresado analizará, sintetizará, diseñará, simulará, construirá e innovará productos, procesos, equipos y sistemas mecatrónicos, con una actitud investigadora, de acuerdo a las necesidades tecnológicas y sociales actuales y emergentes, impactando positivamente en el entorno global; integrará, instalará, construirá, optimizará, operará, controlará, mantendrá, administrará y/o automatizará sistemas mecánicos utilizando tecnologías eléctricas, electrónicas y herramientas computacionales; evaluará y generará proyectos industriales y de carácter social; coordinará y dirigirá grupos multidisciplinarios fomentando el trabajo en equipo para la implementación de proyectos mecatrónicos, asegurando su calidad, eficiencia, productividad y rentabilidad con sentido de responsabilidad de su entorno social y cultural para un desarrollo sustentable; desarrollará capacidades de liderazgo, comunicación e interrelaciones personales para transmitir ideas, facilitar conocimientos, trabajar en equipos multidisciplinarios y multiculturales con responsabilidad colectiva para la solución de problemas y desarrollo de proyectos con un sentido crítico y autocrítico; interpretará información técnica de las áreas que componen la Ingeniería Mecatrónica para la transferencia, adaptación, asimilación e innovación de tecnologías de vanguardia.
        </p >
        </div>
      </div>
      
      <a href="#openModalCamLa" class="contPlanEstuPerfil">Campo<br>Laboral</a>
      <div id="openModalCamLa" class="modalDialogCamLa">
        <div>
        <center><b style="font-size: 30px">Campo laboral</b></center>
        <a href="#closeCamLa" title="Cerrar Ventana" class="closeCamLa">X</a>
        <br>
        
        <ul style="text-align: justify; font-size: 80%; padding: 3% 4% 3% 4% ">
          <li>Empresas de la industria automotriz, manufacturera, petroquímica, metal-mecánica, alimentos y electromecánica.</li>
          <li>Empresas del sector industrial, comercial y de servicios donde se utilizan medios electrónicos y de automatización.</li>
          <li>Empresas mineras, de manufactura, electricidad, comercio, comunicaciones y servicios.</li>
          <li>Industrias químicas, farmacéuticas, transformación de la madera, metal mecánica, automotriz, textil y de la confección, proceso de alimentos, sector eléctrico.</li>
          <li>Por cuenta propia desarrollando la actividad profesional en gestión de empresas.</li>
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
    <img src="mycss/img_css/meca/horizontal3.jpg" alt="Imagen 1">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/meca/horizontal2.jpg" alt="Imagen 2">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/meca/horizontal1.jpg" alt="Imagen 3">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/meca/horizontal4.jpg" alt="Imagen 4">
  </div>
  
  <div class="gallery-cell">
    <img src="mycss/img_css/meca/horizontal5.jpg" alt="Imagen 5">
  </div>
</div>

 



<br><br><br><br><br><br>


<!---Retícula de carrera--->

<button class="descargar_reticula" onclick="openModal('pdf/mecatronica/Reticula Ingenieria Mecatronica.pdf')">Descargar Retícula...</button>



<!---Especialidades--->
<!---bounce left--->
<center>
<div class="wow animate__animated animate__bounceInLeft" data-wow-duration="1.5s" data-wow-delay="0.3s">

    <div class="titulo_reticula">
      Especialidad
    </div>

    <!-- Botón PDF especialidad -->
    <div class="reticula">
          <!-- Botón PDF especialidad -->
           <button class="btn-pdf" onclick="openModal('pdf/mecatronica/11.RETICULAIMCT_DESARROLLOMCTDEPROCESOS.pdf')">DESARROLLO <br> MECATRONICO DE PROCESOS</button>
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
              <button class="btn-pdf_docentes" onclick="openModal('pdf/mecatronica/OctavioObilMartinez.pdf')">
                  <img class="img-docente" src="mycss/img_css/meca/docentes_meca/hdocentes.png" alt="I.S.C. Marcos Cagal Ortiz">
                  <p class="role-docente">JEFE DE CARRERA: I.S.C. Yosafat Mortera Elias</p>
              </button>
          </div>
          
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/mecatronica/AlmaCamposLara.pdf')">
                <img class="img-docente" src="mycss/img_css/meca/docentes_meca/ALMAROSACAMPOSLARA.jpg" alt="M.E. Guadalupe Zetina Cruz">
                <p class="role-docente">ING. Alma Rosado Campos Lara</p>
            </button>
          </div>
        
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/mecatronica/GuillermoReyesMorales.pdf')">
              <img class="img-docente" src="mycss/img_css/meca/docentes_meca/GUILLERMOREYESMORALES.jpg" alt="M.T.I. Verónica Guerrero Hernández">
              <p class="role-docente">DR. Guillermo Reyes Morales</p>
            </button>
          </div>
      
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/mecatronica/LorenaPalmaCruz.pdf')">
              <img class="img-docente" src="mycss/img_css/meca/docentes_meca/LORENAPALMACRUZ.jpg" alt="L.I. Sergio Pelayo Vaquero">
              <p class="role-docente">M.I. Lorena Palma Cruz</p>
            </button>
          </div>
  
          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/mecatronica/JuanMerlinChontal.pdf')">
                <img class="img-docente" src="mycss/img_css/meca/docentes_meca/JUANMERLINCHONTAL.jpg" alt="M.T.I. Juan Rafael Gonález Cadena">
                <p class="role-docente">ING. Juan Merlin Chontal</p>
            </button>
          </div>

          <div class="card">
            <button class="btn-pdf_docentes" onclick="openModal('pdf/mecatronica/RobertoEsteban.pdf')">
              <img class="img-docente" src="mycss/img_css/meca/docentes_meca/ROBERTOESTABANGUERREROHERNANDEZ.jpg" alt="M.T.I. Rogelio Enrique Telona Torres">
              <p class="role-docente">M.T.I. Roberto Esteban Guerrero Hernández</p>
            </button>
          </div>

          

      </div>
  </div>
</div>



<br><br><br><br><br><br><br><br>
<div class="gallery-title">Laboratorios</div>
<div class="carousel-container-l">
    <div class="main-image-l">
        <img id="featured-laboratorio" src="mycss/img_css/meca/lab1.jpg" alt="Imagen Principal">
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
                <td>AEC-1058</td>
                <td>Química</td>
                <td><a href="pdf/mecatronica/sem1/AE058 Quimica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0901</td>
                <td>Cálculo Diferencial</td>
                <td><a href="pdf/mecatronica/sem1/AC001 Calculo Diferencial.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACA-0907</td>
                <td>Taller de Ética</td>
                <td><a href="pdf/mecatronica/sem1/AC007 Taller de Etica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEA-1013</td>
                <td>Dibujo Asistido por Computadora</td>
                <td><a href="pdf/mecatronica/sem1/AE013 Dibujo Asistido por Computadora.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1047</td>
                <td>Metrología y Normalización</td>
                <td><a href="pdf/mecatronica/sem1/AE047 Metrologia y Normalizacion.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACC-0906</td>
                <td>Fundamentos de Investigación</td>
                <td><a href="pdf/mecatronica/sem1/AC006 Fundamentos de Investigacion.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>ACF-0902</td>
                <td>Cálculo Integral</td>
                <td><a href="pdf/mecatronica/sem2/AC002 Calculo Integral.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACF-0903</td>
                <td>Álgebra Lineal</td>
                <td><a href="pdf/mecatronica/sem2/AC003 Algebra Lineal.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTF-1004</td>
                <td>Ciencia e Ingeniería de Materiales</td>
                <td><a href="pdf/mecatronica/sem2/Ciencia e Ingeniería de los Materiales.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTD-1024</td>
                <td>Programación Básica</td>
                <td><a href="pdf/mecatronica/sem2/Programación Básica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTC-1014</td>
                <td>Estadística y Control de Calidad</td>
                <td><a href="pdf/mecatronica/sem2/Estadistica y Control de Calidad.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTC-1001</td>
                <td>Administración y Contabilidad</td>
                <td><a href="pdf/mecatronica/sem2/Administración y Contabilidad.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>ACF-0904</td>
                <td>Cálculo Vectorial</td>
                <td><a href="pdf/mecatronica/sem3/AC004 Calculo Vectorial.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTC-1022</td>
                <td>Procesos de Fabricación</td>
                <td><a href="pdf/mecatronica/sem3/Procesos de fabricación.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEF-1020</td>
                <td>Electromagnetismo</td>
                <td><a href="pdf/mecatronica/sem3/AE020 Electromagnetismo.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTC-1015</td>
                <td>Estática</td>
                <td><a href="pdf/mecatronica/sem3/Estática.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEC-1046 </td>
                <td>Métodos Numéricos</td>
                <td><a href="pdf/mecatronica/sem3/AE046 Metodos Numericos.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACD-0908</td>
                <td>Desarrollo Sustentable</td>
                <td><a href="pdf/mecatronica/sem3/AC008 Desarrollo Sustentable.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>ACF-0905</td>
                <td>Ecuaciones Diferenciales</td>
                <td><a href="pdf/mecatronica/sem4/AC005 Ecuaciones Diferenciales.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTC-1017</td>
                <td>Fundamentos de Termodinámica</td>
                <td><a href="pdf/mecatronica/sem4/Fundamentos de termodinámica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTJ-1020</td>
                <td>Mecánica de Materiales</td>
                <td><a href="pdf/mecatronica/sem4/Mecánica de Materiales.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTC-1008</td>
                <td>Dinámica</td>
                <td><a href="pdf/mecatronica/sem4/Dinámica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTJ-1002</td>
                <td>Análisis de Circuitos Eléctricos</td>
                <td><a href="pdf/mecatronica/sem4/Análisis de Circuitos Eléctricos.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>AEF-1040</td>
                <td>Máquinas Eléctricas</td>
                <td><a href="pdf/mecatronica/sem5/AE040 Maquinas Electricas.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTJ-1011</td>
                <td>Electrónica Analógica</td>
                <td><a href="pdf/mecatronica/sem5/Electrónica Analógica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AED-1043</td>
                <td>Mecanismos</td>
                <td><a href="pdf/mecatronica/sem5/AE043 Mecanismos.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTC-1003</td>
                <td>Análisis de Fluidos</td>
                <td><a href="pdf/mecatronica/sem5/Análisis de Fluidos.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACA-0909</td>
                <td>Taller de Investigación I</td>
                <td><a href="pdf/mecatronica/sem5/AC009 Taller de Investigacion I.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>MTJ-1012</td>
                <td>Electrónica de Potencia Aplicada</td>
                <td><a href="pdf/mecatronica/sem6/Electrónica de Potencia Aplicada.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AEF-1038</td>
                <td>Instrumentación</td>
                <td><a href="pdf/mecatronica/sem6/AE038 Instrumentacion.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTF-1010</td>
                <td>Diseño de Elementos Mecánicos</td>
                <td><a href="pdf/mecatronica/sem6/Diseño de Elementos Mecánicos.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTF-1013</td>
                <td>Electrónica Digital</td>
                <td><a href="pdf/mecatronica/sem6/Electrónica Digital.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>AED-1067</td>
                <td>Vibraciones Mecánicas</td>
                <td><a href="pdf/mecatronica/sem6/AE067 Vibraciones Mecanicas.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>ACA-0910</td>
                <td>Taller de Investigación II</td>
                <td><a href="pdf/mecatronica/sem6/AC010 Taller de Investigacion II.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>MTF-1009</td>
                <td>Dinámica de Sistemas</td>
                <td><a href="pdf/mecatronica/sem7/Dinámica de Sistemas.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTD-1019</td>
                <td>Manufactura Avanzada</td>
                <td><a href="pdf/mecatronica/sem7/Manufactura Avanzada.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTG-1005</td>
                <td>Circuitos Hidráulicos y Neumáticos</td>
                <td><a href="pdf/mecatronica/sem7/Circuitos Hidráulicos y Neumáticos.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTF-1018</td>
                <td>Mantenimiento</td>
                <td><a href="pdf/mecatronica/sem7/Mantenimiento.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTF-1021</td>
                <td>Microcontroladores</td>
                <td><a href="pdf/mecatronica/sem7/Microcontroladores.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTG-1023</td>
                <td>Programación Avanzada</td>
                <td><a href="pdf/mecatronica/sem7/Programación Avanzada.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
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
                <td>MTJ-1006</td>
                <td>Control</td>
                <td><a href="pdf/mecatronica/sem8/Control.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTO-1016</td>
                <td>Formulación y Evaluación de Proyectos</td>
                <td><a href="pdf/mecatronica/sem8/Formulación y Evaluación de Proyectos.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              <tr>
                <td>MTD-1007</td>
                <td>Controladores Lógicos Programables</td>
                <td><a href="pdf/mecatronica/sem8/Controladores Lógicos Programables.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              
            </table>
          </div>

          <div id="tab9" class="tab">
            <table class="custom-table">
              <!-- Primera fila con fondo diferente (títulos) -->
              <tr class="table-header">
                <th>Clave</th>
                <th>Asignatura</th>
                <th>Contenido</th>
              </tr>
              <!-- Filas de contenido -->
              <tr>
                <td>MTF-1025</td>
                <td>Robótica</td>
                <td><a href="pdf/mecatronica/sem9/Robótica.pdf" target="_blank"><img src="img/favicon/pdf_rojo.png" width="35px"></a></td>
              </tr>
              
            </table>
          </div>


      </div><!-- Fin de cada pestaña -->
  </div>
 
</div>

</center><!------------------------ Fin Cont NavTablas -------------------------->
<br><br>


<!------------------------ wsp icon -------------------------->

<a href="https://wa.me/5212941016169?text=Hola, me gustaría saber más acerca de la carrera Ingeniería Mecatrónica">
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
  const laboratorioImages = ['mycss/img_css/meca/lab1.jpg', 'mycss/img_css/meca/lab2.jpg', 'mycss/img_css/meca/lab3.jpg', 'mycss/img_css/meca/lab4.jpg'];

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