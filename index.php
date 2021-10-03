<?php 

require_once "vendor/autoload.php";

$template = file_get_contents("src/Template/structure.html");

ob_start();

$core = new Src\Core\Core;
$core->start($_GET);

$out = ob_get_contents();

ob_end_clean();

$templateReady = str_replace("{{ content }}", $out, $template);

echo $templateReady;