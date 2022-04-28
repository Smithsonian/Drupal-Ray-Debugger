<?php
namespace Drupal\ray_debugger;

use Twig\Extension\AbstractExtension;
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
}

