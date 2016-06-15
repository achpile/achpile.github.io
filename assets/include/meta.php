<?php

/***********************************************************************
    * set_section_header

***********************************************************************/
function set_section_header($title) {
echo <<<HTMLBLOCK

<div class="header_01">$title</div>
<div class="horizontal_divider" style="clear: both; width: 100%; height: 20px; font-size: 1px;"></div>
<div style="clear: both; width: 100%; height: 20px; font-size: 1px;"></div>

HTMLBLOCK;
}



/***********************************************************************
    * set_subsection_header

***********************************************************************/
function set_subsection_header($title) {
echo <<<HTMLBLOCK

<div class="header_02">$title</div>

HTMLBLOCK;
}



/***********************************************************************
    * set_subsection_footer

***********************************************************************/
function set_subsection_footer() {
echo <<<HTMLBLOCK

<div class="horizontal_divider" style="clear: both; width: 100%; height: 20px; font-size: 1px;"></div>
<div style="clear: both; width: 100%; height: 20px; font-size: 1px;"></div>

HTMLBLOCK;
}



/***********************************************************************
    * set_subsection_text

***********************************************************************/
function set_subsection_text($content) {
echo <<<HTMLBLOCK

<p>$content</p><br />

HTMLBLOCK;
}

?>
