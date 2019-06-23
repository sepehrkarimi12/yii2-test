<?php

use yii\db\Migration;

/**
 * Class m190621_065218_create_tbl_created_year
 */
class m190621_065218_create_tbl_created_year extends Migration

{
    private $table = 'tbl_created_year';

    public function up()
    {
        $this->createTable($this->table,[
            'id' => $this->primaryKey(),
            'title' => $this->integer(),
        ],'ENGINE InnoDB');

        $now = 1398;
        $difference = 29;
        $least_year = $now - $difference;

        for ($i = $least_year;$i <= $now;$i++) {
            $this->insert($this->table, [
                'title' => $i,
            ]);
        }
    }

    public function down()
    {
        $this->dropTable($this->table);
    }

}

