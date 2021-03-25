<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "kak".
 *
 * @property int $id
 * @property int|null $idpecetakan
 * @property string $namaKAK
 * @property string $time
 * @property string $linkdownload
 * @property int $userid
 */
class Kak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpercetakan', 'userid'], 'integer'],
            [['namaKAK', 'linkdownload', 'userid'], 'required'],
            [['time'], 'safe'],
            [['namaKAK', 'linkdownload'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idpercetakan' => 'Idpecetakan',
            'namaKAK' => 'Nama KAK',
            'time' => 'Time',
            'linkdownload' => 'Link Download',
            'userid' => 'Userid',
        ];
    }

     public function getPercetakans()
    {
        return $this->hasMany(Percetakan::className(), ['idpercetakan' => 'id']);
    }
}
