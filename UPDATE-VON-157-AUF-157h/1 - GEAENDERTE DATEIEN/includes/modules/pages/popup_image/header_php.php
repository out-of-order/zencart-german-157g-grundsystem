<?php
/**
 * Pop up Image Header
 *
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: header_php.php 2023-11-11 09:38:16Z webchills $
 */
/**
 * Header code file for the product-larger-images popup window
 */

// This should be first line of the script:
  $zco_notifier->notify('NOTIFY_HEADER_START_POPUP_IMAGES');

  $_SESSION['navigation']->remove_current_page();

  $products_values_query = "SELECT pd.products_name, p.products_image
                            FROM " . TABLE_PRODUCTS . " p
                            left join " . TABLE_PRODUCTS_DESCRIPTION . " pd
                            on p.products_id = pd.products_id
                            WHERE p.products_status = 1
                            and p.products_id = :productsID
                            and pd.language_id = :languagesID ";

  $products_values_query = $db->bindVars($products_values_query, ':productsID', $_GET['pID'] ?? 0, 'integer');
  $products_values_query = $db->bindVars($products_values_query, ':languagesID', $_SESSION['languages_id'], 'integer');

  $products_values = $db->Execute($products_values_query);

  // Ensure data/variable is available for use downstream.
  if ($products_values->EOF) {
    $products_values->fields['products_image'] = '';
    $products_values->fields['products_name'] = '';
  }

  $products_image = $products_values->fields['products_image'];

  //auto replace with defined missing image
  if ($products_image === '' && PRODUCTS_IMAGE_NO_IMAGE_STATUS === '1') {
    $products_image = PRODUCTS_IMAGE_NO_IMAGE;
  }

  if ($products_image === '') {
      $products_image_extension = '';
      $products_image_base = '';
      $products_image_medium = '';
      $products_image_large = '';
  } else {
      $products_image_extension = '.' . pathinfo($products_image, PATHINFO_EXTENSION);
      $products_image_base = substr($products_image_extension, 0, -strlen($products_image_extension));
      $products_image_medium = $products_image_base . IMAGE_SUFFIX_MEDIUM . $products_image_extension;
      $products_image_large = $products_image_base . IMAGE_SUFFIX_LARGE . $products_image_extension;
  }

  // check for a medium image else use small
  if (!file_exists(DIR_WS_IMAGES . 'medium/' . $products_image_medium)) {
    $products_image_medium = DIR_WS_IMAGES . $products_image;
  } else {
    $products_image_medium = DIR_WS_IMAGES . 'medium/' . $products_image_medium;
  }
  // check for a large image else use medium else use small
  if (!file_exists(DIR_WS_IMAGES . 'large/' . $products_image_large)) {
    $products_image_large = $products_image_medium;
  } else {
    $products_image_large = DIR_WS_IMAGES . 'large/' . $products_image_large;
  }

  // This should be last line of the script:
  $zco_notifier->notify('NOTIFY_HEADER_END_POPUP_IMAGES');
