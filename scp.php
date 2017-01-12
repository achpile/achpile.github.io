<?php

	include('assets/include/all.php');

//######################################################################

	set_header('SCP: The First Day');
	set_menu();

//######################################################################

	set_project_status('InDev');
	set_section_header('SCP: The First Day');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('SCP: The First Day is a 2D metroidvania horror game.');
	set_subsection_footer();

//######################################################################

	set_screenshot_start();
	set_screenshot('scp', '01.jpg');
	set_screenshot_end();

//######################################################################

	set_subsection_header('Controls');
	set_control('A'         , 'move left');
	set_control('D'         , 'move right');
	set_control('W'         , 'up');
	set_control('S'         , 'down');
	set_control('SPACE'     , 'jump');
	set_control('ESC'       , 'menu');
	set_subsection_footer();

//######################################################################

	set_deps_start();
	set_deps('SFML'    , 'http://sfml-dev.org/');
	set_deps('Jansson', 'http://www.digip.org/jansson/');
	set_deps_end();

//######################################################################

	set_footer();

?>
