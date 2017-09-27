<?php

	include('assets/include/all.php');

//######################################################################

	set_header('AchBall');
	set_menu();

//######################################################################

	set_project_status('InDev');
	set_section_header('AchBall');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('AchBall is a casual arcade game written in C++ with SFML');
	set_subsection_footer();

//######################################################################
/*
	set_links_start();
	set_link('sfml', 'SFML Thread', 'http://en.sfml-dev.org/forums/index.php?topic=22171.0');
	set_links_end();
*/
//######################################################################

	set_section_video('v0.4.0 demo', 'cdJpxW0NcZI');

//######################################################################

	set_subsection_header('Controls');
	set_control('A'         , 'aim left');
	set_control('D'         , 'aim right');
	set_control('W'         , 'increase power');
	set_control('S'         , 'reduce power');
	set_control('SPACE'     , 'shot');
	set_control('ESC'       , 'exit');
	set_subsection_footer();

//######################################################################

	set_deps_start();
	set_deps('SFML'   , 'http://sfml-dev.org/');
	set_deps('Jansson', 'http://www.digip.org/jansson/');
	set_deps_end();

//######################################################################

	set_footer();

?>
