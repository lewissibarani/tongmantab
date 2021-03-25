<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "pengiriman".
 *
 * @property int $id
 * @property int $idpercetakan
 * @property string $tanggalterimacetak
 * @property string $tanggalselesaikirim
 * @property string $time
 * @property int $userid
 *
 * @property Percetakan $idpercetakan0
 * @property User $user
 */
class Pengiriman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengiriman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpercetakan'], 'required'],
            [['idpercetakan', 'userid'], 'integer'],
            [['tanggalterimacetak', 'tanggalselesaikirim', 'time'], 'safe'],
            [['idpercetakan'], 'exist', 'skipOnError' => true, 'targetClass' => Percetakan::className(), 'targetAttribute' => ['idpercetakan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idpercetakan' => 'Idpercetakan',
            'tanggalterimacetak' => 'Tanggalterimacetak',
            'tanggalselesaikirim' => 'Tanggalselesaikirim',
            'time' => 'Time',
            'userid' => 'Userid',
        ];
    }

    /**
     * Gets query for [[Idpercetakan0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdpercetakan0()
    {
        return $this->hasOne(Percetakan::className(), ['id' => 'idpercetakan']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userid']);
    }

    public function getLaporanPerbulan()
    {
        $currentyear = date("Y");
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand( 'SELECT  ""
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 1 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) January
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 2 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) February
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 3 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) March
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 4 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) April
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 5 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) May
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 6 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) June
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 7 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) July
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 8 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) August
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 9 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) September
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 10 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) October
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 11 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) November
       , COUNT(CASE WHEN  (MONTH(tanggalselesaikirim) = 12 && YEAR(tanggalselesaikirim) = '.$currentyear.')THEN 1 ELSE NULL END) December
       FROM pengiriman');
        return $result = $command->queryAll();
    }

    public function getProgressPengiriman()
    {
        $currentyear = date("Y");
        $results = Pengiriman::find()
                               ->where(['tanggalselesaikirim' => null])
                               ->andWhere(['YEAR(time)' => $currentyear])
                               ->all();
        return count($results);

    }

    public function getJumlahPengiriman()
    {
        $currentyear = date("Y");
        $results = Pengiriman::find()
                               ->where(['YEAR(tanggalselesaikirim)' => $currentyear])
                               ->all();
        return count($results);

    }

    
}
