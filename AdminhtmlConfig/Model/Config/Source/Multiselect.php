<?php
/**
 * Copyright © Complete All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devsarrollo\AdminhtmlConfig\Model\Config\Source;

class Multiselect implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [['value' => 'select1', 'label' => __('select1')],['value' => 'select2', 'label' => __('select2')],['value' => 'select3', 'label' => __('select3')],['value' => 'select4', 'label' => __('select4')]];
    }

    public function toArray()
    {
        return ['select1' => __('select1'),'select2' => __('select2'),'select3' => __('select3'),'select4' => __('select4')];
    }
}
