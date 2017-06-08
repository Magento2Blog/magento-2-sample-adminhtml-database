<?php
namespace Magemaster\AdminSample\Controller\Adminhtml\Settings;

class Set extends \Magento\Backend\App\Action
{
	protected $paymentmethodFactory;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magemaster\AdminSample\Model\PaymentMethodFactory $paymentmethodFactory
	)
	{
		$this->paymentmethodFactory = $paymentmethodFactory;
		parent::__construct($context);
	}

	public function execute()
	{


	try {
	    	$paymentmethod = $this->paymentmethodFactory->create();
		$paymentmethod->setData('method','test_payment')->save();
	}catch(Exception $e) {
		die($e->getMessage());
	}

		die("db entry created");
	}
}
