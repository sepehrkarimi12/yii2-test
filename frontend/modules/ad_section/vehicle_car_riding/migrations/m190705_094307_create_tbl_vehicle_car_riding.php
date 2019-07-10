<?php

use yii\db\Migration;

/**
 * Class m190705_094307_create_tbl_vehicle_car_riding
 */
class m190705_094307_create_tbl_vehicle_car_riding extends Migration
{
    private $table = 'tbl_vehicle_car_riding';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'ad_id' => $this->integer(),
            'brand_id' => $this->integer(),
            'color_id' => $this->integer(),
            'ad_type_id' => $this->integer()->notNull(),
            'created_year_id' => $this->integer(),
            'miles' => $this->integer()->notNull(),
            'national_code' => $this->string(10),
        ],'ENGINE InnoDB');

        $this->addForeignKey(
            'ad_id_vehicle_car_riding_to_ad_tbl',
            $this->table,
            'ad_id',
            'tbl_ad',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'brand_id_vehicle_car_riding_to_ad_advertiser',
            $this->table,
            'brand_id',
            'tbl_car_brand',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'color_id_vehicle_car_riding_to_color_tbl',
            $this->table,
            'color_id',
            'tbl_car_color',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'ad_type_id_vehicle_car_riding_to_ad_type_tbl',
            $this->table,
            'ad_type_id',
            'tbl_ad_type',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

        $this->addForeignKey(
            'created_year_id_vehicle_car_riding_to_created_year',
            $this->table,
            'created_year_id',
            'tbl_car_created_year',
            'id',
            'NO ACTION',
            'NO ACTION'
        );

    }

    public function down()
    {
        $this->dropForeignKey(
            'created_year_id_vehicle_car_riding_to_created_year',
            $this->table
        );

        $this->dropForeignKey(
            'ad_type_id_vehicle_car_riding_to_ad_type_tbl',
            $this->table
        );

        $this->dropForeignKey(
            'color_id_vehicle_car_riding_to_color_tbl',
            $this->table
        );

        $this->dropForeignKey(
            'brand_id_vehicle_car_riding_to_ad_advertiser',
            $this->table
        );

        $this->dropForeignKey(
            'ad_id_vehicle_car_riding_to_ad_tbl',
            $this->table
        );

        $this->dropTable($this->table);

    }

}
