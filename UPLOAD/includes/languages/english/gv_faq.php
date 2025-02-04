<?php
/**

 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: gv_faq.php 2022-04-09 12:53:16Z webchills $
 */

define('NAVBAR_TITLE', TEXT_GV_NAME . ' FAQ');
define('HEADING_TITLE', TEXT_GV_NAME . ' FAQ');

define('TEXT_INFORMATION', '<a id="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1').'">Purchasing ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2').'">How to send ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3').'">Buying with ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4').'">Redeeming ' . TEXT_GV_NAMES . '</a><br>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5').'">When problems occur</a><br>
');
define('SUB_HEADING_TITLE_1','Purchasing ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_1', TEXT_GV_NAMES . ' are purchased just like any other item in our store. You can
  pay for them using the store\'s standard payment method(s).
  Once purchased the value of the ' . TEXT_GV_NAME . ' will be added to your own personal
   ' . TEXT_GV_NAME . ' Balance. If you have funds in your ' . TEXT_GV_NAME . ' Balance, you will
  notice that the amount now shows in the My Account page, and also provides a
  link to a page where you can send the ' . TEXT_GV_NAME . ' to someone via email.');
 
define('SUB_HEADING_TITLE_2','How to Send ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT_2','You may send a ' . TEXT_GV_NAME . ' from the My Account page. 
  When you send a ' . TEXT_GV_NAME . ' you need to specify the following:
  The name of the person to whom you are sending the ' . TEXT_GV_NAME . ';
  The email address of the person to whom you are sending the ' . TEXT_GV_NAME . ';
  The amount you want to send (Note you don\'t have to send the full amount that
  is in your ' . TEXT_GV_NAME . ' Balance.);
  An optional short message which will appear in the email;
  Please ensure that you have entered all of the information correctly, although
  you will be given the opportunity to change this as much as you want before
  the email is actually sent.');
  
  define('SUB_HEADING_TITLE_3','Buying with ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT_3','If you have funds in your ' . TEXT_GV_NAME . ' Balance, you can use those funds to
  purchase other items in our store. At the checkout stage an extra box will
  appear showing your Balance. Enter the amount to apply from the funds in your ' . TEXT_GV_NAME . ' Balance.
  Please note: you will still have to select another payment method if there
  is not enough in your ' . TEXT_GV_NAME . ' Balance to cover the cost of your purchase.
  If you have more funds in your ' . TEXT_GV_NAME . ' Balance than the total cost of
  your purchase, the remaining balance will be left in your ' . TEXT_GV_NAME . ' Balance for 
  future use.');
  
  define('SUB_HEADING_TITLE_4','Redeeming ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT_4','If you receive a ' . TEXT_GV_NAME . ' by email, it will contain details of who sent
  you the ' . TEXT_GV_NAME . ', along with a short message from them. The email
  will also contain the ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . '. It is probably a good idea to print
  out this email for future reference. You can now redeem the ' . TEXT_GV_NAME . ' in
  one of two ways:<br><br>
  1. By clicking on the link contained within the email for this express purpose.
  This will take you to the store\'s Redeem ' . TEXT_GV_NAME . ' page. You will then be requested
  to create an account before the ' . TEXT_GV_NAME . ' is validated and placed in your
   ' . TEXT_GV_NAME . ' Balance. You can then use the amount to purchase any item from our store.<br><br>
  2. During the checkout process on the same page that you select a payment method,
there will be a box to enter a ' . TEXT_GV_REDEEM . '. Enter the ' . TEXT_GV_REDEEM . ' here, and
click the Redeem button. The code will be
validated and the amount added to your ' . TEXT_GV_NAME . ' Balance. You can then use the amount to purchase any item from our store.');
 
  define('SUB_HEADING_TITLE_5','When problems occur.');
  define('SUB_HEADING_TEXT_5','For any queries regarding the ' . TEXT_GV_NAME . ' System, please contact the store
  using our <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">Contact Us</a> page. Please make sure you give
  as much information as possible regarding the issue so that we can fully address the problem.');
  
  define('SUB_HEADING_TITLE_0','');
  define('SUB_HEADING_TEXT_0','Please choose from one of the questions above.');

  

  define('TEXT_GV_REDEEM_INFO', 'Please enter your ' . TEXT_GV_NAME . ' redemption code: ');
  define('TEXT_GV_REDEEM_ID', 'Redemption Code:');
