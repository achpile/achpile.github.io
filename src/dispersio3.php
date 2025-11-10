<?php

	include('include/all.php');

//######################################################################

	set_header('Dispersio 3');
	set_menu();

//######################################################################

	set_project_status('Released');
	set_section_header('Dispersio 3');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('Dispersio 3 is a retro-style action platformer. As you progress through the game, you will face intense obstacles, like oppressing winds, treacherous waters or antigravity challenges. There\'s even a hard mode for hardcore players.');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('steam'   , 'Steam store page', 'https://store.steampowered.com/app/4125160');
	set_link('github'  , 'Source code'     , 'https://github.com/achpile/dispersio3');
	set_link('sfml'    , 'SFML Thread'     , 'http://en.sfml-dev.org/forums/index.php?topic=29723.0');
	set_links_end();

//######################################################################

	set_section_steam('4125160');

//######################################################################

	set_section_video('Trailer'    , '8GTLIgFumpM');
	set_section_video('v0.3.0 demo', 'h2UsCIuzh2E');

//######################################################################

	set_screenshot_start();
	set_screenshot('dispersio3', '01.jpg');
	set_screenshot('dispersio3', '02.jpg');
	set_screenshot('dispersio3', '03.jpg');
	set_screenshot('dispersio3', '04.jpg');
	set_screenshot('dispersio3', '05.jpg');
	set_screenshot_end();

//######################################################################

	set_footer();

?>
