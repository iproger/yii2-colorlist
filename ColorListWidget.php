<?php

namespace iproger\colorlist;

use yii\base\Widget;
use yii\helpers\ArrayHelper;
//use backend\models\Color;

class ColorWidget extends Widget
{

    public $attributes = [];

    public function run()
    {
        $colors = array_flip($this->getColorsList());

        return $this->render('datalist', [
            'colors' => $colors,
            'attributes' => $this->attributes,
        ]);
    }

    public function getColorsList()
    {
        return ArrayHelper::map(Color::find()->orderBy(['id' => SORT_ASC])->all(), 'id', 'name');
    }

}
