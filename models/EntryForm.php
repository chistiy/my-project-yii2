<?php
namespace app\models;
use yii\base\Model;
use yii\validators\DateValidator;

class EntryForm extends Model
{

public $name;
public $email;
public $age;
public $date;
public $rev;
public $kit;
public $ussr;

public function rules()
{

return [
    [['email','age','date','rev','kit','name','ussr'], 'required','message'=>'поле обязательно к заполнению'],
    ['email','email'],
    [ ['age'],'integer','min'=>18, 'max'=>100],
    [['name'],'string', 'min'=>5, 'max'=>30],
    [['date'],'date','format'=>'php:m/d/Y'],
   // [['rev','email','age','date','kit'],'trim']

];

}
public function attributeLabels(){ return[
    'name'=>'имя',
    'email'=>'ваш имейл',
    'age'=>'ваш возраст',
    'date'=>'дата посещения',
    'rev'=>'ваш отзыв',
    'ussr'=>'порекомендуете нас?',
    'kit'=>'кухня которую заказывали',];
     
}

}