<?php

snippet('header');
snippet('homephoto');

foreach($pages->listed() as $section) {
  snippet($section->uid(), ['data' => $section]);
}

// snippet('ageOverlay');

snippet('footer');
