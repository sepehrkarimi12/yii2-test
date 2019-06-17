<?php

use yii\db\Migration;

/**
 * Class m190615_112653_rent_apartment
 */
class m190615_112653_rename_city_tbl extends Migration
{
//    private $table = 'tbl_rent_apartment';

    public function up()
    {
        $this->renameTable('tbl_iran_city','tbl_city');
//        $this->createTable($this->table,[
//            'id' => $this->primaryKey(),
//            'group_id' => $this->integer(),
//            'city_id' => $this->integer(),
//            'status' => $this->boolean()->notNull()
//        ],'ENGINE InnoDB');
//
//        $this->addForeignKey(
//            'fk_to_category',
//            $this->table,
//            'group_id',
//            'tbl_category',
//            'id',
//            'NO ACTION',
//            'NO ACTION'
//        );
//
//        $this->addForeignKey(
//            'fk_to_cities',
//            $this->table,
//            'group_id',
//            'tbl_iran_city',
//            'id',
//            'NO ACTION',
//            'NO ACTION'
//        );
    }

    public function down()
    {
        $this->renameTable('tbl_city','tbl_iran_city');
//        $this->dropForeignKey(
//            'fk_to_category',
//            $this->table
//        );
//
//        $this->dropForeignKey(
//            'fk_to_cities',
//            $this->table
//        );
//
//        $this->dropTable($this->table);
    }
}
