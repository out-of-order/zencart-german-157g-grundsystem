<?php
/**
 * unsubscribe header_php.php 
 *
 * @package page
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: header_php.php 2011-08-09 15:49:16Z hugo13 $
 */

// This should be first line of the script:
$zco_notifier->notify('NOTIFY_HEADER_START_UNSUBSCRIBE');

require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));

//present the option to unsubscribe, with a confirm button/link
if (isset($_GET['addr'])) {
  $unsubscribe_address = preg_replace('/[^0-9A-Za-z@._-]/', '', $_GET['addr']);
  if ($unsubscribe_address=='')  zen_redirect(zen_href_link(FILENAME_ACCOUNT_NEWSLETTERS));
} else {
  $unsubscribe_address = '';
}

$breadcrumb->add(NAVBAR_TITLE, zen_href_link(FILENAME_UNSUBSCRIBE, '', 'NONSSL'));


// if they clicked on the "confirm unsubscribe" then process it:
if (isset($_GET['action']) && ($_GET['action'] == 'unsubscribe')) {
  $unsubscribe_address = zen_db_prepare_input($_GET['addr']);
  /// Check and see if the email exists in the database, and is subscribed to the newsletter.
  $unsubscribe_count_query = "SELECT 1 
                              FROM " . TABLE_CUSTOMERS . " 
                              WHERE customers_newsletter = '1' 
                              AND customers_email_address = :emailAddress";
  
  $unsubscribe_count_query = $db->bindVars($unsubscribe_count_query, ':emailAddress', $unsubscribe_address, 'string');
  $unsubscribe = $db->Execute($unsubscribe_count_query);

  // If we found the customer's email address, and they currently subscribe
  if ($unsubscribe->RecordCount() >0) {
    $unsubscribe_query = "UPDATE " . TABLE_CUSTOMERS . " 
                          SET customers_newsletter = '0' 
                          WHERE customers_email_address = :emailAddress";
    
    $unsubscribe_query = $db->bindVars($unsubscribe_query, ':emailAddress', $unsubscribe_address, 'string');    
    $unsubscribe = $db->Execute($unsubscribe_query);
    $status_display = UNSUBSCRIBE_DONE_TEXT_INFORMATION . $unsubscribe_address;
  } else {
    // If not found, we want to display an error message (This should never occur, unless they try to unsubscribe twice)
    $status_display = UNSUBSCRIBE_ERROR_INFORMATION . $unsubscribe_address;
  }
}

$_SESSION['navigation']->remove_current_page();

// This should be last line of the script:
$zco_notifier->notify('NOTIFY_HEADER_END_UNSUBSCRIBE');