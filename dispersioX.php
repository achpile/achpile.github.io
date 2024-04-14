<?php

	include('assets/include/all.php');

//######################################################################

	set_header('Dispersio 3');
	set_menu();

//######################################################################

	set_project_status('Stopped');
	set_section_header('Dispersio X');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('It was supposed to be Dispersio 3 but I decided not to do another precision platformer');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('sfml', 'SFML Thread', 'http://en.sfml-dev.org/forums/index.php?topic=25267.0');
	set_links_end();

//######################################################################

	set_section_video('v0.3.6 demo', 'fSVzTsDdxMg');

//######################################################################

	set_footer();

?>
