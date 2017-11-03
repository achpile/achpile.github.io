<?php

/***********************************************************************
    * set_header

***********************************************************************/
function set_header($title) {
echo <<<HTMLBLOCK

	<!DOCTYPE html>

	<html>
	<head>
		<title>$title - Achpile official website</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Achpile official website" />

		<link rel="icon" type="image/png" href="/assets/img/template/icon.png">
		<link href="/assets/css/style.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div id="wrapper_outer">
			<div id="wrapper_inner">
			<div id="banner"><img src="/assets/img/template/banner_main.png"></div>
			<div id="content_wrapper">
HTMLBLOCK;
}



/***********************************************************************
    * set_menu

***********************************************************************/
function set_menu() {
	start_section_menu();

	start_section_submenu("Main Menu");
	add_menu_item("Home"    , "/"            , "_self", "");
	add_menu_item("Contacts", "/contacts.php", "_self", "");
	end_section_submenu();

	start_section_submenu("Games");
	add_menu_item("Dispersio", "/dispersio.php", "_self", "icon-steam");
	end_section_submenu();

	start_section_submenu("In development");
	add_menu_item("AchBall", "/achball.php", "_self", "");
	end_section_submenu();

	start_section_submenu("Abandoned");
	add_menu_item("Dispersio 2", "/dispersio2.php", "_self", "");
	add_menu_item("SCP 3D"     , "/scp-3d.php"    , "_self", "");
	add_menu_item("F.I.R.E.D." , "/fired.php"     , "_self", "");
	end_section_submenu();

	start_section_submenu("Tools");
	add_menu_item("AchSplit", "/achsplit.php", "_self", "");
	end_section_submenu();

	start_section_submenu("My stuff");
	add_menu_item("SFML Lighting", "https://github.com/achpile/sfml-lighting", "_blank", "");
	end_section_submenu();

	start_section_submenu("Some good links");
	add_menu_item("SFML"          , "https://sfml-dev.org/"    , "_blank", "");
	add_menu_item("Jansson"       , "http://digip.org/jansson/", "_blank", "");
	add_menu_item("SQLite"        , "https://sqlite.org/"      , "_blank", "");
	add_menu_item("SCP Foundation", "http://scp-wiki.net/"     , "_blank", "");
	end_section_submenu();

	end_section_menu();
}



/***********************************************************************
    * set_footer

***********************************************************************/
function set_footer() {
echo <<<HTMLBLOCK

				<div style="clear: both; width: 100%; height: 30px; font-size: 1px;"></div>
			</div>
			<div style="clear: both; width: 100%; height: 0px; font-size: 0px;"></div>
			</div>
		</div>
		</div>

		<div id="footer"></div>
		<div style="clear: both; width: 100%; height: 30px; font-size: 1px;"></div>
	</body>
	</html>

HTMLBLOCK;
}

?>
