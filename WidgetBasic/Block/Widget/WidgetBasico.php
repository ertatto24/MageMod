<?php
/**
 * Copyright © Devsarrollo All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Devsarrollo\WidgetBasic\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class WidgetBasico extends Template implements BlockInterface
{

    protected $_template = "widget/widgetbasico.phtml";

}

