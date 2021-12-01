<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Author */

$this->title = 'Create Author';
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['authors']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('author_form', [
        'model' => $model,
    ]) ?>

</div>
