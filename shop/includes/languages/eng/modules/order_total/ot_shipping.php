<?php
/* ----------------------------------------------------------------------
   $Id: ot_shipping.php 296 2013-04-13 14:48:55Z r23 $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/
   
   
   Copyright (c) 2003 - 2013 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: ot_shipping.php,v 1.2 2003/02/05 22:34:45 hpdl 
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2003 osCommerce
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */

define('MODULE_ORDER_TOTAL_SHIPPING_STATUS_TITLE', 'Display Shipping');
define('MODULE_ORDER_TOTAL_SHIPPING_STATUS_DESC', 'Do you want to display the order shipping cost?');

define('MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER_TITLE', 'Sort Order');
define('MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER_DESC', 'Sort order of display.');

define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_TITLE', 'Allow Free Shipping');
define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_DESC', 'Do you want to allow free shipping?');

define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER_TITLE', 'Free Shipping For Orders Over');
define('MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER_DESC', 'Provide free shipping for orders over the set amount.');
 
define('MODULE_ORDER_TOTAL_SHIPPING_DESTINATION_TITLE', 'Provide Free Shipping For Orders Made');
define('MODULE_ORDER_TOTAL_SHIPPING_DESTINATION_DESC', 'Provide free shipping for orders sent to the set destination.');

$aLang['module_order_total_shipping_title'] = 'Shipping';
$aLang['module_order_total_shipping_description'] = 'Order Shipping Cost';

$aLang['free_shipping_title'] = 'Free Shipping';
$aLang['free_shipping_description'] = 'Free shipping for orders over %s';
?>
