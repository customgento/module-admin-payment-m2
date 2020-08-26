<?php

declare(strict_types=1);

namespace CustomGento\AdminPayment\Model\Payment;

use Magento\Payment\Model\Method\AbstractMethod;

class AdminPayment extends AbstractMethod
{
    public const CODE = 'adminpayment';

    protected $_code = self::CODE;

    protected $_isOffline = true;

    protected $_canUseCheckout = false;

    protected $_canUseInternal = true;
}
