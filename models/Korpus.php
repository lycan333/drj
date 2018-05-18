<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Korpus".
 *
 * @property int $id
 * @property string $nomi
 * @property int $qavat
 * @property int $status
 *
 * @property Xona[] $xonas
 */
class Korpus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Korpus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'qavat'], 'required'],
            [['qavat', 'status'], 'integer'],
            [['nomi'], 'string', 'max' => 100],
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
            'qavat' => 'Qavat',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getXonas()
    {
        return $this->hasMany(Xona::className(), ['Korpus_id' => 'id']);
    }
}
