<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_login}}".
 *
 * @property string $login
 * @property string $username
 * @property string $pass
 */
class TblLogin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_login}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'username', 'pass'], 'required'],
            [['login', 'username', 'pass'], 'string'],
        ];
    }
    public static function primaryKey()
    {
        return array('login');
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'login' => 'Login',
            'username' => 'Username',
            'pass' => 'Pass',
        ];
    }
}
