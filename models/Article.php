<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $image
 * @property int $user_id
 * @property string $date
 * @property int $article_category
 *
 * @property ArticleCategory $articleCategory
 * @property User $user
 * @property ArticleComment[] $articleComments
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title','description','content'], 'string'],
            [['date'], 'date', 'format'=>'php:Y-m-d'],
            [['date'], 'default', 'value' => date('Y-m-d')],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'content' => 'Content',
            'image' => 'Image',
            'user_id' => 'User ID',
            'date' => 'Date',
            'article_category' => 'Article Category',
        ];
    }

    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }


    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }
    
    public function getImage()
    {
        return ($this->image) ? '/uploads/' . $this->image : 'noImage.jpg';      
    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }


    public function saveArticleCategory($article_category) 
    {
        $category = ArticleCategory::findOne($article_category);
        if($category != null)
        {
            $this->link('category', $category);
            return true;            
        }
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleCategory()
    {
        return $this->hasOne(ArticleCategory::className(), ['id' => 'article_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleComments()
    {
        return $this->hasMany(ArticleComment::className(), ['article' => 'id']);
    }
}
