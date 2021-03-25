<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "level".
 *
 * @property int $id
 * @property string $namalevel
 */
class Level extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'level';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['namalevel'], 'required'],
            [['namalevel'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'namalevel' => 'Namalevel',
        ];
    }
}
