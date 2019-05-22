<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "doctor".
 *
 * @property int $id
 * @property int $doctor_id
 * @property string $name
 * @property int $phone
 * @property string $email
 * @property string $password
 * @property int $status
 */
class Doctor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['doctor_id', 'name', 'phone', 'email', 'password'], 'required'],
            [['doctor_id', 'phone', 'status'], 'integer'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'doctor_id' => 'Doctor ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'password' => 'Password',
            'status' => 'Status',
        ];
    }
}
