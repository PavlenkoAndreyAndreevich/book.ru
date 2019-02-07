<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h1>Добавить нового автора</h1>
<div class="col-md-4">
    <?php $form = ActiveForm::begin();  ?>

    <?php echo $form->field($model, 'name'); ?>

    <?php echo Html::submitButton('Добавить автора', [
        'class' => 'btn btn-primary'
    ]); ?>

    <?php ActiveForm::end();?> 
</div>
