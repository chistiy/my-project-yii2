<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>

<h1>Books names filter</h1>
<table class='table table-striped'>
    <thead>
        <tr>
            <th scope='col'>id</th>
            <th scope='col'>Имя</th>
            <th scope='col'>Год написания</th>
            <th scope='col'>Жанр</th>
            <th scope='col'>Автор</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bookN as $book): ?>
        <tr>
            <td><?= $book->id ?></td>
            <td><?= $book->book_name ?></td>
            <td><?= $book->year ?></td>
            <td><?= $book->genre->genre_name ?></td>
            <td><?= $book->author->fio ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>