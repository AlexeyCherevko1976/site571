<?php
namespace app\models;
use yii\base\Model;
class Login extends Model{
	public $email;
	public $password;
	    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['email', 'email'],
            ['password','validatePassword']
        ];
    } 
    public function validatePassword($attribute, $params){
    	if(!this->hasErrors()){
    		$user=$this->getUser(); //получаем пользователя для дальнейшего сравнения пароля
    		if(!$user || !$user->validatePassword($this->password)){
    			$this->addError($attribute, 'Пароль ли имейл введены не верно');
    		}
    	}
    }
    public function getUser(){
    	return User::findOne(['email'=>$this->email]);
    	// А получаем мы по введенному имейлу
    }
}