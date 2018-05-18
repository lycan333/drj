<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Groups".
 *
 * @property int $id
 * @property string $nomi
 * @property int $kurs
 * @property int $Fakul_ID
 * @property int $tsoni
 * @property int $flow_id
 * @property int $study_year
 * @property int $status
 *
 * @property DarsRejasi[] $darsRejasis
 * @property Fakulted $fakul
 * @property Flows $flow
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'kurs', 'Fakul_ID', 'tsoni', 'flow_id', 'study_year', 'status'], 'required'],
            [['kurs', 'Fakul_ID', 'tsoni', 'flow_id', 'study_year', 'status'], 'integer'],
            [['nomi'], 'string', 'max' => 100],
            [['Fakul_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Fakulted::className(), 'targetAttribute' => ['Fakul_ID' => 'id']],
            [['flow_id'], 'exist', 'skipOnError' => true, 'targetClass' => Flows::className(), 'targetAttribute' => ['flow_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Nomi',
            'kurs' => 'Kurs',
            'Fakul_ID' => 'Fakul  ID',
            'tsoni' => 'Tsoni',
            'flow_id' => 'Flow ID',
            'study_year' => 'Study Year',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDarsRejasis()
    {
        return $this->hasMany(DarsRejasi::className(), ['Gid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFakul()
    {
        return $this->hasOne(Fakulted::className(), ['id' => 'Fakul_ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlow()
    {
        return $this->hasOne(Flows::className(), ['id' => 'flow_id']);
    }
}
