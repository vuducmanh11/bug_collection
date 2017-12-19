<?php
namespace Magestore\Zero\Model\ResourceModel;
/**
 * Class Film
 * @package Magestore\Zero\Model\ResourceModel
 */
class Film extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    protected function _construct()     {

        $this->_init('film','film_id');

    }

}