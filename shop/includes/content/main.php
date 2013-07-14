<?php
/* ----------------------------------------------------------------------
 $Id: main.php 431 2013-06-21 22:03:17Z r23 $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/

   Copyright (c) 2003 - 2013 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: default.php,v 1.2 2003/01/09 09:40:07 elarifr
   orig: default.php,v 1.81 2003/02/13 04:23:23 hpdl 
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2003 osCommerce
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */

/** ensure this file is being included by a parent file */
defined( 'OOS_VALID_MOD' ) or die( 'Direct Access to this location is not allowed.' );

require_once MYOOS_INCLUDE_PATH . '/includes/languages/' . $sLanguage . '/main.php';
require_once MYOOS_INCLUDE_PATH . '/includes/functions/function_default.php';

$heading_title = $aLang['heading_title'];
$current_domain = (($request_type == 'SSL') ? OOS_HTTPS_SERVER : OOS_HTTP_SERVER) . OOS_SHOP;
  
// default
$aOption['template_main'] = $sTheme . '/page/main.tpl';
if ($oEvent->installed_plugin('spezials')) $aOption['new_spezials'] = $sTheme . '/modules/products/new_spezials.tpl';
if ($oEvent->installed_plugin('featured')) $aOption['featured'] = $sTheme . '/modules/products/featured.tpl';
if ($oEvent->installed_plugin('manufacturers')) $aOption['mod_manufacturers'] = $sTheme . '/modules/products/manufacturers.tpl';
$aOption['new_products'] = $sTheme . '/modules/products/new_products.tpl';
$aOption['upcoming_products'] = $sTheme . '/modules/products/upcoming_products.tpl';

$nPageType = OOS_PAGE_TYPE_MAINPAGE;

require_once MYOOS_INCLUDE_PATH . '/includes/oos_system.php';
if (!isset($option)) {
    require_once MYOOS_INCLUDE_PATH . '/includes/info_message.php';
    require_once MYOOS_INCLUDE_PATH . '/includes/oos_blocks.php';
}

// assign Smarty variables;
$oSmarty->assign(
      array(
          'oos_breadcrumb' => $oBreadcrumb->trail(BREADCRUMB_SEPARATOR),
          'oos_heading_title' => $heading_title,
          'canonical' => $current_domain
      )
  );


/*
if ( (USE_CACHE == 'true') && (!SID) && (!isset($_SESSION['customer_id'])) ){
  $oSmarty->setCaching(true);
  }


if ($oEvent->installed_plugin('spezials')) {
  if (!$oSmarty->isCached($aOption['new_spezials'], $oos_modules_cache_id)) {
      require_once MYOOS_INCLUDE_PATH . '/includes/modules/new_spezials.php';
    }
  $oSmarty->assign('new_spezials', $oSmarty->fetch($aOption['new_spezials'], $oos_modules_cache_id));
  }

if ($oEvent->installed_plugin('featured')) {
  if (!$oSmarty->isCached($aOption['featured'], $oos_modules_cache_id)) {
      require_once MYOOS_INCLUDE_PATH . '/includes/modules/featured.php';
    }
  $oSmarty->assign('featured', $oSmarty->fetch($aOption['featured'], $oos_modules_cache_id));
  }

*/

if (!$oSmarty->isCached($aOption['new_products'], $oos_modules_cache_id)) {
	require_once MYOOS_INCLUDE_PATH . '/includes/modules/new_products.php';
}
$oSmarty->assign('new_products', $oSmarty->fetch($aOption['new_products'], $oos_modules_cache_id));

/*
if ($oEvent->installed_plugin('manufacturers')) {
  if (!$oSmarty->isCached($aOption['mod_manufacturers'], $oos_modules_cache_id)) {
      require_once MYOOS_INCLUDE_PATH . '/includes/modules/mod_manufacturers.php';
    }
  $oSmarty->assign('mod_manufacturers', $oSmarty->fetch($aOption['mod_manufacturers'], $oos_modules_cache_id));
  }


if (!$oSmarty->isCached($aOption['upcoming_products'], $oos_modules_cache_id)) {
    require_once MYOOS_INCLUDE_PATH . '/includes/modules/upcoming_products.php';
  }
$oSmarty->assign('upcoming_products', $oSmarty->fetch($aOption['upcoming_products'], $oos_modules_cache_id));
$oSmarty->setCaching(false);
*/


// display the template
$oSmarty->display($aOption['template_main']);
