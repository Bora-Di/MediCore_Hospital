<?php
require 'vendor/autoload.php';

$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setCacheDir('cache/');
$smarty->setConfigDir('configs/');

// Assign base URL
$smarty->assign('base_url', 'http://localhost/MediCore_Hopital/');

// Display the template
$smarty->display('index.tpl');
?>
