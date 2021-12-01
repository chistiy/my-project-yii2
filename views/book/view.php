<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>kNIGi до 20 века</h1>
<ul>
<?php foreach ($books as $book): ?>
    <h3> <?= Html::encode($book->book_name) ?></h3>
    <table class="table table-striped">
    <tbody>
    <th>Жанр</th>
    <td> <?= Html::encode($book->genre->genre_name) ?></td>
    </tr>
    <th>Автор</th>
    <td> <?= Html::encode($book->author->fio) ?></td>
    </tr>
    <th>Год написания</th>
    <td> <?= Html::encode($book->year) ?></td>
    </tr>
    </tbody>
    </table>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>