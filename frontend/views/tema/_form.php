<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Tema $model */
/** @var yii\widgets\ActiveForm $form */

$prepods = ArrayHelper::map(\common\models\Prepod::find()->all(), 'id', 'name');
?>

<div class="tema-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'prepod_id')->textInput()->dropDownList($prepods) ?>

    <?= $form->field($model, 'tema')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 0])->label('') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
