<?php

$this->title = 'Редактировать автора';
use yii\helpers\Url;
?>
<p>Автор: <?php echo $author->name; ?></p>
<p>Количество книг: <?php echo $author->getCountBooks(); ?></p>
<a href="<?php echo Url::to(['/author/update', 'id' => $author->id]) ?>" class="btn btn-primary">Редактировать</a>