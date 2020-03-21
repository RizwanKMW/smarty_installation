<?php
// load Smarty library
require('Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = 'C:/xampp/htdocs/smarty/templates';
$smarty->config_dir = 'C:/xampp/htdocs/smarty/config';
$smarty->cache_dir = 'C:/xampp/smarty/cache';
$smarty->compile_dir = 'C:/xampp/smarty/templates_c';
$smarty->assign('name','Penguin !!');
$smarty->display('index.tpl');
?>