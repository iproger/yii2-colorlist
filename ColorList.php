<?php

namespace iproger\colorlist;

use yii\helpers\ArrayHelper;

class ColorList extends widgets\ColorList\AbstractColorList
{

    public function getColors()
    {
        return ArrayHelper::map(Color::find()->orderBy(['id' => SORT_ASC])->all(), 'id', 'name');
    }

}
