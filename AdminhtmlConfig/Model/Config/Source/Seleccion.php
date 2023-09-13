<?php
/**
 * Copyright © Complete All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devsarrollo\AdminhtmlConfig\Model\Config\Source;

class Seleccion implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [['value' => 'opcion1', 'label' => __('opcion1')],['value' => 'opcion2', 'label' => __('opcion2')],['value' => 'opcion3', 'label' => __('opcion3')]];
    }

    public function toArray()
    {
        return ['opcion1' => __('opcion1'),'opcion2' => __('opcion2'),'opcion3' => __('opcion3')];
    }
}

