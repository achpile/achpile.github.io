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
	set_subsection_text('Dispersio 3 is a retro-styled run and gun game.');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('github', 'Source code', 'http://github.com/achpile/dispersio3');
	set_links_end();

//######################################################################

	set_footer();

?>
