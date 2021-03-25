<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Bidang]].
 *
 * @see Bidang
 */
class BidangQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Bidang[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Bidang|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
