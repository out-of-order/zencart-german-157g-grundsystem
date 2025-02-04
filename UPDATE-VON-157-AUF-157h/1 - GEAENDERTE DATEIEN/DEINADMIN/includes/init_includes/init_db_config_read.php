<?php
/**
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: init_db_config_read.php 2023-10-29 16:49:16Z webchills $
 */
use App\Models\Configuration;
use App\Models\ProjectVersion;
use App\Models\ProductTypeLayout;

if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

$config = new Configuration;
$authkey = $config->where('configuration_key', 'GLOBAL_AUTH_KEY')->first();

if ($authkey->configuration_value === '') {
    $hashable = hash('sha256', openssl_random_pseudo_bytes(64));
    $authkey->update(['configuration_value' => $hashable]);
}

$config->loadConfigSettings();

// Determine the DATABASE patch level
$projectVersion = new ProjectVersion;
$versionInfo = $projectVersion->where('project_version_key', 'Zen-Cart Database')->first();
define('PROJECT_DB_VERSION_MAJOR', $versionInfo['project_version_major']);
define('PROJECT_DB_VERSION_MINOR', $versionInfo['project_version_minor']);
define('PROJECT_DB_VERSION_PATCH1', $versionInfo['project_version_patch1']);
define('PROJECT_DB_VERSION_PATCH2', $versionInfo['project_version_patch2']);
define('PROJECT_DB_VERSION_PATCH1_SOURCE', $versionInfo['project_version_patch1_source']);
define('PROJECT_DB_VERSION_PATCH2_SOURCE', $versionInfo['project_version_patch2_source']);

$config = new ProductTypeLayout;
$config->loadConfigSettings();
