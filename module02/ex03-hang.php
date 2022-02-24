<?php
define('_WEB_ROOT_HOST','http://dangkhoa.net');
echo _WEB_ROOT_HOST;
echo '<br>';
//Cách 2 :

const _WEB_PATH_ROOT = 'CCC';
echo _WEB_PATH_ROOT;
// Kiểm tra hằng số
$checkDefine = defined('_WEB_ROOT_HOST');
var_dump($checkDefine);