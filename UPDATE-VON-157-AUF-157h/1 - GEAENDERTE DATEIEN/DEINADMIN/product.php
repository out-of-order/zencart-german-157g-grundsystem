<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: product.php 2023-10-30 15:16:51Z webchills $
 */
require 'includes/application_top.php';

$action = $_GET['action'] ?? '';

require DIR_WS_CLASSES . 'currencies.php';
$currencies = new currencies();

$product_type = (isset($_POST['product_type']) ? (int)$_POST['product_type'] : (isset($_GET['pID']) ? zen_get_products_type($_GET['pID']) : 1));

// -----
// If the product_type is an empty string, zen_get_products_type has indicated that the
// requested product is not found in the database.
//
if ($product_type === '') {
    $messageStack->add_session(sprintf(WARNING_PRODUCT_DOES_NOT_EXIST, (int)($_GET['pID'] ?? 0)), 'warning');
    zen_redirect(zen_href_link(FILENAME_CATEGORY_PRODUCT_LISTING));
}

$type_handler = $zc_products->get_admin_handler($product_type);
$zco_notifier->notify('NOTIFY_BEGIN_ADMIN_PRODUCTS', $action, $action);

if (!empty($action)) {
    switch ($action) {
        case 'insert_product_meta_tags':
        case 'update_product_meta_tags':
            require zen_get_admin_module_from_directory($product_type, 'update_product_meta_tags.php');
            break;

        case 'insert_product':
        case 'update_product':
            require zen_get_admin_module_from_directory($product_type, 'update_product.php');
            break;

        case 'new_product_preview':
            if (!isset($_POST['master_categories_id'])
                || (($_POST['products_model'] ?? '') . implode('', $_POST['products_url'] ?? []) . implode('', $_POST['products_name'] ?? []) . implode('', $_POST['products_description'] ?? [])) === '')
            {
                $messageStack->add(ERROR_NO_DATA_TO_SAVE, 'error');
                $action = 'new_product';
                break;
            }
            require zen_get_admin_module_from_directory($product_type, 'new_product_preview.php');
            break;

        case 'new_product_preview_meta_tags':
            if (!isset($_POST['products_price_sorter'], $_POST['products_model'])) {
                $messageStack->add(ERROR_NO_DATA_TO_SAVE, 'error');
                $action = 'new_product_meta_tags';
            }
            break;

        default:
            break;
    }
}

// check if the catalog image directory exists
if (is_dir(DIR_FS_CATALOG_IMAGES)) {
    if (!is_writeable(DIR_FS_CATALOG_IMAGES)) {
        $messageStack->add(ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE, 'error');
    }
} else {
    $messageStack->add(ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST, 'error');
}

$tax_class_array = [
    ['id' => '0', 'text' => TEXT_NONE],
];
$tax_class = $db->Execute(
    "SELECT tax_class_id, tax_class_title
       FROM " . TABLE_TAX_CLASS . "
      ORDER BY tax_class_title"
);
foreach ($tax_class as $item) {
    $tax_class_array[] = [
        'id' => $item['tax_class_id'],
        'text' => $item['tax_class_title'],
    ];
}

$languages = zen_get_languages();
?>
<!doctype html>
<html <?php echo HTML_PARAMS; ?>>
  <head>
<?php
require DIR_WS_INCLUDES . 'admin_html_head.php';
if ($action !== 'new_product_meta_tags' && $editor_handler !== '') {
    require $editor_handler;
}
?>
  </head>
  <body>
    <!-- header //-->
    <?php require DIR_WS_INCLUDES . 'header.php'; ?>
    <!-- header_eof //-->

    <!-- body //-->
    <!-- body_text //-->
<?php
if ($action === 'new_product_meta_tags') {
    require zen_get_admin_module_from_directory($product_type, 'collect_info_metatags.php');
} elseif ($action === 'new_product') {
    require zen_get_admin_module_from_directory($product_type, 'collect_info.php');
} elseif ($action === 'new_product_preview_meta_tags') {
    require zen_get_admin_module_from_directory($product_type, 'preview_info_meta_tags.php');
} elseif ($action === 'new_product_preview') {
    require zen_get_admin_module_from_directory($product_type, 'preview_info.php');
}
?>
    <!-- body_text_eof //-->
    <!-- body_eof //-->
    <!-- script for datepicker -->
    <script>
      $(function () {
        $('input[name="products_date_available"]').datepicker({
            minDate: 1
        });
      })
    </script>
    <!-- footer //-->
    <?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
    <!-- footer_eof //-->
  </body>
</html>
<?php require DIR_WS_INCLUDES . 'application_bottom.php'; ?>
