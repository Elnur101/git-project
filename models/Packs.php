<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "packs".
 *
 * @property string $id
 * @property string $title
 * @property integer $price
 * @property string $qty_st
 * @property string $week
 */
class Packs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'packs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'price', 'qty_st', 'week'], 'required'],
            [['price'], 'integer'],
            [['title', 'qty_st', 'week'], 'string', 'max' => 255],
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
            'qty_st' => 'Qty St',
            'week' => 'Week',
        ];
    }
}
