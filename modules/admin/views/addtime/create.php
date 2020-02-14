<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Addtime */

$this->title = 'Create Addtime';
$this->params['breadcrumbs'][] = ['label' => 'Addtimes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addtime-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
