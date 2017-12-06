<?php

	include('assets/include/all.php');

//######################################################################

	set_header('Contacts');
	set_menu();

//######################################################################

	set_section_header('Contacts');
	set_links_start('');
	set_link('vimeo'    , 'VK'           , 'https://vk.com/achpile_public');
	set_link('facebook2', 'Facebook'     , 'https://facebook.com/alexander.fedosov.75');
	set_link('youtube2' , 'Youtube'      , 'http://youtube.com/user/Achpile');
	set_link('twitter2' , 'Twitter'      , 'https://twitter.com/achpile');
	set_link('linkedin' , 'LinkedIn'     , 'https://www.linkedin.com/in/achpile/');
	set_link('github3'  , 'GitHub'       , 'https://github.com/achpile');
	set_link('steam'    , 'Steam profile', 'http://steamcommunity.com/id/achpile');
	set_link('sfml'     , 'SFML'         , 'http://en.sfml-dev.org/forums/index.php?action=profile;u=10826');
	set_link('mail4'    , 'E-Mail'       , 'mailto:achpile@gmail.com');
	set_links_end();

//######################################################################

	set_footer();

?>
