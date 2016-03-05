<?php
namespace AlsaBase\Db;

use Zend\Db\Sql\Select;

class AbstractTableGateway extends EventManagerAwareTableGateway
{
    /**
     * Fetches all records from the table.
     * 
     * @return Ambigous <NULL, \Zend\Db\ResultSet\ResultSetInterface>
     */
    public function fetchRowset()
    {
        return $this->selectWith($this->getSelect());
    }
    
    /**
     * Returns a generous Select-Statement-Object.
     * 
     * @return \Zend\Db\Sql\Select
     */
    public function getSelect()
    {
        $select = new Select($this->table);
        $this->getEventManager()->trigger('select', $select);
        return $select;
    }
}
