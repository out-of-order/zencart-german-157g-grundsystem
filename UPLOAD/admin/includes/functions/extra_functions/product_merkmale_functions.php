<?php
/**
 * Zen Cart German Specific
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: product_merkmale_functions.php 2022-02-10 22:05:47 webchills $
*/

   function zen_get_products_merkmale($product_id, $language_id) {
    global $db;    

    $merkmale = $db->Execute("select products_merkmale
                      from " . TABLE_PRODUCTS_DESCRIPTION . "
                      where products_id = '" . (int)$product_id . "'
                      and language_id = '" . (int)$language_id . "'");
		      
    return $merkmale->fields['products_merkmale'];
   } 
 