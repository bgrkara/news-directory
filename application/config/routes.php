<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home_page';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

$route['yerel/(:any)']          = 'yerel_page/yereldetay/$1';
$route['sayfa/(:any)']          = 'sayfa/sayfadetay/$1';

$route['iletisim']              = 'contact/index';
$route['mailgonder']           = 'contact/send';

$route['home_page']               = 'home_page/index';
$route['home_page/(.*)']          = 'home_page/$1';

$route['welcome']               = 'welcome/index';
$route['welcome/(.*)']          = 'welcome/$1';

$route['panel']               = 'home/index';
$route['panel/(.*)']          = 'home/$1';

$route['category']               = 'category/index';
$route['category/(.*)']          = 'category/$1';

$route['sehirler']               = 'city/index';
$route['sehirler/(.*)']          = 'city/$1';

$route['sayfalar']               = 'sayfa_panel/index';
$route['sayfalar/(.*)']          = 'sayfa_panel/$1';

$route['genel-ayarlar']          = 'general_settings/index';
$route['genel-ayarlar/(.*)']     = 'general_settings/$1';

$route['sitemap\.xml']           = "seo/sitemap";

$route['supplier']               = 'supplier/index';
$route['supplier/(.*)']          = 'supplier/$1';

$route['gazeteler']               = 'newspapers/index';
$route['gazeteler/(.*)']          = 'newspapers/$1';

$route['users']               = 'users/index';
$route['users/(.*)']          = 'users/$1';

$route['userop']               = 'userop/index';
$route['userop/(.*)']          = 'userop/$1';
$route['giris']                = 'userop/login';

$route['userop/(.*)']          = 'userop/$1';
$route['cikis']                = 'userop/logout';

$route['^(.*)']                 = 'index/$1';
