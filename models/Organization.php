<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property integer $id_organization
 * @property string $company_name
 * @property string $tagline
 * @property string $address
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property integer $web_status
 *
 * @property Logo[] $logos
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name'], 'required'],
            [['web_status'], 'integer'],
            [['company_name'], 'string', 'max' => 200],
            [['tagline', 'address', 'email'], 'string', 'max' => 255],
            [['phone', 'fax'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_organization' => 'Id Organization',
            'company_name' => 'Company Name',
            'tagline' => 'Tagline',
            'address' => 'Address',
            'phone' => 'Phone',
            'fax' => 'Fax',
            'email' => 'Email',
            'web_status' => 'Web Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogos()
    {
        return $this->hasMany(Logo::className(), ['id_org' => 'id_organization']);
    }
}
