<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DarsRejasi".
 *
 * @property int $id
 * @property int $Fan_id
 * @property int $xona_id
 * @property int $para
 * @property int $kun
 * @property int $Fantype
 * @property int $Gid
 *
 * @property Fanlar $fan
 * @property Xona $xona
 * @property Roomtype $fantype
 * @property Groups $g
 */
class DarsRejasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'DarsRejasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fan_id', 'xona_id', 'para', 'kun', 'Fantype', 'Gid'], 'required'],
            [['Fan_id', 'xona_id', 'para', 'kun', 'Fantype', 'Gid'], 'integer'],
            [['Fan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fanlar::className(), 'targetAttribute' => ['Fan_id' => 'id']],
            [['xona_id'], 'exist', 'skipOnError' => true, 'targetClass' => Xona::className(), 'targetAttribute' => ['xona_id' => 'id']],
            [['Fantype'], 'exist', 'skipOnError' => true, 'targetClass' => Roomtype::className(), 'targetAttribute' => ['Fantype' => 'id']],
            [['Gid'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['Gid' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Fan_id' => 'Fan ID',
            'xona_id' => 'Xona ID',
            'para' => 'Para',
            'kun' => 'Kun',
            'Fantype' => 'Fantype',
            'Gid' => 'Gid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFan()
    {
        return $this->hasOne(Fanlar::className(), ['id' => 'Fan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getXona()
    {
        return $this->hasOne(Xona::className(), ['id' => 'xona_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFantype()
    {
        return $this->hasOne(Roomtype::className(), ['id' => 'Fantype']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getG()
    {
        return $this->hasOne(Groups::className(), ['id' => 'Gid']);
    }
}
