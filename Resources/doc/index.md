# Documentation

## Requirements

This bundle requires Symfony 2.4+

## Installation

### Step 1: Download EoSetefiBundle using composer

Add EoSetefiBundle in your composer.json:

```
{
    "require": {
        "eo/setefi-bundle": "dev-master"
    }
}
```

Now tell composer to download the bundle by running the command:
```
$ php composer.phar update eo/setefi-bundle
```
Composer will install the bundle to your project's vendor/eo directory.

### Step 2: Enable the bundle

Enable the bundle in the kernel:

```
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = parent::registerBundles();

    $bundles[] = new Eo\SetefiBundle\EoSetefiBundle();

    return $bundles;
}
```

### Step 3: Configure the EoSetefiBundle

Now that you have properly installed and enabled EoSetefiBundle, the next step is to configure the bundle to work with the specific needs of your application.

Add the following configuration to your config.yml file
```
# app/config/config.yml

# Default configuration for "EoSetefiBundle"
eo_setefi:
    endpoint:             'https://test.monetaonline.it/monetaweb/payment/2/xml'
    id:                   ~ # Required
    password:             ~ # Required

```

## Reference

### Test environment endpoint

```
https://test.monetaonline.it/monetaweb/payment/2/xml
```

### Production environment endpoint

```
https://www.monetaonline.it/monetaweb/payment/2/xml
```