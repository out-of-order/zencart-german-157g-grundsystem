<?php
/** 
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: group_pricing.php 2023-10-28 15:49:16Z webchills $
 */

define('HEADING_TITLE', 'Group Pricing');


define('TABLE_HEADING_GROUP_NAME', 'Group Name');
define('TABLE_HEADING_GROUP_AMOUNT', '% Discount');


define('TEXT_HEADING_NEW_PRICING_GROUP', 'New Pricing Group');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Edit Pricing Group');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Delete Pricing Group');

define('TEXT_NEW_INTRO', 'Please fill out the following information for the new group');

define('TEXT_DELETE_INTRO', 'Are you sure you want to delete this group?');
define('TEXT_DELETE_PRICING_GROUP', 'Delete Pricing Group');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>WARNING:</b> There are %s customers still linked to this category!');

define('TEXT_GROUP_PRICING_NAME', 'Group Name: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Percentage Discount: ');

define('TEXT_CUSTOMERS', 'Customers in Group:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','ERROR: Customers exist in that group. Please confirm that you wish to remove all members from the group and delete it.');
define('ERROR_MODULE_NOT_CONFIGURED','NOTE: You have group pricing definitions, but you have not enabled the group-pricing Order Total module.<br>Please go to Admin->Modules->Order Total->Membership Discount (ot_group_pricing) and install/configure the module.');