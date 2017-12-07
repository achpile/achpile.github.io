<?php

	include('assets/include/all.php');

//######################################################################

	set_header('AchSplit');
	set_menu();

//######################################################################

	set_section_header('AchSplit');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('AchSplit is a simple stopwatch-tool for speedrunners');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('github3'       , 'GitHub'     , 'https://github.com/achpile/AchSplit');
	set_link('cloud-download', 'Download'   , 'https://github.com/achpile/AchSplit/releases/tag/v1.0');
	set_link('book'          , 'Manual page', 'https://github.com/achpile/AchSplit/blob/master/docs/README.eng.md');
	set_links_end();

//######################################################################

	set_section_video('Demonstration', 'lUDWY4qRnxA');


//######################################################################

	set_deps_start();
	set_deps('SFML'   , 'http://sfml-dev.org/');
	set_deps('Jansson', 'http://www.digip.org/jansson/');
	set_deps_end();

//######################################################################

	set_footer();

?>
