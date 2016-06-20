<?php

	include('assets/include/all.php');

//######################################################################

	set_header('Dispersio');
	set_menu();

//######################################################################

	set_project_status('InDev');
	set_section_header('Dispersio');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('Dispersio is a retro-styled adventure platformer written in C++ with SFML');
	set_subsection_footer();

//######################################################################

	set_links_start();
	set_link('sfml'   , 'SFML Thread', 'http://en.sfml-dev.org/forums/index.php?topic=20444.0');
	set_links_end();

//######################################################################

	set_section_video('Live stream by Smokey332', 'cUIYN97nCZM');

//######################################################################
/*
	set_screenshot_start();
	set_screenshot('dispersio', '01.jpg');
	set_screenshot('dispersio', '02.jpg');
	set_screenshot('dispersio', '03.jpg');
	set_screenshot('dispersio', '04.jpg');
	set_screenshot('dispersio', '05.jpg');
	set_screenshot('dispersio', '06.jpg');
	set_screenshot('dispersio', '07.jpg');
	set_screenshot('dispersio', '08.jpg');
	set_screenshot_end();
*/
//######################################################################

	set_subsection_header('Controls');
	set_control('A'         , 'move left');
	set_control('D'         , 'move right');
	set_control('W'         , 'up');
	set_control('S'         , 'down');
	set_control('SPACE'     , 'jump');
	set_control('Q'         , 'special');
	set_control('R'         , 'retry');
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
