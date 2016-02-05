<?php
/**
 * Created by PhpStorm.
 * User: roach
 * Date: 12.01.16
 * Time: 0:45
 */
define('ROOT', dirname(dirname(__FILE__)));

define('LAYOUTSDIR', ROOT . DIRECTORY_SEPARATOR . 'layouts/' );

define('PAGESDIR', ROOT . DIRECTORY_SEPARATOR . 'pages/' );

define('DEFAULT_CONTROLLER', 'DefaultController1');

define('DEFAULT_ACTION', 'actionIndex');

define('CONTROLLER_POSTFIX', 'Controller');

define('ACTION_PREFIX', 'action' );

define('ROUTER_SAVE_PATH', ROOT . 'settings/');