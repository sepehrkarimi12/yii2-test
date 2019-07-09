<?php

use yii\db\Migration;

/**
 * Class m190709_161641_rename_tbl_mobile_brand_to_tbl_mobile_and_computer_brand
 */
class m190709_161641_rename_tbl_mobile_brand_to_tbl_mobile_and_computer_brand extends Migration
{
    public function up()
    {
        $this->renameTable('tbl_mobile_brand','tbl_mobile_and_computer_brand');
    }

    public function down()
    {
        $this->renameTable('tbl_mobile_and_computer_brand','tbl_mobile_brand');
    }

}
