<?php

session_start();
session_unset();
session_destroy();

echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=/rectec">';

?>
