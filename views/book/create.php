<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

    <h1>Добавить новую книгу</h1>
<div class="col-md-4">
    <?php $form = ActiveForm::begin();  ?>

    <?php echo $form->field($model, 'title'); ?>

    <?php echo $form->field($model, 'price'); ?>

    <?php echo $form->field($model, 'author_id'); ?>



    <?php echo Html::submitButton('Добавить книгу', [
        'class' => 'btn btn-primary'
    ]); ?>

<?php ActiveForm::end();?>
</div>
