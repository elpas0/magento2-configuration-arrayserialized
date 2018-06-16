<?php

namespace Nwdthemes\ArraySerialized\Block;

use Magento\Framework\View\Element\Template;

class Sample extends Template
{
    /**
     * @var \Nwdthemes\ArraySerialized\Helper\Data
     */
    protected $helper;

    /**
     * @param Template\Context $context
     * @param \Nwdthemes\ArraySerialized\Helper\Data $helper
     * @param array $data
     */
    public function __construct(Template\Context $context, \Nwdthemes\ArraySerialized\Helper\Data $helper, array $data = [])
    {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * Return string with json configuration
     *
     * @return string
     */
    public function getArraySerialized()
    {
        $responsiveItems = $this->helper->getSerializedConfigValue('nwdarrayserialized/general/responsiveItems');
        //process value according to your needs...
        return json_encode($responsiveItems);
    }
}
