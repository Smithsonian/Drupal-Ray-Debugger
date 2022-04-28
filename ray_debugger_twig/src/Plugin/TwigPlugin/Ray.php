<?php

namespace Drupal\ray_debugger_twig\Plugin\TwigPlugin;

use Drupal\twig_extender\Annotation\TwigPlugin;
use Drupal\twig_extender\Plugin\Twig\TwigPluginBase;

/**
 * Send variables to the Ray Debugger.
 *
 * @TwigPlugin(
 *   id = "twig_extender_ray_debug",
 *   label = @Translation("Ray Debugging Function"),
 *   type = "function",
 *   name = "ray",
 *   function = "ray"
 * )
 */
class Ray extends TwigPluginBase {

  /**
   * @param mixed $data
   */
  public static function ray($data): void
  {
    ray($data)->label('twig');
  }
}
