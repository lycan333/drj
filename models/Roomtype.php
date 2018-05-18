<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "roomtype".
 *
 * @property int $id
 * @property string $Name
 *
 * @property DarsRejasi[] $darsRejasis
 * @property Xona[] $xonas
 */
class Roomtype extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'roomtype';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDarsRejasis()
    {
        return $this->hasMany(DarsRejasi::className(), ['Fantype' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getXonas()
    {
        return $this->hasMany(Xona::className(), ['Xona_Turi' => 'id']);
    }
}
