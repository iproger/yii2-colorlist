# Colorlist widget for Yii 2

List of colors for input hint.

## Live Example
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
You can install this extension one of two ways.

#### 1. Using composer.json:
Put this code to composer.json.
```
"require": {
    "iproger/yii2-colorlist": "*"
},
"scripts": {
    "post-update-cmd": ["yii migrate --migrationPath=@vendor/iproger/yii2-colorlist/migrations"]
}
```
```
composer update
```

And confirm the migration.

#### 2. Execute below commands from application root directory:
```
composer install iproger/yii2-colorlist
```

```
yii migrate --migrationPath=@vendor/iproger/yii2-colorlist/migrations
```

And confirm the migration.

## Using

```
use iproger\colorlist\ColorList;

...

<?= ColorList::widget(['attributes' => ['id' => 'colorlist']]) ?>
```
