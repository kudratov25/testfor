<?php

namespace app\modules\cabinet\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $user_name
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $password
 * @property string $auth_key
 * @property string $created_at
 * @property string|null $lasted_at
 * @property string $password_text
 * @property string $access_token
 * @property string $confirm_token
 * @property int $status
 * @property string $password_hash
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_name', 'first_name', 'last_name', 'email', 'password', 'auth_key', 'password_text', 'access_token', 'confirm_token', 'status', 'password_hash'], 'required'],
            [['created_at', 'lasted_at'], 'safe'],
            [['status'], 'integer'],
            [['user_name', 'first_name', 'last_name', 'email', 'password', 'auth_key', 'password_text', 'access_token', 'confirm_token', 'password_hash'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_name' => Yii::t('app', 'User Name'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'password' => Yii::t('app', 'Password'),
            'auth_key' => Yii::t('app', 'Auth Key'),
            'created_at' => Yii::t('app', 'Created At'),
            'lasted_at' => Yii::t('app', 'Lasted At'),
            'password_text' => Yii::t('app', 'Password Text'),
            'access_token' => Yii::t('app', 'Access Token'),
            'confirm_token' => Yii::t('app', 'Confirm Token'),
            'status' => Yii::t('app', 'Status'),
            'password_hash' => Yii::t('app', 'Password Hash'),
        ];
    }
}
