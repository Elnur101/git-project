<?php

use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Addtime */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="addtime-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    if($model->datetime) {
        $model->datetime = date("d.m.Y H:i", (integer) $model->datetime);
    }
 echo DateTimePicker::widget([
                'model' => $model,
                'attribute' => 'datetime',
                'options' => ['placeholder' => 'Date...'],
                'convertFormat' => true,
                'pluginOptions' => [
                    'orientation' => 'top',
                    'autoclose' => true,
                    'format' => Yii::$app->formatter->datetimeFormat,
                    'startDate' => date(Yii::$app->formatter->dateFormat, strtotime('today')),
                    'todayHighlight' => true
                ]
 ]);?>

        <?= Html::submitButton( 'Send', ['class' => 'btn btn-primary']) ?>

    <?php ActiveForm::end(); ?>

</div>
