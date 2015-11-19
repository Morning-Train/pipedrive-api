# PHP Pipedrive Api


[![Software License](https://img.shields.io/badge/licence-%20GNU%20General%20Public%20License%20v3.0-brightgreen.svg)](LICENSE.md)
![](https://img.shields.io/badge/version-1.0.0-brightgreen.svg)

A complete native php wrapper for the [Pipedrive API](https://developers.pipedrive.com/v1)

## Install

Via Composer

``` bash
$ composer require morningtrain/pipedrive-api
```

## Usage

``` php
require 'vendor/autoload.php';
use MorningTrain\PipedriveApi\PipedriveApi;

define('PIPEDRIVE_API_KEY', 'YOUR-PIPEDRIVE-API-KEY');

$pipedrive_client = new PipedriveApi(PIPEDRIVE_API_KEY);

$result = $pipedrive_client->updateActivityType(1, [
	'name' => 'type_1',
	'icon_key' => 'task',
	'color' => 'red',
	'order_nr' => 1
    ]);
```

## Security

If you discover any security related issues, please email mail@morningtrain.dk instead of using the issue tracker.

## Credits

- [morningtrain.dk](http://morningtrain.dk/)
- [Mohamed Bouallegue](https://github.com/MohamedBoualleg)

## License

 GNU General Public License v3.0. Please see [License File](LICENSE.md) for more information.
