<?php

namespace Drupal\arabic_php\Controller;

use Drupal\Core\Controller\ControllerBase;
use Arphp\Glyphs;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Convert.
   *
   * @return string
   *   Return Hello string.
   */
  public function convert() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: convert') . Glyphs::utf8Glyphs('ةبرجت'),

    ];
  }

}

