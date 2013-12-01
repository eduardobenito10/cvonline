<?php
require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('views');
$twig = new Twig_Environment($loader, array(
    'cache' => 'var/compilation_cache',
));

include_once('utilCV.php');
$cv = cargarCV();
?>

<!doctype html>
<!--[if lt IE 7 ]> <html lang="es" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="es" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="es" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="es" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="es" class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Eduardo Benito. Programador web, PHP, HTML5, CSS3</title>
    <meta name="description" content="CV Eduardo Benito Díez,programador web,php,html5,css3,jquery,android,scrum">
    <meta name="author" content="Eduardo Benito Díez">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cv.css?v=2">

    <script src="js/libs/modernizr-1.7.min.js"></script>

    <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="js/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
    <script src="js/waypoints.min.js" type="text/javascript"></script>
    <script src="js/navbar2.js" type="text/javascript"></script>

    <script type="text/javascript" src="jquery.tooltip.js" ></script>

    <!--<link rel="stylesheet" href="styles.css">-->

    <style>
      .tooltip-popup{
        padding: 6px 8px;
        border: 1px solid #aaa;
        background-color: #eee;
        max-width: 240px;
      }
    </style>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-445436-2']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </head>
  <body>
    <div id="header-container">
      <header class="wrapper">
        <h1 id="title">Eduardo Benito</h1>
        <h3 id="subtitle">Programador web, PHP, HTML5, CSS3, mobile</h3>
      </header>
      <div id="language">
        <a href="en">English</a>
      </div>
      <div class="nav-container">
        <nav>
          <ul>
            <li><a href="#habilidades" class="selected">Habilidades</a></li>
            <li><a href="#education">Educacion</a></li>
            <li><a href="#formacion">Formacion</a></li>
            <li><a href="#experience">Experiencia</a></li>
            <li><a href="#timeline">Timeline</a></li>
            <li><a href="#idiomas">Idiomas</a></li>
            <li><a href="#interests">Intereses</a></li>
          </ul>

        </nav>

      </div>
    </div>
    <div id="main" class="wrapper">
      <aside>
        <div><img src="images/foto.jpg" class="foto" alt="Foto" /></div>
        <div class="vcard">
          <span class="fn">Eduardo Benito Díez</span>
          <span><small>DIRECCION</small></span>
          <address itemtype="http://data-vocabulary.org/Address" itemscope="" itemprop="address" class="adr">
            <a href="https://maps.google.es/maps?q=Calle+de+Alberto+Aguilera,+11,+28015+Madrid,+Comunidad+de+Madrid&hl=es&sspn=0.013535,0.033023&t=h&geocode=FeToaAIdUmnH_w&hnear=Calle+de+Alberto+Aguilera,+11,+28015+Madrid&z=17" target="_blank" title="ver en google maps" class="geo">
              <abbr title="40.429730" class="latitude"></abbr>
              <abbr title="-3.708760" class="longitude"></abbr>

              <span itemprop="street-address" class="street-address">Alberto Aguilera. 11 ,</span>
              <span itemprop="postal-code" class="postal-code">28015</span>
              <span itemprop="locality" class="locality"> Madrid</span>
              <span itemprop="country-name" class="country-name"> España</span>
            </a>
          </address>
          <span><small>EMAIL </small><a class="email" href="mailto:eduardobenito10@gmail.com">eduardobenito10@gmail.com</a></span>
          <span><small>WEB </small><a class="url" href="http://www.studeoweb.com/">www.studeoweb.com</a></span>
          <span><small>TELEFONO </small><span class="tel">+34 660856612</span></span>
          <span><small>FECHA NACIMIENTO </small> <span>19/08/1985</span></span>
          <hr/>
          <div id="botones">
            <a href="http://www.twitter.com/eduardobenito10"><img src="images/icono_twitter.png" alt="Twitter"/></a>
            <a href="http://www.linkedin.com/in/eduardobenito10"><img src="images/icono_linkedin.png" alt="LinkedIn"/></a>
            <a href="http://gplus.to/eduardobenito10"><img src="images/icono_googleplus.png" alt="Google+"/></a>
          </div>
        </div>
      </aside>

      <section id="habilidades" class="tags">
        <h2>Habilidades</h2>
        <ul>
          <li><h4>Lenguajes: </h4><span class="skill">PHP</span>, <span class="skill">Javascript</span>, <span class="skill">ASP.NET - C#</span></li>
          <li><h4>Tecnologías web: </h4><span class="skill">AJAX</span>, <span class="skill">jQuery</span>, <span class="skill">HTML5</span>, <span class="skill">CSS</span>, <span class="skill">CSS3</span></li>
          <li><h4>Bases de datos: </h4><span class="skill">MySQL</span>, <span class="skill">SQLite</span>, <span class="skill">SQL Server</span></li>
          <li><h4>Control de versiones: </h4><span class="skill">Git</span>, <span class="skill">Subversion</span></li>
          <li><h4>CMS: </h4><span class="skill">Wordpress</span>, <span class="skill">Joomla</span>, <span class="skill">Drupal</span></li>
          <li><h4>Frameworks: </h4><span class="skill">Yii, Zend, Symfony2</span></li>

        </ul> 
      </section>

      <section id="education">
        <h2>Educación</h2>
        <?php print_r(getEducation($cv)); ?>
      </section>

      <section id="formacion">
        <h2>Formación complementaria</h2>
        <ul class="vcalendar">
		
		<!--<li class="education vevent">
            <div class="fecha"><abbr class="dtstart" title="2013-03-01">Marzo 2013</abbr></div>
            <span class="degree">Data Analysis and Computing for Data Analysis</span>
            <a class="url org" href="http://www.coursera.org">Coursera</a>
          </li>-->
	  <li class="education vevent">
            <div class="fecha"><abbr class="dtstart" title="2013-11-01">Noviembre 2013</abbr></div>
            <span class="degree">Agilidad y Lean. Gestionando los proyectos y negocios del s. XXI</span>
            <a class="url org" href="http://www.miriadax.net">MiriadaX</a>
          </li>
	
	  <li class="education vevent">
            <div class="fecha"><abbr class="dtstart" title="2013-01-01">Enero 2013</abbr></div>
            <span class="degree">MongoDB for developers</span>
            <a class="url org" href="http://www.10gen.com">10Gen</a>
          </li>
		  
          <li class="education vevent">
            <div class="fecha"><abbr class="dtstart" title="2012-10-01">Octubre 2012</abbr></div>
            <span class="degree">Web Intelligence and Big Data</span>
            <a class="url org" href="http://www.coursera.org">Coursera</a>
          </li>
          <!--<li class="education vevent">
<div class="fecha"><abbr class="dtstart" title="2012-04-01">Abril 2012</abbr></div>
<span class="degree">El autónomo</span>
<a class="url org" href="http://www.fer.es/"><abbr title="Federación de Empresarios de La Rioja">FER</abbr></a>
</li>-->
          <!--<li class="education vevent">
            <div class="fecha"><abbr class="dtstart" title="2011-10-01">Octubre 2011</abbr></div>
            <span class="degree">Introducción a Machine Learning e Inteligencia Artificial</span>
            <a class="url org" href="http://www.ml-class.com">Stanford</a>
          </li>-->

          <li class="education vevent">
            <div class="fecha"><abbr class="dtstart" title="2010-09-01">Septiembre 2010</abbr></div>
            <span class="degree">Curso de Fundamentos de ITIL v3.</span>
            <a class="url org" href="http://www.larioja.org/thinktic"><abbr title="Centro Nacional de Formación en Nuevas Tecnologías">ThinkTic</abbr></a>
            25 h.
          </li>
          <!--<li class="education vevent">
            <div class="fecha"><abbr class="dtstart" title="2010-08-01">Agosto 2010</abbr></div>
            <span class="degree">Curso de Uso de la plataforma Moodle para Tutores.</span>
            <a class="url org" href="http://www.larioja.org/thinktic"><abbr title="Centro Nacional de Formación en Nuevas Tecnologías">ThinkTic</abbr></a>
            20 h.
          </li>-->
          <li class="education vevent">
            <div class="fecha"><abbr class="dtstart" title="2008-05-01">Mayo 2008</abbr></div>
            <span class="degree">Curso de Equipos de Trabajo y Liderazgo</span>
            <a class="url org" href="http://www.fer.es/"><abbr title="Federación de Empresarios de La Rioja">FER</abbr></a>
            70 h.
          </li>
        </ul>
      </section>

      <section id="experience">
        <h2>Experiencia profesional</h2>
        <?php print_r(getPositions($cv)); ?>
      </section>

      <section id="timeline">
        <h2>Timeline</h2>
        <svg id="timeline" height="150" width="900" xmlns="http://www.w3.org/2000/svg">
        <?php print_r(getTimeline($cv)); ?>
        </svg>
      </section>

      <section id="idiomas">
        <h2>Idiomas</h2>

        <ul>
          <li>
            <span>Español:</span>
            <span>Nativo</span>
          </li>
          <li>
            <span>Inglés:</span>
            <span>Nivel medio-alto oral y escrito. Nivel alto de lectura.</span>
          </li>
        </ul>
      </section>

      <section id="interests">
        <h2>Intereses</h2>
        <?php print_r(getInterests($cv)); ?>
      </section>



    </div>
    <div id="footer-container">
      <footer class="wrapper">
        <h3></h3>
        <div id="links"></div>
      </footer>
    </div>

    <script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
    <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg');</script>
    <![endif]-->
    <script language="javascript" type="text/javascript">
      $(document).ready(function() {
        $(".tooltip").tooltip({
          cssClass:"tooltip-popup",
          delay : 0,
          duration : 100});
      });
    </script>

  </body>
</html>
