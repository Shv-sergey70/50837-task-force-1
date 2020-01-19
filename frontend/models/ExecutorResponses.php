<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "executor_responses".
 *
 * @property int $executor_id
 * @property int $task_id
 * @property string $comment
 * @property int $price
 * @property string $created_at
 */
class ExecutorResponses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'executor_responses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['executor_id', 'task_id', 'comment', 'price'], 'required'],
            [['executor_id', 'task_id', 'price'], 'integer'],
            [['comment'], 'string'],
            [['created_at'], 'safe'],
            [['executor_id', 'task_id'], 'unique', 'targetAttribute' => ['executor_id', 'task_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'executor_id' => 'Executor ID',
            'task_id' => 'Task ID',
            'comment' => 'Comment',
            'price' => 'Price',
            'created_at' => 'Created At',
        ];
    }
}
