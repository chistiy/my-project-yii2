<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<h1>Authors</h1>

<table class='table table-striped'>
    <thead>
        <tr>
            <th scope='col'>id</th>
            <th scope='col'>Афтар</th>
            <th scope='col'>Датарождение</th>
            <th scope='col'>Дата смерти</th>
            <th scope='col'>Количество кНИГ</th>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($authors as $author): ?>
        <tr>
            <td><?= $author->id ?></td>
            <td><?= $author->fio ?></td>
            <td><?= $author->birth_date ?></td>
            <td><?= $author->death_date ?></td>
            <td><?= count($author->books) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


<h1>Добавить нового автора</h1>

<?php $form = ActiveForm::begin(['action'=>Yii::$app->urlManager->createUrl(['author/add'])]); ?>
    <?= $form->field($model, 'fioAdd')->label('Name:')  ?>
    <?= $form->field($model, 'birth_dateAdd')->label('Birth:')  ?>
    <?= $form->field($model, 'death_dateAdd')->label('Death:')  ?>
    <div class="form-group">
        <?= Html::submitButton('Add', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); ?>

<h1>Удалить автора (по id)</h1>

<?php $form = ActiveForm::begin(['action'=>Yii::$app->urlManager->createUrl(['author/drop'])]); ?>
    <?= $form->field($model, 'dropID')->label('id:')  ?>
    <div class="form-group">
        <?= Html::submitButton('Delete', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); ?>