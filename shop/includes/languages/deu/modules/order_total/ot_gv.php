<?php
/* ----------------------------------------------------------------------
   $Id: ot_gv.php 296 2013-04-13 14:48:55Z r23 $

   MyOOS [Shopsystem]
   http://www.oos-shop.de/

   Copyright (c) 2003 - 2013 by the MyOOS Development Team.
   ----------------------------------------------------------------------
   Based on:

   File: ot_gv.php,v 1.1.2.1 2003/05/15 23:05:02 wilt 
   ----------------------------------------------------------------------
   osCommerce, Open Source E-Commerce Solutions
   http://www.oscommerce.com

   Copyright (c) 2003 osCommerce
   ----------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------- */


define('MODULE_ORDER_TOTAL_GV_STATUS_TITLE', 'Gutschein');
define('MODULE_ORDER_TOTAL_GV_STATUS_DESC', 'M&ouml;chten Sie die Zwischensumme anzeigen?');

define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_TITLE', 'Sortierreihenfolge');
define('MODULE_ORDER_TOTAL_GV_SORT_ORDER_DESC', 'Reihenfolge der Anzeige. Kleinste Ziffer wird zuerst angezeigt.');

define('MODULE_ORDER_TOTAL_GV_QUEUE_TITLE', 'Freigabeliste');
define('MODULE_ORDER_TOTAL_GV_QUEUE_DESC', 'Sollen bestellte Geschenkgutscheine zuerst in die Freigabeliste?');

define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_TITLE', 'Inklusive Versandkosten');
define('MODULE_ORDER_TOTAL_GV_INC_SHIPPING_DESC', 'Versandkosten an den Warenwert anrechnen');

define('MODULE_ORDER_TOTAL_GV_INC_TAX_TITLE', 'Inklusiv MwSt.');
define('MODULE_ORDER_TOTAL_GV_INC_TAX_DESC', 'MwSt. an den Warenwert anrechnen.');

define('MODULE_ORDER_TOTAL_GV_CALC_TAX_TITLE', 'MwSt. neu berechnen');
define('MODULE_ORDER_TOTAL_GV_CALC_TAX_DESC', 'MwSt. neu berechnen');

define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_TITLE', 'Steuerklasse');
define('MODULE_ORDER_TOTAL_GV_TAX_CLASS_DESC', 'Folgenden MwSt. Satz benutzen, wenn Sie den Gutschein als Gutschrift verwenden.');

define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_TITLE', 'Guthaben enth&auml;lt MwSt.');
define('MODULE_ORDER_TOTAL_GV_CREDIT_TAX_DESC', 'MwSt. dem Gutscheinwert anrechnen');

$aLang['module_order_total_gv_title'] = 'Gutschein';
$aLang['module_order_total_gv_header'] = 'Gutschein';
$aLang['module_order_total_gv_description'] = 'Gutschein';
$aLang['shipping_not_included'] = ' [Versandkosten nicht enthalten]';
$aLang['tax_not_included'] = ' [MwSt. nicht enthalten]';
$aLang['module_order_total_gv_user_prompt'] = 'M&ouml;chten Sie mit Ihrem Gutschein-Guthaben bezahlen? ->&nbsp;';
$aLang['text_enter_gv_code'] = 'Gutscheincode&nbsp;&nbsp;';

?>