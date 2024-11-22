<?php

	include('include/all.php');

//######################################################################

	set_header('Dispersio 3');
	set_menu();

//######################################################################

	set_project_status('InDev');
	set_section_header('Dispersio 3');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('Retro-styled run and gun game.');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('github', 'Source code', 'https://github.com/achpile/dispersio3');
	set_link('sfml'  , 'SFML Thread', 'http://en.sfml-dev.org/forums/index.php?topic=29723.0');
	set_links_end();

//######################################################################

	set_section_video('v0.3.0 demo', 'DUDNs6_Fuhk');

//######################################################################

	set_footer();

?>
