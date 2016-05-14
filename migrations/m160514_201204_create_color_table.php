<?php

use yii\db\Migration;

/**
 * Handles the creation for table `color`.
 */
class m160514_201204_create_color_table extends Migration
{

    private $tableName = 'color';

    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id'   => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable($this->tableName);
    }

}
