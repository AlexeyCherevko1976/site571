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
    	$user=User::findOne(['email'=>$this->email]);
    	if(!$user || ($user->password != sha1($this->password))){
    		$this->addError($attribute, 'Пароль или пользователь введены неверно');
    	}
    }	
}