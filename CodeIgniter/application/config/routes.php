<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* Home route */
$route['home/(:any)'] = 'home/view/$1';
$route['home'] = 'home/view';

/* Booking route */
$route['booking/(:any)'] = 'booking/index/$1';
$route['booking'] = 'booking/index';

/* Customer route */
$route['customers/(:any)'] = 'customer/index/$1';
$route['customers'] = 'customer/index';

/* Room route */
$route['rooms/(:any)'] = 'rooms/view/$1';
$route['rooms'] = 'rooms/view';


/* Employee route */
$route['employees/(:any)'] = 'employee/view/$1';
$route['employees'] = 'employee/view';


$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
