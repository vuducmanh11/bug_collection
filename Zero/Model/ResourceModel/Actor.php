<?php
namespace Magestore\Zero\Model\ResourceModel;
/**
 * Class Actor
 * @package Magestore\Zero\Model\ResourceModel
 */
class Actor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    protected function _construct()     {
        $this->_init('actor','actor_id');
    }

}