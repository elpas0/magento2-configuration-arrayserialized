# Magento 2:  Working with ArraySerialized

## 1. Description

Magento 2 module to illustrate work with ArraySerialized backend model. 
How to create system configuration field, set default value, use serialized value in blocks / models.

## 2. How to install

### Install via composer (recommend)

Run the following command in Magento 2 root folder:

```
composer require elpas0/magento2-configuration-arrayserialized
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:clean
```

### Install ready-to-paste package

- Download package from [magento2_configuration_arrayserialized.zip](https://nwdthemes.com/files/magento2_configuration_arrayserialized.zip)
- Unzip it
- Upload it to your magento root ( package/app >> magento_root/app )
- Run the following command in Magento 2 root folder:
```
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
php bin/magento cache:clean
```
- Logout and Login again to avoid "Access denied" 404 error in system configuration.


### Contributors

NWDthemes team

### License

[Open Source License](https://raw.githubusercontent.com/elpas0/magento2-configuration-arrayserialized/master/LICENSE.txt)

### Quick Links

- [In-depth details](https://nwdthemes.com/2018/06/20/magento-2-working-with-arrayserialized-backend-model/)
- [Get Support](https://github.com/elpas0/magento2-configuration-arrayserialized/issues)
- [Contribute on Github](https://github.com/elpas0/magento2-configuration-arrayserialized/)
- [License](https://raw.githubusercontent.com/elpas0/magento2-configuration-arrayserialized/master/LICENSE.txt)