<?php

use yii\db\Migration;

/**
 * Class m190212_151819_create_table_visual_composer_item
 */
class m190212_151819_create_table_visual_composer_item extends Migration
{
    public $tableName = '{{%visual_composer_item}}';

    /**
     * @return bool|void
     * @throws \yii\base\Exception
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),

            'target_class' => $this->string()->notNull(),
            'target_id' => $this->integer()->null(),
            'target_sign' => $this->integer()->null(),

            'data_attributes' => $this->json()->defaultValue([]),
            'data_options' => $this->json()->defaultValue([]),
        ]);
    }

    /**
     * @return bool|void
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
