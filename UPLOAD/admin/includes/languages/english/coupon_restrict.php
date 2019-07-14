<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: coupon_restrict.php 730 2019-04-13 15:49:16Z webchills $
 */

define('HEADING_TITLE', 'Discount Coupons Product/Category Restrictions');
define('HEADING_TITLE_CATEGORY', 'Category Restrictions');
define('HEADING_TITLE_PRODUCT', 'Product Restrictions');

define('HEADER_COUPON_ID', 'Coupon ID');
define('HEADER_COUPON_NAME', 'Coupon Name');
define('HEADER_CATEGORY_ID', 'Category ID');
define('HEADER_CATEGORY_NAME', 'Category Name');
define('HEADER_PRODUCT_ID', 'Product ID');
define('HEADER_PRODUCT_NAME', 'Product Name');
define('HEADER_RESTRICT_ALLOW', 'Allow');
define('HEADER_RESTRICT_DENY', 'Deny');
define('HEADER_RESTRICT_REMOVE', 'Remove');
define('IMAGE_ALLOW', 'Allow');
define('IMAGE_DENY', 'Deny');
define('IMAGE_REMOVE', 'Remove');
define('TEXT_ALL_CATEGORIES', 'All Categories');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Add All Category Products');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Remove All Category Products');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>For Add all Category Products, only Products not already set for restrictions will be added.<br />
                    For Delete all Category Products, only Products that are specified Deny or Allow will be removed.</strong>');

define('TEXT_MANUFACTURER', 'Manufacturer: ');
define('TEXT_CATEGORY', 'Category: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Category Not Completed');
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Product Not Completed');
define('HEADER_MANUFACTURER_NAME', '<br> -- OR -- <br>' . 'Manufacturer: ');
define('TEXT_ALL_MANUFACTURERS_ADD', 'Add All Manufacturer Products');
define('TEXT_ALL_MANUFACTURERS_REMOVE', 'Remove All Manufacturer Products');

define('HEADER_PRODUCT_STATUS', 'Status');
define('HEADER_PRODUCT_MODEL', 'Model');

define('ERROR_RESET_CATEGORY_MANUFACTURER', 'Category and Manufacturer filters reset. Use filters individually.');

define('TEXT_PULLDOWN_ALLOW', 'Allow');
define('TEXT_PULLDOWN_DENY', 'Deny');
define('TEXT_SUBMIT_CATEGORY_ADD', 'Add');
define('TEXT_SUBMIT_PRODUCT_UPDATE', 'Update');
