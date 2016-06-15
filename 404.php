<?php

	include('assets/include/all.php');

//######################################################################

	set_header('404');
	set_menu();

//######################################################################

	set_section_header('Error 404 - Page Not Found');
	set_subsection_text('Hi there! You seem to be lost… The address you tried going to doesn’t exist here. Don’t worry. It’s possible that the page you’re looking for has been moved to a different address or you may have mis-typed the address.');

//######################################################################

	set_footer();

?>
