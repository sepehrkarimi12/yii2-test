<?php

use yii\db\Migration;

/**
 * Class m190620_083827_createTblApartmentRent
 */
class m190620_083827_createTblApartmentRent extends Migration
{
    private $table = 'tbl_apartment_rent';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'area' => $this->integer(),
            'ad_type_id' => $this->integer(),
            'ad_advertiser_id' => $this->integer(),
            'deposit' => $this->integer(),
            'rent_value' => $this->integer(),
            'room_count_id' => $this->integer(),
            'created_year' => $this->integer(),
        ]);
    }

    public function down()
    {
        echo "m190620_083827_createTblApartmentRent cannot be reverted.\n";

        return false;
    }

}
