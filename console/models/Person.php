<?php

namespace console\models;

use Yii;
//use app\models\Person;
use yii\db\ActiveRecod;
use yii\db\ActiveDataRecord;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "person".
 *
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $male
 * @property string $date
 *
 * @property Address[] $addresses
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'person';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'male'], 'required'],
            [['age'], 'integer'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 55],
            [['male'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'age' => Yii::t('app', 'Age'),
            'male' => Yii::t('app', 'Male'),
            'date' => Yii::t('app', 'Date'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['user_id' => 'id']);
    }
}
