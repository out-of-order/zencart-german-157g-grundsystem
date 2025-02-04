<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: banner_manager.php 2023-11-14 20:34:16Z webchills $
 */

define('HEADING_TITLE', 'Banner Manager');

define('TABLE_HEADING_BANNERS', 'Banners');
define('TABLE_HEADING_GROUPS', 'Groups');
define('TABLE_HEADING_STATISTICS', 'Displays / Clicks');

define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','New Window');
define('TABLE_HEADING_BANNER_ON_SSL', 'Show SSL');

define('TABLE_HEADING_BANNER_SORT_ORDER', 'Sort<br>Order');

define('TEXT_BANNERS_TITLE', 'Banner Title:');
define('TEXT_BANNERS_URL', 'Banner URL:');
define('TEXT_BANNERS_GROUP', 'Banner Group:');
define('TEXT_BANNERS_NEW_GROUP', ', or enter a new banner group below');
define('TEXT_BANNERS_IMAGE', 'Image:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', or enter local file below');
define('TEXT_BANNERS_IMAGE_TARGET', 'Image Target (Save To):');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Suggested Target location for the image on the server:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>NOTE: HTML banners do not record the clicks on the banner</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Text:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Sort Order - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>NOTE: The banners_box_all sidebox will display the banners in their defined sort order</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Expires On: <br>(Must be after today)');
define('TEXT_BANNERS_OR_AT', ', or at');
define('TEXT_BANNERS_IMPRESSIONS', 'impressions/views.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Scheduled At: <br>(Must be after today)');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Banner Notes:</b><ul><li>Use an image or HTML text for the banner - not both.</li><li>HTML Text has priority over an image</li><li>HTML Text will not register the click thru, but will register displays</li><li>Banners with absolute image URLs should not be displayed on secure pages</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Image Notes:</b><ul><li>Uploading directories must have proper user (write) permissions setup!</li><li>Do not fill out the \'Save To\' field if you are not uploading an image to the webserver (ie, you are using a local (serverside) image).</li><li>The \'Save To\' field must be an existing directory with an ending slash (eg, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRY_NOTE', '<b>Expiry Notes:</b><ul><li>Only one of the two fields should be submitted</li><li>If the banner is not to expire automatically, then leave these fields blank</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Schedule Notes:</b><ul><li>If a schedule is set, the banner will be activated on that date.</li><li>All scheduled banners are marked as inactive until their date has arrived, to which they will then be marked active.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Banner Status:');
define('TEXT_BANNERS_ACTIVE', 'Active');
define('TEXT_BANNERS_NOT_ACTIVE', 'Not Active');
define('TEXT_INFO_BANNER_STATUS', '<strong>NOTE:</strong> Banner status will be updated based on Scheduled Date and Impressions');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Banner New Window');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>NOTE:</strong> Banner will open in a new window');
define('TEXT_BANNERS_ON_SSL', 'Banner on SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>NOTE:</strong> Banner can be displayed on Secure Pages without errors');

define('TEXT_BANNERS_DATE_ADDED', 'Date Added:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Scheduled At: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Expires At: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Expires At: <b>%s</b> impressions');
define('TEXT_BANNERS_STATUS_CHANGE', 'Status Change: %s');

define('TEXT_BANNERS_LAST_3_DAYS', 'Last 3 Days');

define('TEXT_INFO_DELETE_INTRO', 'Are you sure you want to delete this banner?');
define('TEXT_INFO_DELETE_IMAGE', 'Delete banner image');

define('SUCCESS_BANNER_INSERTED', 'Success: The banner has been inserted.');
define('SUCCESS_BANNER_UPDATED', 'Success: The banner has been updated.');
define('SUCCESS_BANNER_REMOVED', 'Success: The banner has been removed.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Success: The status of the banner has been updated.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Error: Banner title required.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Error: Banner group required.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Error: Image does not exist.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Error: Image can not be removed.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Error: Unknown status flag.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'Error: Banner image required.');
define('ERROR_UNKNOWN_BANNER_OPEN_NEW_WINDOW' , 'Error: Banner could not be set to open in a new window');
define('ERROR_UNKNOWN_BANNER_ON_SSL', 'Error: Banner could not be set to use SSL');
define('ERROR_INVALID_SCHEDULED_DATE','The &quot;Scheduled At&quot; date is not valid, please re-enter.');
define('ERROR_INVALID_EXPIRES_DATE','The &quot;Expires On&quot; date is not valid, please-re-enter.');
define('TEXT_LEGEND_BANNER_ON_SSL', 'Show SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'New Window');

define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','Open New Window - Enabled');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','Open New Window - Disabled');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Show on Secure Pages - Enabled');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','Show on Secure Pages - Disabled');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Success: The status of the banner to open in a new window has been updated.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Success: The status of the banner to show on SSL has been updated.');