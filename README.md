# Magento 2.3.3 Sidebar Widget Module

The module is a directory that contains `blocks, controllers, models, helper`, etc - that are related to a specific business feature. In Magento 2, modules live in `app/code` directory of a Magento installation, with this format: `app/code/<Vendor>/<ModuleName>`. 

In our case this is `app/code/Encomagestore/CustomWidget`.

Our module has name `Encomagestore_CustomWidget`. It works on Magento 2 and displays three random simple products with an image, a name and a price in the left additional sidebar of each page of the Magento 2 Luma theme site.


## Encomagestore_CustomWidget developement steps

- Step 1: Create a directory for the module like above format.
- Step 2: Declare module by using configuration file `module.xml`.
- Step 3: Declare widget by using configuration file `widget.xml`.
- Step 4: Register module by `registration.php`.
- Step 5: Enable the module with 
    `bin/magento module:enable Encomagestore_CustomWidget` and 
    `php bin/magento setup:upgrade` 
    console commands.
- Step 6: Create a widget temlate file `samplewidget.phtml`.
- Step 7: Create a widget block class `SampleWidget.php`.
- Step 8: Create frontend layout with `default.xml` and styling with `random.css`.
- Step 9: Flush cache.


If you have followed all above steps, you will see the title 'Random Products' in left additional sidebar and three random simple products from the site store with  an image, a name and a price in each of them.