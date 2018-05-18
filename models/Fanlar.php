<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Fanlar".
 *
 * @property int $id
 * @property string $Fan
 * @property int $kid
 * @property int $status
 *
 * @property DarsRejasi[] $darsRejasis
 * @property SubjectsToFlows[] $subjectsToFlows
 */
class Fanlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Fanlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Fan', 'kid', 'status'], 'required'],
            [['kid', 'status'], 'integer'],
            [['Fan'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Fan' => 'Fan',
            'kid' => 'Kid',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDarsRejasis()
    {
        return $this->hasMany(DarsRejasi::className(), ['Fan_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectsToFlows()
    {
        return $this->hasMany(SubjectsToFlows::className(), ['Subject_id' => 'id']);
    }
}
