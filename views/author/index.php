<?php

$this->title = 'Авторы';
use yii\helpers\Url;
?>
<h1>Authors</h1>
<ul>
    <?php foreach ($authors as $author):?>
        <li>
            <a href="<?php echo Url::to(['/author/view', 'id' => $author->id]) ?>">
            <?php echo $author->name; ?>
            </a> Книги этого автора:
            <?php $books = $author->getBook();?>
                <?php foreach ($books as $book):?>
                    <span> <?php echo '-'.$book['title'].'-'; ?></span>
                <?php endforeach;?>
        </li>
    <?php endforeach;?>
</ul>