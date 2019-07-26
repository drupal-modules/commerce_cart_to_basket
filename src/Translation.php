<?php

namespace Drupal\commerce_cart_to_basket;

use Drupal\Core\StringTranslation\Translator\StaticTranslation;

/**
 * Provides string overrides.
 */
class Translation extends StaticTranslation {

  /**
   * {@inheritdoc}
   */
  protected function getLanguage($langcode) {
    $translations = [
      '' =>
        [
          '%title added to <a href="!cart-url">your cart</a>.' => '%title added to <a href="!cart-url">your basket</a>.',
          '%title removed from your cart.' => '%title removed from your basket.',
          'Your shopping cart has been updated.' => 'Your shopping basket has been updated.',
          'Your shopping cart is empty.' => 'Your shopping basket is empty.',
          'Item successfully added to your cart' => 'Item successfully added to your basket',
          'Shopping cart contents' => 'Shopping basket contents',
          'You must specify a valid quantity to add to the cart.' => 'You must specify a valid quantity to add to the basket.',
          'Add to cart' => 'Add to basket',
          'Update cart' => 'Update basket',
          'View cart' => 'View basket',
          'Shopping cart' => 'Shopping basket',
          'Shopping cart (1 item)' => 'Shopping basket (1 item)',
          'Shopping cart (@count items)' => 'Shopping basket (@count items)',
          /* admin items follow */
          'Cart summary' => 'Basket summary',
          'Cart actions' => 'Basket actions',
          'Add to Cart form' => 'Add to Basket form',
          'Display an Add to Cart form for the product.' => 'Display an Add to Basket form for the product.',
          'Display a textfield quantity widget on the add to cart form.' => 'Display a textfield quantity widget on the add to basket form.',
          'Attempt to combine like products on the same line item in the cart.' => 'Attempt to combine like products on the same line item in the basket.',
          'The line item type, referenced product, and data from fields exposed on the Add to Cart form must all match to combine.' => 'The line item type, referenced product, and data from fields exposed on the Add to Basket form must all match to combine.',
          'Cart contents View' => 'Basket contents View',
          'Specify the View to use in the cart contents pane.' => 'Specify the View to use in the basket contents pane.',
        ],
    ];
    return $translations;
  }
}