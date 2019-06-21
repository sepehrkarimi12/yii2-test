<?php

use yii\db\Migration;

/**
 * Class m190621_064900_create_tbl_room_count
 */
class m190621_064900_create_tbl_room_count extends Migration
{
    private $table = 'tbl_room_count';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'count' => $this->string(15)->notNull(),
        ],'ENGINE InnoDB');
    }

    public function down()
    {
        $this->dropTable($this->table);
    }
}
