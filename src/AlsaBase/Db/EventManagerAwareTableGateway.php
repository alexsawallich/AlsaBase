<?php
namespace AlsaBase\Db;

use Zend\Db\TableGateway\TableGateway;
use Zend\EventManager\EventManagerAwareTrait;

class EventManagerAwareTableGateway extends TableGateway
{
    use EventManagerAwareTrait;
}
