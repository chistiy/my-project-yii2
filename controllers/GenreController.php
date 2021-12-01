<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Author;
use app\models\Genre;
use app\models\Book;
class GenreController extends Controller
{
    public function actionIndex()
    {
        $query = Genre::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $genres = $query
            ->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'genres' => $genres,
            'pagination' => $pagination,
        ]);
    }
}