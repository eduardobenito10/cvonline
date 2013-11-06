<?php

function actualizarCV($cv) {
  $cvCompleto = completarCV($cv);
  $cvCompleto->asXml('../cvs/cv.xml');
}

function completarCV($cv) {
  // Enlaces y meses

  $unirioja = $cv->educations->education[0];
  $unirioja->addChild('school-url', 'http://www.unirioja.es');
  
  $uned = $cv->educations->education[1];
  $uned->addChild('school-url', 'http://www.uned.es');
  $uned->{'start-date'}->addChild('month', '1');
  $uned->{'end-date'}->addChild('month', '6');

  $unirioja = $cv->educations->education[2];
  $unirioja->addChild('school-url', 'http://www.unirioja.es');

  return $cv;
}

function cargarCV($cv="cvs/cv.xml") {
  $cv = simplexml_load_file($cv);
  return $cv;
}

function getEducation($cv) {
  $render = '<ul class="vcalendar">';
  foreach ($cv->educations->education as $education) {
    $render .= '<li class="education vevent">
            <div class="fecha">' . $education->{'start-date'}->year . ' - ' . $education->{'end-date'}->year . '</div>
            <span class="degree">' . $education->degree . ' en ' . $education->{'field-of-study'} . '</span>
            <a class="url org" href="' . $education->{'school-url'} . '">' . $education->{'school-name'} . '</a>
            <span class="notes">' . $education->notes . '</span>
          </li>';
  }

  $render .= '</ul>';
  return $render;
}

function getPositions($cv) {
  $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

  $render = '<ul class="vcalendar">';
  foreach ($cv->positions->position as $position) {
    $isCurrent = $position->{'is-current'};
    $current = ($isCurrent) ? "current" : "";

    $start_month = $position->{'start-date'}->month;
    $start_month = $meses[$start_month - 1];
    $start_date = $start_month . ' ' . $position->{'start-date'}->year;

    if ($isCurrent == 'true') {
      $end_date = "presente";
    } else {
      $end_month = $position->{'end-date'}->month;
      $end_month = $meses[$end_month - 1];
      $end_date = $end_month . ' ' . $position->{'end-date'}->year;
    }

    $render .= '<li class="experience vevent ' . $current . '">
            <div class="fecha">' . $start_date . ' - ' . $end_date . '</div>
            <span class="summary">' . $position->title . '</span>
            <span class="url org">
              <a href="' . $position->company->url . '">' . $position->company->name . '</a>
            </span>
            <span class="location"><small>'.$position->company->place.'</small></span>
            <div class="description">
              ' . nl2br($position->summary) . '
            </div>
          </li>';
  }

  $render .= '</ul>';
  return $render;
}

function getInterests($cv) {
  $render = '<div>';
  /* <div>
    <span>Correr</span>, <span>Fútbol</span>, <span>Android</span>, <span>Processing</span>, <span>Arduino</span>,
    <span>Software libre</span>, <span>Open Data</span>, <span>Metodologías ágiles</span>.</li>
    </div> */
  $render .= $cv->interests;

  $render .= '</div>';
  return $render;
}

function getTimeline($cv) {
  // Establecer el intervalo de años
  $start_year = 0;
  $end_year = 0;
  
  $current_month = (int) date("n");
  
  
  $colores_edu = array("rgb(51,68,51)", "rgb(51,102,170)", "rgb(102,153,170)", "rgb(170,187,187)", "rgb(119,136,119)");
  $colores_pos = array("rgb(97,0,0)", "rgb(135,49,31)", "rgb(172,104,66)", "rgb(211,163,104)", "rgb(251,223,142)");
  foreach ($cv->positions->position as $position) {
    if ((int) $position->{'start-date'}->year < $start_year || $start_year == 0) {
      $start_year = $position->{'start-date'}->year;
    }
    if ((int) $position->{'end-date'}->year > $end_year) {
      $end_year = $position->{'end-date'}->year;
    }
  }
  foreach ($cv->educations->education as $education) {
    if ((int) $education->{'start-date'}->year < $start_year || $start_year == 0) {
      $start_year = $education->{'start-date'}->year;
    }
    if ((int) $education->{'end-date'}->year > $end_year) {
      $end_year = $education->{'end-date'}->year;
    }
  }
  $total_time = $end_year - $start_year;
  $x_year = 800 / $total_time;
  $x_month = $x_year / 12;

  $render = "";
  $y = "90";
  $line_points = "";
  for ($i = 0; $i <= $total_time+1; $i++) {
    $x = 5 + $x_year * $i;
    $year = (int) $start_year + $i;
	if($i != $total_time+1)
		$render .= '<text x="' . $x . '" y="110" transform="rotate(30 ' . $x . ',110)">' . $year . '</text>';
    
	$line_points .= $x . ',' . $y . ' ';
    $line_points .= $x . ',' . ($y + 5) . ' ';
    $line_points .= ($x + 1) . ',' . ($y + 5) . ' ';
    $line_points .= ($x + 1) . ',' . $y . ' ';
  }
  $render .= '<polyline fill="none" style="stroke:rgb(0,0,0);stroke-width:2" 
            points="' . $line_points . '"/>';

  $last_end_date = array("year" => 0, "month" => 0);

  for ($i = count($cv->educations->education); $i--; $i >= 0) {
    $education = $cv->educations->education[$i];
    $x_education = ((int) $education->{'start-date'}->year - $start_year) * $x_year;
    $x_education += $education->{'start-date'}->month * $x_month;
    $width = ((int) $education->{'end-date'}->year - $start_year) * $x_year;
    $width += $education->{'end-date'}->month * $x_month;
    $width = $width - $x_education;
    $y = 20;
    if ((int) $education->{'start-date'}->year < $last_end_date["year"] ||
            ((int) $education->{'start-date'}->year == $last_end_date["year"] && (int) $education->{'start-date'}->month < $last_end_date["month"])) {
      $y = 0;
    }
    $last_end_date = array("year" => $education->{'end-date'}->year, "month" => $education->{'end-date'}->month);
    $resumen = $education->degree . " en " . $education->{'field-of-study'};
    $color = $colores_edu[$i % count($colores_edu)];
    $render .= "<rect class=\"tooltip\" title=\"" . $resumen . "\" x=\"" . $x_education . "\" y=\"" . $y . "\" width=\"" . $width . "\" height=\"18\" style=\"fill:" . $color . ";stroke-width:0;stroke:rgb(0,0,0)\"/>";
    $render .= '<line x1="'.$x_education.'" y1="'.$y.'" x2="'.$x_education.'" y2="90" style="stroke:rgb(90,90,90);stroke-width:0.5" />';
    $render .= '<line x1="'.($x_education+$width).'" y1="'.$y.'" x2="'.($x_education+$width).'" y2="90" style="stroke:rgb(90,90,90);stroke-width:0.5" />';
  }
  $last_end_date = array("year" => 0, "month" => 0);
  for ($i = count($cv->positions->position); $i--; $i >= 0) {
    $position = $cv->positions->position[$i];

    $x_position = ((int) $position->{'start-date'}->year - $start_year) * $x_year;
    $x_position += $position->{'start-date'}->month * $x_month;
	if(!isset($position->{'end-date'}) && $position->{'is-current'} == 'true')
	{
		$position_end_year = $end_year;
		$position_end_month = $current_month;
	}	
	else{
		$position_end_year = (int) $position->{'end-date'}->year;
		$position_end_month = $position->{'end-date'}->month;
	}
    $width = ($position_end_year - $start_year) * $x_year;
    $width += $position_end_month * $x_month;
    $width = $width - $x_position;
    $y = 40;
    if ((int) $position->{'start-date'}->year < $last_end_date["year"] ||
            ((int) $position->{'start-date'}->year == $last_end_date["year"] && (int) $position->{'start-date'}->month < $last_end_date["month"])) {
      $y = 60;
    }
    $last_end_date = array("year" => $position->{'end-date'}->year, "month" => $position->{'end-date'}->month);
    $resumen = $position->title . " en " . $position->company->name;
    $color = $colores_pos[$i % count($colores_pos)];
    $render .= '<rect class="tooltip" title="' . $resumen . '" x="' . $x_position . '" y="' . $y . '" width="' . $width . '" height="18" style="fill:' . $color . ';stroke-width:0;"/>';
    $render .= '<line x1="'.$x_position.'" y1="'.$y.'" x2="'.$x_position.'" y2="90" style="stroke:rgb(0,0,0);stroke-width:0.5" />';
    $render .= '<line x1="'.($x_position+$width).'" y1="'.$y.'" x2="'.($x_position+$width).'" y2="90" style="stroke:rgb(0,0,0);stroke-width:0.5" />';
  }

  return $render;
}

?>