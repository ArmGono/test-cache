<?php

namespace Drupal\mycache\StackMiddleware;

use Symfony\Component\HttpFoundation\Request;
use Drupal\page_cache\StackMiddleware\PageCache;
/**
 * Extending PageCache
 */
class MyCache extends PageCache {

  /**
   * Gets the page cache ID for this request.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   A request object.
   *
   * @return string
   *   The cache ID for this request.
   */
  protected function getCacheId(Request $request) {
    $cookie = '';
    if(isset($_COOKIE['blind_theme'])){
      $cookie = $_COOKIE['blind_theme'];
    }
    $cid_parts = [
      $cookie,
      $request->getSchemeAndHttpHost() . $request->getRequestUri(),
      $request->getRequestFormat(),
    ];
    return implode(':', $cid_parts);
  }

}
