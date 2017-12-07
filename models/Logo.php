<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "logo".
 *
 * @property integer $id_org
 * @property integer $id_logo
 * @property string $logo_normal
 * @property string $logo_normal_dark
 * @property string $logo_small
 * @property string $logo_small_dark
 *
 * @property Organization $idOrg
 */
class Logo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_org', 'logo_normal', 'logo_small'], 'required'],
            [['id_org'], 'integer'],
            [['logo_normal', 'logo_normal_dark', 'logo_small', 'logo_small_dark'], 'string', 'max' => 255],
            [['id_org'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['id_org' => 'id_organization']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_org' => 'Id Org',
            'id_logo' => 'Id Logo',
            'logo_normal' => 'Logo Normal',
            'logo_normal_dark' => 'Logo Normal Dark',
            'logo_small' => 'Logo Small',
            'logo_small_dark' => 'Logo Small Dark',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdOrg()
    {
        return $this->hasOne(Organization::className(), ['id_organization' => 'id_org']);
    }
}
