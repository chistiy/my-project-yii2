<?php

namespace app\models;

use yii\db\ActiveRecord;

class Author extends ActiveRecord
{
    public $fioAdd;
    public $birth_dateAdd;
    public $death_dateAdd;
    public $dropID;

    public function rules()
    {
        return [
            [['fioAdd'], 'string'],
            [['birth_dateAdd'], 'number'],
            [['death_dateAdd'], 'number'],
            [['dropID'], 'number'] 
        ];
    }
  public function getBooks()
  {
    return $this->hasMany(Book::className(), ['genre_id'=>'id']); 
  } 
}