<?php

declare(strict_types=1);

namespace CustomGento\AdminPayment\Model;

use Magento\Framework\App\Area;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\State;
use Magento\Framework\Exception\LocalizedException;
use Magento\Store\Model\ScopeInterface;

class Config
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @var State
     */
    private $state;

    public const XML_PATH_IS_ENABLED = 'payment/adminpayment/active';

    /**
     * @param ScopeConfigInterface $scopeConfig
     * @param State                $state
     */
    public function __construct(ScopeConfigInterface $scopeConfig, State $state)
    {
        $this->scopeConfig = $scopeConfig;
        $this->state       = $state;
    }

    /**
     * Check whether the admin payment method is enabled in the store configuration.
     *
     * @return bool
     */
    public function isExtensionEnabled(): bool
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_IS_ENABLED, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Check whether the current request is executed in the admin area.
     *
     * @return bool
     * @throws LocalizedException
     */
    public function isAdmin(): bool
    {
        return $this->state->getAreaCode() === Area::AREA_ADMINHTML;
    }
}
