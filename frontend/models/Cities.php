<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "cities".
 *
 * @property int $id
 * @property string $name
 * @property float $latitude
 * @property float $longitude
 */
class Cities extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['name', 'latitude', 'longitude'], 'required'],
            [['latitude', 'longitude'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }
}
