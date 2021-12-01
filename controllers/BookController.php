<?php
namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;
use yii;
use app\models\Author;
use app\models\Genre;
use app\models\Book;
class BookController extends Controller
{
    public function actionIndex()
    {
        $model = new Book();
        $query = Book::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $books = $query
            ->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'books' => $books,
            'pagination' => $pagination,
            'model'=>$model
        ]);
    }

    public function actionView()
    {
        $query = Book::find();
        $pagination = new Pagination([
            'defaultPageSize' => 2,
            'totalCount' => $query->count(),
        ]);
        $books = $query
        ->where(['<', 'year', '2000'   
        ])
            ->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        $count = Book::find()
        ->select('author.*')
        ->leftJoin('author', 'author.id = book.author_id')
        ->count();
        return $this->render('view', [
            'books' => $books,
            'pagination' => $pagination,
            'count' => $count,
        ]);
    }

    public function actionVieww()
    {
        $model = new Book();
        if ($model->load(yii::$app->request->post()) && $model->validate()) {
            $query = Book::find()->with('genre','author');
            $bName = $model->findBookName;
            $bookN = $query
                ->where(['like', 'book_name', "$bName"])
                ->orderBy('id')
                ->all();
        return $this->render('vieww', [
             'bookN'=>$bookN,
             'bName'=>$bName,
        ]);
        }
    }
}