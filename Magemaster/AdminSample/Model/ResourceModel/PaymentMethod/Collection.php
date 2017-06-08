<?php
namespace Magemaster\AdminSample\Model\ResourceModel\PaymentMethod;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Magemaster\AdminSample\Model\PaymentMethod','Magemaster\AdminSample\Model\ResourceModel\PaymentMethod');
    }
}
