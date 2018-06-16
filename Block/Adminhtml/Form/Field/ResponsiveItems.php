<?php

namespace Nwdthemes\ArraySerialized\Block\Adminhtml\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

/**
 * Class ResponsiveItems
 */
class ResponsiveItems extends AbstractFieldArray
{
    /**
     * {@inheritdoc}
     */
    protected function _prepareToRender()
    {
        $this->addColumn('breakpoint', ['label' => __('Breakpoint ( in px )'), 'class' => 'required-entry']);
        $this->addColumn('items', ['label' => __('Items'), 'class' => 'required-entry']);
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add Breakpoint');
    }
}