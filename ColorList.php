<?php

namespace iproger\colorlist;

use yii\helpers\ArrayHelper;

class ColorList extends widgets\ColorList\AbstractColorList
{

    public function getColors()
    {
        $model = $this->getModel();

        $colors = $model::find()
            ->orderBy(['id' => SORT_ASC])
            ->all();

        return ArrayHelper::map($colors, 'id', 'name');
    }

    public function getModel()
    {
        return 'iproger\colorlist\models\Color';
    }

}
