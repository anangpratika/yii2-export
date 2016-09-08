yii2-export
===========
Export your data using dataProvider just like gridView with widgets

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist anangpratika/yii2-export "*"
```

or add

```
"anangpratika/yii2-export": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \anangpratika\export\ExportMenu::widget(); ?>```