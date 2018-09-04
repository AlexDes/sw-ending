Ending
============================

This package was made for me, but if you find this useful, you can use it.
It helping me to write beautiful endings wihtout any `а(ов)`, `ь(ей)` and etc.

INSTALLATION
------------

### Install via Composer

Just add this line to your `composer.json`

~~~
"swods/ending": ">=1.0.0"
~~~

or run

~~~
composer require swods/ending
~~~

HOW TO USE
------------

`1st param` - number of items  
`2nd param` - Wors that will be used, exp: `['один полис', 'два полиса', 'пять полисов']`, `['одно яблоко', 'два яблока', 'пять яблок']` and etc.  

```php
echo get(3, ['Полис', 'Полиса', 'Полисов']);
```