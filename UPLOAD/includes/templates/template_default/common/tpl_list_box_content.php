<?php
/**
 * Common Template - tpl_tabular_display.php
 *
 * This file is used for generating tabular output where needed, based on the supplied array of table-cell contents.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_list_box_content.php 2019-04-12 17:49:16Z webchills $
 */

//print_r($list_box_contents);
  $cell_scope = (!isset($cell_scope) || empty($cell_scope)) ? 'col' : $cell_scope;
  $cell_title = (!isset($cell_title) || empty($cell_title)) ? 'list' : $cell_title;

?>
<table class="listBoxContentTable">
<?php
  for($row=0, $n=sizeof($list_box_contents);  $row<$n; $row++) {
    $params = "";
    if (isset($list_box_contents[$row]['params'])) $params .= ' ' . $list_box_contents[$row]['params'];
?>
  <tr <?php echo $params; ?>>
<?php
    for($col=0, $j=sizeof($list_box_contents[$row]); $col<$j; $col++) {
      $r_params = "";
      $cell_type = ($row==0) ? 'th' : 'td';
      if (isset($list_box_contents[$row][$col]['params'])) $r_params .= ' ' . $list_box_contents[$row][$col]['params'];
      if ($cell_type=='th') $r_params .= ' scope="' . $cell_scope . '" id="' . $cell_title . '-Cell-' . $row . ' - ' . $col.'"';
      if (isset($list_box_contents[$row][$col]['text'])) {
?>
   <?php echo '<' . $cell_type . $r_params . '>'; ?><?php echo $list_box_contents[$row][$col]['text'] ?><?php echo '</' . $cell_type . '>'; ?>
<?php
      }
    }
?>
  </tr>
<?php
  }
?>
</table>