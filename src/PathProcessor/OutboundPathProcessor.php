<?php
namespace Drupal\commerce_cart_to_basket\PathProcessor;

use Drupal\Core\PathProcessor\OutboundPathProcessorInterface;
use Drupal\Core\Render\BubbleableMetadata;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class OutboundPathProcessor
 */
class OutboundPathProcessor implements OutboundPathProcessorInterface {
  /**
   * {@inheritdoc}
   */
  public function processOutbound($path, &$options = array(), Request $request = NULL, BubbleableMetadata $bubbleable_metadata = NULL) {
    // Change module-generated links from /cart to /basket.
    if ($path === '/cart' || $path === '/cart/my') {
      $path = 'basket';
    }
    return $path;
  }
}
