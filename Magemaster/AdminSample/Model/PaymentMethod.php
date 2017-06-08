<?php
namespace Magemaster\AdminSample\Model;
class PaymentMethod extends \Magento\Framework\Model\AbstractModel implements PaymentMethodInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'adminsample_payment_methods';

    protected function _construct()
    {
        $this->_init('Magemaster\AdminSample\Model\ResourceModel\PaymentMethod');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
