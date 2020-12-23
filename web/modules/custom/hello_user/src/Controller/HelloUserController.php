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
    $current_user = \Drupal::currentUser()->getAccountName();
    $build = [
      '#type' => 'markup',
      '#markup' => $this->t('Zdravo ') . $current_user . '!',
    ];
    return [];
  }

}
