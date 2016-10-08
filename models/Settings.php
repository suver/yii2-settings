<?php

namespace suver\settings\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "{{%suver-settings}}".
 *
 * @property integer $id
 * @property string $model
 * @property integer $parent_id
 * @property string $mime_type
 * @property integer $size
 * @property string $original_name
 * @property string $name
 * @property string $extension
 * @property integer $type
 * @property string $created_at
 * @property string $updated_at
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%suver-settings}}';
    }

    public function behaviors()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'key'], 'required'],
            [['option', 'type'], 'integer'],
            [['text', 'params'], 'safe'],
            [['value', 'key'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type' => Yii::t('common', 'Тип'),
            'key' => Yii::t('common', 'Ключь'),
            'value' => Yii::t('common', 'Значение'),
            'text' => Yii::t('common', 'Значение'),
            'option' => Yii::t('common', 'Опция'),
            'params' => Yii::t('common', 'Параметры'),
        ];
    }
    /**
     * @inheritdoc
     * @return SettingsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SettingsQuery(get_called_class());
    }


}
