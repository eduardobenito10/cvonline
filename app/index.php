<?php
require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
   // 'cache' => '/tmp/cache',
    'debug' => 'true'
));

putenv('LC_ALL=es_ES.utf8');
setlocale(LC_ALL, 'es_ES.utf8');

// Specify the location of the translation tables
bindtextdomain('messages', 'includes/locale');
bind_textdomain_codeset('messages', 'UTF-8');

// Choose domain
textdomain('messages');

include_once('utilCV.php');
$cv = cargarCV();

$skills = '
        <ul>
          <li><h4>Lenguajes: </h4><span class="skill">PHP</span>, <span class="skill">Javascript</span>, <span class="skill">ASP.NET - C#</span></li>
          <li><h4>Tecnologías web: </h4><span class="skill">AJAX</span>, <span class="skill">jQuery</span>, <span class="skill">HTML5</span>, <span class="skill">CSS</span>, <span class="skill">CSS3</span></li>
          <li><h4>Bases de datos: </h4><span class="skill">MySQL</span>, <span class="skill">SQLite</span>, <span class="skill">SQL Server</span></li>
          <li><h4>Control de versiones: </h4><span class="skill">Git</span>, <span class="skill">Subversion</span></li>
          <li><h4>CMS: </h4><span class="skill">Wordpress</span>, <span class="skill">Joomla</span>, <span class="skill">Drupal</span></li>
          <li><h4>Frameworks: </h4><span class="skill">Yii, Zend, Symfony2</span></li>
        </ul> 
';

$complementary_education = '
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
';

$languages = "
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
";

$twig->addExtension(new Twig_Extensions_Extension_I18n());
$template = $twig->loadTemplate('index.twig.html');

echo $template->render(array(
	'lang' => 'es',
	'title' => 'Eduardo Benito. Programador web, PHP, HTML5, CSS3',
	'description' => 'CV Eduardo Benito Díez,programador web,php,html5,css3,jquery,android,scrum',
	'name' => 'Eduardo Benito Díez',
	'subtitle' => 'Programador web, PHP, HTML5, CSS3, mobile',
	'foto' => 'foto.jpg',
	'mapaddress' => 'Calle+de+Alberto+Aguilera,+11,+28015+Madrid,+Comunidad+de+Madrid&hl=es&sspn=0.013535,0.033023&t=h&geocode=FeToaAIdUmnH_w&hnear=Calle+de+Alberto+Aguilera,+11,+28015+Madrid&z=17',
	'latitude' => '40.429730',
	'longitude' =>  '-3.708760',
	'street' => 'Alberto Aguilera. 11,',
	'postalcode' => '28015',
	'locality' => 'Madrid',
	'region' => 'Madrid',
	'country' => 'España',
	'email' => 'eduardobenito10@gmail.com',
	'web' => 'www.studeoweb.com',
	'phone' => '+34 660856612',
	'birthdate' => '19/08/1985',
	'twitter' => 'eduardobenito10',
	'linkedin' => 'in/eduardobenito10',
	'googleplus' => 'eduardobenito10',
	'skills' => $skills,
	'education' => getEducation($cv),
	'complementary_education' => $complementary_education,
	'positions' => getPositions($cv),
	'timeline' => getTimeline($cv),
	'interests' => getInterests($cv),
	'languages' => $languages));

