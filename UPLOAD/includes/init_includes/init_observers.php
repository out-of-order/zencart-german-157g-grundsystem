<?php
/**
 * auto-load and instantiate all /includes/classes/observers/auto.xxxxxxxxx.php classes
  *
 * This looks for any files in the DIR_WS_CLASSES/observers folder matching the naming convention of "auto.XXXXXX.php"
 * It then automatically "include"s those files.
 * And then it checks to see whether the XXXXXXXXX part of the filename matches a class name using "zcObserver" + the CamelCased XXXXXXXXX string.
 * ie: zcObserverTemplateFrameworkAbc would match auto.template_framework_abc.php
 * If the properly named class exists, then it instantiates that class using an object of the same name.  If the class inside the file is NOT properly named, it will NOT be instantiated, despite being loaded.
 *
 * The assumption is that the class is an observer class which properly extends the base class.
 * All normal observer class behavior applies.
 *
 * This fires at AutoLoader point 175, so all previously-processed system dependencies are in place.
 * If you need an observer class to fire at a much earlier point so it fires before other system processes, you'll need to add your own auto_loaders/config.yyyyy.php file with relevant rules to load those observers.
 * Zen Cart German Specific (158 code in 157)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: init_observers.php 2023-10-29 21:21:16Z webchills $
 */

use Zencart\FileSystem\FileSystem;

if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

$observersMain = (new FileSystem)->listFilesFromDirectory(DIR_WS_CLASSES . 'observers/', '~(^auto\..*\.php$)~');
$observersMain = collect($observersMain)->map(function ($item, $key) {
    return DIR_WS_CLASSES . 'observers/' . $item;
})->toArray();
$context = (new FileSystem)->isAdminDir(__DIR__) ? 'admin' : 'catalog';
$observersPlugins = [];
foreach ($installedPlugins as $plugin) {
    $path = DIR_FS_CATALOG . 'zc_plugins/' . $plugin['unique_key'] . '/' . $plugin['version'] . '/' . $context . '/' . DIR_WS_CLASSES . 'observers/';
    $observersPlugin = (new FileSystem)->listFilesFromDirectory($path, '~(^auto\..*\.php$)~');
    $observersPlugin = collect($observersPlugin)->map(function ($item, $key) use ($path) {
        return $path . $item;
    })->toArray();
    $observersPlugins = array_merge($observersPlugins, $observersPlugin);
}
$observers = array_merge($observersPlugins, $observersMain);

// instantiate observer classes which follow the naming convention "zcObserver" + CamelCasedVersionOfXxxxxxFromFileName
foreach ($observers as $observer) {
    if (!file_exists($observer)) {
        continue;
    }
    include($observer);
    $objectName = preg_replace('~(^.*/auto\.|\.php$)~', '', $observer);
    $objectName = 'zcObserver' . base::camelize($objectName, true);
    if (class_exists($objectName)) {
        $$objectName = new $objectName();
    } else {
        error_log(
            'ERROR: Observer class ' . $objectName . ' could not be instantiated despite file ' . $observer . ' being found. Please follow the correct naming convention for the class name inside the file.'
        );
    }
}
