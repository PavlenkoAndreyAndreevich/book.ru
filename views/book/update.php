<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

    <h1>Редактировать книгу</h1>
<div class="col-md-4">
    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'title'); ?>

    <?php echo $form->field($model, 'price'); ?>

    <?php echo $form->field($model, 'author_id'); ?>


    <?php echo Html::submitButton('Сохранить', [
        'class' => 'btn btn-primary'
    ]); ?>

    <?php ActiveForm::end();?>
</div>
