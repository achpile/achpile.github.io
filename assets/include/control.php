<?php

/***********************************************************************
    * set_control

***********************************************************************/
function set_control($key, $description) {

echo <<<HTMLBLOCK

<code class=control>$key</code> - $description<br />

HTMLBLOCK;

}

?>
