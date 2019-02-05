<?php

$this->title = 'Автор';
use yii\helpers\Url;
?>
<p>Книга: <?php echo $book->title; ?></p>
<p>Цена: <?php echo $book->price; ?></p>
<a href="<?php echo Url::to(['/book/update', 'id' => $book->id]) ?>" class="btn btn-primary">Редактировать</a>