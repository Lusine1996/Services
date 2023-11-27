<?php

namespace Drupal\example_service\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\example_service\ServiceExample;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ServiceController extends ControllerBase {

  /**
   * @var \Drupal\example_service\ServiceExample
   */
  protected $salutation ;
  /**
   * ServiceController constructor.
   *
   * @param \Drupal\example_service\ServiceExample $salutation
   */
  public function __construct(ServiceExample $salutation)
  {
    $this->salutation = $salutation;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container)
  {
    return new static(
      $container->get('example_service.salutation')
    );
  }

  public function getSalutation(){
    return [
      '#markup'=>$this->salutation->getRandomSalutation(),
    ];
  }
}

