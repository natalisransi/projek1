<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbMahasiswaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-mahasiswa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
<div class="row">
  <div class="col-lg-3">

    <p align="left"><?= $form->field($model, 'nim') ?></p>
 
    </div>
</div>

   

    <?php // echo $form->field($model, 'agama') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'angkatan') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
