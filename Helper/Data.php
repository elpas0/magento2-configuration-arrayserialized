<?php

namespace Nwdthemes\ArraySerialized\Helper;

use Magento\Framework\App\ObjectManager;

/**
 * ArraySerialized helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Get config value
     * @param $configPath
     * @param null $store
     * @return mixed
     */
    public function getConfigValue($configPath, $store = null)
    {
        return $this->scopeConfig->getValue(
            $configPath,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    /**
     * Get serialized config value
     * temporarily solution to get unserialized config value
     * should be deprecated in 2.3.x
     *
     * @param $configPath
     * @param null $store
     * @return mixed
     */
    public function getSerializedConfigValue($configPath, $store = null)
    {
        $value = $this->getConfigValue($configPath, $store);

        if (empty($value)) return false;

        if ($this->isSerialized($value)) {
            $unserializer = ObjectManager::getInstance()->get(\Magento\Framework\Unserialize\Unserialize::class);
        } else {
            $unserializer = ObjectManager::getInstance()->get(\Magento\Framework\Serialize\Serializer\Json::class);
        }

        return $unserializer->unserialize($value);
    }

    /**
     * Check if value is a serialized string
     *
     * @param string $value
     * @return boolean
     */
    private function isSerialized($value)
    {
        return (boolean) preg_match('/^((s|i|d|b|a|O|C):|N;)/', $value);
    }

}