<?php
/* ----------------------------------------------------------------------
   $Id: gv_admin.php 437 2013-06-22 15:33:30Z r23 $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/

   Copyright (c) 2003 - 2013 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: gv_admin.php,v 1.2.2.1 2003/04/18 21:13:51 wilt 
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2002 - 2003 osCommerce

   Gift Voucher System v1.0
   Copyright (c) 2001,2002 Ian C Wilson
   http://www.phesis.org
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */

/** ensure this file is being included by a parent file */
defined( 'OOS_VALID_MOD' ) OR die( 'Direct Access to this location is not allowed.' );

$smarty->assign('heading_coupon_admin', oos_href_link_admin($aFilename['coupon_admin'], 'selected_box=gv_admin'));  

$smarty->assign('coupon_admin', oos_admin_files_boxes('coupon_admin', 'selected_box=gv_admin', BOX_COUPON_ADMIN));
$smarty->assign('gv_queue', oos_admin_files_boxes('gv_queue', 'selected_box=gv_admin', BOX_GV_ADMIN_QUEUE));
$smarty->assign('gv_mail', oos_admin_files_boxes('gv_mail', 'selected_box=gv_admin', BOX_GV_ADMIN_MAIL));
$smarty->assign('gv_sent', oos_admin_files_boxes('gv_sent', 'selected_box=gv_admin', BOX_GV_ADMIN_SENT));

