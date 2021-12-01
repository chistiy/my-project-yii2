<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Genres</h1>
<ul>
<?php foreach ($genres as $genre): ?>
    <h3> <?= Html::encode($genre->genre_name) ?></h3>
<?php foreach ($genre->books as $book): ?>
    <table class="table table-striped">
    <tbody>
    <th>Book Name</th>
    <td> <?= Html::encode($book->book_name) ?></td>
    </tr>
    <th>Year</th>
    <td> <?= Html::encode($book->year) ?></td>
    </tr>
    </tbody>
    </table>
<?php endforeach; ?>
<?php endforeach; ?>
</ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>