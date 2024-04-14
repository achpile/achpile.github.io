<?php

	include('assets/include/all.php');

//######################################################################

	set_header('SCP-3D');
	set_menu();

//######################################################################

	set_project_status('Stopped');
	set_section_header('SCP-3D');

//######################################################################

	set_subsection_header('Description');
	set_subsection_text('Here\'s my attempt to make a horror game in the SCP universe. But 3D is just not for me :D');
	set_subsection_footer();

//######################################################################

	set_screenshot_start();
	set_screenshot('scp-3d', '01.jpg');
	set_screenshot('scp-3d', '02.jpg');
	set_screenshot('scp-3d', '03.jpg');
	set_screenshot('scp-3d', '04.jpg');
	set_screenshot('scp-3d', '05.jpg');
	set_screenshot('scp-3d', '06.jpg');
	set_screenshot('scp-3d', '07.jpg');
	set_screenshot('scp-3d', '08.jpg');
	set_screenshot('scp-3d', '09.jpg');
	set_screenshot('scp-3d', '10.jpg');
	set_screenshot('scp-3d', '11.jpg');
	set_screenshot_end();

//######################################################################

	set_footer();

?>
