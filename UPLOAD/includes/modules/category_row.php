<?php
/**
 * index category_row.php
 *
 * Prepares the content for displaying a category's sub-category listing in grid format.  
 * Once the data is prepared, it calls the standard tpl_list_box_content template for display.
 *
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: category_row.php 2023-10-22 09:49:16Z webchills $
 */
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

$title = '';
$num_categories = $categories->RecordCount();

$row = 0;
$col = 0;
$list_box_contents = [];
if ($num_categories > 0) {
    if ($num_categories < MAX_DISPLAY_CATEGORIES_PER_ROW || MAX_DISPLAY_CATEGORIES_PER_ROW === 0) {
        $col_width = floor(100/$num_categories);
    } else {
        $col_width = floor(100/MAX_DISPLAY_CATEGORIES_PER_ROW);
    }

    foreach ($categories as $next_category) {
        $zco_notifier->notify('NOTIFY_CATEGORY_ROW_IMAGE', $next_category['categories_id'], $next_category['categories_image']); 
        if (empty($next_category['categories_image'])) {
            $next_category['categories_image'] = 'pixel_trans.gif';
        }
        $cPath_new = zen_get_path($next_category['categories_id']);

        // strip out 0_ from top level cats
        $cPath_new = str_replace('=0_', '=', $cPath_new);

        //    $categories->fields['products_name'] = zen_get_products_name($categories->fields['products_id']);

        $list_box_contents[$row][$col] = [
            'params' => 'class="categoryListBoxContents"' . ' ' . 'style="width:' . $col_width . '%;"',
            'text' => '<a href="' . zen_href_link(FILENAME_DEFAULT, $cPath_new) . '">' . zen_image(DIR_WS_IMAGES . $next_category['categories_image'], $next_category['categories_name'], SUBCATEGORY_IMAGE_WIDTH, SUBCATEGORY_IMAGE_HEIGHT, 'loading="lazy"') . '<br>' . $next_category['categories_name'] . '</a>'
        ];

        $col++;
        if ($col >= MAX_DISPLAY_CATEGORIES_PER_ROW) {
            $col = 0;
            $row++;
        }
    }
}
