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

	start_section_submenu('Main Menu');
	add_menu_item('Home', '/', '_self' , 'home');
	end_section_submenu();

	start_section_submenu('Games');
	add_menu_item('AchBall'    , '/achball.php'   , '_self', 'steam');
	add_menu_item('Dispersio'  , '/dispersio.php' , '_self', 'steam');
	add_menu_item('Dispersio 2', '/dispersio2.php', '_self', 'steam');
	end_section_submenu();

	start_section_submenu('In progress');
	add_menu_item('Dispersio 3', '/dispersio3.php', '_self', 'cog');
	end_section_submenu();

	start_section_submenu('Cancelled');
	add_menu_item('SCP 3D'     , '/scp-3d.php'    , '_self', 'blocked');
	add_menu_item('F.I.R.E.D.' , '/fired.php'     , '_self', 'blocked');
	add_menu_item('Dispersio X', '/dispersioX.php', '_self', 'blocked');
	end_section_submenu();

	start_section_submenu('Misc');
	add_menu_item('Neural Networks', '/neural.php', '_self', 'wrench');
	add_menu_item('Lines'          , '/lines.php' , '_self', 'wrench');
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
