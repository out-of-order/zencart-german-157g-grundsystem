<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: layout_controller.php 2023-10-28 16:49:16Z webchills $
 */

define('HEADING_TITLE', 'Editing Sideboxes for template:');
define('TEXT_CURRENTLY_VIEWING' , 'Currently Viewing: ');
define('TEXT_THIS_IS_PRIMARY_TEMPLATE' , ' (Main)');
define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Box File Name');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'LEFT/RIGHT COLUMN<br>Status');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'SINGLE COLUMN<br>Status');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'LEFT or RIGHT<br>COLUMN');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'LEFT/RIGHT COLUMN<br>Sort Order');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'SINGLE COLUMN<br>Sort Order');

define('TEXT_INFO_LAYOUT_BOX','Selected Box: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Box Name:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Location: (Single Column ignores this setting)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Left/Right Column Status: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Single Column Status: ');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Left/Right Column Sort Order:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Single Column Sort Order:');
define('TEXT_INFO_INSERT_INTRO', 'Please enter the new box with its related data');
define('TEXT_INFO_DELETE_INTRO', 'Are you sure you want to delete this box?');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Edit Box');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Delete Box');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Delete missing box from Template listing: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','NOTE: This does not remove files and you can re-add the box at anytime by adding it to the correct directory.<br><br><strong>Delete box name: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Reset box status/sort settings: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','This does not remove any boxes. It will only reset the status/sort of boxes matching boxes in the other template.');
define('TEXT_SETTINGS_COPY_FROM' , 'Copy status/sort settings FROM: ');
define('TEXT_SETTINGS_COPY_TO' , ' TO: ');
define('TEXT_ERROR_INVALID_RESET_SUBMISSION' , 'ERROR: invalid reset choice');
define('TEXT_INFO_BOX_DETAILS','Box Details: ');

define('TABLE_HEADING_LAYOUT_TITLE', 'Title');
define('TABLE_HEADING_LAYOUT_VALUE', 'Value');

define('TABLE_HEADING_BOXES_PATH', 'Boxes Path: ');
define('TEXT_WARNING_NEW_BOXES_FOUND', 'WARNING: New boxes found: ');

define('TEXT_MODULE_DIRECTORY', 'Site Layout Directory:');

define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<span class="txt-red"><b>MISSING</b></span><br>');

define('SUCCESS_BOX_DELETED','Removed the box: ');
define('SUCCESS_BOX_RESET','Settings for [%s] have been reset to current settings from [%s].');
define('SUCCESS_BOX_UPDATED','Updated settings for box: ');

define('TEXT_ON',' ON ');
define('TEXT_OFF',' OFF ');
define('TEXT_LEFT',' LEFT ');
define('TEXT_RIGHT',' RIGHT ');
define('TEXT_CAUTION_EDITING_NOT_LIVE_TEMPLATE' , 'CAUTION: You are editing settings for a template that is not the main template used by customers.');
define('TEXT_RESET_SETTINGS' , 'Reset Settings');
define('TEXT_ORIGINAL_DEFAULTS' , '[Original/Master Zen Cart Defaults]');
