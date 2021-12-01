<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\controllers\Site;
use yii\validators\DateValidator;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'age') ?>
    <?= $form->field($model, 'date') ?>
    <?= $form->field($model, 'kit') ?>
    <?= $form->field($model, 'rev') ?>
    <?= $form->field($model, 'ussr')->radioList(
            array('1'=>'Да','0'=>'Нет')
        );
    ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
