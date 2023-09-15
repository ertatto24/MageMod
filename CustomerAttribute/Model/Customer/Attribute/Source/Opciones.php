<?php
/**
 * Copyright © Devsarrollo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devsarrollo\CustomerAttribute\Model\Customer\Attribute\Source;

class Opciones extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
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
                ['value' => (string) 'opcion1', 'label' => __('opcion1')],
                ['value' => (string) 'opcion2', 'label' => __('opcion2')],
                ['value' => (string) 'opcion3', 'label' => __('opcion3')],
                ['value' => (string) 'opcion4', 'label' => __('opcion4')]
            ];
        }
        return $this->_options;
    }
}

