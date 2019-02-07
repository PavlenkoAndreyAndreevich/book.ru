<?php

$this->title = 'Книги';
use yii\helpers\Url;

?>
<h1>Books</h1>
<ul>
    <?php foreach ($books as $book):?>
        <li>
            <a class="btn btn-danger" href="<?php echo Url::to(['book/delete', 'id' => $book->id]); ?>">Удалить</a>
            <a href="<?php echo Url::to(['/book/view', 'id' => $book->id]) ?>">
            <?php echo $book->title; ?>
            </a>
            <span>Автор<?php $author = $book->getAuthor(); echo ' '.$author->name; ?> </span>
        </li>
    <?php endforeach;?>
</ul>

<a class="btn btn-primary" href="<?php echo Url::to(['book/create']); ?>">Добавить книгу</a>