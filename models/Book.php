<?php
namespace app\models;
use yii\db\ActiveRecord;
class Book extends ActiveRecord
{
  public $findBookName;

  public function rules()
  {
      return [
       [['findBookName'], 'required','message'=>'Fill with info'],
       [['findBookName'], 'string']
    ];
  }

  public function getGenre()
  {
    return $this->hasOne(Genre::class, ['id'=>'genre_id']); 
  } 
  public function getAuthor()
  {
    return $this->hasOne(Author::class, ['id'=>'author_id']); 
  } 
}