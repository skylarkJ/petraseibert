<?php
//for loading any picture on the page
define(THEME_ROOT, get_template_directory_uri());
define(IMG_DIR, THEME_ROOT . '/img');

//linking sites to menu//
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);

   $url = $_SERVER['HTTPS'] !== 'on' ? 'http://' : 'https://';
   $url .= $_SERVER['SERVER_NAME'];
   $url .= $_SERVER['SERVER_PORT'] !== '80' ? ':'.$_SERVER['SERVER_PORT'] : '';

//linking custom.php, about.php and contact.php to menu//
define('SITE_URL', $url);











 


