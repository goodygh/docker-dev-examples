<?php
$name = (!empty($_GET['name'])) ? $_GET['name'] : 'world';

$hello = 'Hello ' . $name . "!\n";

echo $hello;
?>