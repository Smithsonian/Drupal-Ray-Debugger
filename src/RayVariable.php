<?php

namespace Drupal\ray_debugger;

class RayVariable {

  public function __call($name, $arguments) {
    if (!count($arguments)) {
      ray()->$name();
    }

    ray()->$name($arguments);
  }

}
