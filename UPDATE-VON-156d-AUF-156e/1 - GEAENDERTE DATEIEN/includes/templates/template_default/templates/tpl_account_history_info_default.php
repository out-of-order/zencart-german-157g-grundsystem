<?php
/**
 * Zen Cart German Specific
 * Page Template
 *
 * Loaded automatically by index.php?main_page=account_edit.<br />
 * Displays information related to a single specific order
 *
 * @package templateSystem
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_account_history_info_default.php 2020-03-06 08:45:05Z webchills $
 */
?>
<div class="centerColumn" id="accountHistInfo">

<div class="forward"><?php echo HEADING_ORDER_DATE . ' ' . zen_date_long($order->info['date_purchased']); ?></div>
<br class="clearBoth" />

<?php if ($current_page != FILENAME_CHECKOUT_SUCCESS) { ?>
<h2 id="orderHistoryDetailedOrder"><?php echo HEADING_TITLE . ORDER_HEADING_DIVIDER . sprintf(HEADING_ORDER_NUMBER, zen_output_string_protected($_GET['order_id'])); ?></h2>
<?php } ?>

<table id="orderHistoryHeading">
    <tr class="tableHeading">
        <th scope="col" id="myAccountQuantity"><?php echo HEADING_QUANTITY; ?></th>
        <th scope="col" id="myAccountProducts"><?php echo HEADING_PRODUCTS; ?></th>
<?php
  if (sizeof($order->info['tax_groups']) > 1) {
?>
        <th scope="col" id="myAccountTax"><?php echo HEADING_TAX; ?></th>
<?php
 }
?>
        <th scope="col" id="myAccountTotal"><?php echo HEADING_TOTAL; ?></th>
    </tr>
<?php
  for ($i=0, $n=sizeof($order->products); $i<$n; $i++) {
  ?>
    <tr>
        <td class="accountQuantityDisplay"><?php echo  $order->products[$i]['qty'] . QUANTITY_SUFFIX; ?></td>
        <td class="accountProductDisplay"><?php echo  $order->products[$i]['name'];

    if ( (isset($order->products[$i]['attributes'])) && (sizeof($order->products[$i]['attributes']) > 0) ) {
      echo '<ul class="orderAttribsList">';
      for ($j=0, $n2=sizeof($order->products[$i]['attributes']); $j<$n2; $j++) {
        echo '<li>' . $order->products[$i]['attributes'][$j]['option'] . TEXT_OPTION_DIVIDER . nl2br(zen_output_string_protected($order->products[$i]['attributes'][$j]['value'])) . '</li>';
      }
        echo '</ul>';
    }
?>
        </td>
<?php
    if (sizeof($order->info['tax_groups']) > 1) {
?>
        <td class="accountTaxDisplay"><?php echo zen_display_tax_value($order->products[$i]['tax']) . '%' ?></td>
<?php
    }
?>
        <td class="accountTotalDisplay">
        <?php
         $ppe = zen_round(zen_add_tax($order->products[$i]['final_price'], $order->products[$i]['tax']), $currencies->get_decimal_places($order->info['currency']));
         $ppt = $ppe * $order->products[$i]['qty'];
        //        echo $currencies->format(zen_add_tax($order->products[$i]['final_price'], $order->products[$i]['tax']) * $order->products[$i]['qty'], true, $order->info['currency'], $order->info['currency_value']) . ($order->products[$i]['onetime_charges'] != 0 ? '<br />' . $currencies->format(zen_add_tax($order->products[$i]['onetime_charges'], $order->products[$i]['tax']), true, $order->info['currency'], $order->info['currency_value']) : '')
        echo $currencies->format($ppt, true, $order->info['currency'], $order->info['currency_value']) . ($order->products[$i]['onetime_charges'] != 0 ? '<br />' . $currencies->format(zen_add_tax($order->products[$i]['onetime_charges'], $order->products[$i]['tax']), true, $order->info['currency'], $order->info['currency_value']) : '');
        ?></td>
    </tr>
<?php
  }
?>
</table>
<hr />
<div id="orderTotals">
<?php
  for ($i=0, $n=sizeof($order->totals); $i<$n; $i++) {
?>
     <div class="amount larger forward"><?php echo $order->totals[$i]['text'] ?></div>
     <div class="lineTitle larger forward"><?php echo $order->totals[$i]['title'] ?></div>
<br class="clearBoth" />
<?php
  }
?>

</div>

<?php
/**
 * Used to display any downloads associated with the cutomers account
 */
  if (DOWNLOAD_ENABLED == 'true') require($template->get_template_dir('tpl_modules_downloads.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_downloads.php');
?>


<?php
/**
 * Used to loop thru and display order status information
 */
if (sizeof($statusArray)) {
?>

<h2 id="orderHistoryStatus"><?php echo HEADING_ORDER_HISTORY; ?></h2>
<table id="myAccountOrdersStatus">
    <tr class="tableHeading">
        <th scope="col" id="myAccountStatusDate"><?php echo TABLE_HEADING_STATUS_DATE; ?></th>
        <th scope="col" id="myAccountStatus"><?php echo TABLE_HEADING_STATUS_ORDER_STATUS; ?></th>
        <th scope="col" id="myAccountStatusComments"><?php echo TABLE_HEADING_STATUS_COMMENTS; ?></th>
       </tr>
<?php
  $first = true; 
  foreach ($statusArray as $statuses) {
?>
    <tr>
        <td><?php echo zen_date_short($statuses['date_added']); ?></td>
        <td><?php echo $statuses['orders_status_name']; ?></td>
        <td>
<?php 
    if (!empty($statuses['comments'])) {
      if ($first) { 
         echo nl2br(zen_output_string_protected($statuses['comments']));
         $first = false; 
      } else {
         echo nl2br(zen_output_string($statuses['comments']));
      }
    }
?>
       </td> 
     </tr>
<?php
  }
?>
</table>
<?php } ?>

<hr />
<div id="myAccountShipInfo" class="floatingBox back">
<?php
  if (!empty($order->delivery['format_id'])) {
?>
<h3><?php echo HEADING_DELIVERY_ADDRESS; ?></h3>
<address><?php echo zen_address_format($order->delivery['format_id'], $order->delivery, 1, ' ', '<br />'); ?></address>
<?php
  }
?>

<?php
    if (zen_not_null($order->info['shipping_method'])) {
?>
<h4><?php echo HEADING_SHIPPING_METHOD; ?></h4>
<div><?php echo $order->info['shipping_method']; ?></div>
<?php } else { // temporary just remove these 4 lines ?>
<div>WARNING: Missing Shipping Information</div>
<?php
    }
?>
</div>

<div id="myAccountPaymentInfo" class="floatingBox forward">
<h3><?php echo HEADING_BILLING_ADDRESS; ?></h3>
<address><?php echo zen_address_format($order->billing['format_id'], $order->billing, 1, ' ', '<br />'); ?></address>

<h4><?php echo HEADING_PAYMENT_METHOD; ?></h4>
<div><?php echo $order->info['payment_method']; ?></div>
</div>
<br class="clearBoth" />

<?php if(RL_INVOICE3_STATUS=='true') {?>
<?php
    require_once(DIR_WS_INCLUDES . 'classes/class.rl_invoice3.php');
    $pdfT = new rl_invoice3($_GET['order_id'], $paper['orientation'], $paper['unit'], $paper['format']);
    // use $pdfT->getPDFAttachments('NO') if only the invoice should be shown
    $a = $pdfT->getPDFAttachments('ALL');
    $tmp1 = '<div class="rl-invoice3-hlink"><span class="rl-invoice3-hlink-text">'. RL_INVOICE3_INVLINK_TEXT . '</span>';
    $tmp = '';
    foreach ($a as $key => $v) {
        if(isset($v['fn'])){
            $pa = zen_href_link('rl_invoice3', '', 'SSL') . '&fn=' . $v['fn'] . '&order=' . $_GET['order_id'];
            $tmp .=  '| <a href="' . $pa . '">'. $v['name'] . '</a>';
        } else {
            $tmp .=  '| <a href="' . str_replace(DIR_FS_CATALOG, '', $v['file']) . '">'. $v['name'] . '</a>';
        }
    }
    $tmp .= '</div>';
    echo $tmp1 . substr($tmp, 1);
?>
<?php } ?>

</div> 