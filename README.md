# Colorlist widget for Yii 2
List of colors for input hint.

[![Latest Stable Version](https://poser.pugx.org/iproger/yii2-colorlist/v/stable)](https://packagist.org/packages/iproger/yii2-colorlist)
[![Total Downloads](https://poser.pugx.org/iproger/yii2-colorlist/downloads)](https://packagist.org/packages/iproger/yii2-colorlist)
[![Code Climate](https://codeclimate.com/github/iproger/yii2-colorlist/badges/gpa.svg)](https://codeclimate.com/github/iproger/yii2-colorlist)
[![License](https://poser.pugx.org/iproger/yii2-colorlist/license)](https://packagist.org/packages/iproger/yii2-colorlist)

## Live example
https://jsfiddle.net/iproger/o17tyym5/2/

```
<input type="text" list="colorlist">

<datalist id="colorlist">
	<option value="Red">
	<option value="White">
	<option value="Blue">
	<option value="Black">
</datalist>
```

## Install
For installation you need have a Composer (https://getcomposer.org/).

```
composer install iproger/yii2-colorlist
```

```
"require": {
    "iproger/yii2-colorlist": "*"
}
```

### Execute below command from application root directory:
```
php yii migrate --migrationPath=@vendor/iproger/yii2-colorlist/src/migrations
```
And confirm the migration.

## Using
```
use iproger\colorlist\ColorList;

...

<?= ColorList::widget(['attributes' => ['id' => 'colorlist']]) ?>
```
