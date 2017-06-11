<?php

/***********************************************************************
    * set_section_steam

***********************************************************************/
function set_section_steam($id) {
	set_subsection_header('Buy on Steam');

echo <<<HTMLBLOCK

<iframe src="http://store.steampowered.com/widget/$id/" frameborder="0" width="646" height="190"></iframe>

HTMLBLOCK;

	set_subsection_footer();
}

?>
