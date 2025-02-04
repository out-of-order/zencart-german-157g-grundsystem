<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: freeoptions.php 2011-08-09 15:49:16Z hugo13 $
 */

define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Free Shipping Options');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
Free Options is used to display a Free Shipping option when other Shipping Modules are displayed.
It can be based on: Always show, Order Total, Order Weight or Order Item Count.
The Free Options module does not show when Free Shipper is displayed.<br><br>
Setting Total to >= 0.00 and <= nothing (leave blank) will activate this module to show with all shipping modules, except for Free Shipping - freeshipper.<br><br>
NOTE: Leaving all settings for Total, Weight and Item count blank will deactivate this module.<br><br>
NOTE: Free Shipping Options does not display if Free Shipping is used based on 0 weight is Free Shipping.
See: freeshipper
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Free Shipping');