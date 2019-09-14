<?php

namespace VendorName\ModuleName\Controller\Page;


/**
 * Class HelloWorld
 * @package VendorName\ModuleName\Controller\Page
 */
class HelloWorld extends \Magento\Framework\App\Action\Action
{

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
        echo 'Hello World';
    }
}