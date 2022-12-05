<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "prepod".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Tema[] $temas
 */
class Prepod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prepod';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
        ];
    }

    /**
     * Gets query for [[Temas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTemas()
    {
        return $this->hasMany(Tema::class, ['prepod_id' => 'id']);
    }
}
