<?php

namespace backend\models;
use common\models\User;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id
 * @property string $namapegawai
 *
 * @property User $id0
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['namapegawai'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'namapegawaiid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namapegawai' => 'Namapegawai',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery|UserQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['namapegawaiid' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return PegawaiQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PegawaiQuery(get_called_class());
    }
}
