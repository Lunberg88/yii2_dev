<?php

use yii\db\Migration;

/**
 * Handles the creation of table `person`.
 */
class m161218_144901_create_person_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('person', [
            'id' => $this->primaryKey(),
            'name' => $this->string(55)->notNull(),
            'age' => $this->integer(3)->notNull(),
            'male' => $this->string(12)->notNull(),
            'date' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('person');
    }
}
