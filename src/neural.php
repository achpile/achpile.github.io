<?php

	include('include/all.php');

//######################################################################

	set_header('Neural Networks');
	set_menu();

//######################################################################

	set_section_header('Neural Networks');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('Just some stuff about neural networks and genetic algorithm');
	set_subsection_footer();

//######################################################################

	set_links_start('Links');
	set_link('sfml', 'SFML Thread', 'https://en.sfml-dev.org/forums/index.php?topic=22877.0');
	set_links_end();

//######################################################################

	set_section_video('Super Hexagon', 'oeJ7Gw_vO_8');
	set_section_video('Flappy Bird'  , 'cAr90JQVxaI');

//######################################################################

	set_footer();

?>
