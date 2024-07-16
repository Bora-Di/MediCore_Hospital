<?php
require 'vendor/autoload.php';
require 'includes/db_connection.php';
use Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setCacheDir('cache/');
$smarty->setConfigDir('configs/');

$stmt = $conn->prepare("SELECT * FROM patients");
$stmt->execute();
$patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

$smarty->assign('patients', $patients);
$smarty->assign('base_url', 'http://localhost/MediCare_Hospital/');
$smarty->display('templates/index.tpl');
?>
