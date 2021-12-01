<?php

namespace app\models;

use yii\db\ActiveRecord;

class Genre extends ActiveRecord
{
  public function getBooks()
  {
    return $this->hasMany(Book::class, ['genre_id'=>'id']); 
  } 
}