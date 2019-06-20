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
            'city_id' => $this->integer(),
            'address' => $this->string(50)->notNull(),
        ]);
    }

    public function down()
    {
        echo "m190620_083827_createTblApartmentRent cannot be reverted.\n";

        return false;
    }

}
