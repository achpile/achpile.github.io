<?php

	include('include/all.php');

//######################################################################

	set_header('Dispersio 2');
	set_menu();

//######################################################################

	set_project_status('Released');
	set_section_header('Dispersio 2');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('Dispersio 2 is a retro-style metroidvania. As you progress through the game, you will gain new abilities, such as dashing, wall-jumping and more. There\'s even a hard mode for hardcore players. Can you beat the game with only 1 HP? ');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('steam', 'Steam store page', 'http://store.steampowered.com/app/1489850');
	set_link('sfml' , 'SFML Thread', 'http://en.sfml-dev.org/forums/index.php?topic=22171.0');
	set_links_end();

//######################################################################

	set_section_steam('1489850');

//######################################################################

	set_section_video('Trailer'    , 'iLgFlBSh7y0');
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

	set_footer();

?>
