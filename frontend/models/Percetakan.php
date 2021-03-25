<?php

namespace frontend\models;

use Yii;
use common\models\User;
use yii\db\Command;

/**
 * This is the model class for table "percetakan".
 *
 * @property int $id
 * @property int $idpublikasi
 * @property int $idkak
 * @property string $tanggalkirimcetak
 * @property string $tanggalselesaicetak
 * @property int $catatan
 * @property string $time
 * @property int $userid
 *
 * @property Pengiriman[] $pengirimen
 * @property Kak $idkak0
 * @property Publikasi $idpublikasi0
 * @property User $user
 */
class Percetakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'percetakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpublikasi'], 'required'],
            [['idpublikasi', 'idkak', 'userid'], 'integer'],
            [['tanggalkirimcetak', 'tanggalselesaicetak', 'time'], 'safe'],
            [['idpublikasi'], 'exist', 'skipOnError' => true, 'targetClass' => Publikasi::className(), 'targetAttribute' => ['idpublikasi' => 'id']],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idpublikasi' => 'Id Publikasi',
            'idkak' => 'Id KAK',
            'tanggalkirimcetak' => 'Tanggal Kirim Cetak',
            'tanggalselesaicetak' => 'Tanggal Selesai Cetak',
            'catatan' => 'Catatan',
            'time' => 'Time',
            'userid' => 'User id',
        ];
    }

    /**
     * Gets query for [[Pengirimen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengirimen()
    {
        return $this->hasOne(Pengiriman::className(), ['idpercetakan' => 'id']);
    }

    /**
     * Gets query for [[Idkak0]].
     *
     * @return \yii\db\ActiveQuery
     */

    /**
     * Gets query for [[Idpublikasi0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdpublikasi0()
    {
        return $this->hasOne(Publikasi::className(), ['id' => 'idpublikasi']);
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

    public function getKaks()
    {
        return $this->hasOne(Kak::className(), ['idpercetakan' => 'id']);
    }

    public function getLaporanPerbulan()
    {
        $currentyear = date("Y");
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand( 'SELECT  ""
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 1 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) January
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 2 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) February
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 3 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) March
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 4 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) April
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 5 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) May
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 6 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) June
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 7 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) July
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 8 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) August
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 9 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) September
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 10 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) October
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 11 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) November
       , COUNT(CASE WHEN  (MONTH(tanggalselesaicetak) = 12 && YEAR(tanggalselesaicetak) = '.$currentyear.')THEN 1 ELSE NULL END) December
       FROM percetakan');
        return $result = $command->queryAll();
    }

    public function getProgressPercetakan()
    {
        $currentyear = date("Y");
        $results = Percetakan::find()
                               ->where(['tanggalselesaicetak' => null])
                               ->andWhere(['YEAR(time)' => $currentyear])
                               ->all();
        return count($results);
    }

    public function getJumlahPercetakan()
    {
        $currentyear = date("Y");
        $results = Percetakan::find()
                               ->where(['YEAR(tanggalselesaicetak)' => $currentyear])
                               ->all();
        return count($results);

    }
}
