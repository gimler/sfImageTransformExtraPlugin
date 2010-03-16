<?php
/**
 * This file is part of the sfImageTransformExtraPlugin unit tests package.
 * (c) 2010 Christian Schaefer <caefer@ical.ly>>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    sfImageTransformExtraPluginUnitTests
 * @author     Christian Schaefer <caefer@ical.ly>
 * @version    SVN: $Id: sfRawFileCache.class.php 63 2010-03-09 04:34:28Z caefer $
 */

/** central bootstrap for unit tests */
require_once dirname(__FILE__).'/../../../bootstrap/unit.php';
/** PHPUnit Framework */
require_once 'PHPUnit/Framework.php';

/**
 * PHPUnit test for sfImageRoundedCornersGD transformation
 *
 * @package    sfImageTransformExtraPluginUnitTests
 * @subpackage transformation
 * @author     Christian Schaefer <caefer@ical.ly>
 */
class sfImageRoundedCornersGDTest extends PHPUnit_Framework_TestCase
{
  public function test__construct() 
  {
    $transformation = new sfImageRoundedCornersGD(null, false); 
    $this->assertType('sfImageRoundedCornersGD', $transformation);
  }
}