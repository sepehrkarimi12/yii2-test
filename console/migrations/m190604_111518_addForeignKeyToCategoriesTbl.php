<?php

use yii\db\Migration;

/**
 * Class m190604_111518_addForeignKeyToCategoriesTbl
 */
class m190604_111518_addForeignKeyToCategoriesTbl extends Migration
{
    
    public function up()
    {
        $this->addForeignKey(
            'fk_categoriesTbl_parent_id',
            'tbl_categories',
            'parent_id',
            'tbl_categories',
            'id',
            'NO ACTION',
            'NO ACTION'
        );
    }

    public function down()
    {
        $this->dropForeignKey('fk_categoriesTbl_parent_id', 'tbl_categories');
    }
}
