<?php
/**
 * Copyright © Complete All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devsarrollo\WidgetBasic\Model\Config\Source;

class Widget implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {
        return [
            ['value' => 'opcion1', 'label' => __('opcion1')],
            ['value' => 'opcion2', 'label' => __('opcion2')],
            ['value' => 'opcion3', 'label' => __('opcion3')],
            ['value' => 'opcion4', 'label' => __('opcion4')],
            ['value' => 'opcion5', 'label' => __('opcion5')],
            ['value' => 'opcion6', 'label' => __('opcion6')]
        ];
    }

    public function toArray()
    {
        return [
            'opcion1' => __('opcion1'),
            'opcion2' => __('opcion2'),
            'opcion3' => __('opcion3'),
            'opcion4' => __('opcion4'),
            'opcion5' => __('opcion5'),
            'opcion6' => __('opcion6')
        ];
    }
}

