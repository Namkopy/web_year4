<?php
/*---------system info-------*/
define('MACHINE', gethostname());
define('OS', PHP_OS);
/*---------------------------*/
define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('REQUESTURL', $_SERVER['REQUEST_URI']);
$langauge = array('kh','en');
if (!isset($_COOKIE)) {
    define('LANG', 'kh');
    setcookie("lang", 'kh');
} else {
    if (!isset($_COOKIE['lang'], $langauge)) {
        define('LANG', 'kh');
    } else {
        define('LANG', $_COOKIE['lang']);
    }
}

define('DIR_PROJECT', '/Web_y4_S2/coffee/');
define('PARTH_FILES', '/Web_y4_S2/coffee');
define('CAPTCHA_SECRET', '6LdSvjkUAAAAADFBl_mMbuWKRAR9-i3Nhvn9LsdL');
/** URL AND LINK http **/
define('URL', URL_PROTOCOL . URL_DOMAIN.DIR_PROJECT);
define('LINK', URL_PROTOCOL . URL_DOMAIN . DIR_PROJECT);
/**
 * Allow display error
 **/
define('DEBUG', true);
error_reporting(E_ALL);
if (DEBUG) {
    ini_set('display_errors', 'On');
} else {
    ini_set('display_errors', 'Off');
}
/*--------database-------*/
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ruppcoffe');
define('DB_CHARSET', 'utf8');

/*--------CRM database-------*/
// define('CRM_HOST', '103.101.80.16');
// // define('CRM_HOST', '103.101.80.16');
// define('CRM_USER', 'root');
// define('CRM_PASS', 'vhs1234kh');
// define('CRM_DB', 'crmdb');
