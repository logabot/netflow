<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_ip}}".
 *
 * @property integer $id
 * @property string $ip
 * @property string $username
 */
class TblIp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_ip}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip', 'username'], 'required'],
            [['ip', 'username'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'username' => 'Username',
        ];
    }
}
