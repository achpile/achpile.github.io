<?php

	include('include/all.php');

//######################################################################

	set_header('Home');
	set_menu();

//######################################################################

	set_section_header('Home');
	set_photo();

//######################################################################

	set_subsection_header('About Me');
	set_subsection_text('I am Linux embedded software developer at <a href="http://www.dlink.ru/en/">D-Link Russia inc.</a>, currently living in Ryazan, Russia.');
	set_subsection_text('My hobby is game development. You may check them out, they are free to play.');
	set_subsection_footer();

//######################################################################

	set_links_start('Contacts');
	set_link('vimeo'    , 'VK'           , 'https://vk.com/achpile_public');
	set_link('youtube2' , 'Youtube'      , 'https://youtube.com/user/Achpile');
	set_link('twitter2' , 'Twitter'      , 'https://twitter.com/achpile');
	set_link('github3'  , 'GitHub'       , 'https://github.com/achpile');
	set_link('steam'    , 'Steam profile', 'https://steamcommunity.com/id/achpile');
	set_link('sfml'     , 'SFML'         , 'https://en.sfml-dev.org/forums/index.php?action=profile;u=10826');
	set_link('mail4'    , 'E-Mail'       , 'mailto:achpile@gmail.com');
	set_links_end();

//######################################################################

	set_links_start('Just some good stuff');
	set_link('link', 'SFML'            , 'https://sfml-dev.org/');
	set_link('link', 'Jansson'         , 'https://digip.org/jansson/');
	set_link('link', 'Tiled Map Editor', 'https://www.mapeditor.org/');
	set_link('link', 'OpenGameArt'     , 'https://opengameart.org/');
	set_link('link', 'Sound generator' , 'https://sfbgames.itch.io/chiptone');
	set_links_end();

//######################################################################

	set_footer();

?>
