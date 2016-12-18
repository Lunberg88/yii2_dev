<?php

use yii\db\Migration;

/**
 * Handles the creation of table `address`.
 * Has foreign keys to the tables:
 *
 * - `person`
 */
class m161218_144929_create_address_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('address', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(12)->notNull(),
            'email' => $this->string(55)->unique()->notNull(),
            'city' => $this->string(30)->notNull(),
            'street' => $this->string(30)->notNull(),
            'house' => $this->integer(12)->notNull(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            'idx-address-user_id',
            'address',
            'user_id'
        );

        // add foreign key for table `person`
        $this->addForeignKey(
            'fk-address-user_id',
            'address',
            'user_id',
            'person',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `person`
        $this->dropForeignKey(
            'fk-address-user_id',
            'address'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-address-user_id',
            'address'
        );

        $this->dropTable('address');
    }
}
