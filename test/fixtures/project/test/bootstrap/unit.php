<?php
/**
 * This file is part of the sfImageTransformExtraPlugin fixture project package.
 * (c) 2010 Christian Schaefer <caefer@ical.ly>>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @ignore
 * @package    sfImageTransformExtraPluginFixtureProject
 * @author     Christian Schaefer <caefer@ical.ly>
 * @version    SVN: $Id: unit.php 29957 2010-06-24 08:24:23Z caefer $
 */


$_test_dir = realpath(dirname(__FILE__).'/..');

// configuration
require_once dirname(__FILE__).'/../../config/ProjectConfiguration.class.php';
$configuration = ProjectConfiguration::hasActive() ? ProjectConfiguration::getActive() : new ProjectConfiguration(realpath($_test_dir.'/..'));

// autoloader
$autoload = sfSimpleAutoload::getInstance(sfConfig::get('sf_cache_dir').'/project_autoload.cache');
$autoload->loadConfiguration(sfFinder::type('file')->name('autoload.yml')->in(array(
  sfConfig::get('sf_symfony_lib_dir').'/config/config',
  sfConfig::get('sf_config_dir'),
)));
$autoload->register();

// lime
include $configuration->getSymfonyLibDir().'/vendor/lime/lime.php';
