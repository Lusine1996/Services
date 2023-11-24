<?php

namespace Drupal\example_service;

use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Session\AccountProxyInterface;

/**
 * A simple example of services and DI
 */
class ServiceDependency
{
  use StringTranslationTrait;

  /**
   * The current user service.
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  private $currentUser;
  private $salutations = ["Hello", "Hi"];


 /**
  * Part of Dependency Injection
  */
  public function __construct(AccountProxyInterface $current_user)
  {
    $this->currentUser = $current_user;
  }


  /**
   * Returns a hello message
   */
  public function getSalutation(){
   $salutation = $this->salutations[array_rand($this->salutations)];

   $username = $this->currentUser->getDisplayName();

    return $this->t('@salutation, @username!', ['@salutation' => $salutation, '@username' => $username]);


  }

}
