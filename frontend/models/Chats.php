<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chats".
 *
 * @property int $id
 * @property int $chat_id
 * @property int $executor_id
 * @property int $customer_id
 * @property string $message
 * @property string $created_at
 */
class Chats extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chats';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['chat_id', 'executor_id', 'customer_id', 'message'], 'required'],
            [['chat_id', 'executor_id', 'customer_id'], 'integer'],
            [['message'], 'string'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'chat_id' => 'Chat ID',
            'executor_id' => 'Executor ID',
            'customer_id' => 'Customer ID',
            'message' => 'Message',
            'created_at' => 'Created At',
        ];
    }
}
