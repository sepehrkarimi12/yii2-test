<?php

use yii\db\Migration;

/**
 * Class m190604_110103_rename_category_tbl_to_categories_tbl
 */
class m190604_110103_rename_category_tbl_to_categories_tbl extends Migration
{

    public function up()
    {
        $this->renameTable('tbl_category', 'tbl_categories');
    }

    public function down()
    {
        $this->renameTable('tbl_categories', 'tbl_category');
    }

}
