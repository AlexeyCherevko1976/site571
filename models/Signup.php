<?php
namespace app\models;
use yii\base\Model;
use app\models\User;
class Signup extends Model{
	//public $name;
	public $email;
	public $password;
	    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass'=>'app\models\User', 'message' => 'This username has already been taken.'],
            ['password', 'string', 'min'=>2, 'max'=>10]
        ];
    } 
    public function signup(){
    	$user=new User();
    	$user->email=$this->email;
    	$user->password=sha1($this->password);
    	return $user->save(); //вернет true или false
    }
}
?>