<?php
use yii\helpers\Html;
?>
<p>Вы ввели следующую информацию:</p>
<?= var_dump($model); ?>
<ul>
<li> <?= Html::encode($model->name) ?></li>
    <li> <?= Html::encode($model->email) ?></li>
    <li> <?= Html::encode($model->age) ?></li>
    <li> <?= Html::encode($model->date) ?></li>
    <li> <?= Html::encode($model->kit) ?></li>
    <li> <?= Html::encode($model->rev) ?></li>
    <li> <?= $model->ussr ?></li>

</ul>
