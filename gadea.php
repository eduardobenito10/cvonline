<?php
include_once('utilCV.php');
$cv = cargarCV('cvs/cv_gadea.xml');
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

    <title>Gadea Mata Martínez</title>
    <meta name="description" content="CV Gadea Mata Martínez">
    <meta name="author" content="Eduardo Benito">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="css/style.css?v=2">

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
        <h1 id="title">Gadea Mata Martínez</h1>
        <h3 id="subtitle">---</h3>
      </header>
      <div id="language">
        <!--<a href="en">English</a>-->
      </div>
      <div class="nav-container">
        <nav>
          <ul>
            <li><a href="#habilidades" class="selected">Habilidades</a></li>
            <li><a href="#education">Educacion</a></li>
            <li><a href="#formacion">Formacion</a></li>
            <li><a href="#experience">Experiencia</a></li>
			<li><a href="#docencia">Docencia</a></li>
            <li><a href="#timeline">Timeline</a></li>
            <li><a href="#idiomas">Idiomas</a></li>
          </ul>

        </nav>

      </div>
    </div>
    <div id="main" class="wrapper">
      <aside>
        <!--<div><img src="foto_gadea.jpg" class="foto" alt="Foto" /></div>-->
        <div class="vcard">
          <span class="fn">Gadea Mata Martínez</span>
          <span><small>DIRECCION</small></span>
          <address itemtype="http://data-vocabulary.org/Address" itemscope="" itemprop="address" class="adr">
            <a href="https://maps.google.es/maps?q=pintor+rosales+3&hl=es&ie=UTF8&ll=42.457768,-2.454221&spn=0.003039,0.005284&safe=off&hq=pintor+rosales+3&hnear=Logro%C3%B1o,+La+Rioja&t=h&z=16" target="_blank" title="ver en google maps" class="geo">
              <abbr title="42.457692" class="latitude"></abbr>
              <abbr title="-2.454414" class="longitude"></abbr>

              <span itemprop="street-address" class="street-address">Pintor Rosales. 3 ,</span>
              <span itemprop="postal-code" class="postal-code">26007</span>
              <span itemprop="locality" class="locality"> Logroño</span>
              <span itemprop="locality" class="locality"> La Rioja</span>
              <span itemprop="country-name" class="country-name"> España</span>
            </a>
          </address>
          <span><small>EMAIL </small><a class="email" href="mailto:gadea.mata@gmail.com">gadea.mata@gmail.com</a></span>
          
          <span><small>TELEFONO </small><span class="tel">+34 665109969</span></span>
          <span><small>FECHA NACIMIENTO </small> <span>05/11/1985</span></span>
          <hr/>
          <div id="botones">
            <a href="http://twitter.com/gadeammm"><img src="icono_twitter.png" alt="Twitter"/></a>
            <a href="es.linkedin.com/pub/gadea-mata/30/76b/a1b"><img src="icono_linkedin.png" alt="LinkedIn"/></a>
          </div>
        </div>
      </aside>

      <section id="habilidades" class="tags">
        <h2>Habilidades</h2>
        <ul>
          <span class="skill">Java, ImageJ. Digital Image Processing, Mathematica, Matlab, NetBeans,  Photoshop, GIMP, Microsoft Office</span></li>
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
			<div class="fecha"><abbr class="dtstart" title="2012-04-01">Abril 2012</abbr></div>
			<span class="degree">El autónomo</span>
			<a class="url org" href="http://www.fer.es/"><abbr title="Federación de Empresarios de La Rioja">FER</abbr></a>
			</li>-->
			<li class="education vevent">
				<div class="fecha"><abbr class="dtstart" title="2008">2008</abbr></div>
				<span class="degree">Certificado de Aptitud Pedagógica</span>
				<a class="url org" href="http://www.unirioja.es/">Universidad de La Rioja</a>
			</li>
			<li class="education vevent">
				<div class="fecha"><abbr class="dtstart" title="2010">2010</abbr></div>
				<span class="degree">Curso Nuevas Tecnologías de la información y la comunicación (TIC) aplicadas a la
				educación</span>
				<a class="url org" href="http://www.ucjc.edu/">Universidad Camilo José Cela</a>
			</li>
			<li class="education vevent">
				<div class="fecha"><abbr class="dtstart" title="2009">2009</abbr></div>
				<span class="degree">Curso Desarrollo e intervención didáctica en educación para la salud en infantil y primaria</span>
				<a class="url org" href="http://www.ucjc.edu/">Universidad Camilo José Cela</a>
			</li>
			<li class="education vevent">
				<div class="fecha"><abbr class="dtstart" title="2009">2009</abbr></div>
				<span class="degree">Curso Programa superior creación y consolidación de empresas</span>
				<a class="url org" href="http://www.fer.es/"><abbr title="Federación de Empresarios de La Rioja">FER</abbr></a>
			</li>
			<li class="education vevent">
				<div class="fecha"><abbr class="dtstart" title="2005">2005</abbr></div>
				<span class="degree">Curso Interacciones entre la informática y las matemáticas</span>
				<a class="url org" href="http://www.unirioja.es/">Universidad de La Rioja</a>
			</li>
        </ul>
      </section>

      <section id="experience">
        <h2>Experiencia profesional</h2>
        <?php print_r(getPositions($cv)); ?>
      </section>

	  <section id="docencia">
        <h2>Docencia</h2>
		<li class="docencia vevent">
				<div class="fecha"><abbr class="dtstart" title="2012">2012</abbr></div>
				<span class="degree">Seminario de Informática de Miriam Andrés</span>
				<span>Horas impartidas: 1</span>
				<a class="url org" href="http://www.unirioja.es/">Universidad de La Rioja</a>
			</li>
			<li class="docencia vevent">
				<div class="fecha"><abbr class="dtstart" title="2012">2012</abbr></div>
				<span class="degree">Seminario de Informática de Miriam Andrés</span>
				<span>Horas impartidas: 3</span>
				<a class="url org" href="http://www.unirioja.es/">Universidad de La Rioja</a>
			</li>
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
            <span>Nivel regular oral y escrito. Nivel suficiente de lectura.</span>
          </li>
        </ul>
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