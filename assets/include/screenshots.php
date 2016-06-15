<?php

/***********************************************************************
    * set_screenshot_start

***********************************************************************/
function set_screenshot_start() {
	set_subsection_header('Screenshots');

echo <<<HTMLBLOCK

<script src="/assets/js/jquery-1.11.0.min.js"></script>
<script src="/assets/js/lightbox.min.js"></script>

HTMLBLOCK;
}



/***********************************************************************
    * set_screenshot_end

***********************************************************************/
function set_screenshot_end() {
	set_subsection_footer();
}



/***********************************************************************
    * set_screenshot

***********************************************************************/
function set_screenshot($dir, $name) {
echo <<<HTMLBLOCK

<a href="/assets/img/screenshots/$dir/$name" data-lightbox="screenshots">
	<div class="image_wrapper_thumb">
		<img src="/assets/img/screenshots/$dir/$name" />
	</div>
</a>

HTMLBLOCK;
}

?>
