<?php
namespace AlsaBase\InputFilter;

use Zend\InputFilter\InputFilter;
use Zend\EventManager\EventManagerAwareTrait;

class EventManagerAwareInputFilter extends InputFilter
{
    use EventManagerAwareTrait;
}
