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

	set_links_start('Some of my coding stuff');
	set_link('book', 'Simple arcades', 'https://github.com/achpile/arcade'       );
	set_link('book', 'SFML Lighting' , 'https://github.com/achpile/sfml-lighting');
	set_links_end();

//######################################################################

	set_links_start('Just a good links');
	set_link('link', 'SFML'            , 'https://sfml-dev.org/'           );
	set_link('link', 'Jansson'         , 'http://digip.org/jansson/'       );
	set_link('link', 'Tiled Map Editor', 'http://www.mapeditor.org/'       );
	set_link('link', 'SQLite'          , 'https://sqlite.org/'             );
	set_link('link', 'Irrlicht'        , 'http://irrlicht.sourceforge.net/');
	set_link('link', 'BitBucket'       , 'https://bitbucket.org/'          );
	set_link('link', 'OpenGameArt'     , 'https://opengameart.org/'        );
	set_link('link', 'SCP Foundation'  , 'http://scp-wiki.net/'            );
	set_links_end();

//######################################################################

	set_footer();

?>
