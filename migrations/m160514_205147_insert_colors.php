<?php

use yii\db\Migration;


/**
 * Handles the insrting for table `color`.
 */
class m160514_205147_insert_colors extends Migration
{

    private $tableName = 'color';

    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->insert($this->tableName, ['name' => 'Red']);
        $this->insert($this->tableName, ['name' => 'White']);
        $this->insert($this->tableName, ['name' => 'Blue']);
        $this->insert($this->tableName, ['name' => 'Black']);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->truncateTable($this->tableName);
    }

}
