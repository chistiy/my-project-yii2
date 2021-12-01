<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Authors</h1>
<ul>
<?php foreach ($authors as $author): ?>
    <li>
        <?= Html::encode("{$author->id}. {$author->fio} ({$author->birth_date} - {$author->death_date})")?>
    </li>
<table class="table table-striped">
<tbody>
<table class="table table-striped">
<tbody>
<tr>
<th>ID</th>
<td> <?= $author->id ?></td>
</tr>
<tr>
<th>FIO</th>
<td> <?= $author->fio ?></td>
</tr>
<tr>
<th>Birth Date</th>
<td> <?= $author->birth_date ?></td>
</tr>
<tr>
<th>Death Date</th>
<td> <?= $author->death_date ?></td>
</tr>
<th>Books</th>
<td> <?= count($author->books) ?></td>
</tr>
</tbody>
</table>
<?php endforeach; ?>
</ul>

<pre> 
    <?php //var_dump($authors); ?>
</pre>

<?= LinkPager::widget(['pagination' => $pagination]) ?>