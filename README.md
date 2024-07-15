# automation-test-with-submodules-php-sdk<a id="automation-test-with-submodules-php-sdk"></a>

SDKs (no submodules) to test automation workflows.

[![Packagist](https://img.shields.io/badge/Packagist-v1.0.1-blue)](https://packagist.org/packages/konfig/automation-test-submodule-php)

## Table of Contents<a id="table-of-contents"></a>

<!-- toc -->

- [Installation & Usage](#installation--usage)
  * [Requirements](#requirements)
  * [Composer](#composer)
  * [Manual Installation](#manual-installation)
- [Getting Started](#getting-started)
- [Reference](#reference)
  * [`automationtestwithsubmodules.greetings.hello`](#automationtestwithsubmodulesgreetingshello)

<!-- tocstop -->

## Installation & Usage<a id="installation--usage"></a>

### Requirements<a id="requirements"></a>

This library requires `PHP ^8.0`

### Composer<a id="composer"></a>

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/konfig-dev/automation-test-submodule-php.git"
    }
  ],
  "require": {
    "konfig/automation-test-submodule-php": "1.0.1"
  }
}
```

Then run `composer install`

### Manual Installation<a id="manual-installation"></a>

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/automation-test-with-submodules-php-sdk/vendor/autoload.php');
```

## Getting Started<a id="getting-started"></a>

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$automationtestwithsubmodules = new \AutomationTestWithSubmodules\Client(
);

$result = $automationtestwithsubmodules->greetings->hello();
```
## Reference<a id="reference"></a>


### `automationtestwithsubmodules.greetings.hello`<a id="automationtestwithsubmodulesgreetingshello"></a>

Get a simple greeting!!!


#### 🛠️ Usage<a id="🛠️-usage"></a>

```php
$result = $automationtestwithsubmodules->greetings->hello();
```


#### 🔄 Return<a id="🔄-return"></a>

[**HelloResponse**](./lib/Model/HelloResponse.php)

#### 🌐 Endpoint<a id="🌐-endpoint"></a>

`/hello` `GET`

[🔙 **Back to Table of Contents**](#table-of-contents)

---


## Author<a id="author"></a>
This PHP package is automatically generated by [Konfig](https://konfigthis.com)
