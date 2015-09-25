<?php

define("CONSOLE", true);
require_once realpath(dirname(__FILE__) . '/../../public') . '/index.php';

$archivo = $_GET['codigo'];
$file = APPLICATION_PATH . '/../multimedia/realtones/'.$archivo;
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . basename($file));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
readfile($file);
