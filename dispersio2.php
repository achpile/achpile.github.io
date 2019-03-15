<?php

	include('assets/include/all.php');

//######################################################################

	set_header('Dispersio 2');
	set_menu();

//######################################################################

	set_project_status('InDev');
	set_section_header('Dispersio 2');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('Dispersio 2 is a retro-styled metroidvania written in C++ with SFML');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('sfml', 'SFML Thread', 'http://en.sfml-dev.org/forums/index.php?topic=22171.0');
	set_links_end();

//######################################################################

	set_section_video('v0.4.3 demo', 'tuOeyttiOTk');
	set_section_video('v0.3.9 demo', 'PRJwGcadf_U');
	set_section_video('v0.2.7 demo', 'gGZmp_ka58s');

//######################################################################

	set_screenshot_start();
	set_screenshot('dispersio2', '01.jpg');
	set_screenshot('dispersio2', '02.jpg');
	set_screenshot('dispersio2', '03.jpg');
	set_screenshot('dispersio2', '04.jpg');
	set_screenshot('dispersio2', '05.jpg');
	set_screenshot_end();

//######################################################################

	set_subsection_header('Controls');
	set_control('A'         , 'move left');
	set_control('D'         , 'move right');
	set_control('W'         , 'up');
	set_control('S'         , 'down');
	set_control('SPACE'     , 'jump');
	set_control('R-CTRL'    , 'attack');
	set_control('R-SHIFT'   , 'dash');
	set_control('ESC'       , 'menu');
	set_subsection_footer();

//######################################################################

	set_deps_start();
	set_deps('SFML'   , 'http://sfml-dev.org/');
	set_deps('Jansson', 'http://www.digip.org/jansson/');
	set_deps_end();

//######################################################################

	set_footer();

?>
