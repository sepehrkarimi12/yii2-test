<?php

use yii\db\Migration;

/**
 * Class m190709_160116_create_tbl_mobile_and_tablet_other
 */
class m190709_160116_create_tbl_mobile_and_tablet_other extends Migration
{
    private $table = 'tbl_mobile_and_tablet_other';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'ad_type_id' => $this->integer()->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_mobile_and_tablet_other_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'ad_type_id_mobile_and_tablet_other_to_ad_type_tbl',
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
        $this->dropForeignKey(
            'ad_type_id_mobile_and_tablet_other_to_ad_type_tbl',
            $this->table
        );

        $this->dropForeignKey(
            'ad_id_mobile_and_tablet_other_to_ad_tbl',
            $this->table
        );

        $this->dropTable($this->table);

    }
}
