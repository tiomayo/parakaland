<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "main_banner".
 *
 * @property integer $id
 * @property string $nama_banner
 * @property string $gambar_banner
 * @property string $status
 * @property string $judul_banner
 * @property string $keterangan_banner
 */
class MainBanner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'main_banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_banner', 'gambar_banner', 'status'], 'required'],
            [['status'], 'string'],
            [['nama_banner', 'gambar_banner', 'judul_banner', 'keterangan_banner'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_banner' => 'Nama Banner',
            'gambar_banner' => 'Gambar Banner',
            'status' => 'Status',
            'judul_banner' => 'Judul Banner',
            'keterangan_banner' => 'Keterangan Banner',
        ];
    }
}
