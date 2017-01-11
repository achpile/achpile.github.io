<?php

	include('assets/include/all.php');

//######################################################################

	set_header('SCP');
	set_menu();

//######################################################################

	set_project_status('Stopped');
	set_section_header('SCP');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('SCP is a 3D cross-platform survival horror game written in C++ using SFML and Irrlicht');
	set_subsection_footer();

//######################################################################

	set_screenshot_start();
	set_screenshot('scp-3d', '01.jpg');
	set_screenshot('scp-3d', '02.jpg');
	set_screenshot('scp-3d', '03.jpg');
	set_screenshot('scp-3d', '04.jpg');
	set_screenshot('scp-3d', '05.jpg');
	set_screenshot('scp-3d', '06.jpg');
	set_screenshot('scp-3d', '07.jpg');
	set_screenshot('scp-3d', '08.jpg');
	set_screenshot('scp-3d', '09.jpg');
	set_screenshot('scp-3d', '10.jpg');
	set_screenshot('scp-3d', '11.jpg');
	set_screenshot_end();

//######################################################################

	set_subsection_header('Controls');
	set_control('W'         , 'move forward');
	set_control('S'         , 'move backward');
	set_control('A'         , 'strafe left');
	set_control('D'         , 'strafe right');
	set_control('MOUSE'     , 'look around');
	set_control('LEFT MOUSE', 'shoot');
	set_control('SHIFT'     , 'run');
	set_control('TAB'       , 'show keycards and minimap');
	set_control('ESC'       , 'exit game');
	set_subsection_footer();

//######################################################################

	set_deps_start();
	set_deps('SFML'    , 'http://sfml-dev.org/');
	set_deps('IrrLicht', 'http://irrlicht.sourceforge.net/');
	set_deps_end();

//######################################################################

	set_footer();

?>
