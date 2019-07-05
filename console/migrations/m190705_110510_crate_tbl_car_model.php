<?php

use yii\db\Migration;

/**
 * Class m190705_110510_crate_tbl_car_model
 */
class m190705_110510_crate_tbl_car_model extends Migration
{
    private $table = 'tbl_car_model';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'brand_id' => $this->integer(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'brand_id_car_model_to_car_brand',
            $this->table,
            'brand_id',
            'tbl_car_brand',
            'id',
            'CASCADE',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey('brand_id_car_model_to_car_brand',$this->table);
        $this->dropTable($this->table);
    }
}
