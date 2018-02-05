# GroupDocs.Viewer Cloud SDK for PHP
This repository contains GroupDocs.Viewer Cloud SDK for PHP source code. This SDK allows you to work with GroupDocs.Viewer Cloud REST APIs in your PHP applications.

## Dependencies
- PHP 5.5 or later

## Authorization
To use SDK you need AppSID and AppKey authorization keys. You can your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).  

## Installation & Usage
### Composer

The package is available at [Packagist](https://packagist.org/) and it can be installed via [Composer](http://getcomposer.org/) by executing following command:
```
composer require groupdocs/viewer-sdk-php
``` 

Or you can install SDK via [Composer](http://getcomposer.org/) directly from this repository, add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/groupdocs-viewer-cloud/groupdocs-viewer-cloud-php.git"
    }
  ],
  "require": {
    "groupdocs/viewer-sdk-php": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files, then run `composer install` in the root directory and include `autoload.php`:

```php
require_once('/path/to/groupdocs-viewer-cloud-php/vendor/autoload.php');
```

## Tests

To run the unit tests set your AppSID and AppKey in [json.config](tests/GroupDocs/Viewer/config.json) and execute following commands:

```
composer install
./vendor/bin/phpunit
```

## Getting Started
Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).
$configuration = new GroupDocs\Viewer\Configuration();
$configuration->setAppSid("XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX");
$configuration->setAppKey("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

$viewerApi = new GroupDocs\Viewer\ViewerApi($configuration); 

try {
    $request = new GroupDocs\Viewer\Model\Requests\GetSupportedFileFormatsRequest();
    $response = $viewerApi->getSupportedFileFormats($request);

    foreach ($response->getFormats() as $key => $format) {
        echo $format->getFileFormat() . " - " .  $format->getExtension(), "\n";
    }
} catch (Exception $e) {
    echo  "Something went wrong: ",  $e->getMessage(), "\n";
    PHP_EOL;
}

?>
```

## Licensing
GroupDocs.Viewer for Cloud SDK for PHP is licensed under [MIT License](LICENSE).

## Resources
+ [**Website**](https://www.groupdocs.cloud)
+ [**Product Home**](https://products.groupdocs.cloud/viewer/cloud)
+ [**Documentation**](https://docs.groupdocs.cloud/display/viewercloud/Home)
+ [**Free Support Forum**](https://forum.groupdocs.cloud/c/viewer)
+ [**Blog**](https://blog.groupdocs.cloud/category/groupdocs-viewer-cloud-product-family)

## Contact Us
Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.groupdocs.cloud/c/viewer).
