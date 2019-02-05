<?php

namespace app\models;
use yii\db\ActiveRecord;

class Book extends ActiveRecord
{
    public static function tableName()
    {
        return '{{books}}';
    }

    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 25],
            [['price'], 'integer'],
            [['author_id'], 'integer'],
        ];
    }

    public function getAuthor(){
        return $this->hasOne(Author::className(), ['id'=>'author_id'])->one();
    }
}