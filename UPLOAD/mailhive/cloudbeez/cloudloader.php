<?php

// add version information for deployment
class mailbeez_installer_dummy
{
    public $version;
    function __construct()
    {
        $this->version = 4.84; // float value
    }
}
$version = new mailbeez_installer_dummy();

// Version
define('CLOUDBEEZ_MAILBEEZ_INSTALLER_VERSION', $version->version);