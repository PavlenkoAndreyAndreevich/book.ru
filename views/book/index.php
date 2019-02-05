<?php

$this->title = 'Книги';
use yii\helpers\Url;

?>
<h1>Books</h1>
<ul>
    <?php foreach ($books as $book):?>
        <li>
            <a href="<?php echo Url::to(['/book/view', 'id' => $book->id]) ?>">
            <?php echo $book->title; ?>
            </a>
            <span>Автор<?php $author = $book->getAuthor(); echo ' '.$author->name; ?> </span>
        </li>
    <?php endforeach;?>
</ul>