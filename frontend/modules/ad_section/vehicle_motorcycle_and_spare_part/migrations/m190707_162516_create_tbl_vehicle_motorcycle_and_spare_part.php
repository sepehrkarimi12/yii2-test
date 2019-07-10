<?php

use yii\db\Migration;

/**
 * Class m190707_162516_create_tbl_vehicle_motorcycle_and_spare_part
 */
class m190707_162516_create_tbl_vehicle_motorcycle_and_spare_part extends Migration
{
    private $table = 'tbl_vehicle_motorcycle_and_spare_part';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'created_year_id' => $this->integer(),
            'miles' => $this->integer()->notNull(),
            'ad_type_id' => $this->integer()->notNull(),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_vehicle_motorcycle_and_spare_part_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'created_year_id_motorcycle_and_spare_part_to_created_year',
            $this->table,
            'created_year_id',
            'tbl_car_created_year',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'ad_type_id_vehicle_motorcycle_and_spare_part_to_ad_type_tbl',
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
            'ad_type_id_vehicle_motorcycle_and_spare_part_to_ad_type_tbl',
            $this->table
        );

        $this->dropForeignKey(
            'created_year_id_motorcycle_and_spare_part_to_created_year',
            $this->table
        );

        $this->dropForeignKey(
            'ad_id_vehicle_motorcycle_and_spare_part_to_ad_tbl',
            $this->table
        );

        $this->dropTable($this->table);

    }
}
