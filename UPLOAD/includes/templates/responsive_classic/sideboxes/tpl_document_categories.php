<?php
/**
 * Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_document_categories.php 2019-04-12 18:33:58Z webchills $
 */
  $content = "";

  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent"><ul class="list-links">';
  for ($i=0, $n=sizeof($box_categories_array);$i<$n;$i++) {
/*
    if ($box_categories_array[$i]['has_sub_cat'] or $box_categories_array[$i]['parent'] == 'true') {
      $new_style = 'category-parent';
    } else {
      $new_style = 'category-child';
    }
*/
    switch(true) {
      case ($box_categories_array[$i]['top'] == 'true'):
        $new_style = 'category-top';
        break;
      case ($box_categories_array[$i]['has_sub_cat']):
        $new_style = 'category-subs';
        break;
      default:
        $new_style = 'category-products';
      }

      $content .= '<li><a class="' . $new_style . '" href="' . zen_href_link(FILENAME_DEFAULT, $box_categories_array[$i]['path']) . '">';

      if ($box_categories_array[$i]['current']) {
        if ($box_categories_array[$i]['has_sub_cat']) {
          $content .= '<span class="category-subs-parent">' . $box_categories_array[$i]['name'] . '</span>';
        } else {
          $content .= '<span class="category-subs-selected">' . $box_categories_array[$i]['name'] . '</span>';
        }
      } else {
        $content .= $box_categories_array[$i]['name'];
      }

      if ($box_categories_array[$i]['has_sub_cat']) {
        $content .= CATEGORIES_SEPARATOR;
      }


      if (SHOW_COUNTS == 'true') {
        if ((CATEGORIES_COUNT_ZERO == '1' and $box_categories_array[$i]['count'] == 0) or $box_categories_array[$i]['count'] >= 1) {
          $content .= '<span class="forward cat-count">' . CATEGORIES_COUNT_PREFIX . $box_categories_array[$i]['count'] . CATEGORIES_COUNT_SUFFIX . '</span>';
        }
      }
      $content .= '</a>';
      $content .= '</li>';
    }
    $content .= '</ul></div>';

