<?php
/**
 * main_product_image module
 *
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: main_product_image.php 2023-10-29 15:38:06Z webchills $
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

// -----
// This notifier lets an observer know that the module has begun its processing.
//
$GLOBALS['zco_notifier']->notify('NOTIFY_MODULES_MAIN_PRODUCT_IMAGE_START');

$products_image_extension = '.' . pathinfo($products_image, PATHINFO_EXTENSION);
$products_image_base = str_replace($products_image_extension, '', $products_image);
$products_image_medium = $products_image_base . IMAGE_SUFFIX_MEDIUM . $products_image_extension;
$products_image_large = $products_image_base . IMAGE_SUFFIX_LARGE . $products_image_extension;

// -----
// This notifier lets an image-handling observer know that it's time to determine the image information,
// providing the following parameters:
//
// $p1 ... (r/o) ... A copy of the $products_image value
// $p2 ... (r/w) ... A boolean value, set by the observer to true if the image has been handled.
// $p3 ... (r/w) ... A reference to the $products_image_extension value
// $p4 ... (r/w) ... A reference to the $products_image_base value
// $p5 ... (r/w) ... A reference to the medium product-image-name
// $p6 ... (r/w) ... A reference to the large product-image-name.
//
// If the observer has set the $product_image_handled flag to true, it's indicated that any of the
// other values have been updated for separate handling.
//
$main_image_handled = false;
$GLOBALS['zco_notifier']->notify(
    'NOTIFY_MODULES_MAIN_PRODUCT_IMAGE_FILENAME',
    $products_image,
    $main_image_handled,
    $products_image_extension,
    $products_image_base,
    $products_image_medium,
    $products_image_large
);

if ($main_image_handled !== true) {
    // check for a medium image else use small
    if (!file_exists(DIR_WS_IMAGES . 'medium/' . $products_image_medium)) {
        $products_image_medium = DIR_WS_IMAGES . $products_image;
    } else {
        $products_image_medium = DIR_WS_IMAGES . 'medium/' . $products_image_medium;
    }
    // check for a large image else use medium else use small
    if (!file_exists(DIR_WS_IMAGES . 'large/' . $products_image_large)) {
        if (!file_exists(DIR_WS_IMAGES . 'medium/' . $products_image_medium)) {
            $products_image_large = DIR_WS_IMAGES . $products_image;
        } else {
            $products_image_large = DIR_WS_IMAGES . 'medium/' . $products_image_medium;
        }
    } else {
        $products_image_large = DIR_WS_IMAGES . 'large/' . $products_image_large;
    }

    /*
    echo
    'Base ' . $products_image_base . ' - ' . $products_image_extension . '<br>' .
    'Medium ' . $products_image_medium . '<br><br>' .
    'Large ' . $products_image_large . '<br><br>';
    */
    // to be built into a single variable string
}

$GLOBALS['zco_notifier']->notify('NOTIFY_MODULES_MAIN_PRODUCT_IMAGE_END');
