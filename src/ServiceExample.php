<?php

namespace Drupal\example_service;

use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Prepares the hello message
 */
class ServiceExample {
  private $salutation = ["Hello","Hi"];

  public function getRandomSalutation(){
    return $this->salutation[array_rand($this->salutation)];
  }
}



