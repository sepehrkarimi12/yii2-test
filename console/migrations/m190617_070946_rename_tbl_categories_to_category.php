<?php

use yii\db\Migration;

/**
 * Class m190617_070946_rename_tbl_categories_to_category
 */
class m190617_070946_rename_tbl_categories_to_category extends Migration
{
//    private $table = 'tbl_ad_images';

    public function up()
    {
        $this->renameTable('tbl_categories','tbl_category');
    }

    public function down()
    {
        $this->renameTable('tbl_category','tbl_categories');
    }
}