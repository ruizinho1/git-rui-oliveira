<?php
namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "Users".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $authKey
 * @property string|null $acessToken
 * @property string $email
 * @property string $status
 */
class Users extends \yii\db\ActiveRecord implements IdentityInterface
{
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';


    public static function tableName()
    {
        return 'Users';
    }

    public function rules()
    {
        return [
            [['username', 'password', 'email', 'status'], 'required'],
            [['username', 'password', 'authKey', 'acessToken', 'email', 'status', 'password_reset_token'], 'string', 'max' => 45],
            ['email', 'email'],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE]],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'acessToken' => 'Access Token',
            'email' => 'Email',
            'status' => 'Status',
            'password_reset_token' => 'Password Reset Token',
        ];
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->authKey = Yii::$app->security->generateRandomString();
                $this->acessToken = Yii::$app->security->generateRandomString();
                $this->password = sha1($this->password);
                if (empty($this->status)) {
                    $this->status = self::STATUS_ACTIVE; // Define o status padrão como active
                }
            }
            return true;
        }
        return false;
    }
    
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function validatePassword($password)
    {
        return $this->password === sha1($password);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
        return $this->save(false);
    }
            
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
        return $this->save(false);
    }

    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $timestamp = (int) substr(strrchr($token, '_'), 1);
        $expire = 3600; // 1 hora
        return $timestamp + $expire >= time();
    }  

    public static function findByPasswordResetToken($token)
    {
        if (!self::isPasswordResetTokenValid($token)) {
            return null;
        }
        return static::findOne(['password_reset_token' => $token]);
    }

}