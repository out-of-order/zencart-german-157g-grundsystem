<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: modules.php 2023-10-28 20:49:16Z webchills $
 */

define('HEADING_TITLE_MODULES_PAYMENT', 'Payment Modules');
define('HEADING_TITLE_MODULES_SHIPPING', 'Shipping Modules');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Order Total Modules');


define('TABLE_HEADING_ORDERS_STATUS','Orders Status');


define('TEXT_MODULE_DIRECTORY', 'Module Directory:');
define('ERROR_MODULE_FILE_NOT_FOUND', 'ERROR: module not loaded due to missing language file: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'ALERT: Your Admin settings have been changed in ' . STORE_NAME . '.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'This is an automated email from ' . STORE_NAME . ' to alert you of a change that was just made to your administrative settings: ' . "\n\n" . 'NOTE: Admin settings have been CHANGED for the [%s] module, by Zen Cart admin user %s.' . "\n\n" . 'If you did not initiate these changes, it is advisable that you verify the settings immediately.' . "\n\n" . 'If you are already aware of these changes, you can ignore this automated email.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'This is an automated email from ' . STORE_NAME . ' to alert you of a change that was just made to your administrative settings: ' . "\n\n" . 'NOTE: Admin settings have been changed. The [%s] module has been INSTALLED by Zen Cart admin user %s.' . "\n\n" . 'If you did not initiate these changes, it is advisable that you verify the settings immediately.' . "\n\n" . 'If you are already aware of these changes, you can ignore this automated email.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'This is an automated email from ' . STORE_NAME . ' to alert you of a change that was just made to your administrative settings: ' . "\n\n" . 'NOTE: Admin settings have been changed. The [%s] module has been REMOVED by Zen Cart admin user %s.' . "\n\n" . 'If you did not initiate these changes, it is advisable that you verify the settings immediately.' . "\n\n" . 'If you are already aware of these changes, you can ignore this automated email.');
define('TEXT_DELETE_INTRO', 'Are you sure you want to remove this module?');
define('TEXT_WARNING_SSL_EDIT', 'ALERT: <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">For security reasons, Editing of this module is disabled until your Admin is configured for SSL</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ALERT: <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">For security reasons, Installation of this module is disabled until your Admin is configured for SSL</a>.');


define('TEXT_POSITIVE_INT','%s must be an integer greater than or equal to 0');
define('TEXT_POSITIVE_FLOAT','%s must be a decimal greater than or equal to 0');
