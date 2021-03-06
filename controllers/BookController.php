<?php


namespace app\controllers;

use app\models\Book;
use yii\web\Controller;
use Yii;

class BookController extends Controller
{
    public function actionIndex()
    {
        $books = Book::find()->all();

        return $this->render('index',[
            'books'=>$books
        ]);

    }
    public function actionView($id){

        $book = Book::find()->where(['id'=>$id])->one();
        return $this->render('view', [
            'book'=>$book
        ]);
    }

    public function actionUpdate($id){
        $model = Book::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Поля изменены');
            return $this->redirect(['book/index']);
        }

        return $this->render('update', [
            'model'=>$model
        ]);
    }

    public function actionDelete($id)
    {
        $model = Book::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success', 'Книга удалена');
        return $this->redirect(['book/index']);
    }

    public function actionCreate()
    {
        $model = new Book();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Сохранено');
            return $this->redirect(['book/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

}