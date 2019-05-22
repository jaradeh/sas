<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property int $course_id
 * @property string $name
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_id', 'name'], 'required'],
            [['course_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_id' => 'Course ID',
            'name' => 'Name',
        ];
    }
}
