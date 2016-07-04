<?php

namespace app\models;


use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class TestForm extends Model
{
    public $name;
    public $email;
    public $country;
    public $website;
    public $age;

    public function rules()
    {
        return [
            [['name', 'email','age'], 'required','message'=>'Поле не может быть пустым'],
            ['email', 'email', 'message'=>'Не корректно введен адрес електронной почты'],
            ['age', 'integer', 'message'=>'Введите возраст целым числом'],
            ['country', 'string'],
            ['website', 'url', 'defaultScheme' => 'http','message'=> 'Введите правильный адрес сайта'],
        ];
    }
}