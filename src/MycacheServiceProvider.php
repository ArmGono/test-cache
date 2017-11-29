<?php
namespace Drupal\mycache;

use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\ServiceProviderBase;

// @note: You only need Reference, if you want to change service arguments.
use Symfony\Component\DependencyInjection\Reference;

/**
 * Modifies the language manager service.
 */
class MycacheServiceProvider extends ServiceProviderBase {

  /**
   * {@inheritdoc}
   */
  public function alter(ContainerBuilder $container) {
     $definition = $container->getDefinition('http_middleware.page_cache');
     $definition->setClass('Drupal\mycache\StackMiddleware\MyCache');
  }
}
