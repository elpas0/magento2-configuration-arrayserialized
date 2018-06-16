<?php

namespace Nwdthemes\ArraySerialized\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    /**
     * Config factory
     * @var \Magento\Config\Model\Config\Factory
     */
    private $configFactory;

    /**
     * Init
     *
     * @param \Magento\Config\Model\Config\Factory $configFactory
     * @param \Magento\Framework\App\State $state
     */
    public function __construct(
        \Magento\Config\Model\Config\Factory $configFactory,
        \Magento\Framework\App\State $state
    )
    {
        $this->configFactory = $configFactory;
        $state->setAreaCode('adminhtml');
    }

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $index = time();
        $configData = [
            'section' => 'nwdarrayserialized',
            'website' => null,
            'store'   => null,
            'groups'  => [
                'general' => [
                    'fields' => [
                        'responsiveItems' => [
                            'value' => array(
                                $index.'_0' => array("breakpoint" => "0", "items" => "1"),
                                $index.'_1' => array("breakpoint" => "480", "items" => "2"),
                                $index.'_2' => array("breakpoint" => "768", "items" => "3"),
                                $index.'_3' => array("breakpoint" => "1024", "items" => "5"),
                            ),
                        ],
                    ],
                ],
            ],
        ];

        /** @var \Magento\Config\Model\Config $configModel */
        $configModel = $this->configFactory->create(['data' => $configData]);
        $configModel->save();
    }

}
