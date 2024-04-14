<?php

/***********************************************************************
    * set_project_status

***********************************************************************/
function set_project_status($status) {
echo <<<HTMLBLOCK

<span class="badge $status">$status</span>

HTMLBLOCK;
}



/***********************************************************************
    * set_photo

***********************************************************************/
function set_photo() {
echo <<<HTMLBLOCK

<div class="image_wrapper_news">
	<img src="assets/img/photo.jpg">
</div>

HTMLBLOCK;
}
