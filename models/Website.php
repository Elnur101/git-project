<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "website".
 *
 * @property string $id
 * @property string $title
 * @property integer $price
 * @property integer $old_price
 * @property string $text
 * @property string $text2
 * @property string $content
 * @property string $image
 */
class Website extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'website';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price'], 'required'],
            [['price', 'old_price'], 'integer'],
            [['content'], 'string'],
            [['title', 'text', 'text2', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'text' => 'Text',
            'text2' => 'Text2',
            'content' => 'Content',
            'image' => 'Image',
        ];
    }
}
