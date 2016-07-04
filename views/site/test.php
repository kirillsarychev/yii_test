<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->label('Ваше имя') ?>
        <?= $form->field($model, 'age')->label('Ваш возраст') ?>
        <?= $form->field($model, 'email')->label('Електронный адрес') ?>
        <?= $form->field($model, 'country')->label('Страна')->dropDownList([
             '0' => 'Украина',
             '1' => 'США',
             '2'=>'Замбия'
        ]); ?>
        <?= $form->field($model, 'website')->label('Ссылка на Вашу страничку в соц.сети') ?>

        <div class="form-group">
<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary'], ['url' => ['/site/about']]) ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>