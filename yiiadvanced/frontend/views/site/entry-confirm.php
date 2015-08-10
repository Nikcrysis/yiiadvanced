<?php use yii\helpers\Html; ?>
<p>You have entered the following information:</p>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Password</label>: <?= Html::encode($model->password) ?></li>


</ul>