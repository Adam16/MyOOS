<?php
/* ----------------------------------------------------------------------
   $Id: function.oos_add_tax.php 216 2013-04-02 08:24:45Z r23 $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/
   
   
   Copyright (c) 2003 - 2013 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: html_output.php,v 1.49 2003/02/11 01:31:02 hpdl 
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2003 osCommerce
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty {oos_add_tax} function plugin
 *
 * Type:     function
 * Name:     oos_get_zone_name
 * Version:  1.0
 * -------------------------------------------------------------
 */

function smarty_function_oos_add_tax($params, &$smarty)
{
    global $oCurrencies;
    
    require_once(SMARTY_PLUGINS_DIR . 'shared.escape_special_chars.php');
    
    foreach($params as $_key => $_val) {
      $$_key = smarty_function_escape_special_chars($_val);
    }
    
    if ($_SESSION['member']->group['show_price_tax'] == 1) {
      return round($price, $oCurrencies->currencies[DEFAULT_CURRENCY]['decimal_places']) + oos_calculate_tax($price, $tax);
    } else {
      return round($price, $oCurrencies->currencies[DEFAULT_CURRENCY]['decimal_places']);
    }
  }
?>
