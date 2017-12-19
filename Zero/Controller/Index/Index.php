<?php
namespace Magestore\Zero\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magestore\Zero\Model\Film;

class Index extends Action
{

    protected $_modelFilm;
    public function __construct(Context $context)
    {
//        $this->_modelFilm = $modelFilm;
        parent::__construct($context);

    }
    public function execute()
    {
//        die('123');
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $collection = $objectManager->create('Magestore\Zero\Model\Film')->getCollection();
        die(123);
        $filmModel = $this->_modelFilm->create();
        $item = $filmModel->load(1);
        var_dump($item->getData());
        $filmCollection = $filmModel->getCollection();
        var_dump($filmCollection->getData());
    }
}