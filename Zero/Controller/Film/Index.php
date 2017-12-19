<?php
namespace Magestore\Zero\Controller\Film;
class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    protected $_objectManager;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
//        ,\Magento\Framework\ObjectManagerInterface $objectManager
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
//        $this->getResponse()->appendBody("Hello");
        //$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
//        $filmCollection = $this->_objectManager->create('\Magestore\Zero\Model\ResourceModel\Film\Collection');
//        var_dump($filmCollection);
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $filmCollection = $objectManager->get('\Magestore\Zero\Model\ResourceModel\Film\Collection');
//        $filmCollection = $objectManager->get('\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory');
//        $this->_initSelect();
//        var_dump($this->_initSelect());
//        echo $filmCollection->getSelect();
        echo $filmCollection->_initSelect();
//        return $this->resultPageFactory->create();


    }
    public function _initSelect()
    {

    }
}