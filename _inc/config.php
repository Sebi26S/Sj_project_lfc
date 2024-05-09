<?php

//konštanta DATABASE obsahujúca asoc pole 
define('DATABASE', [
    'HOST' => 'localhost',
    'DBNAME' => 'sj_project',
    'USER_NAME' => 'root',
    'PASSWORD' => ''
]);

session_start();

require_once('classes/menu.php');
require_once('classes/page.php');
require_once('classes/Database.php');
require_once('classes/users.php');
require_once('classes/menu2.php');
require_once('classes/history.php');


?>