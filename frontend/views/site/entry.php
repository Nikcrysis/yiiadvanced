<?php
      use yii\helpers\Html;
      use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'password')->passwordInput() ?>
<?= $form->field($model, 'password1')->checkboxList(['a','b','c'],['class' => 'checkboxes']) ?>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>