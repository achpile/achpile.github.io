<?php

	include('assets/include/all.php');

//######################################################################

	set_header('Dispersio');
	set_menu();

//######################################################################

	set_project_status('Released');
	set_section_header('Dispersio');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('Dispersio is a retro-styled action platformer. As you progress through the game, you will have to use and combine special abilities, such as dashing, wall-jumping and more. There\'s even a hard mode for hardcore players.');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('steam'  , 'Steam store page', 'http://store.steampowered.com/app/563180');
	set_link('sfml'   , 'SFML Thread'     , 'http://en.sfml-dev.org/forums/index.php?topic=20444.0');
	set_links_end();

//######################################################################

	set_section_steam('563180');

//######################################################################

	set_section_video('Trailer'    , 'Jx254GyFb5I');
	set_section_video('v0.3.3 demo', 'wMEsxN73uHc');
	set_section_video('v0.1.0 demo', '1WR0fCYJQlI');

//######################################################################

	set_screenshot_start();
	set_screenshot('dispersio', '01.jpg');
	set_screenshot('dispersio', '02.jpg');
	set_screenshot('dispersio', '03.jpg');
	set_screenshot('dispersio', '04.jpg');
	set_screenshot_end();

//######################################################################


	set_footer();

?>
