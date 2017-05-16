<?php

namespace iproger\yii2\colorlist\widgets\ColorList;

/**
 * Class AbstractColorList
 *
 * @package iproger\yii2\colorlist\widgets\ColorList
 */
abstract class AbstractColorList extends \yii\base\Widget
{
    /**
     * @var array
     */
    public $attributes = [];

    /**
     * {@inheritdoc}
     */
    final public function run()
    {
        $viewPath = $this->getViewFilePath();
        $colors = $this->getColors();

        return $this->render($viewPath, [
            'colors' => $colors,
            'attributes' => $this->attributes,
        ]);
    }

    /**
     * @return string
     */
    public function getViewFilePath()
    {
        return '@vendor/iproger/yii2-colorlist/src/widgets/ColorList/views/datalist';
    }

    /**
     * @return array
     */
    abstract public function getColors();
}
