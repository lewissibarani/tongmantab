<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bidang".
 *
 * @property int $id
 * @property string $namabidang
 */
class Bidang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bidang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namabidang'], 'required'],
            [['namabidang'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namabidang' => 'Namabidang',
        ];
    }
}
