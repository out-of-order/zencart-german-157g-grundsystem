<?php
/**
 * Page Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_ssl_check_default.php 2016-02-29 13:49:16Z webchills $
 */
?>
<div class="centerColumn" id="sslCheck">    

<h1 id="sslCheckHeading"><?php echo HEADING_TITLE; ?></h1>

<div id="sslCheckMainContent" class="content"><?php echo TEXT_INFORMATION; ?></div>

<h2 id="sslCheckSubHeading"><?php echo BOX_INFORMATION_HEADING; ?></h2>
<div id="sslCheckSecondaryContent" class="content"><?php echo BOX_INFORMATION; ?></div>

<p  id="sslCheckContent2" class="content"><?php echo TEXT_INFORMATION_2; ?></p>
<p  id="sslCheckContent3" class="content"><?php echo TEXT_INFORMATION_3; ?></p>
<p  id="sslCheckContent4" class="content"><?php echo TEXT_INFORMATION_4; ?></p>
<p  id="sslCheckContent5" class="content"><?php echo TEXT_INFORMATION_5; ?></p>

<div class="buttonRow forward"><?php echo '<a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">' . zen_image_button(BUTTON_IMAGE_CONTINUE, BUTTON_CONTINUE_ALT) . '</a>'; ?></div>
</div>