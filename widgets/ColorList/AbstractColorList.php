<?php

namespace iproger\colorlist\widgets\ColorList;

abstract class AbstractColorList extends \yii\base\Widget
{

    public $attributes = [];

    final public function run()
    {
        return $this->render('datalist', [
            'colors'     => $this->getColors(),
            'attributes' => $this->attributes,
        ]);
    }

    abstract public function getColors();
}
