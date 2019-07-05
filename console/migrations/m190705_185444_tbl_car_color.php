<?php

use yii\db\Migration;

/**
 * Class m190705_185444_tbl_car_color
 */
class m190705_185444_tbl_car_color extends Migration
{
    private $table = 'tbl_car_color';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->string(20)->notNull(),
        ],'ENGINE InnoDB');
    }

    public function down()
    {
        $this->dropTable($this->table);
    }
}
