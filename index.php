<?php
session_start();
if (isset($_SESSION['id'])){ $session_id = $_SESSION['id']; }else{ $session_id = ''; }
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
require 'config/database.php';
require 'config/config.php';
require 'config/function.php';
require 'config/route.php';
?>
