<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_wonosalam".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $role
 * @property string $authKey
 * @property string $accessToken
 */
class UserWonosalam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_wonosalam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'role', 'authKey', 'accessToken'], 'required'],
            [['username', 'password', 'role'], 'string', 'max' => 255],
            [['authKey', 'accessToken'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }
}
