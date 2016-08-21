<?php

/**
 * @file
 * Contains \Drupal\kd_lightning_custom\Tests\KulturDesign.
 */

namespace Drupal\kd_lightning_custom\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the kd_lightning_custom module.
 */
class KulturDesignTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "kd_lightning_custom KulturDesign's controller functionality",
      'description' => 'Test Unit for module kd_lightning_custom and controller KulturDesign.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests kd_lightning_custom functionality.
   */
  public function testKulturDesign() {
    // Check that the basic functions of module kd_lightning_custom.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
