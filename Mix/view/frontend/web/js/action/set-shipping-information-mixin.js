define([
    'jquery',
    'mage/utils/wrapper',
    'Magento_Checkout/js/model/quote'
], function ($, wrapper, quote) {
    'use strict';

    return function (setShippingInformationAction) {

        return wrapper.wrap(setShippingInformationAction, function (originalAction) {
            var shippingAddress = quote.shippingAddress();
            if (shippingAddress['lastname'] == 'AK') {
                shippingAddress['lastname']= 'AMSAVENI KUMARAGURUPARAN';
            }
            // shippingAddress['customAttributes']['custom_data'] = "Custom Value";
            console.log(shippingAddress);
            return originalAction();
        });
    };
});