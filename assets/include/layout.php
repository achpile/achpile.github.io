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
echo <<<HTMLBLOCK

		<div class="side_bar margin_right_10">

			<div class="header_03">Main Menu</div>
			<ul>
				<li><a href="/"            >Home    </a></li>
				<li><a href="/contacts.php">Contacts</a></li>
			</ul>
			<div style="clear: both; width: 100%; height: 40px; font-size: 1px;"></div>

			<div class="header_03">Games</div>
			<ul>
				<li><a href="/dispersio.php">Dispersio </a></li>
				<li><a href="/scp.php"      >SCP       </a></li>
				<li><a href="/fired.php"    >F.I.R.E.D.</a></li>
			</ul>
			<div style="clear: both; width: 100%; height: 40px; font-size: 1px;"></div>

			<div class="header_03">Tools</div>
			<ul>
				<li><a href="/achsplit.php">AchSplit</a></li>
			</ul>
			<div style="clear: both; width: 100%; height: 40px; font-size: 1px;"></div>

			<div class="header_03">Examples</div>
			<ul>
				<li><a target="_blank" href="https://github.com/achpile/sfml-lighting">SFML Lighting</a></li>
			</ul>
			<div style="clear: both; width: 100%; height: 40px; font-size: 1px;"></div>
		</div>
		<div class="content">

HTMLBLOCK;
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

		<div id="footer">Hosted by <a href="http://www.0hosting.me" target=_blank>0Hosting</a></div>
		<div style="clear: both; width: 100%; height: 30px; font-size: 1px;"></div>
	</body>
	</html>

HTMLBLOCK;
}

?>
