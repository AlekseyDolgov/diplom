<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stud".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property StudHasTema[] $studHasTemas
 */
class Stud extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stud';
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
     * Gets query for [[StudHasTemas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudHasTemas()
    {
        return $this->hasMany(StudHasTema::class, ['stud_id' => 'id']);
    }
}
