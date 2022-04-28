<?php

namespace Drupal\ray_debugger\Plugin\TwigPlugin;

use Drupal\twig_extender\Plugin\Twig\TwigPluginBase;

/**
 * The plugin for check authenticated user.
 *
 * @TwigPlugin(
 *   id = "twig_extender_ray",
 *   label = @Translation("Ray Debugging Function"),
 *   type = "function",
 *   name = "ray",
 *   function = "ray"
 * )
 */
class NmnhRay extends TwigPluginBase {

  /**
   * @param mixed $data
   */
  public static function ray($data): void
  {
    ray($data)->label('twig');
  }
}
