<?php

use yii\db\Migration;

/**
 * Class m190711_090237_create_tbl_i_do_image
 */
class m190711_090237_create_tbl_i_do_image extends Migration
{
    private $table = 'tbl_i_do_image';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'i_do_id' => $this->integer(),
            'address' => $this->string(50)->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'fk_i_do_id_i_do_image_to_i_do_ad',
            $this->table,
            'i_do_id',
            'tbl_i_do_ad',
            'id',
            'CASCADE',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey('fk_i_do_id_i_do_image_to_i_do_ad',$this->table);
        $this->dropTable($this->table);
    }
}
