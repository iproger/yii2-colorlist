<?php

namespace iproger\yii2\colorlist;

use yii\helpers\ArrayHelper;

class ColorList extends widgets\ColorList\AbstractColorList
{

    public function getColors()
    {
        $model = $this->getModel();

        $colors = $model::find()
            ->orderBy(['id' => SORT_ASC])
            ->all();

        return ArrayHelper::map($colors, 'name', 'id');
    }

    public function getModel()
    {
        return 'iproger\yii2\colorlist\models\Color';
    }

}
