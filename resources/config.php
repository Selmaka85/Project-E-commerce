<?php 
ob_start();//this is used to send alot of requests on the same time open buffer
session_start();
//session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT",__DIR__.DS."templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK",__DIR__.DS."templates/back");

defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY",__DIR__.DS."./uploads");


defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER", "root");

defined("DB_PASSWORD") ? null : define("DB_PASSWORD", "");

defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

$connection= mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
require_once("functions.php");
//require_once("cart.php");
?>