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
    $current_user = \Drupal::currentUser()->getAccountName();
    return [
      '#markup' => $this->t('Zdravo ') . $current_user . '!',
    ];
  }

}
