<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Flows".
 *
 * @property int $id
 * @property string $name
 * @property int $faku_id
 * @property int $course
 * @property int $Study_year
 *
 * @property Fakulted $faku
 * @property Groups[] $groups
 * @property SubjectsToFlows[] $subjectsToFlows
 */
class Flows extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Flows';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'faku_id', 'course', 'Study_year'], 'required'],
            [['faku_id', 'course', 'Study_year'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['faku_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fakulted::className(), 'targetAttribute' => ['faku_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'faku_id' => 'Faku ID',
            'course' => 'Course',
            'Study_year' => 'Study Year',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaku()
    {
        return $this->hasOne(Fakulted::className(), ['id' => 'faku_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Groups::className(), ['flow_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectsToFlows()
    {
        return $this->hasMany(SubjectsToFlows::className(), ['Flow_id' => 'id']);
    }
}
