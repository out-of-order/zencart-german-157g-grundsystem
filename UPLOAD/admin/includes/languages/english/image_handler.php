<?php
define('IH_VERSION_VERSION', 'Version');
define('IH_VERSION_NOT_FOUND', 'No Image Handler information found.');

define('IH_VIEW_CONFIGURATION', 'View Image Handler Configuration');
define('IH_CLEAR_CACHE', 'Clear image cache');
define('IH_CACHE_CLEARED', 'Image cache cleared.');

define('IH_SOURCE_TYPE', 'Source imagetype');
define('IH_SOURCE_IMAGE', 'Source image');
define('IH_SMALL_IMAGE', 'Default image');
define('IH_MEDIUM_IMAGE', 'Products image');

define('IH_ADD_NEW_IMAGE', 'Add a new image');
define('IH_NEW_NAME_DISCARD_IMAGES', 'Use new name, discard additional images');
define('IH_NEW_NAME_COPY_IMAGES', 'Use new name, copy additional images');
define('IH_KEEP_NAME', 'Keep old name and additional images');
define('IH_DELETE_FROM_DB_ONLY', 'Delete image reference from database only');

define('IH_HEADING_TITLE', 'Image Handler<sup>5</sup>');
define('IH_HEADING_TITLE_PRODUCT_SELECT','Please select a product to manage the images.');

define('TABLE_HEADING_PHOTO_NAME', 'Image name');
define('TABLE_HEADING_BASE_SIZE', 'Base image');
define('TABLE_HEADING_SMALL_SIZE','Small image');
define('TABLE_HEADING_MEDIUM_SIZE', 'Medium image');
define('TABLE_HEADING_LARGE_SIZE','Large image');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_FILETYPE', 'File Type');

define('TEXT_PRODUCT_INFO', 'Product');
define('TEXT_PRODUCTS_MODEL', 'Model');
define('TEXT_PRICE', 'Price');
define('TEXT_IMAGE_BASE_DIR', 'Image Directory');
define('TEXT_NO_IMAGE_DEFINED', 'This product\'s image is not currently defined.'); //- When the product's configured image is an empty string.
define('TEXT_NO_PRODUCT_IMAGES', 'No matches were found for this product\'s image (%s).');  //- %s is filled in with the product's non-empty image name.
define('TEXT_PRODUCT_IMAGE_NOT_SUPPORTED', 'The product\'s image (%s) extension is not supported by Image Handler.');   //- %s is filled in with the product's non-empty image name.
define('TEXT_CLICK_TO_ENLARGE', 'Click to enlarge');

define('TEXT_INFO_IMAGE_INFO', 'Image information');
define('TEXT_INFO_NAME', 'Name');
define('TEXT_INFO_FILE_TYPE', 'File type');
define('TEXT_INFO_EDIT_PHOTO', 'Edit <em>main</em> image');
define('TEXT_INFO_EDIT_ADDL_PHOTO', 'Edit <em>additional</em> image');
define('TEXT_INFO_NEW_PHOTO', 'New <em>main</em> image');
define('TEXT_INFO_NEW_ADDL_PHOTO', 'New <em>additional</em> image');
define('TEXT_INFO_IMAGE_BASE_NAME', 'Image base name (optional)');
define('TEXT_INFO_AUTOMATIC_FROM_DEFAULT', ' Automatic (from original image name)');
define('TEXT_INFO_MAIN_DIR', 'Main directory');
define('TEXT_INFO_BASE_DIR', 'Main image directory');
define('TEXT_INFO_NEW_DIR', 'Select or define a new directory for the images.');
define('TEXT_INFO_IMAGE_DIR', 'Image directory');
define('TEXT_INFO_OR', 'or');
define('TEXT_INFO_AUTOMATIC', 'Automatic');
define('TEXT_INFO_IMAGE_SUFFIX', 'Image suffix (optional)');
define('TEXT_INFO_USE_AUTO_SUFFIX','Enter a specific suffix or leave empty for automatic suffix generation.');
define('TEXT_INFO_DEFAULT_IMAGE', 'Base image file');
define('TEXT_INFO_DEFAULT_IMAGE_HELP', 'A base image is required. That image is assumed to be the smallest when <em>different</em> medium- or large-images are uploaded.');
define('TEXT_INFO_IMAGE_NOT_SUPPORTED', 'This product\'s image type is not supported by Image Handler.  No additional actions can be performed.');
define('TEXT_INFO_CLICK_TO_ADD_MAIN', 'Click the &quot;add image&quot; button to add a new <em>main</em> image for this product');
define('TEXT_INFO_CLICK_TO_ADD_ADDL', 'Click the &quot;add image&quot; button to add a new <em>additional</em> image for this product');
define('TEXT_INFO_CONFIRM_DELETE', 'Confirm <em>%s</em> image delete');
define('TEXT_MAIN', 'main');
define('TEXT_ADDITIONAL', 'additional');
define('TEXT_INFO_CONFIRM_DELETE_SURE', 'Are you sure you want to delete all sizes of this image?');
define('TEXT_INFO_SELECT_ACTION', 'Select action');

define('TEXT_NOT_NEEDED', 'Not needed');    //-Displayed for the 'Medium'-sized additional images
define('TEXT_TABLE_CAPTION_INSTRUCTIONS', "<b>Note:</b> A product's additional images are <em>automatically</em> created in their 'small' and 'large' sizes <em>only</em> and show '" . TEXT_NOT_NEEDED . "' for their <b>Medium image</b>.  If your storefront uses other image-sizes for these (or the product's main) images, those images are created (and cached) 'on-demand'.");
define('TEXT_MSG_FILE_NOT_FOUND', 'This file does not exist.');
define('TEXT_MSG_ERROR_RETRIEVING_IMAGESIZE', 'Could not determine the image size');
define('TEXT_MSG_AUTO_BASE_ERROR', 'Automatic base select without default file.');
define('TEXT_MSG_INVALID_BASE_ERROR', 'Invalid image base name, or unable to find the base image.');
define('TEXT_MSG_AUTO_REPLACE',  'Automatically replacing bad characters in base name, new name: ');
define('TEXT_MSG_INVALID_SUFFIX', 'Invalid image suffix.');
define('TEXT_MSG_IMAGE_TYPES_NOT_SAME_ERROR', 'Image types are not the same; image <b>not</b> uploaded.');
define('TEXT_MSG_DEFAULT_REQUIRED_FOR_RESIZE', 'A default image is required for automatic resizing.');
define('TEXT_MSG_NO_DEFAULT', 'No <b>base image file</b> was uploaded.  Please try again.');
define('TEXT_MSG_NO_DEFAULT_ON_NAME_CHANGE', 'You must supply a &quot;base&quot; image when updating the main image and changing its name.');
define('TEXT_MSG_INVALID_EXTENSION', 'The uploaded &quot;%1$s&quot; image file\'s extension (%2$s) is not supported.  The extension must be one of (%3$s).');
define('TEXT_BASE', 'base');
define('TEXT_MEDIUM', 'medium');
define('TEXT_LARGE', 'large');
define('TEXT_MSG_FILE_EXISTS', 'File exists (%s)! Please change either the base name or suffix.');
define('TEXT_MSG_INVALID_SQL', 'Unable to complete SQL query.');
define('TEXT_MSG_NOCREATE_IMAGE_DIR', 'Unable to create image directory.');
define('TEXT_MSG_NOCREATE_MEDIUM_IMAGE_DIR', 'Unable to create medium image directory.');
define('TEXT_MSG_NOCREATE_LARGE_IMAGE_DIR', 'Unable to create large image directory.');
define('TEXT_MSG_NOPERMS_IMAGE_DIR', 'Unable to set the permissions of the image directory.');
define('TEXT_MSG_NOPERMS_MEDIUM_IMAGE_DIR', 'Unable to set the permissions of the medium image directory.');
define('TEXT_MSG_NOPERMS_LARGE_IMAGE_DIR', 'Unable to set the permissions of the large image directory.');
define('TEXT_MSG_NAME_TOO_LONG_ERROR', 'The image file &quot;%1$s&quot; is too long to be saved in the database.  Choose a name that is %2$u characters or fewer.');
define('TEXT_MSG_NO_SUFFIXES_FOUND', 'Could not find an unused additional-image suffix in the range _01 to _99.');
define('TEXT_MSG_NO_FILE_UPLOADED', 'No <b>Base image file</b> was selected; please try again.');

define('TEXT_MSG_NOUPLOAD_DEFAULT', 'Unable to upload default image file.');
define('TEXT_MSG_NORESIZE', 'Unable to resize image');
define('TEXT_MSG_NOCOPY_LARGE', 'Unable to copy large image file.');
define('TEXT_MSG_NOCOPY_MEDIUM', 'Unable to copy medium image file.');
define('TEXT_MSG_NOCOPY_DEFAULT', 'Unable to copy default image file.');
define('TEXT_MSG_NOPERMS_LARGE', 'Unable to set permissions of large image file.');
define('TEXT_MSG_NOPERMS_MEDIUM', 'Unable to set permissions of medium image file.');
define('TEXT_MSG_NOPERMS_DEFAULT', 'Unable to set permissions of default image file.');
define('TEXT_MSG_IMAGE_SAVED', 'Image successfully saved.');
define('TEXT_MSG_LARGE_DELETED', 'The large image (%s) was successfully deleted.');
define('TEXT_MSG_NO_DELETE_LARGE', 'Unable to delete the large image (%s), check permissions.');
define('TEXT_MSG_MEDIUM_DELETED', 'The medium image (%s) was successfully deleted.');
define('TEXT_MSG_NO_DELETE_MEDIUM', 'Unable to delete the medium image (%s), check permissions.');
define('TEXT_MSG_DEFAULT_DELETED', 'The base image (%s) was successfully deleted.');
define('TEXT_MSG_NO_DELETE_DEFAULT', 'Unable to delete the base image (%s), check permissions.');
define('TEXT_MSG_NO_DEFAULT_FILE_FOUND', 'The base image (%s) was not found for a delete action.');

define('TEXT_MSG_IMAGE_DELETED', 'The image (%s) was successfully deleted.');
define('TEXT_MSG_IMAGE_NOT_FOUND', 'The image (%s) was not found.');
define('TEXT_MSG_IMAGE_NOT_DELETED', 'Unable to delete the image (%s).  Check permissions.');

define('TEXT_MSG_IMPORT_SUCCESS', 'Import successful: ');
define('TEXT_MSG_IMPORT_FAILURE', 'Import failure: ');

// image manager
define('IH_IMAGE_NEW_FILE', 'Click to add a new image to this product');
define('IH_IMAGE_EDIT', 'Click to edit this image');
define('TEXT_MEDIUM_FILE_IMAGE', 'Medium image file (optional)');
define('TEXT_LARGE_FILE_IMAGE', 'Large image file (optional)');

// ih menu
define('IH_MENU_MANAGER', 'Image Manager');
define('IH_MENU_ADMIN', 'Admin Tools');
define('IH_MENU_ABOUT', 'Help');
define('IH_MENU_PREVIEW', 'Preview');
define('IH_RESIZE_INSTRUCTIONS_HEADING', 'Image Handler<sup>5</sup> is%s currently resizing images.');
define('IH_RESIZE_NOT', ' not');    //- Replaces %s above if IH Resizing is disabled; empty string, otherwise.
define('IH_RESIZE_INSTRUCTIONS', 'To %s image-resizing, click the button below.');
define('IH_RESIZE_DISABLE', 'disable');
define('IH_RESIZE_ENABLE', 'enable');
define('IH_BUTTON_RESIZE_TOGGLE', 'Toggle Setting');
