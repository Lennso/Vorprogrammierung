<?php

require '../vendor/autoload.php';

$themeDirectory = __DIR__.'/theme';
$dataFile = $themeDirectory.'/data.json';

// Create new Plates engine
$templates = new League\Plates\Engine($themeDirectory);

$template = str_replace($_SERVER['SCRIPT_NAME'], '',$_SERVER['REQUEST_URI']);
$template = $template === '/' ? 'index.html' : trim($template, '/').'.html';

// Create a new template
$template = $templates->make($template);

// Add data to the template
if(file_exists($dataFile) and $data = file_get_contents($dataFile)) {
    $template->data(json_decode($data, true));
}

// Render the template
echo $template->render();

// Stop execution
die();