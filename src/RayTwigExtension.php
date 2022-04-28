<?php
namespace Drupal\ray_debugger;

use Twig\Extension\AbstractExtension;

use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * Custom twig Ray Debugger.
 * )
 */
class RayTwigExtension extends AbstractExtension {

  // Public Methods
  // =========================================================================

  /**
   * @inheritdoc
   */
  public function getFunctions() {

    return [
      new TwigFunction('ray', function ($params, $name = null, $arguments = null) {
        if(!$name) {
          ray($params);
        } else {
          if (!($arguments)) {
            ray()->$name();
          } else {
            ray($params)->$name($arguments);
          }
        }
      }),
    ];
  }

//  public function call($name, $arguments) {
//    if (!count($arguments)) {
//      return ray()->$name();
//    }
//
//    return ray()->$name($arguments);
//  }

//  public function getTokenParsers() {
//    $parser = new RayTokenParser();
//    ksm($parser);
//    return [
//      new RayTokenParser(),
//    ];
//  }

  /**
   * @inheritdoc
   */
  public function getName() {
    return 'Ray';
  }



  /**
   * @inheritdoc
   */
//  public function getFilters() {
//    return [
//      new TwigFilter('ray', function ($params) {
//        return ray_filter($params);
//      }),
//    ];
//  }

//  public function ray($params) {
//    ray($params);
//  }





}
