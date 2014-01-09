<?php
require_once '../vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
 //   'cache' => 'var/compilation_cache',
    'debug' => 'true'
));

include_once('utilCV.php');
$cv = cargarCV('cvs/cv_gadea.xml');

$template = $twig->loadTemplate('index.twig.html');

$skills = '<span class="skill">Java</span>, <span class="skill">ImageJ</span>, <span class="skill">Digital Image Processing</span>, <span class="skill">Mathematica</span>, <span class="skill">Matlab</span>, <span class="skill">NetBeans</span>, <span class="skill">Photoshop</span>, <span class="skill">GIMP</span>, <span class="skill">Microsoft Office</skill>';

$complementary_education = '
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
';

$languages = "
<ul>
	<li>
		<span>Español:</span>
		<span>Nativo</span>
    </li>
    <li>
		<span>Inglés:</span>
		<span>Nivel regular oral y escrito. Nivel suficiente de lectura.</span>
    </li>
</ul>";

$docencia = '
<ul>
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
</ul>';

echo $template->render(array(
'title' => 'Gadea Mata Martínez',
'description' => 'CV Gadea Mata Martínez',
'name' => 'Gadea Mata Martínez',
'subtitle' => '',
'mapaddress' => 'pintor+rosales+3&hl=es&ie=UTF8&ll=42.457768,-2.454221&spn=0.003039,0.005284&safe=off&hq=pintor+rosales+3&hnear=Logro%C3%B1o,+La+Rioja&t=h&z=16',
'latitude' => '42.457692',
'longitude' =>  '2.454414',
'street' => 'Pintor Rosales. 3,',
'postalcode' => '26007',
'locality' => 'Logroño',
'region' => 'La Rioja',
'country' => 'España',
'email' => 'gadea.mata@gmail.com',
'phone' => '+34 665109969',
'birthdate' => '05/11/1985',
'twitter' => 'gadeammm',
'linkedin' => 'pub/gadea-mata/30/76b/a1b',
'skills' => $skills,
'education' => getEducation($cv),
'complementary_education' => $complementary_education,
'positions' => getPositions($cv),
'docencia' => $docencia,
'timeline' => getTimeline($cv),
'interests' => getInterests($cv),
'languages' => $languages));

