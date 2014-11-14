#OLIF Module: Regions

Módulo para listar países y provincias


## Usage

```php
$dev->getControllerModule('regions', 'ControllerCountries', 'countries');
$dev->getControllerModule('regions', 'ControllerProvinces', 'provinces');

...

$dev->countries->assignlistInput("countries", [ID_COUNTRY], "ORDER BY NAME_ES ASC");
$dev->provinces->assignlistInput("provinces", [ID_PROV], [ID_COUNTRY]);

```

## Authors

[Alberto Vara](https://github.com/avara1986)

##License

Olif-module-regions is released under the [MIT License](http://opensource.org/licenses/MIT).
