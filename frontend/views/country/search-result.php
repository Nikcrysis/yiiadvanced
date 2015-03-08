
<?php use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin();?>
<?= $form->field($model, 'string') ?>
<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>

<p>You have entered the following information:</p>
<ul>
    <h1>Countries</h1>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->name} ({$country->code})") ?>:
                <?= $country->population ?>
            </li>
        <?php endforeach; ?>
    </ul>

</ul>