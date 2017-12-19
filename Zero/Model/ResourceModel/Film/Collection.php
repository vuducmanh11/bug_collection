<?php
namespace Magestore\Zero\Model\ResourceModel\Film;
/**
 * Class Collection
 * @package Magestore\Zero\Model\ResourceModel\Film
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {
    protected $_idFieldName = 'film_id';
    public function __construct()
    {
//        die('123');
        parent::_construct();
        $this->_init('Magestore\Zero\Model\Film','Magestore\Zero\Model\ResourceModel\Film');
    }
    public function _initSelect()
    {
//        die('123');
//        echo $this->getMainTable();
//        $this->getSelect()->group(['main_table'=> $this->getMainTable()]);
//        echo parent::_initSelect();
//        var_dump(parent::getSelect());
//        $this->getSelect()->join

//        $this->getSelect()->join(
//            ['film_category'=>$this->getTable('film_category')],
//            "main_table.film_id = film_category.film_id"
//        );
//        $this->getSelect()->join(
//            ['category'=>$this->getTable('category')],
//            "film_category.category_id = category.category_id"
//        );
//        echo $this->getSelect();
        var_dump($this->getSelect());

    }
}
