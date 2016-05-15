<?php

namespace iproger\colorlist\widgets\ColorList;

abstract class AbstractColorList extends \yii\base\Widget
{

    public $attributes = [];

    final public function run()
    {
        $viewPath = $this->getViewFilePath();
        $colors = $this->getColors();
        
        return $this->render($viewPath, [
            'colors'     => $colors,
            'attributes' => $this->attributes,
        ]);
    }
    
    public function getViewFilePath()
    {
        return '@vendor/iproger/yii2-colorlist/widgets/ColorList/views/datalist';
    }

    abstract public function getColors();
}
