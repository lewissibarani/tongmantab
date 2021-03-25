<?php

namespace frontend\models;
use common\models\User;
use Yii;

/**
 * This is the model class for table "publikasi".
 *
 * @property int $id
 * @property string $namapublikasi
 * @property int $arcnon
 * @property string $linkdownload
 * @property string $tanggalrilis
 * @property string $tanggaluploadportal
 * @property string $time
 * @property int $userid
 *
 * @property Percetakan[] $percetakans
 * @property User $user
 */
class Publikasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'publikasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namapublikasi', 'arcnon', 'tanggalrilis', 'userid','catatan'], 'required'],
            [['arcnon', 'userid'], 'integer'],
            [['tanggalrilis', 'tanggaluploadportal', 'time'], 'safe'],
            [['namapublikasi', 'linkdownload'], 'string', 'max' => 255],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => Pegawai::className(), 'targetAttribute' => ['userid' => 'id']],
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namapublikasi' => 'Nama Publikasi',
            'arcnon' => 'Arcnon',
            'linkdownload' => 'Link Download',
            'tanggalrilis' => 'Tanggal Rilis',
            'tanggaluploadportal' => 'Tanggal Upload Portal',
            'time' => 'Time',
            'userid' => 'User Id',
            'catatan'=> 'Catatan '
        ];
    }

    /**
     * Gets query for [[Percetakans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPercetakans()
    {

        $result =  $this->hasOne(Percetakan::className(), ['idpublikasi' => 'id']);
        if (!isset($result)){
          throw new Exception("Belum Masuk Percetakan");
      }

      return $result;
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

    public function getJumlahPublikasi()
    {
        $currentyear = date("Y");
        $results = Publikasi::find()
                              ->where(['YEAR(tanggalrilis)' => $currentyear])
                              ->all();
        return count($results);

    }


    public function getProgressPublikasi()
    {
        $currentyear = date("Y");
        $results = Publikasi::find()
                               ->where(['tanggaluploadportal' => 'IS NOT NULL'])
                               ->andWhere(['YEAR(tanggalrilis)' => $currentyear])
                               ->all();
        return count($results);
    }

}
