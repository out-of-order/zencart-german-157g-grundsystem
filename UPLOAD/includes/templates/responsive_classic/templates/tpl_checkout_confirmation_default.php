<?php
/**
 * Page Template
 * Zen Cart German Specific (158 code in 157)
 * Loaded automatically by index.php?main_page=checkout_confirmation.
 * Displays final checkout details, cart, payment and shipping info details.
 * 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_checkout_confirmation_default.php 2022-12-15 23:49:16Z webchills $
 */
?>
<div class="centerColumn" id="checkoutConfirmDefault">

<h1 id="checkoutConfirmDefaultHeading"><?php echo HEADING_TITLE; ?></h1>
<div id="conditionslaststep"><?php echo TEXT_ZUSATZ_SCHRITT3; ?><br><?php echo TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP; ?></div>

<?php if ($messageStack->size('redemptions') > 0)           echo $messageStack->output('redemptions'); ?>
<?php if ($messageStack->size('checkout_confirmation') > 0) echo $messageStack->output('checkout_confirmation'); ?>
<?php if ($messageStack->size('checkout') > 0)              echo $messageStack->output('checkout'); ?>

<div id="checkoutBillto" class="back">
  <h2 id="checkoutConfirmDefaultBillingAddress"><?php echo HEADING_BILLING_ADDRESS; ?></h2>
<?php if (!$flagDisablePaymentAddressChange) { ?>
  <div class="buttonRow forward"><?php echo '<a href="' . zen_href_link(FILENAME_CHECKOUT_PAYMENT, '', 'SSL') . '">' . zen_image_button(BUTTON_IMAGE_EDIT_SMALL, BUTTON_EDIT_SMALL_ALT) . '</a>'; ?></div>
<?php } ?>

  <address><?php echo zen_address_format($order->billing['format_id'], $order->billing, 1, ' ', '<br>'); ?></address>


  <h3 id="checkoutConfirmDefaultPayment"><?php echo HEADING_PAYMENT_METHOD; ?></h3> 
  <h4 id="checkoutConfirmDefaultPaymentTitle"><?php echo $payment_title; ?></h4>

<?php
  if ($credit_covers === false && is_array($payment_modules->modules)) {
    if ($confirmation = $payment_modules->confirmation()) {
?>
  <div class="important"><?php echo $confirmation['title']; ?></div>
<?php
    }
?>
  <div class="important">
<?php
      for ($i=0, $n=sizeof($confirmation['fields']); $i<$n; $i++) {
?>
    <div class="back"><?php echo $confirmation['fields'][$i]['title']; ?></div>
    <div ><?php echo $confirmation['fields'][$i]['field']; ?></div>
<?php
       }
?>
  </div>
<?php
  }
?>

</div>

<?php
  if ($_SESSION['sendto'] != false) {
?>
<div id="checkoutShipto" class="forward">
  <h2 id="checkoutConfirmDefaultShippingAddress"><?php echo HEADING_DELIVERY_ADDRESS; ?></h2>
  <div class="buttonRow forward"><?php echo '<a href="' . $editShippingButtonLink . '">' . zen_image_button(BUTTON_IMAGE_EDIT_SMALL, BUTTON_EDIT_SMALL_ALT) . '</a>'; ?></div>

  <address><?php echo zen_address_format($order->delivery['format_id'], $order->delivery, 1, ' ', '<br>'); ?></address>

<?php
    if ($order->info['shipping_method']) {
?>
  <h3 id="checkoutConfirmDefaultShipment"><?php echo HEADING_SHIPPING_METHOD; ?></h3>
  <h4 id="checkoutConfirmDefaultShipmentTitle"><?php echo $order->info['shipping_method']; ?></h4>

<?php
    }
?>
  </div>
<?php
  }
?>
  <br class="clearBoth">

<div class="group" id="order-comments">

  <h2 id="checkoutConfirmDefaultHeadingComments"><?php echo HEADING_ORDER_COMMENTS; ?></h2>
  <div class="buttonRow forward"><?php echo  '<a href="' . zen_href_link(FILENAME_CHECKOUT_PAYMENT, '', 'SSL') . '">' . zen_image_button(BUTTON_IMAGE_EDIT_SMALL, BUTTON_EDIT_SMALL_ALT) . '</a>'; ?></div>
  <div><?php echo (empty($order->info['comments']) ? NO_COMMENTS_TEXT : nl2br(zen_output_string_protected($order->info['comments'])) . zen_draw_hidden_field('comments', $order->info['comments'])); ?></div>

</div>

<h2 id="checkoutConfirmDefaultHeadingCart"><?php echo HEADING_PRODUCTS; ?></h2>

<div class="buttonRow forward"><?php echo '<a href="' . zen_href_link(FILENAME_SHOPPING_CART, '', 'SSL') . '">' . zen_image_button(BUTTON_IMAGE_EDIT_SMALL, BUTTON_EDIT_SMALL_ALT) . '</a>'; ?></div>
<br class="clearBoth">

<?php  if ($flagAnyOutOfStock) { ?>
<?php    if (STOCK_ALLOW_CHECKOUT == 'true') {  ?>
<div class="messageStackError"><?php echo OUT_OF_STOCK_CAN_CHECKOUT; ?></div>
<?php    } else { ?>
<div class="messageStackError"><?php echo OUT_OF_STOCK_CANT_CHECKOUT; ?></div>
<?php    } //endif STOCK_ALLOW_CHECKOUT ?>
<?php  } //endif flagAnyOutOfStock ?>


      <table id="cartContentsDisplay">
        <tr class="cartTableHeading">
          <th scope="col" id="ccQuantityHeading"><?php echo TABLE_HEADING_QUANTITY; ?></th>
          <th scope="col" id="ccProductsHeading"><?php echo TABLE_HEADING_PRODUCTS; ?></th>
        <th scope="col" id="ccProductsHeading"><?php echo TABLE_HEADING_PRODUCTIMAGE; ?></th>
<?php
  // If there are tax groups, display the tax columns for price breakdown
  if (sizeof($order->info['tax_groups']) > 1) {
?>
          <th scope="col" id="ccTaxHeading"><?php echo HEADING_TAX; ?></th>
<?php
  }
?>
 <th scope="col" id="ccSinglePriceHeading" width="60"><?php echo TABLE_HEADING_SINGLEPRICE; ?></th>
          <th scope="col" id="ccTotalHeading"><?php echo TABLE_HEADING_TOTAL; ?></th>
        </tr>
<?php // now loop thru all products to display quantity and price ?>
<?php for ($i=0, $n=sizeof($order->products); $i<$n; $i++) { ?>
        <tr class="<?php echo $order->products[$i]['rowClass']; ?>">
          <td  class="cartQuantity"><?php echo $order->products[$i]['qty']; ?>&nbsp;x</td>
          <td class="cartProductDisplay"><?php echo $order->products[$i]['name']; ?>
          	<br><?php echo $order->products[$i]['merkmale']; ?>
          <?php  if (!empty($stock_check[$i])) echo $stock_check[$i]; ?>

<?php // if there are attributes, loop thru them and display one per line
    if (isset($order->products[$i]['attributes']) && sizeof($order->products[$i]['attributes']) > 0 ) {
    echo '<ul class="cartAttribsList">';
      for ($j=0, $n2=sizeof($order->products[$i]['attributes']); $j<$n2; $j++) {
?>
      <li>
          <?php
          echo $order->products[$i]['attributes'][$j]['option'] . ': ' . nl2br(zen_output_string_protected($order->products[$i]['attributes'][$j]['value']));
          ?>
      </li>
<?php
      } // end loop
      echo '</ul>';
    } // endif attribute-info
?>
          </td>
        <td class="cartProductImg">
<?php echo zen_image(DIR_WS_IMAGES . $order->products[$i]['image'], $order->products[$i]['name'], IMAGE_SHOPPING_CART_WIDTH, IMAGE_SHOPPING_CART_HEIGHT);?>
 </td>

<?php // display tax info if exists ?>
<?php if (sizeof($order->info['tax_groups']) > 1)  { ?>
        <td class="cartTotalDisplay">
          <?php echo zen_display_tax_value($order->products[$i]['tax']); ?>%</td>
<?php    }  // endif tax info display  ?>
        <td class="cartTotalDisplay">
          <?php echo $currencies->display_price($order->products[$i]['final_price'], $order->products[$i]['tax'], 1);?>
         
 </td>

        <td class="cartTotalDisplay" valign="top">
          <?php echo $currencies->display_price($order->products[$i]['final_price'], $order->products[$i]['tax'], $order->products[$i]['qty']);
          if ($order->products[$i]['onetime_charges'] != 0 ) echo '<br> ' . $currencies->display_price($order->products[$i]['onetime_charges'], $order->products[$i]['tax'], 1);
?>
        </td>
      </tr>
<?php  }  // end for loopthru all products ?>
    </table>


<?php
  if (MODULE_ORDER_TOTAL_INSTALLED) {
    $order_totals = $order_total_modules->process();
?>
<div id="orderTotals"><?php $order_total_modules->output(); ?></div>
<?php
  }
?>

<?php
  echo zen_draw_form('checkout_confirmation', $form_action_url, 'post', 'id="checkout_confirmation" onsubmit="submitonce();"');

  if ($credit_covers === false && is_array($payment_modules->modules)) {
    echo $payment_modules->process_button();
  }
?>

<?php
 // zollhinweis bei nicht EU - only if product is not virtual
        if ($_SESSION['cart']->get_content_type() == 'virtual') {
        // do nothing
        } else {
        $dest_country = isset ($order->delivery['country']['iso_code_2']) ? $order->delivery['country']['iso_code_2'] : 0 ;        
        $error = false;
        $countries_table = EU_COUNTRIES_FOR_LAST_STEP; 
        $country_zones = explode(",", $countries_table);
        if ((!in_array($dest_country, $country_zones))&& ($order->delivery['country']['id'] != '')) {            
            echo TEXT_NON_EU_COUNTRIES;
        } else {
            // do nothing
        }
      }
?>

<?php
  if (DISPLAY_WIDERRUF_DOWNLOADS_ON_CHECKOUT_CONFIRMATION == 'true') {
?>
<fieldset>
<legend><?php echo HEADING_WIDERRUF_DOWNLOADS; ?></legend>
<?php echo  zen_draw_checkbox_field('widerruf_downloads', '1', false, 'id="widerruf_downloads"');?>
<label class="checkboxLabel" for="widerruf_downloads"><?php echo TEXT_WIDERRUF_DOWNLOADS_CONFIRM; ?></label>
</fieldset>
<?php
  }
?>
<div class="buttonRow forward confirm-order"><?php echo zen_image_submit(BUTTON_IMAGE_CONFIRM_ORDER, BUTTON_CONFIRM_ORDER_ALT, 'name="btn_submit" id="btn_submit"') ;?></div>
</form>
</div>