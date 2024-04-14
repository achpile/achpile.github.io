<?php

	include('include/all.php');

//######################################################################

	set_header('F.I.R.E.D.');
	set_menu();

//######################################################################

	set_project_status('Cancelled');
	set_section_header('F.I.R.E.D.');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('It was my first project where I just practiced skills. I developed a lot of things here which migrated to later projects.');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('sfml', 'SFML Thread', 'http://en.sfml-dev.org/forums/index.php?topic=16025.0');
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

	set_footer();

?>
