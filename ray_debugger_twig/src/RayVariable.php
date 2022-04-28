<?php

namespace Drupal\ray_debugger_twig;

class RayVariable {

  public function __call($name, $arguments) {
    if (!count($arguments)) {
      ray()->$name();
    }

    ray()->$name($arguments);
  }

}
