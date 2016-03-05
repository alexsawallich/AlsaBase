<?php
namespace AlsaBase\Form;

use Zend\Form\Form;
use Zend\EventManager\EventManagerAwareTrait;

class EventManagerAwareForm extends Form
{
    use EventManagerAwareTrait;
}
