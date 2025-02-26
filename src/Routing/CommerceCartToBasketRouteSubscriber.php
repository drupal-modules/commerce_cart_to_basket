<?php

namespace Drupal\commerce_cart_to_basket\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Drupal\Core\Routing\RouteBuildEvent;

/**
 * Alters the route collection to rename cart to basket.
 */
class CommerceCartToBasketRouteSubscriber extends RouteSubscriberBase implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    if ($route = $collection->get('commerce_cart.page')) {
      $route->setDefault('_title', 'Basket');
      $route->setDefault('_title_callback', NULL);
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    $events = [];
    $events[RouteBuildEvent::class][] = ['onAlterRoutes'];
    return $events;
  }

  /**
   * Alters existing routes.
   */
  public function onAlterRoutes(RouteBuildEvent $event) {
    $this->alterRoutes($event->getRouteCollection());
  }

}