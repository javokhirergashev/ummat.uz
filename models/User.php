<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\FileHelper;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{

    public $file;

    public static function tableName()
    {
        return 'user';

    }


    public function Rules(){
        return[
            [['username','password','email'], 'required'],
            ['email', 'email'],
            [['username','password','avatar'], 'string','max' => 255],
            [['status', 'creator'],'integer'],
            [['created_date','updated_date'],'safe']
        ];
    }
    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return !empty(self::findOne($id)) ? new static(self::findOne($id)) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::find()->asArray()->all() as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        foreach (self::find()->asArray()->all() as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        // return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password,$this->password);
    }
    public function generatePassword($password){
        return $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    public function saveAvatarImage(){
        if ($this->validate()){
            $catalog = "uploads/user/{$this->id}/";
//            echo $catalog; die;
            FileHelper::createDirectory($catalog);
            $this->file->saveAs($catalog . $this->file->baseName . '.' . $this->file->extension);

            return $this->file->baseName . '.' . $this->file->extension;
        }else{
            return false;
        }
    }
    public function getAvatarImage(){
        return "/uploads/user/{$this->id}/$this->avatar";
    }
    public function deleteOldImage($image){
         $file = "/uploads/user/{$this->id}/$image";
         if (is_file($file)){
            unlink($file);
         }
    }
}

