<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

    <h1>Update author</h1>

<div class="col-md-4">
<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'name'); ?>

<?php echo $form->field($model, 'quantity'); ?>


<?php echo Html::submitButton('Сохранить', [
    'class' => 'btn btn-primary'
]); ?>

<?php ActiveForm::end();?>
</div>
