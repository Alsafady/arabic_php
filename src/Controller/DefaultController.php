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

    $Arabic = new Glyphs;

    $text = 'بسم الله الرحمن الرحيم';
    $text = $Arabic->utf8Glyphs($text);



    return [
      '#type' => 'markup',
      '#markup' => $text,

    ];



  }

}

