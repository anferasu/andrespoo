<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Productos */
/* @var $form ActiveForm */
?>
<div class="productos">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'nombre') ?>
        <?= $form->field($model, 'foto') ?>
        <?= $form->field($model, 'almacen') ?>
        <?= $form->field($model, 'fecha') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- productos -->
