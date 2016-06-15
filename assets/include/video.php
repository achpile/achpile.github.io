<?php

/***********************************************************************
    * set_section_video

***********************************************************************/
function set_section_video($title, $id) {
	set_subsection_header($title);

echo <<<HTMLBLOCK

<iframe width="640" height="360" src="//www.youtube.com/embed/$id?feature=player_detailpage" frameborder="0" allowfullscreen>
</iframe>

HTMLBLOCK;

	set_subsection_footer();
}

?>
