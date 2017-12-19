<?php
namespace Magestore\Zero\Controller\Page;
use Magestore\Zero\Model\ResourceModel\Film\Collection;
class View extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
    )
    {
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        //Get Object Manager Instance
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();

        //Load product by product id

//        $product = $objectManager->create('Magento\Catalog\Model\Product')->load(1);
//        $messages = $objectManager->create('\Magestore\Zero\Model\ResourceModel\Film\Collection')->
//        addFieldToFilter('film_id', $this->getRequest()->getParam('title'));
//        var_dump($messages);
        $result = $this->resultJsonFactory->create();
        $data = ["fucken well shit"];
        return $result->setData($data);
    }

}