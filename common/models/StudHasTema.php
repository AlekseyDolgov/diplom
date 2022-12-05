<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "stud_has_tema".
 *
 * @property int $id
 * @property int|null $stud_id
 * @property int|null $tema_id
 * @property int|null $approved
 *
 * @property Calendar[] $calendars
 * @property Kons[] $kons
 * @property Stud $stud
 * @property Tema $tema
 */
class StudHasTema extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stud_has_tema';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stud_id', 'tema_id', 'approved'], 'integer'],
            [['stud_id'], 'exist', 'skipOnError' => true, 'targetClass' => Stud::class, 'targetAttribute' => ['stud_id' => 'id']],
            [['tema_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tema::class, 'targetAttribute' => ['tema_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stud_id' => 'Студент',
            'tema_id' => 'Тема',
            'approved' => 'Одобрена',
        ];
    }

    /**
     * Gets query for [[Calendars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalendars()
    {
        return $this->hasMany(Calendar::class, ['stud_has_tema_id' => 'id']);
    }

    /**
     * Gets query for [[Kons]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKons()
    {
        return $this->hasMany(Kons::class, ['stud_has_tema_id' => 'id']);
    }

    /**
     * Gets query for [[Stud]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStud()
    {
        return $this->hasOne(Stud::class, ['id' => 'stud_id']);
    }

    /**
     * Gets query for [[Tema]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTema()
    {
        return $this->hasOne(Tema::class, ['id' => 'tema_id']);
    }
}
