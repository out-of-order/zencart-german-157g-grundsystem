<?php
/**
 * @package Image Handler
 * Zen Cart German Specific
 * @copyright Copyright 2005-2006 Tim Kroeger (original author)
 * @copyright Copyright 2018 lat 9 - Vinos de Frutas Tropicales
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: bmz_io_conf.php 2019-07-13 14:13:51Z webchills $
 */
 
$bmzConf = array();
$bmzConf['umask']       = 0111;              //set the umask for new files
$bmzConf['dmask']       = 0000;              //directory mask accordingly
//$bmzConf['cachetime']   = 60*60*24;         //maximum age for cachefile in seconds (defaults to a day)
$bmzConf['cachetime']   = 0;         //maximum age for cachefile in seconds (defaults to a day)
$bmzConf['cachedir']    = DIR_FS_CATALOG . 'cache/images';
$bmzConf['lockdir']     = DIR_FS_CATALOG . 'cache/imageslock';
