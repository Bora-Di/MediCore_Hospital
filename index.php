<?php
require 'vendor/autoload.php';
require 'includes/MediCore_db.php';

$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setCacheDir('cache/');
$smarty->setConfigDir('configs/');

$stmt = $conn->prepare("SELECT * FROM patients");
$stmt->execute();
$patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

$smarty->assign('patients', $patients);
$smarty->assign('base_url', 'http://localhost/MediCore_Hospital/');
$smarty->display('templates/index.tpl');
?>
