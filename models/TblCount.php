<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_count}}".
 *
 * @property string $ip
 * @property integer $count
 * @property string $date
 */
class TblCount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_count}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip', 'count', 'date'], 'required'],
            [['ip'], 'string'],
            [['count'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @return array of primary keys
     */
    public static function primaryKey()
    {
        return array('ip','date');
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ip' => 'Ip',
            'count' => 'Count',
            'date' => 'Date',
        ];
    }
}
