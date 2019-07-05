<?php

use yii\db\Migration;

/**
 * Class m190705_185459_tbl_car_created_year
 */
class m190705_185459_tbl_car_created_year extends Migration
{
    private $table = 'tbl_car_created_year';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->string(15)->notNull(),
        ],'ENGINE InnoDB');
    }

    public function down()
    {
        $this->dropTable($this->table);
    }
}
