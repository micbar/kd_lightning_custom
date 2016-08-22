<?php

/**
 * @file
 * Contains \Drupal\kd_lightning_custom\Controller\KulturDesign.
 */

namespace Drupal\kd_lightning_custom\Controller;

use Drupal\Core\Controller\ControllerBase;
use cebe\markdown\GithubMarkdown;

/**
 * Class KulturDesign.
 *
 * @package Drupal\kd_lightning_custom\Controller
 */
class KulturDesign extends ControllerBase {
  /**
   * Welcome.
   *
   * @return string
   *   Return Hello string.
   */
  public function welcome() {
    $raw_text = file_get_contents($this->moduleHandler()->getModule('kd_lightning_custom')->getPath() . '/kd_lightning_custom_landing_content.md');
    return [
      '#type' => 'markup',
      '#markup' => (new GithubMarkdown())->parse($raw_text),
    ];
  }

}
