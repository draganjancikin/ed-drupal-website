<?php

namespace Drupal\hello_user\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello User' Block.
 *
 * @Block(
 *   id = "hello_user",
 *   admin_label = @Translation("Hello User block"),
 *   category = @Translation("Hello User"),
 * )
 */
class HelloUserBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->createHelloMessage(),
    ];
  }

  private function createHelloMessage() {
    $current_username = \Drupal::currentUser()->getAccountName();
    $message = $this->t(sprintf("Zdravo %s!", $current_username));
    return $message;
  }

}
