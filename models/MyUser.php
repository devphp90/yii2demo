<?php

namespace app\models;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property integer $company_id
 * @property integer $role_id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $phone
 * @property string $address
 * @property string $skype
 * @property string $active_key
 * @property string $created_time
 * @property string $updated_time
 * @property integer $status
 */
class MyUser extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'users';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['company_id', 'username', 'password', 'email', 'first_name', 'last_name'], 'required'],
			[['company_id', 'role_id', 'status'], 'integer'],
			[['created_time', 'updated_time'], 'safe'],
			[['username'], 'string', 'max' => 30],
			[['password'], 'string', 'max' => 32],
			[['email'], 'string', 'max' => 100],
			[['first_name', 'middle_name', 'last_name', 'phone', 'skype'], 'string', 'max' => 20],
			[['address'], 'string', 'max' => 200],
			[['active_key'], 'string', 'max' => 255]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'company_id' => 'Company ID',
			'role_id' => 'Role ID',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'first_name' => 'First Name',
			'middle_name' => 'Middle Name',
			'last_name' => 'Last Name',
			'phone' => 'Phone',
			'address' => 'Address',
			'skype' => 'Skype',
			'active_key' => 'Active Key',
			'created_time' => 'Created Time',
			'updated_time' => 'Updated Time',
			'status' => 'Status',
		];
	}
}
