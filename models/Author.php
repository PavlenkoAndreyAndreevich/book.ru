<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class Author extends ActiveRecord
{
    public static function tableName()
    {
        return '{{authors}}';
    }
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 15],


        ];
    }
    public function getBook(){
        return $this->hasMany(Book::className(), ['author_id'=>'id'])->asArray()->all();
    }

    public function getCountBooks(){
        return sizeof($this->getBook());
    }

}