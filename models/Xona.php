<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Xona".
 *
 * @property int $id
 * @property int $Xona_Turi
 * @property int $num
 * @property int $T_soni
 * @property int $Korpus_id
 * @property int $status
 *
 * @property DarsRejasi[] $darsRejasis
 * @property Roomtype $xonaTuri
 * @property Korpus $korpus
 */
class Xona extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Xona';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Xona_Turi', 'num', 'T_soni', 'Korpus_id', 'status'], 'required'],
            [['Xona_Turi', 'num', 'T_soni', 'Korpus_id', 'status'], 'integer'],
            [['Xona_Turi'], 'exist', 'skipOnError' => true, 'targetClass' => Roomtype::className(), 'targetAttribute' => ['Xona_Turi' => 'id']],
            [['Korpus_id'], 'exist', 'skipOnError' => true, 'targetClass' => Korpus::className(), 'targetAttribute' => ['Korpus_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Xona_Turi' => 'Xona  Turi',
            'num' => 'Num',
            'T_soni' => 'T Soni',
            'Korpus_id' => 'Korpus ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDarsRejasis()
    {
        return $this->hasMany(DarsRejasi::className(), ['xona_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getXonaTuri()
    {
        return $this->hasOne(Roomtype::className(), ['id' => 'Xona_Turi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKorpus()
    {
        return $this->hasOne(Korpus::className(), ['id' => 'Korpus_id']);
    }
}
