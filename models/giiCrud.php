<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $book_name
 * @property int|null $year
 * @property int $author_id
 * @property int $genre_id
 *
 * @property Author $author
 * @property Genre $genre
 * @property Coment[] $coments
 */
class giiCrud extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['book_name', 'author_id', 'genre_id'], 'required'],
            [['year', 'author_id', 'genre_id'], 'integer'],
            [['book_name'], 'string', 'max' => 100],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['genre_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_name' => 'Название книги',
            'year' => 'Год написания',
            'author_id' => 'ID автора',
            'genre_id' => 'ID жанра',
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }

    /**
     * Gets query for [[Genre]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre_id']);
    }

    /**
     * Gets query for [[Coments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComents()
    {
        return $this->hasMany(Coment::className(), ['book_id' => 'id']);
    }
}
