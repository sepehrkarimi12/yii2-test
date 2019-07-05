<?php

use yii\db\Migration;

/**
 * Class m190705_110452_crate_tbl_car_brand
 */
class m190705_110452_crate_tbl_car_brand extends Migration
{
    private $table = 'tbl_car_brand';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'title' => $this->string(70)->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'fk_car_brand_parent_id_to_car_brand',
            'tbl_car_brand',
            'parent_id',
            'tbl_car_brand',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

    }

    public function down()
    {
        $this->dropForeignKey('fk_car_brand_parent_id_to_car_brand', 'tbl_car_brand');
        $this->dropTable($this->table);
    }
}
