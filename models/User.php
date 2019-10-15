<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
class User extends ActiveRecord implements IdentityInterface
{
    public $id;
    //public $username;
    public $password;
    //public $authKey;
    //public $accessToken;
    public $email;



    public function validatePassword($password)
    {
         $this->password=sha1($password);
         var_dump($this);die();
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);  
    }

    public function getId()
    {
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {

    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {

    }

    /**
     * {@inheritdoc}
     */


    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {

    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */

}
