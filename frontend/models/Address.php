<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $email
 * @property string $city
 * @property string $street
 * @property integer $house
 *
 * @property Person $user
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'email', 'city', 'street', 'house'], 'required'],
            [['user_id', 'house'], 'integer'],
            [['email'], 'string', 'max' => 55],
            [['city', 'street'], 'string', 'max' => 30],
            [['email'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Person::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'email' => Yii::t('app', 'Email'),
            'city' => Yii::t('app', 'City'),
            'street' => Yii::t('app', 'Street'),
            'house' => Yii::t('app', 'House'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Person::className(), ['id' => 'user_id']);
    }
}
