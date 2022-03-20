<?php
/**
 * Zen Cart German Specific 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: english.php 2022-03-20 08:33:32Z webchills $
 */
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

define('CONNECTION_TYPE_UNKNOWN', '\'%s\' is not a valid connection type for generating URLs' . PHP_EOL . '%s' . PHP_EOL);

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin Powered by Zen-Cart 1.5.7 - German version');
define('HEADER_LOGO_WIDTH', '240');
define('HEADER_LOGO_HEIGHT', '70');
define('HEADER_LOGO_IMAGE', 'logo.gif');
define('TEXT_PASSWORD_LAST_CHANGE', 'Password changed on:&nbsp;');
define('TEXT_LAST_LOGIN_INFO', 'Last login date [IP]:&nbsp;');
// look in your $PATH_LOCALE/locale directory for available locales..
$locales = ['en_US', 'en_US.utf8', 'en', 'English_United States.1252'];
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()

define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('PHP_DATE_TIME_FORMAT', 'm/d/Y H:i:s'); // this is used for date() calls in some plugins
// for now both defines are needed until Spiffy is completely removed.
define('DATE_FORMAT_SPIFFYCAL', 'MM/dd/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order
define('DATE_FORMAT_DATE_PICKER', 'yy-mm-dd');  //Use only 'dd', 'mm' and 'yy' here in any order
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()
////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// // include template specific meta tags defines
//   if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
//     $template_dir_select = $template_dir . '/';
//   } else {
//     $template_dir_select = '';
//   }
//   require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// used for prefix to browser tabs in admin pages
define('TEXT_ADMIN_TAB_PREFIX', 'Admin');
// if you have multiple stores and want the Store Name to be part of the admin title (ie: for browser tabs), swap this line with the one above
//define('TEXT_ADMIN_TAB_PREFIX', 'Admin ' . STORE_NAME);

// meta tags
define('TEXT_LEGEND_META_TAGS', 'Meta Tags Defined:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTE:</strong> The Site/Tagline is your defined definition for your site in the meta_tags.php file.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="en"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Home');
define('HEADER_TITLE_SUPPORT_SITE', 'Support');
define('HEADER_TITLE_ONLINE_CATALOG', 'Storefront');
define('HEADER_TITLE_VERSION', 'Version');
define('HEADER_TITLE_ACCOUNT', 'Account');
define('HEADER_TITLE_LOGOFF', 'Logoff');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// TEXT_GV_NAME, TEXT_GV_NAMES moved to gv_name.php
if (!defined('TEXT_GV_NAME')) {
  require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
}
  define('TEXT_DISCOUNT_COUPON', 'Discount Coupon');

// text for gender
define('MALE', 'Male');
define('FEMALE', 'Female');
define('DIVERS', 'Divers');

define('TEXT_CHECK_ALL', 'Check All');
define('TEXT_UNCHECK_ALL', 'Uncheck All');
define('NONE', 'None');

define('TEXT_UNKNOWN', 'Unknown');

// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Configuration');
define('BOX_CONFIGURATION_MY_STORE', 'My Store');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Minimum Values');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Maximum Values');
define('BOX_CONFIGURATION_IMAGES', 'Images');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Customer Details');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Shipping/Packaging');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Product Listing');
define('BOX_CONFIGURATION_STOCK', 'Stock');
define('BOX_CONFIGURATION_LOGGING', 'Logging');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'E-Mail Options');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Attribute Settings');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'GZip Compression');
define('BOX_CONFIGURATION_SESSIONS', 'Sessions');
define('BOX_CONFIGURATION_REGULATIONS', 'Regulations');
define('BOX_CONFIGURATION_GV_COUPONS', 'GV Coupons');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Credit Cards');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Product Info');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Layout Settings');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Website Maintenance');
define('BOX_CONFIGURATION_NEW_LISTING', 'New Listing');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Featured Listing');
define('BOX_CONFIGURATION_ALL_LISTING', 'All Listing');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Index Listing');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Define Page Status');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'EZ-Pages Settings');

// modules box text
define('BOX_HEADING_MODULES', 'Modules');
define('BOX_MODULES_PAYMENT', 'Payment');
define('BOX_MODULES_SHIPPING', 'Shipping');
define('BOX_MODULES_ORDER_TOTAL', 'Order Total');

define('BOX_MODULES_PLUGINS', 'Plugin Manager');

// categories box text
define('BOX_HEADING_CATALOG', 'Catalog');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categories/Products');
define('BOX_CATALOG_PRODUCT_TYPES', 'Product Types');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Option Name Manager');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Option Value Manager');
define('BOX_CATALOG_MANUFACTURERS', 'Manufacturers');
define('BOX_CATALOG_REVIEWS', 'Reviews');
define('BOX_CATALOG_SPECIALS', 'Specials');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Products Expected');
define('BOX_CATALOG_SALEMAKER', 'SaleMaker');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Products Price Manager');
define('BOX_CATALOG_PRODUCT', 'Product');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Products to Categories');
define('BOX_CATALOG_CATEGORY', 'Category');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Customers');
define('BOX_CUSTOMERS_CUSTOMERS', 'Customers');
define('BOX_CUSTOMERS_ORDERS', 'Orders');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Group Pricing');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Invoice');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Packing Slip');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Locations / Taxes');
define('BOX_TAXES_COUNTRIES', 'Countries');
define('BOX_TAXES_ZONES', 'Zones');
define('BOX_TAXES_GEO_ZONES', 'Zones Definitions');
define('BOX_TAXES_TAX_CLASSES', 'Tax Classes');
define('BOX_TAXES_TAX_RATES', 'Tax Rates');

// reports box text
define('BOX_HEADING_REPORTS', 'Reports');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Products Viewed');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Products Purchased');
define('BOX_REPORTS_ORDERS_TOTAL', 'Customer Orders-Total');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Products Low Stock');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Customers Referral');

// tools text
define('BOX_HEADING_TOOLS', 'Tools');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Template Selection');
define('BOX_TOOLS_BANNER_MANAGER', 'Banner Manager');
define('BOX_TOOLS_MAIL', 'Send Email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Newsletter and Product Notifications Manager');
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Define Pages Editor');
define('BOX_TOOLS_SERVER_INFO', 'Server/Version Info');
define('BOX_TOOLS_WHOS_ONLINE', 'Who\'s Online');
define('BOX_TOOLS_STORE_MANAGER', 'Store Manager');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Developers Tool Kit');
define('BOX_TOOLS_SQLPATCH','Install SQL Patches');
define('BOX_TOOLS_EZPAGES','EZ-Pages');

define('BOX_HEADING_EXTRAS', 'Extras');

define('BOX_TOOLS_DEFINE_CONDITIONS','Conditions of Use');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Localization');
define('BOX_LOCALIZATION_CURRENCIES', 'Currencies');
define('BOX_LOCALIZATION_LANGUAGES', 'Languages');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Orders Status');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', 'Discounts');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . ' Queue');
define('BOX_GV_ADMIN_MAIL', 'Send a ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' sent');
define('BOX_COUPON_ADMIN','Coupon Admin');
define('BOX_COUPON_RESTRICT','Coupon Restrictions');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Admins');
define('BOX_ADMIN_ACCESS_USERS',  'Admin Users');
define('BOX_ADMIN_ACCESS_PROFILES', 'Admin Profiles');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Admin Page Registration');
define('BOX_ADMIN_ACCESS_LOGS', 'Admin Activity Logs');

define('IMAGE_RELEASE', 'Redeem ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Errors have occurred during the processing of your form!\nPlease make the following corrections:\n\n');


define('JS_GENDER', '* The Gender value must be chosen.\n');
define('JS_FIRST_NAME', '* The First Name entry must have at least ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' characters.\n');
define('JS_LAST_NAME', '* The Last Name entry must have at least ' . ENTRY_LAST_NAME_MIN_LENGTH . ' characters.\n');
define('JS_DOB', '* The Date of Birth entry must be in the format: xx/xx/xxxx (month/date/year).\n');
define('JS_EMAIL_ADDRESS', '* The E-Mail Address entry must have at least ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' characters.\n');
define('JS_ADDRESS', '* The Street Address entry must have at least ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' characters.\n');
define('JS_POST_CODE', '* The Post Code entry must have at least ' . ENTRY_POSTCODE_MIN_LENGTH . ' characters.\n');
define('JS_CITY', '* The City entry must have at least ' . ENTRY_CITY_MIN_LENGTH . ' characters.\n');
define('JS_STATE', '* The State entry must be selected.\n');
define('JS_STATE_SELECT', '-- Select Above --');

define('JS_COUNTRY', '* The Country value must be chosen.\n');
define('JS_TELEPHONE', '* The Telephone Number entry must have at least ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.\n');

define('JS_ERROR_SUBMITTED', 'This form has already been submitted. Please press OK and wait for this process to be completed.');


define('TEXT_NO_ORDER_HISTORY', 'No Order History Available');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Address');
define('CATEGORY_CONTACT', 'Contact');
define('CATEGORY_COMPANY', 'Company');
define('CATEGORY_OPTIONS', 'Options');

define('ENTRY_GENDER', 'Gender:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">required</span>');
define('ENTRY_FIRST_NAME', 'First Name:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' chars</span>');
define('ENTRY_LAST_NAME', 'Last Name:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' chars</span>');
define('ENTRY_DATE_OF_BIRTH', 'Date of Birth:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(eg. 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail Address:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' chars</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">The email address doesn\'t appear to be valid!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">This email address already exists!</span>');
define('ENTRY_COMPANY', 'Company name:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Discount Pricing Group');
define('ENTRY_STREET_ADDRESS', 'Street Address:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' chars</span>');
define('ENTRY_SUBURB', 'Suburb:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Post Code:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' chars</span>');
define('ENTRY_CITY', 'City:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_CITY_MIN_LENGTH . ' chars</span>');
define('ENTRY_STATE', 'State:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">required</span>');
define('ENTRY_COUNTRY', 'Country:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Telephone Number:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' chars</span>');
define('ENTRY_FAX_NUMBER', 'Fax Number:');

define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_YES', 'Subscribed');
define('ENTRY_NEWSLETTER_NO', 'Unsubscribed');


define('ERROR_PASSWORDS_NOT_MATCHING', 'Password and confirmation must match');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Sorry, your new password was rejected.</strong><br>');
define('ERROR_PASSWORD_RULES', 'Passwords must contain both letters and numbers, must be at least %s characters long, and must not be the same as the last 4 passwords used. Passwords expire every 90 days, after which you will be prompted to choose a new password.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'ERROR: Sorry, there was an error processing your data. Please re-submit the information again.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Sending E-Mail');
define('IMAGE_BACK', 'Back');
define('IMAGE_CANCEL', 'Cancel');
define('IMAGE_CONFIRM', 'Confirm');
define('IMAGE_COPY', 'Copy');
define('IMAGE_COPY_TO', 'Copy To');
define('IMAGE_DETAILS', 'Details');
define('IMAGE_DELETE', 'Delete');
define('IMAGE_EDIT', 'Edit');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_GO', 'Go');

define('IMAGE_ICON_STATUS_GREEN', 'Active');

define('IMAGE_ICON_STATUS_RED', 'Inactive');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Set Inactive');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Error -- too many URL/content types entered');

define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Insert');

define('IMAGE_MODULE_INSTALL', 'Install Module');
define('IMAGE_MODULE_REMOVE', 'Remove Module');
define('IMAGE_MOVE', 'Move');
define('IMAGE_NEW_BANNER', 'New Banner');
define('IMAGE_NEW_CATEGORY', 'New Category');
define('IMAGE_NEW_COUNTRY', 'New Country');
define('IMAGE_NEW_CURRENCY', 'New Currency');

define('IMAGE_NEW_LANGUAGE', 'New Language');
define('IMAGE_NEW_NEWSLETTER', 'New Newsletter');
define('IMAGE_NEW_PRODUCT', 'New Product');
define('IMAGE_NEW_SALE', 'New Sale');
define('IMAGE_NEW_TAX_CLASS', 'New Tax Class');
define('IMAGE_NEW_TAX_RATE', 'New Tax Rate');

define('IMAGE_NEW_ZONE', 'New Zone');
define('IMAGE_OPTION_NAMES', 'Option Names Manager');
define('IMAGE_OPTION_VALUES', 'Option Values Manager');
define('IMAGE_ORDERS', 'Orders');
define('IMAGE_ORDERS_INVOICE', 'Invoice');
define('IMAGE_ORDERS_PACKINGSLIP', 'Packing Slip');

define('IMAGE_PREVIEW', 'Preview');
define('IMAGE_RESET', 'Reset');
define('IMAGE_RESET_PWD', 'Reset Password');
define('IMAGE_SAVE', 'Save');

define('IMAGE_SELECT', 'Select');
define('IMAGE_SEND', 'Send');
define('IMAGE_SEND_EMAIL', 'Send Email');
define('IMAGE_SUBMIT', 'Submit');

define('IMAGE_UPDATE', 'Update');
define('IMAGE_UPDATE_CURRENCIES', 'Update Exchange Rate');
define('IMAGE_UPLOAD', 'Upload');
define('IMAGE_TAX_RATES','Tax Rate');
define('IMAGE_DEFINE_ZONES','Define Zones');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Products Price Manager');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Update Price Changes');
define('IMAGE_ADD_BLANK_DISCOUNTS','Add ' . DISCOUNT_QTY_ADD . ' Blank Discount Qty');

define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Multiple Categories Link Manager');

define('IMAGE_ICON_STATUS_ON', 'Status - Enabled');
define('IMAGE_ICON_STATUS_OFF', 'Status - Disabled');
define('IMAGE_ICON_LINKED', 'Product is Linked');


define('IMAGE_REMOVE_SPECIAL','Remove Special Price Info');
define('IMAGE_REMOVE_FEATURED','Remove Featured Product Info');
define('IMAGE_INSTALL_SPECIAL', 'Add Special Price Info');
define('IMAGE_INSTALL_FEATURED', 'Add Featured Product Info');

define('TEXT_VERSION_CHECK_BUTTON', 'Check for New Version');
define('TEXT_BUTTON_RESET_ACTIVITY_LOG', 'View Activity Log');


define('ICON_COPY_TO', 'Copy to');
define('ICON_CROSS', 'False');

define('ICON_DELETE', 'Delete');
define('ICON_EDIT', 'Edit');
define('ICON_EDIT_METATAGS', 'Edit Meta Tags');
define('ICON_ERROR', 'Error');

define('ICON_FOLDER', 'Folder');

define('ICON_MOVE', 'Move');

define('ICON_PREVIEW', 'Preview');

define('ICON_STATISTICS', 'Statistics');
define('ICON_SUCCESS', 'Success');
define('ICON_TICK', 'True');
//define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Warning');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Page %s of %d');
define('TEXT_DISPLAY_NUMBER_OF_GENERIC', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Entries)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Categories)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Countries)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Customers)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Currencies)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Featured Products)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Languages)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Manufacturers)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Newsletters)');
define('TEXT_DISPLAY_NUMBER_OF_OPTIONS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Option Names)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Orders)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> Order Statuses)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> pricing groups)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> product types)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products expected)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> product reviews)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> sales)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products on special)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> tax classes)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> template associations)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> tax zones)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> tax rates)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> zones)');


define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Previous Page');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Next Page');

define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Previous Set of %d Pages');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Next Set of %d Pages');

define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp;Prev]');
define('PREVNEXT_BUTTON_NEXT', '[Next&nbsp;&raquo;]');


define('TEXT_DEFAULT', 'default');
define('TEXT_SET_DEFAULT', 'Set as default');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">*</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: There is currently no default currency set. Please set one at: Administration Tools->Localization->Currencies');

define('TEXT_NONE', '--none--');
define('TEXT_TOP', 'Top');
define('PLEASE_SELECT', 'Please select ...');
define('TEXT_CUSTOMER','Customer');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: Destination does not exist %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: Destination not writeable %s');
define('ERROR_FILE_NOT_SAVED', 'Error: File upload not saved.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: File upload type not allowed (%s). See &quot;Maximum Values&quot; settings.');
define('ERROR_FILE_TOO_BIG', 'Warning: File is larger than allowed sizes. See &quot;Maximum Values&quot; settings.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Success: File upload saved successfully %s');
define('WARNING_NO_FILE_UPLOADED', 'Warning: No file uploaded.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Warning: File uploads are disabled in the php.ini configuration file.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Warning: Your Admin login is not secure ... either you still have default login settings for: Admin admin or have not removed or changed: demo demoonly<br>The login(s) should be changed as soon as possible for the Security of your shop.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Your database appears to need patching to a higher level. See Tools->' . BOX_TOOLS_SERVER_INFO . ' to review patch levels.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>WARNING:</strong> Site is currently set to Down for Maintenance ...<br>NOTE: You cannot test most Payment and Shipping Modules in Maintenance mode');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'SECURITY WARNING: Installation directory exists at: %s. Please remove this directory for security reasons.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: Your configuration file: %s is writeable. This is a potential security risk - please set the right user permissions on this file (read-only, CHMOD 644 or 444 are typical). You may need to use your webhost control panel/file-manager to change the permissions effectively. Contact your webhost for assistance. <a href="https://docs.zen-cart.com/user/miscellaneous/configure/" rel="noopener" target="_blank">See this FAQ</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'WARNING: Could not locate language file: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'ERROR: Module removal prohibited: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'ALERT: Please review for possible XSS activity:');

define('ERROR_FILE_NOT_REMOVEABLE', 'Error: Could not remove the file specified. You may have to use FTP to remove the file, due to a server-permissions configuration limitation.');
define('ERROR_DIRECTORY_NOT_REMOVEABLE', 'Error: Could not remove the directory specified. You may have to use FTP to remove the directory, due to a server-permissions configuration limitation.');
define('WARNING_SESSION_AUTO_START', 'Warning: session.auto_start is enabled - please disable this PHP feature in php.ini (restarting your webserver may be necessary to activate the change).');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Warning: The downloadable products directory does not exist: ' . DIR_FS_DOWNLOAD . '. Downloadable products will not work until this directory is valid.');
define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Warning: The SQL cache directory does not exist: ' . DIR_FS_SQL_CACHE . '. SQL caching will not work until this directory is created.');
define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Warning: I am not able to write to the SQL cache directory: ' . DIR_FS_SQL_CACHE . '. SQL caching will not work until the right user permissions are set.');
define('ERROR_UNABLE_TO_DISPLAY_SERVER_INFORMATION', 'Sorry, your PHP configuration cannot be displayed because your hosting company has specified that [phpinfo] should be disabled as part of [disable_functions] in php.ini settings.');

define('_JANUARY', 'January');
define('_FEBRUARY', 'February');
define('_MARCH', 'March');
define('_APRIL', 'April');
define('_MAY', 'May');
define('_JUNE', 'June');
define('_JULY', 'July');
define('_AUGUST', 'August');
define('_SEPTEMBER', 'September');
define('_OCTOBER', 'October');
define('_NOVEMBER', 'November');
define('_DECEMBER', 'December');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> gift vouchers)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> coupons)');

define('TEXT_VALID_CATEGORIES_ID', 'Category ID');


define('DEFINE_LANGUAGE','Choose Language:');

define('BOX_ENTRY_COUNTER_DATE','Hit Counter Started:');
define('BOX_ENTRY_COUNTER','Hit Counter:');

// not installed
define('NOT_INSTALLED_TEXT','Not Installed');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Option Value Sorter ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Update Attribute Sort Order from Option Value Defaults</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Update All Products\' Attribute Sort Orders</strong><br>to match Option Value Default Sort Orders:<br>');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Option Name Sorter');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Attributes Controller');

// generic model
  define('TEXT_MODEL','Model:');
  define('TEXT_PRODUCTS_MODEL', 'Products Model:');
  define('TABLE_HEADING_PRODUCTS_MODEL','Model');
  define('TABLE_HEADING_MODEL', 'Model');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Layout Boxes Controller');

// check GV release queue and alert store owner
  define('TEXT_SHOW_GV_QUEUE','%s waiting approval ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Queue');
  define('IMAGE_ORDER','Order');

  define('IMAGE_DISPLAY','Display');
  
  define('IMAGE_EDIT_PRODUCT','Edit Product');
  define('IMAGE_EDIT_ATTRIBUTES','Edit Attributes');
  define('TEXT_NEW_PRODUCT', 'Product in Category: %s');
  

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Deduct amount');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Percent');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'New Price');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Min:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Units:');
  

  define('TEXT_PRODUCTS_MIX_OFF','*No Mixed Options');
  define('TEXT_PRODUCTS_MIX_ON','*Yes Mixed Options');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Search Filter: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Search: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Search for Product IDs (Delimited by commas)');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Search for Product Name/Model');

  define('PREV_NEXT_PRODUCT', 'Products: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Category is Disabled</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Product is Disabled</span>');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','<span class="alertVersionNew">New Version Available:</span> v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','<span class="alertVersionNew">New PATCH Available:</span> v');
  define('TEXT_VERSION_CHECK_PATCH','patch');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Download Here');
  define('TEXT_VERSION_CHECK_CURRENT','Your version of Zen Cart&reg; appears to be current.');
  define('ERROR_CONTACTING_PROJECT_VERSION_SERVER','Error: Could not contact Project Version Server');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> downloads)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Downloads Manager');

define('BOX_CATALOG_FEATURED','Featured Products');

define('ERROR_NOTHING_SELECTED', 'Nothing was selected ... No changes have been made');
define('TEXT_STATUS_WARNING','<strong>NOTE:</strong> status is auto enabled/disabled when dates are set');

define('TEXT_LEGEND_LINKED', 'Linked Product');
define('TEXT_MASTER_CATEGORIES_ID','Product Master Category:');
define('TEXT_LEGEND', 'LEGEND: ');
define('TEXT_LEGEND_STATUS_OFF', 'Status OFF ');
define('TEXT_LEGEND_STATUS_ON', 'Status ON ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTE: Master Category is used for pricing purposes where the product category affects the pricing on linked products, example: Sales</strong>');
define('TEXT_YES', 'Yes');
define('TEXT_NO', 'No');
define('TEXT_CANCEL', 'Cancel');

define('ICON_CHANGE_PRICE', 'Change Price');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Shipping Configuration errors!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Warning:</strong> Store Zip Code is not defined. See Configuration | Shipping/Packaging to set it.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Warning:</strong> 0 weight is configured for Free Shipping and Free Shipping Module is not enabled');
define('ERROR_USPS_STATUS', '<strong>Warning:</strong> USPS shipping module is either missing the username, or it is set to TEST rather than PRODUCTION and will not work.<br>If you cannot retrieve USPS Shipping Quotes, contact USPS to activate your Web Tools account on their production server. 1-800-344-7779 or icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTE: You have no shipping modules activated. Please go to Modules->Shipping to configure.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTE: You have no payment modules activated. Please go to Modules->Payment to configure.');

// text pricing
define('TEXT_CHARGES_WORD','Calculated Charge:');
define('TEXT_PER_WORD','<br>Price per word: ');
define('TEXT_WORDS_FREE',' Word(s) free ');
define('TEXT_CHARGES_LETTERS','Calculated Charge:');
define('TEXT_PER_LETTER','<br>Price per letter: ');
define('TEXT_LETTERS_FREE',' Letter(s) free ');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTY');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRICE');
define('TEXT_CATEGORIES_PRODUCTS', 'Select a Category with products (indicated by an asterisk) / move between the products');
define('TEXT_PRODUCT_TO_VIEW', 'Select a Product to View and Press Display ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'Invalid Master Category ID');
define('TEXT_INFO_ID', ' ID# ');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Product is Call for Price');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Product is Free');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Save:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% off');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;off');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Sale:&nbsp;');

define('TEXT_PRICED_BY_ATTRIBUTES', 'Priced by Attributes');

// Rich Text / HTML resources
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Note: You are using TEXT only email. If you would like to send HTML you need to enable "Enable HTML Emails" under Email Options</span>');
define('ENTRY_EMAIL_PREFERENCE','Email Format Pref:');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','TEXT-Only');
define('ENTRY_NOTHING_TO_SEND','You haven\'t entered any content for your message');
define('EMAIL_SEND_FAILED','ERROR: Failed sending email to: "%s" <%s> with subject: "%s"');
define('EMAIL_SALUTATION', 'Dear');

  define('EDITOR_NONE', 'Plain Text');
  define('TEXT_EDITOR_INFO', 'Text Editor');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'You have an HTML editor selected in \'My Store\' but the \'/editors/\' folder cannot be located. Please disable your selection or move your editor files into the \''.DIR_WS_CATALOG.'editors/\' folder');

define('TEXT_PRODUCT_POPUP_BUTTON', '<i class="fa fa-commenting"></i>');
define('TEXT_PRODUCT_POPUP_TITLE', 'Products Ordered');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Categories/Product Display Order: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Products Sort Order, Products Name');
  define('TEXT_SORT_PRODUCTS_NAME', 'Products Name');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Products Model');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Products Qty+, Products Name');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Products Qty-, Products Name');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Products Price+, Products Name');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Products Price-, Products Name');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Categories Sort Order, Categories Name');
  define('TEXT_SORT_CATEGORIES_NAME', 'Categories Name');

 

  define('TABLE_HEADING_YES','Yes');
  define('TABLE_HEADING_NO','No');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br><strong>Or, use an existing image file from server, filename:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br><strong>Overwrite Existing Image on Server?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','WARNING: FILENAME was updated but not overwritten ');
  define('TEXT_IMAGES_DELETE', '<strong>Remove Image?</strong> Note: Removes image from product (image is NOT deleted/removed from server):');
  define('TEXT_IMAGE_CURRENT', 'Image Name: ');
  define('TEXT_IMAGE_NONEXISTENT', 'IMAGE FILE IS MISSING');

  define('ERROR_DEFINE_OPTION_NAMES', 'Warning: No Option Names have been defined');
  define('ERROR_DEFINE_OPTION_VALUES', 'Warning: No Option Values have been defined');
  define('ERROR_DEFINE_PRODUCTS', 'Warning: No Products have been defined');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Warning: No Master Category ID has been set for this Product');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Add include SubCategories');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Add without SubCategories');

  define('BUTTON_PREVIOUS_ALT','Previous Product');
  define('BUTTON_NEXT_ALT','Next Product');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Multiple Categories Link Manager');


  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'All Global Copy, Add and Delete Features Status is currently OFF');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Display Global Features - ON');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Display Global Features - OFF');
// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: a linked product cannot be created in the same category.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: Catalog images directory is not writeable: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: Catalog images directory does not exist: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Error: Category cannot be moved into a child category.');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Error: Cannot move product to the same category or into a category where it already exists.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Error: Category has Products!<br><br>While this can be done temporarily to build your Categories ... Categories hold either Products or Categories but never both!');
  define('SUCCESS_CATEGORY_MOVED', 'Success! Category has successfully been moved ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Error: Cannot move Category to the same Category! ID#');

// messages for function zen_copy_products_attributes
  define('WARNING_ATTRIBUTE_COPY_SAME_ID','Warning: Attribute Copy aborted. Cannot copy from Product ID#%u to Product ID#%u (same ID).');
  define('WARNING_ATTRIBUTE_COPY_NO_ATTRIBUTES','Warning: Attribute Copy aborted. No Attributes found for source Product ID#%u, "%s".');
  define('WARNING_ATTRIBUTE_COPY_INVALID_ID','Warning: Attribute Copy to Product ID#%u aborted. Invalid ID');
  define('TEXT_ATTRIBUTE_COPY_SKIPPING','Skipping Attribute ID#%u for Product ID#%u');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','Attribute ID#%u copied from Product ID#%u to Product ID#%u');
  define('TEXT_ATTRIBUTE_COPY_UPDATING', 'Attribute ID#%u updated for Product ID#%u');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'WARNING: EZ-PAGES HEADER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'WARNING: EZ-PAGES FOOTER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'WARNING: EZ-PAGES SIDEBOX - On for Admin IP Only');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Warning: This product is marked - Free Shipping and Skips Shipping Address<br>No shipping will be requested when all products in the order are Virtual Products');
  define('TEXT_VIRTUAL_EDIT','Warning: This product is marked - Free Shipping and Skips Shipping Address<br>No shipping will be requested when all products in the order are Virtual Products');
  define('TEXT_FREE_SHIPPING_PREVIEW','Warning: This product is marked - Free Shipping, Shipping Address Required<br>Free Shipping Module is required when all products in the order are Always Free Shipping Products');
  define('TEXT_FREE_SHIPPING_EDIT','Warning: Yes makes the product - Free Shipping, Shipping Address Required<br>Free Shipping Module is required when all products in the order are Always Free Shipping Products');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'WARNING: The Admin Activity Log table has records over 2 months old and should be archived to conserve space ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'WARNING: The Admin Activity Log table has over 50,000 records and should be archived to conserve space ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'You can view and archive Admin Activity details via the Admin Access Management menu, if you have appropriate permissions.');
  define('TEXT_ACTIVITY_LOG_ACCESSED', 'Admin Activity Log accessed. Output format: %s. Filter: %s. %s');
  define('TEXT_ERROR_FAILED_ADMIN_LOGIN_FOR_USER', 'Failed admin login attempt: ');
  define('TEXT_ERROR_ATTEMPTED_TO_LOG_IN_TO_LOCKED_ACCOUNT', 'Attempted to log into locked account:');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_CSRF_TOKEN', 'Attempted login without CSRF token.');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_USERNAME', 'Attempted login without username.');
  define('TEXT_ERROR_INCORRECT_PASSWORD_DURING_RESET_FOR_USER', 'Incorrect password while attempting a password reset for: ');


  define('CATEGORY_HAS_SUBCATEGORIES', 'NOTE: Category has SubCategories<br>Products cannot be added');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'WARNING! Welcome Email Discount Coupon expires in %s days');


define('WARNING_EMAIL_SYSTEM_DISABLED', 'WARNING: The email subsystem is disabled. No emails will be sent until it is re-enabled in Admin->Configuration->Email Options.');
define('WARNING_EMAIL_SYSTEM_DEVELOPER_OVERRIDE', 'WARNING: The sending of emails has been disabled as developer switch "DEVELOPER_OVERRIDE_EMAIL_STATUS" is set to "false".');
define('WARNING_EMAIL_SYSTEM_DEVELOPER_EMAIL', 'WARNING: ALL emails will be sent to %s (as defined in "DEVELOPER_OVERRIDE_EMAIL_ADDRESS").');
define('TEXT_CURRENT_VER_IS', 'You are presently using: ');
define('ERROR_NO_DATA_TO_SAVE', 'ERROR: The data you submitted was found to be empty. YOUR CHANGES HAVE *NOT* BEEN SAVED. You may have a problem with your browser or your internet connection.');
define('TEXT_HIDDEN', 'Hidden');
define('TEXT_VISIBLE', 'Visible');
define('TEXT_HIDE', 'Hide');
define('TEXT_EMAIL', 'Email');
define('TEXT_NOEMAIL', 'No Email');

define('BOX_HEADING_PRODUCT_TYPES', 'Product Types');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="https://docs.zen-cart.com/user/troubleshooting/error_71_maintenance_required/" rel="noopener" target="_blank">ERROR 0071 There appears to be a problem with the database. Maintenance is required.</a>');

// moved from currencies file:
define('TEXT_INFO_CURRENCY_UPDATED', 'The exchange rate for %s (%s) was updated successfully to %s via %s.');
define('ERROR_CURRENCY_INVALID', 'Error: The exchange rate for %s (%s) was not updated via %s. Is it a valid currency code?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Warning: The primary exchange rate server (%s) failed for %s (%s) - trying the secondary exchange rate server.');

// Set to empty string if alpha sorting not desired
define('MENU_CATEGORIES_TO_SORT_BY_NAME','reports,tools'); 

// Plugins
define('PLUGIN_INSTALL_SQL_FAILURE', 'one or more database errors occured');

// ARIA Stuff

define('ARIA_PAGINATION_ROLE_LABEL_GENERAL','Pagination');
define('ARIA_PAGINATION_ROLE_LABEL_FOR','%s Pagination'); // eg: "Search results Pagination"
define('ARIA_PAGINATION_PREVIOUS_PAGE','Go to Previous Page');
define('ARIA_PAGINATION_NEXT_PAGE','Go to Next Page');
define('ARIA_PAGINATION_CURRENT_PAGE','Current Page');
define('ARIA_PAGINATION_CURRENTLY_ON',', now on page %s');
define('ARIA_PAGINATION_GOTO','Go to ');
define('ARIA_PAGINATION_PAGE_NUM','Page %s');
define('ARIA_PAGINATION_ELLIPSIS_PREVIOUS','Get previous group of pages');
define('ARIA_PAGINATION_ELLIPSIS_NEXT','Get next group of pages');
define('ARIA_PAGINATION_','');
///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . "/" . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES));

// Additional Localisation - Languages - Phone Country Code
define('TEXT_INFO_LANGUAGE_ID', 'Enter telephone country access code without leading 0<br />(english must be 1, german must be 43):');
define('TEXT_INFO_LANGUAGE_CODE', 'Code:<br />(en = englisch, de = german)');
