<?php
//
// PHASE: BOOTSTRAP
//
define('DHARMA_INSTALL_PATH', dirname(__FILE__));
define('DHARMA_SITE_PATH', DHARMA_INSTALL_PATH . '/site');

require(DHARMA_INSTALL_PATH.'/src/CDharma/bootstrap.php');

$dh = CDharma::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$dh->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$dh->ThemeEngineRender();
