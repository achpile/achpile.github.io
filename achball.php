<?php

	include('assets/include/all.php');

//######################################################################

	set_header('AchBall');
	set_menu();

//######################################################################

	set_project_status('Released');
	set_section_header('AchBall');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('AchBall is a casual game in which you hit goals by launching a ball. You score extra points for each time the ball bounces.');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('steam', 'Steam store page', 'http://store.steampowered.com/app/739180');
	set_link('sfml' , 'SFML Thread'     , 'http://en.sfml-dev.org/forums/index.php?topic=22570.0');
	set_links_end();

//######################################################################

	set_section_steam('739180');

//######################################################################

	set_section_video('Trailer'    , 'CUZGqqZisF8');
	set_section_video('v0.7.1 demo', 'FRBZ5N-ViP0');
	set_section_video('v0.4.2 demo', 'M73XtrGeVJE');
	set_section_video('v0.4.0 demo', 'Sats2K9FZt0');

//######################################################################

	set_screenshot_start();
	set_screenshot('achball', '01.jpg');
	set_screenshot('achball', '02.jpg');
	set_screenshot('achball', '03.jpg');
	set_screenshot('achball', '04.jpg');
	set_screenshot('achball', '05.jpg');
	set_screenshot_end();

//######################################################################

	set_footer();

?>
