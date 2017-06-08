<?php
namespace Magemaster\AdminSample\Model\ResourceModel;
class PaymentMethod extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('adminsample_payment_methods','id');
    }
}
