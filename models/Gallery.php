<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $id_cluster
 * @property integer $id_gambar
 * @property string $gallery_picture
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cluster', 'gallery_picture'], 'required'],
            [['id_cluster'], 'integer'],
            [['gallery_picture'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cluster' => 'Id Cluster',
            'id_gambar' => 'Id Gambar',
            'gallery_picture' => 'Gallery Picture',
        ];
    }
}
