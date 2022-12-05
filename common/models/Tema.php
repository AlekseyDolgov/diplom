<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tema".
 *
 * @property int $id
 * @property int|null $prepod_id
 * @property string|null $tema
 * @property int|null $status
 *
 * @property Prepod $prepod
 * @property StudHasTema[] $studHasTemas
 */
class Tema extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tema';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prepod_id', 'status'], 'integer'],
            [['tema'], 'string', 'max' => 255],
            [['prepod_id'], 'exist', 'skipOnError' => true, 'targetClass' => Prepod::class, 'targetAttribute' => ['prepod_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prepod_id' => 'Преподаватель',
            'tema' => 'Название темы',
            'status' => 'Свободна',
        ];
    }

    /**
     * Gets query for [[Prepod]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrepod()
    {
        return $this->hasOne(Prepod::class, ['id' => 'prepod_id']);
    }

    /**
     * Gets query for [[StudHasTemas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudHasTemas()
    {
        return $this->hasMany(StudHasTema::class, ['tema_id' => 'id']);
    }
}
