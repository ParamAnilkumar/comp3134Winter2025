<?php
$payload = file_get_contents("storedxss.txt");
echo $payload;
?>