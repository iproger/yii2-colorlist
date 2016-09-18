<?php

namespace iproger\yii2\colorlist\migrations;

use yii\db\Migration;


/**
 * Handles the insrting for table `color`.
 */
class m160514_205147_insert_colors extends Migration
{

    private $tableName = '{{%color}}';

    /**
     * @inheritdoc
     */
    public function up()
    {
        $columns = ['name'];
        $rows    = [
            [
                'Red',
            ],
            [
                'White',
            ],
            [
                'Blue',
            ],
            [
                'Black',
            ],
            [
                'Mixed',
            ],
            [
                'Green',
            ],
            [
                'Pink',
            ],
            [
                'Brown',
            ],
            [
                'Coffee',
            ],
            [
                'Gold',
            ],
            [
                'Olive',
            ],
            [
                'Rose',
            ],
            [
                'Beige',
            ],
            [
                'Cyan',
            ],
            [
                'Aqua',
            ],
        ];

        $this->batchInsert($this->tableName, $columns, $rows);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->truncateTable($this->tableName);
    }

}
