# Zerotoprod\SpapiRdt

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/spapi-rdt)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/spapi-rdt/test.yml?label=test)](https://github.com/zero-to-prod/spapi-rdt/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/spapi-rdt/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/spapi-rdt/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/spapi-rdt?color=blue)](https://packagist.org/packages/zero-to-prod/spapi-rdt/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/spapi-rdt.svg?color=purple)](https://packagist.org/packages/zero-to-prod/spapi-rdt/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/spapi-rdt?color=f28d1a)](https://packagist.org/packages/zero-to-prod/spapi-rdt)
[![License](https://img.shields.io/packagist/l/zero-to-prod/spapi-rdt?color=pink)](https://github.com/zero-to-prod/spapi-rdt/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/spapi-rdt.svg)](https://wakatime.com/badge/github/zero-to-prod/spapi-rdt)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/spapi-rdt?branch=main)](https://hitsofcode.com/github/zero-to-prod/spapi-rdt/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
    - [Orders Api](#orders)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

Create Restricted Data Tokens for Amazons Selling Partner API (SPAPI).

## Requirements

- PHP 7.1 or higher.

## Installation

Install `Zerotoprod\SpapiRdt` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/spapi-rdt
```

This will add the package to your project’s dependencies and create an autoloader entry for it.

## Usage

### Orders

Access the different endpoints for getting Restricted Data Tokens for the Orders API

```php

use Zerotoprod\SpapiRdt\SpapiRdt;

$response = SpapiRdt::from('access_token', 'targetApplication')
    ->orders()
    ->getOrders('123-1234567-1234567');

$restrictedDataToken = $response['response']['restrictedDataToken']
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/spapi-rdt/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
