<?php

namespace app\controllers;
use app\models\Author;
use yii\web\Controller;
use Yii;

class AuthorController extends Controller
{
    public function actionIndex()
    {
        $authors = Author::find()->all();

        return $this->render('index',[
            'authors'=>$authors
        ]);
    }
    public function actionView($id){

        $author = Author::find()->where(['id'=>$id])->one();

        return $this->render('view', [
            'author'=>$author
        ]);
    }
    public function actionUpdate($id){

        $model = Author::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Поля изменены');
            return $this->redirect(['author/index']);
        }

        return $this->render('update', [
            'model'=>$model
        ]);
    }

}