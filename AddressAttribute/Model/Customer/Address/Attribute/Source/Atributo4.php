<?php
/**
 * Copyright © Devsarrollo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devsarrollo\AddressAttribute\Model\Customer\Address\Attribute\Source;

class Atributo4 extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
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
                ['value' => '1', 'label' => __('opcion1')],
                ['value' => '2', 'label' => __('opcion2')],
                ['value' => '3', 'label' => __('opcion3')]
            ];
        }
        return $this->_options;
    }
}

