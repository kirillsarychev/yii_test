<?php
use yii\helpers\Html;
?>
<p>Проверка введенной информации:</p>

<ul>
    <li><label>Имя</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Возраст</label>: <?= Html::encode($model->age) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Страна</label>: <?= Html::encode($model->country) ?></li>
    <li><label>Ссылка на Вашу страничку в соц.сети</label>: <?= Html::encode($model->website) ?></li>
</ul>
<?= Html::a('Обратно к форме', ['/site/test'], ['class'=>'btn btn-inverse']) ?>