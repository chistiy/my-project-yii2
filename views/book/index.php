<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<h1>Books</h1>
<ul>
<?php foreach ($books as $book): ?>
    <h3> <?= Html::encode($book->book_name) ?></h3>
    <table class="table table-striped">
    <tbody>
    <th>Genre</th>
    <td> <?= Html::encode($book->genre->genre_name) ?></td>
    </tr>
    <th>Author</th>
    <td> <?= Html::encode($book->author->fio) ?></td>
    </tr>
    <th>Year</th>
    <td> <?= Html::encode($book->year) ?></td>
    </tr>
    </tbody>
    </table>
<?php endforeach; ?>
</ul>

 
 <h1>Поиск кНИГ по названию</h1>

<?php $form = ActiveForm::begin(['action'=>Yii::$app->urlManager->createUrl(['book/vieww'])]); ?>
    <?= $form->field($model, 'findBookName')->label('Name:')  ?>
    <div class="form-group">
        <?= Html::submitButton('Find', ['class' => 'btn btn-success']) ?>
    </div>
<?php ActiveForm::end(); ?>