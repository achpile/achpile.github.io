<?php

/***********************************************************************
    * set_links_start

***********************************************************************/
function set_links_start($caption) {
	set_subsection_header($caption);

echo <<<HTMLBLOCK

<ul class="list-unstyled">

HTMLBLOCK;
}



/***********************************************************************
    * set_links_end

***********************************************************************/
function set_links_end() {
echo <<<HTMLBLOCK

</ul>

HTMLBLOCK;

	set_subsection_footer();
}



/***********************************************************************
    * set_link

***********************************************************************/
function set_link($icon, $name, $link) {
echo <<<HTMLBLOCK

	<li>
		<a href="$link" target="_blank"><i class="icon-$icon"></i> $name</a>
	</li>

HTMLBLOCK;
}

?>
