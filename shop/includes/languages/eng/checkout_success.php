<?php
/* ----------------------------------------------------------------------
   $Id: checkout_success.php 296 2013-04-13 14:48:55Z r23 $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/
   
   
   Copyright (c) 2003 - 2013 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: checkout_success.php,v 1.11 2002/11/01 04:27:01 hpdl
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2003 osCommerce
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */

$aLang['navbar_title_1'] = 'Checkout';
$aLang['navbar_title_2'] = 'Success';

$aLang['heading_title'] = 'Your Order Has Been Processed!';

$aLang['text_success'] = 'Your order has been successfully processed! Your products will arrive at their destination within 2-5 working days.';
$aLang['text_notify_products'] = 'Please notify me of updates to the products I have selected below:';
$aLang['text_see_orders'] = 'You can view your order history by going to the <a href="' . oos_href_link($aContents['account'], '', 'SSL') . '">\'My Account\'</a> page and by clicking on <a href="' . oos_href_link($aContents['account_history'], '', 'SSL') . '">\'History\'</a>.';
$aLang['text_contact_store_owner'] = 'Please direct any questions you have to the <a href="' . oos_href_link($aContents['contact_us']) . '">store owner</a>.';
$aLang['text_thanks_for_shopping'] = 'Thanks for shopping with us online!';

$aLang['table_heading_download_date'] = 'Expiry date: ';
$aLang['table_heading_download_count'] = ' downloads remain.';
$aLang['heading_download'] = 'Download your products here:';
$aLang['footer_download'] = 'You can also download your products at a later time at \'%s\'';
?>
