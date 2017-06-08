<?php


namespace Magemaster\AdminSample\Controller\Adminhtml\Settings;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
