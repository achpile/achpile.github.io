<?php

/***********************************************************************
    * set_deps_start

***********************************************************************/
function set_deps_start() {
	set_subsection_header('Libraries');

echo <<<HTMLBLOCK

<ul>

HTMLBLOCK;
}



/***********************************************************************
    * set_deps_end

***********************************************************************/
function set_deps_end() {
echo <<<HTMLBLOCK

</ul>

HTMLBLOCK;

	set_subsection_footer();
}



/***********************************************************************
    * set_deps

***********************************************************************/
function set_deps($name, $link) {
echo <<<HTMLBLOCK

		<li><a href="$link" target="_blank">$name</a></li>

HTMLBLOCK;
}

?>
