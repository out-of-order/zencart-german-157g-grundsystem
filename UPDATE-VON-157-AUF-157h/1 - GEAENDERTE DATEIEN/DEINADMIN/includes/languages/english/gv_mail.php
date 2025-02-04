<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_mail.php 2023-10-28 19:49:16Z webchills $
 */

require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';

define('HEADING_TITLE', 'Send a Gift Certificate To Customers');

define('TEXT_FROM', 'From:');
define('TEXT_TO', 'Email To:');
define('TEXT_TO_CUSTOMERS', 'To Customer Lists:');
define('TEXT_TO_EMAIL', 'or To an Email Address:');
define('TEXT_TO_EMAIL_NAME', 'Name (optional):');
define('TEXT_TO_EMAIL_INFO', 'Choose a list from the above drop-down or use the following fields for sending a single email.');
define('TEXT_SUBJECT', 'Subject:');
define('TEXT_AMOUNT', ' Value:');
define('ERROR_GV_AMOUNT', 'Enter a number using a decimal point for fractions eg.: 25.00.');
define('TEXT_AMOUNT_INFO', 'Enter a number using a decimal point for fractions eg.: 25.00.');
define('TEXT_HTML_MESSAGE', 'HTML Message:');
define('TEXT_MESSAGE', 'Text-Only Message:');
define('TEXT_MESSAGE_INFO', '<p>Optionally include a specific message, inserted prior to the standard ' . TEXT_GV_NAME . ' email text.</p>');

define('NOTICE_EMAIL_SENT_TO', 'Notice: %1s email(s) sent to %2s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: No Customer selected.');
define('ERROR_NO_AMOUNT_ENTERED', 'Error: Certificate Value invalid.');
define('ERROR_NO_SUBJECT', 'Error: no Email Subject entered.');

define('TEXT_GV_ANNOUNCE', 'We\'re pleased to offer you a ' . TEXT_GV_NAME . ' for %s.');
define('TEXT_GV_TO_REDEEM_TEXT', 'Use the following link to redeem the ' . TEXT_GV_NAME . "\n\n ". '%1$s%2$s' . "\n\n" . 'or visit ' . STORE_NAME . " at " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'and enter the code %2$s on the Checkout-Payment page.');
define('TEXT_GV_TO_REDEEM_HTML', '<br><a href="%1$s%2$s">Click here to redeem the ' . TEXT_GV_NAME . '</a> or visit <a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . '">' . STORE_NAME . '</a> and enter the code <strong>%2$s</strong> on the Checkout-Payment page.');

