<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\StudHasTema $model */
/** @var yii\widgets\ActiveForm $form */

$students = ArrayHelper::map(\common\models\Stud::find()->all(), 'id', 'name');
$themes = ArrayHelper::map(\common\models\Tema::find()->where(['status' => 0])->all(), 'id', 'tema');
?>

<div class="stud-has-tema-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stud_id')->textInput()->dropDownList($students) ?>

    <?= $form->field($model, 'tema_id')->textInput()->dropDownList($themes) ?>

    <?= $form->field($model, 'approved')->textInput()->dropDownList([0 => 'Нет', 1 => 'Да']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
