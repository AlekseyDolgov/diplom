<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "calendar".
 *
 * @property int $id
 * @property string|null $date_begin
 * @property string|null $date_end
 * @property int|null $stud_has_tema_id
 * @property int|null $completed
 * @property int|null $stadges_id
 *
 * @property Stadges $stadges
 * @property StudHasTema $studHasTema
 */
class Calendar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calendar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_begin', 'date_end'], 'safe'],
            [['stud_has_tema_id', 'completed', 'stadges_id'], 'integer'],
            [['stadges_id'], 'exist', 'skipOnError' => true, 'targetClass' => Stadges::class, 'targetAttribute' => ['stadges_id' => 'id']],
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
            'date_begin' => 'Date Begin',
            'date_end' => 'Date End',
            'stud_has_tema_id' => 'Stud Has Tema ID',
            'completed' => 'Completed',
            'stadges_id' => 'Stadges ID',
        ];
    }

    /**
     * Gets query for [[Stadges]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStadges()
    {
        return $this->hasOne(Stadges::class, ['id' => 'stadges_id']);
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
