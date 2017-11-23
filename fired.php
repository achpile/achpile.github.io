<?php

	include('assets/include/all.php');

//######################################################################

	set_header('F.I.R.E.D.');
	set_menu();

//######################################################################

	set_project_status('Stopped');
	set_section_header('F.I.R.E.D.');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('F.I.R.E.D. is a 2D cross-platform game with elements of Action, RPG and Adventure. Game written in C++ using SFML and SQLite');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('github3', 'GitHub'     , 'https://github.com/achpile/fired');
	set_link('sfml'   , 'SFML Thread', 'http://en.sfml-dev.org/forums/index.php?topic=16025.0');
	set_links_end();

//######################################################################

	set_section_video('Trailer', '_NXOpMToOkA');

//######################################################################

	set_screenshot_start();
	set_screenshot('fired', '01.jpg');
	set_screenshot('fired', '02.jpg');
	set_screenshot('fired', '03.jpg');
	set_screenshot('fired', '04.jpg');
	set_screenshot('fired', '05.jpg');
	set_screenshot('fired', '06.jpg');
	set_screenshot('fired', '07.jpg');
	set_screenshot('fired', '08.jpg');
	set_screenshot_end();

//######################################################################

	set_subsection_header('Controls');
	set_control('A'         , 'move left');
	set_control('D'         , 'move right');
	set_control('SPACE'     , 'jump');
	set_control('S'         , 'jump down');
	set_control('LEFT MOUSE', 'shoot');
	set_control('Q'         , 'switch weapon');
	set_control('E'         , 'interact');
	set_control('C'         , 'character window');
	set_control('I'         , 'inventory window');
	set_control('ESC'       , 'menu');
	set_subsection_footer();

//######################################################################

	set_deps_start();
	set_deps('SFML'  , 'http://sfml-dev.org/');
	set_deps('SQLite', 'http://sqlite.org/');
	set_deps_end();

//######################################################################

	set_footer();

?>
