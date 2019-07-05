<?php

use yii\db\Migration;

/**
 * Class m190705_110713_crate_tbl_car_brigade
 */
class m190705_110713_crate_tbl_car_brigade extends Migration
{
    private $table = 'tbl_car_brigade';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'model_id' => $this->integer(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'model_id_car_brigade_to_car_model',
            $this->table,
            'model_id',
            'tbl_car_model',
            'id',
            'CASCADE',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey('model_id_car_brigade_to_car_model',$this->table);
        $this->dropTable($this->table);
    }
}
