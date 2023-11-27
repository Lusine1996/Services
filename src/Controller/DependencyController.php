<?php

namespace Drupal\example_service\Controller;

use Drupal\Core\Controller\ControllerBase;


class DependencyController extends ControllerBase {
  public function greet() {
    $service = \Drupal::service('example_service.salutation');
    return [
      '#markup'=> $service->getRandomSalutation()
     ];
  }
}
