<?php

namespace app\models;

use Yii;
use common\models\User;
use yii\data\ActiveDataProvider;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $short
 * @property string $full
 * @property integer $author_id
 * @property string $created_at
 *
 * @property User $author
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * Статус поста: опубликованн.
     */
    const STATUS_PUBLISH = 'publish';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['short', 'full'], 'string'],
            [['author_id'], 'required'],
            [['author_id'], 'integer'],
            [['author'], 'string', 'max' => '20'],
            [['publish_status'], 'string', 'max' => '10'],
            [['created_at'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'short' => Yii::t('app', 'Short'),
            'full' => Yii::t('app', 'Full'),
            'publish_status' => Yii::t('app', 'Publish status'),
            'author_id' => Yii::t('app', 'Author ID'),
            'author' => Yii::t('app', 'Author'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * Возвращает опубликованные посты
     * @return ActiveDataProvider
     */
    public function getPublishedNews()
    {
        return new ActiveDataProvider([
            'query' => News::find()
                ->where(['publish_status' => self::STATUS_PUBLISH])
        ]);
    }
    /**
     * Возвращает модель поста.
     * @param int $id
     * @throws NotFoundHttpException в случае, когда пост не найден или не опубликован
     * @return Post
     */
        public function getNews($id)
    {
        if (($model = News::findOne($id)) !== null && $model->isPublished()) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested news does not exist.');
        }
    }
    /**
     * Опубликован ли пост.
     * @return bool
     */
    protected function isPublished()
    {
        return $this->publish_status === self::STATUS_PUBLISH;
    }
}
