<?php

namespace Drupal\hello_user\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloUserController class.
 */
class HelloUserController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function content() {
    $hello_user_block = \Drupal::service('plugin.manager.block')->createInstance('hello_user', []);
    return $hello_user_block->build();
  }

}

