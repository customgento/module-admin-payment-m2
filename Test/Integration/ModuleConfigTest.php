<?php

declare(strict_types=1);

namespace CustomGento\AdminPayment\Test\Integration;

use CustomGento\AdminPayment\Model\Config;
use Magento\Framework\App\DeploymentConfig;
use Magento\Framework\App\DeploymentConfig\Reader;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\App\ObjectManager as AppObjectManager;
use Magento\Framework\Component\ComponentRegistrar;
use Magento\Framework\Module\ModuleList;
use Magento\TestFramework\ObjectManager as TestFrameworkObjectManager;
use PHPUnit\Framework\TestCase;

/**
 * Tests to make sure that the module in general works as it should
 */
class ModuleConfigTest extends TestCase
{
    /**
     * @var string
     */
    private $subjectModuleName;

    /**
     * @var AppObjectManager
     */
    private $objectManager;

    /**
     * @var Config
     */
    private $model;

    protected function setUp(): void
    {
        $this->subjectModuleName = 'CustomGento_AdminPayment';
        $this->objectManager     = TestFrameworkObjectManager::getInstance();
        $this->model            = $this->objectManager->get(Config::class);
    }

    public function testTheModuleIsRegistered(): void
    {
        $registrar = new ComponentRegistrar();
        $this->assertArrayHasKey($this->subjectModuleName, $registrar->getPaths(ComponentRegistrar::MODULE));
    }

    public function testIsExtensionEnabledReturnsFalseByDefault(): void
    {
        $this->assertFalse($this->model->isExtensionEnabled());
    }

    /**
     * @magentoConfigFixture current_store payment/adminpayment/active 1
     */
    public function testIsExtensionEnabledReturnsTrue(): void
    {
        $this->assertTrue($this->model->isExtensionEnabled());
    }
}
