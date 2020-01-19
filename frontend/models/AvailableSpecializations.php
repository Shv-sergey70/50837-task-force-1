<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "available_specializations".
 *
 * @property int $specialization_id
 * @property string $name
 * @property string $created_at
 */
class AvailableSpecializations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'available_specializations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['specialization_id', 'name'], 'required'],
            [['specialization_id'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['specialization_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'specialization_id' => 'Specialization ID',
            'name' => 'Name',
            'created_at' => 'Created At',
        ];
    }
}
