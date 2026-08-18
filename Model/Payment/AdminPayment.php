<?php

declare(strict_types=1);

namespace CustomGento\AdminPayment\Model\Payment;

use Magento\Payment\Model\Method\AbstractMethod;

class AdminPayment extends AbstractMethod
{
    public const CODE = 'adminpayment';

    /**
     * @var string
     */
    protected $_code = self::CODE;

    /**
     * @var bool
     */
    protected $_isOffline = true;

    /**
     * @var bool
     */
    protected $_canUseCheckout = false;
}
