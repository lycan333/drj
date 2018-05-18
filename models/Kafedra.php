<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Kafedra".
 *
 * @property int $id
 * @property string $Nomi
 * @property int $status
 */
class Kafedra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Kafedra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nomi', 'status'], 'required'],
            [['status'], 'integer'],
            [['Nomi'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Nomi' => 'Nomi',
            'status' => 'Status',
        ];
    }
}
