<?php
/*
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: search_box.php 2023-10-23 20:46:12Z webchills $
 */
?>
<?php echo zen_draw_form('searchForm', basename($PHP_SELF, '.php'), '', 'get', 'class="form-horizontal"', true); ?>
<div class="form-group">
  <?php echo zen_draw_label(HEADING_TITLE_SEARCH_DETAIL, 'search', 'class="control-label col-sm-3"'); ?>
  <div class="col-sm-9">
    <div class="input-group">
      <?php echo zen_draw_input_field('search', '', 'class="form-control" id="search"', false, 'search'); ?>
      <span class="input-group-btn">
        <button type="submit" class="btn btn-info"><i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
      </span>
    </div>
  </div>
</div>
<?php
if (isset($_GET['search']) && zen_not_null($_GET['search'])) {
  $keywords = zen_db_prepare_input($_GET['search']);
  ?>
  <div class="form-group">
    <div class="col-sm-3">
      <p class="control-label"><?php echo TEXT_INFO_SEARCH_DETAIL_FILTER; ?></p>
    </div>
    <div class="col-sm-9">
      <div class="input-group">
        <span class="form-control" style="border:none; -webkit-box-shadow: none"><?php echo zen_output_string_protected($keywords); ?></span>
        <span class="input-group-btn">
          <a href="<?php echo zen_href_link(basename($PHP_SELF, '.php')); ?>" class="btn btn-default" role="button" title="<?php echo IMAGE_RESET; ?>"><i class="fa-solid fa-xmark fa-lg"></i></a>
        </span>
      </div>
    </div>
  </div>
    <?php
    if (file_exists($searchBoxJs)) {
    ?>
        <div class="row">
            <div class="form-horizontal col-xs-6">
                <div class="form-group" id="searchRestrictIds">
                    <label for="restrictIDs" class="col-xs-11 control-label"><?= TEXT_INFO_SEARCH_FILTER_RESTRICT_IDS; ?></label>
                    <?= zen_draw_checkbox_field('restrictIDs', '', (!empty($_GET['restrictIDs']) && $_GET['restrictIDs'] === 'on'), '', ' id="restrictIDs" class="col-xs-1"'); ?>
                </div>
            </div>
            <div class="form-horizontal col-xs-6">
                <div class="form-group" id="searchTermRepopulate">
                    <label for="repopulateSearch" class="col-xs-11 control-label"><?= TEXT_INFO_SEARCH_FILTER_REPOPULATE; ?></label>
                    <?= zen_draw_checkbox_field('repopulateSearch', '', (!empty($_GET['repopulateSearch']) && $_GET['repopulateSearch'] === 'on'), '', ' id="repopulateSearch" class="col-xs-1"'); ?>
                </div>
            </div>
        </div>
        <?php
    }
}
$extra_form_group = '';
$zco_notifier->notify('NOTIFY_ADMIN_SEARCH_BOX_FORM_GROUP', '', $extra_form_group);
echo $extra_form_group;
?>
<?php echo '</form>'; ?>
