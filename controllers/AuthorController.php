<?php
namespace app\controllers;
use yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Author;
use app\models\Genre;
use app\models\Book;
class AuthorController extends Controller
{
    public function actionIndex()
    {
        $model = new Author();
        $query = Author::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $authors = $query
            ->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', [
            'authors' => $authors,
            'pagination' => $pagination,
            'model' => $model
        ]);
    }
    
        public function actionView()
    {
        $query = Author::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10,
        ]);
        $authors = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        $count = Book::find()
        ->select('*')
        ->leftJoin('author', 'author.id = book.author_id')
        ->count();
        return $this->render('view', [
            'authors' => $authors,
            'pagination' => $pagination,
            'count' => $count,
        ]);
    }
        public function actionVieww()
    {
        $query = Author::find()->with('books');
        $pagination = new Pagination([
            'defaultPageSize' => 10,
        ]);
        $authors = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('vieww', [
            'authors' => $authors,
            'pagination' => $pagination,
        ]);
    }
        public function actionAdd()
    {
        $model = new Author();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->fio=$model->fioAdd;
            $model->birth_date=$model->birth_dateAdd;
            $model->death_date=$model->death_dateAdd;
            $result="False";
            if ( $model->save() ) {
                $result="Success";
            }
            return $this->render('add',[
                'model' => $model,
                'result' => $result
            ]);
        }
    }
        public function actionDrop()
    {
        $model = new Author();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $author = Author::findOne($model->dropID);
            $result="False";
            if ( $author->delete() ) {
                $result="Success";
            }
            return $this->render('drop',[
                'model' => $model,
                'result' => $result
            ]);
        }

    }
}