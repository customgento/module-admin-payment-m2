# Admin Payment for Magento 2

Admin Payment for Magento 2 adds an internal payment method in the admin area. This method will not be shown for customers in the checkout, but is only meant to be used for orders, which are created by an admin in the backend.

## Features
<li>Enable/disable payment method globally</li>
<li>Enable/disable payment per store view</li>

## Installation

* <code>composer require customgento/module-admin-payment-m2</code>
* <code>bin/magento module:enable CustomGento_AdminPayment</code>
* <code>bin/magento setup:upgrade</code>
* <code>bin/magento cache:flush</code>
* <code>bin/magento setup:di:compile</code>

## Copyright
&copy; 2020 - present CustomGento GmbH
