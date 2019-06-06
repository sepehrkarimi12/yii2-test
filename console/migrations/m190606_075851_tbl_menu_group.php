<?php

use yii\db\Migration;

/**
 * Class m190606_075851_tbl_menu_group
 */
class m190606_075851_tbl_menu_group extends Migration
{
    private $table = 'tbl_menu_group';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'code' => $this->string(100)->notNull(),
        ],'ENGINE InnoDB');
    }

    public function down()
    {
        $this->dropTable($this->table);
    }

}
