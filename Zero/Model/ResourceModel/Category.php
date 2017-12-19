<?php
namespace Magestore\Zero\Model\ResourceModel;
/**
 * Class Category
 * @package Magestore\Zero\Model\ResourceModel
 */
class Category extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    protected function _construct()     {
        $this->_init('category','category_id');
    }

}