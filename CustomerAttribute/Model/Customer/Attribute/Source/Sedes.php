<?php
/**
 * Copyright © Devsarrollo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devsarrollo\CustomerAttribute\Model\Customer\Attribute\Source;

class Sedes extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [
                ['value' => '1', 'label' => __('1')],
                ['value' => '2', 'label' => __('2')],
                ['value' => '3', 'label' => __('3')],
                ['value' => '4', 'label' => __('4')],
                ['value' => '5', 'label' => __('5')],
                ['value' => '6', 'label' => __('6')]
            ];
        }
        return $this->_options;
    }
}

