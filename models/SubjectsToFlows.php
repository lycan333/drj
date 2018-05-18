<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SubjectsToFlows".
 *
 * @property int $id
 * @property int $Flow_id
 * @property int $Subject_id
 *
 * @property Flows $flow
 * @property Fanlar $subject
 */
class SubjectsToFlows extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SubjectsToFlows';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Flow_id', 'Subject_id'], 'required'],
            [['Flow_id', 'Subject_id'], 'integer'],
            [['Flow_id'], 'exist', 'skipOnError' => true, 'targetClass' => Flows::className(), 'targetAttribute' => ['Flow_id' => 'id']],
            [['Subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fanlar::className(), 'targetAttribute' => ['Subject_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Flow_id' => 'Flow ID',
            'Subject_id' => 'Subject ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFlow()
    {
        return $this->hasOne(Flows::className(), ['id' => 'Flow_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Fanlar::className(), ['id' => 'Subject_id']);
    }
}
