<?php

use yii\db\Migration;

/**
 * Class m190701_124041_change_national_number_national_code
 */
class m190701_124041_change_national_number_national_code extends Migration
{
    public function up()
    {
        $this->renameColumn('tbl_apartment_sell', 'national_number', 'national_code');
    }

    public function down()
    {
        $this->renameColumn('tbl_apartment_sell', 'national_code', 'national_number');
    }
}
