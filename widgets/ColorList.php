<?php

namespace iproger\colorlist\widgets;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
//use backend\models\Color;

class ColorList extends Widget
{

    public $attributes = [];

    public function run()
    {
        $colors = array_flip($this->getColors());

        return $this->render('datalist', [
            'colors' => $colors,
            'attributes' => $this->attributes,
        ]);
    }

    public function getColors()
    {
        return ArrayHelper::map(Color::find()->orderBy(['id' => SORT_ASC])->all(), 'id', 'name');
    }

}
