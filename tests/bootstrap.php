<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

/**
 * Load the composer's autoload file so that we don't have to require files
 * manually in our code. Also load helper classes for tests.
 */
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/HttpCallBackCatcher.php';
require __DIR__.'/TestHelper.php';


/**
 * Set Configuration parameters for test execution
 */
RaasLib\Configuration::$environment = RaasLib\Environments::SANDBOX;
