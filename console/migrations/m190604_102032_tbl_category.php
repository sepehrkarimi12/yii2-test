<?php

use yii\db\Migration;

/**
 * Class m190604_102032_tbl_category
 */
class m190604_102032_tbl_category extends Migration
{

    private $table = 'tbl_category';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(),
            'title' => $this->string()->notNull(),
            'sort' => $this->integer(),
            'status' => $this->boolean()->notNull()
        ]);
    }

    public function down()
    {
        $this->dropeTable($this->table);
    }
    
}
