define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'pagoejemplo',
                component: 'Devsarrollo_PaymentCreate/js/view/payment/method-renderer/pagoejemplo-method'
            }
        );
        return Component.extend({});
    }
);