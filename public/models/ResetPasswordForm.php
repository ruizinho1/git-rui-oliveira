<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Users;
use InvalidArgumentException;

class ResetPasswordForm extends Model
{
    public $password;
    private $_user;
    
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidArgumentException('Token de redefinição de senha não pode estar vazio.');
        }
    
        $this->_user = Users::findByPasswordResetToken($token);
    
        if (!$this->_user) {
            throw new InvalidArgumentException('Token de redefinição de senha inválido.');
        }
    
        parent::__construct($config);
    }
    

    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function resetPassword()
    {
        $user = $this->_user;
        $user->password = sha1($this->password);
        $user->removePasswordResetToken();

        return $user->save(false);
    }
}
