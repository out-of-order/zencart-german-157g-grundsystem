<?php
/*
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: datepicker.php 2023-10-21 18:41:50Z webchills $
 */

/**
 * converts mm-dd-yy to MM-DD-YYYY
 * @return string
 */
function zen_datepicker_format_full()
{
  return str_replace("YY", "YYYY", strtoupper(DATE_FORMAT_DATE_PICKER));
}

/**
 * converts mm-dd-yy to m-d-Y
 * @return string
 */
function zen_datepicker_format_fordate()
{
  $date = DATE_FORMAT_DATE_PICKER;
  $date = str_replace('mm', 'm', $date);
  $date = str_replace('dd', 'd', $date);
  $date = str_replace('yy', 'Y', $date);
  return $date;
}

/**
 * converts mm-dd-yy to %m-%d-%Y
 * @return string
 */
function zen_datepicker_format_forsql()
{
  $date = DATE_FORMAT_DATE_PICKER;
  $date = str_replace('mm', '%m', $date);
  $date = str_replace('dd', '%d', $date);
  $date = str_replace('yy', '%Y', $date);
  return $date;
}

/**
 * Convert Date to the correct format
 * @param string $raw_date Date value
 * @param string $past_date is the value to set the date if it is in the past or empty
 * @return string
 */
function zen_prepare_date($raw_date, $past_date = '')
{
    if (empty($raw_date)) {
        return $past_date;
    }
  $date = zen_db_prepare_input($raw_date);
  if (DATE_FORMAT_DATE_PICKER != 'yy-mm-dd' && !empty($date)) {
    $local_fmt = zen_datepicker_format_fordate();
    $dt = DateTime::createFromFormat($local_fmt, $date);
    $date = 'null';
    if (!empty($dt)) {
      $date = $dt->format('Y-m-d');
    }
  }
  if (!empty($past_date)) {
    $date = (date('Y-m-d') < $date) ? $date : $past_date;
  }
  return $date;
}
