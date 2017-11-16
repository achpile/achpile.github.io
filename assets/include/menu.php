<?php

/***********************************************************************
    * start_section_menu

***********************************************************************/
function start_section_menu() {
echo <<<HTMLBLOCK

<div class="side_bar margin_right_10">

HTMLBLOCK;
}



/***********************************************************************
    * end_section_menu

***********************************************************************/
function end_section_menu() {
echo <<<HTMLBLOCK

</div>
<div class="content">

HTMLBLOCK;
}



/***********************************************************************
    * start_section_submenu

***********************************************************************/
function start_section_submenu($title) {
echo <<<HTMLBLOCK

<div class="header_03">$title</div>
<ul>

HTMLBLOCK;
}



/***********************************************************************
    * end_section_submenu

***********************************************************************/
function end_section_submenu() {
echo <<<HTMLBLOCK

</ul>
<div style="clear: both; width: 100%; height: 40px; font-size: 1px;"></div>

HTMLBLOCK;
}



/***********************************************************************
    * add_menu_item

***********************************************************************/
function add_menu_item($name, $link, $target, $icon) {
echo <<<HTMLBLOCK

<li><a href="$link" target="$target"><i class="icon-float icon-$icon"></i>$name</a></li>

HTMLBLOCK;
}

?>
