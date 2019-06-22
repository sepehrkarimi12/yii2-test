<?php

use yii\db\Migration;

/**
 * Class m190621_094644_create_tbl_category_ad_type
 */
class m190621_094644_create_tbl_category_ad_type extends Migration
{
    private $table = 'tbl_category_ad_type';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'cat_id' => $this->integer()->notNull(),
            'ad_type_id' => $this->integer()->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'cat_id_category_ad_type_to_category_tbl',
            $this->table,
            'cat_id',
            'tbl_category',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'ad_type_id_category_ad_type_to_ad_type_tbl',
            $this->table,
            'ad_type_id',
            'tbl_ad_type',
            'id',
            'NO ACTION',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey('cat_id_category_ad_type_to_category_tbl',$this->table);
        $this->dropForeignKey('ad_type_id_category_ad_type_to_ad_type_tbl',$this->table);
        $this->dropTable($this->table);
    }
}
