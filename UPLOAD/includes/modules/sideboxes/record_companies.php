<?php
/**
 * record_companies sidebox - displays list of record companies for customer to filter products on
 *
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: record_companies.php 2022-12-14 22:49:16Z webchills $
 */
$record_company = $db->Execute(
    "SELECT record_company_id, record_company_name
      FROM " . TABLE_RECORD_COMPANY . "
      ORDER BY record_company_name"
);

if (!$record_company->EOF) {
// Display a list
    $record_company_array = [];
    $default_selection = (isset($_GET['record_company_id'])) ? (int)$_GET['record_company_id'] : '';
    if (!isset($_GET['record_company_id']) || $_GET['record_company_id'] === '' ) {
        $required = ' required';
        $record_company_array[] = ['id' => '', 'text' => PULL_DOWN_ALL];
    } else {
        $required = '';
        $record_company_array[] = ['id' => '', 'text' => PULL_DOWN_RECORD_COMPANIES];
    }

    foreach ($record_company as $next_company) {
        $record_company_name = $next_company['record_company_name'];
        if (strlen($record_company_name) > (int)MAX_DISPLAY_RECORD_COMPANY_NAME_LEN) {
            $record_company_name = substr($record_company_name, 0, (int)MAX_DISPLAY_RECORD_COMPANY_NAME_LEN) . '..';
        }
        $record_company_array[] = [
            'id' => $next_company['record_company_id'],
            'text' => $record_company_name
        ];
    }
    require $template->get_template_dir('tpl_record_company_select.php', DIR_WS_TEMPLATE, $current_page_base, 'sideboxes') . '/tpl_record_company_select.php';

    $title = BOX_HEADING_RECORD_COMPANY;
    $title_link = false;
    require $template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base, 'common') . '/' . $column_box_default;
}
