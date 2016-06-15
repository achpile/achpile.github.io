<?php

	include('assets/include/all.php');

//######################################################################

	set_header('Home');
	set_menu();

//######################################################################

	set_section_header('Home');
	set_photo();

//######################################################################

	set_subsection_header('About Me');
	set_subsection_text('I am Linux embedded software developer at <a href="http://www.dlink.ru/en/">D-Link Russia inc.</a>, currently living in Ryazan, Russia');
	set_subsection_text('But my real passion is a Game Development. My dream is to make a really nice game, and as a gamer I know what is nice and what is not.');
	set_subsection_footer();

//######################################################################

	set_footer();

?>
