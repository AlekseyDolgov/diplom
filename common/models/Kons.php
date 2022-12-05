<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kons".
 *
 * @property int $id
 * @property string|null $date
 * @property int|null $stud_has_tema_id
 * @property int|null $is_visited
 *
 * @property StudHasTema $studHasTema
 */
class Kons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date'], 'safe'],
            [['stud_has_tema_id', 'is_visited'], 'integer'],
            [['stud_has_tema_id'], 'exist', 'skipOnError' => true, 'targetClass' => StudHasTema::class, 'targetAttribute' => ['stud_has_tema_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'stud_has_tema_id' => 'Stud Has Tema ID',
            'is_visited' => 'Is Visited',
        ];
    }

    /**
     * Gets query for [[StudHasTema]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudHasTema()
    {
        return $this->hasOne(StudHasTema::class, ['id' => 'stud_has_tema_id']);
    }
}
