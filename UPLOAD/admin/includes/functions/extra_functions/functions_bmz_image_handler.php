<?php
/**
 * @package Image Handler
 * @copyright Copyright 2005-2006 Tim Kroeger (original author)
 * @copyright Copyright 2018 lat 9 - Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: functions_bmz_image_handler.php 2018-06-15 16:13:51Z webchills $
 */
 
if (!defined('IS_ADMIN_FLAG') || IS_ADMIN_FLAG !== true) {
    exit('Invalid access');
}

require DIR_FS_CATALOG . DIR_WS_CLASSES . 'bmz_image_handler.class.php';
require DIR_FS_CATALOG . DIR_WS_FUNCTIONS . 'extra_functions/functions_bmz_image_handler.php';

$ihConf['dir']['admin'] = preg_replace('/^\/(.*)/', '$1', (($request_type == 'SSL') ? DIR_WS_HTTPS_ADMIN : DIR_WS_ADMIN));