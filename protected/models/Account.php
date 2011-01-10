<?php

/**
 * This is the model class for table "account".
 *
 * The followings are the available columns in table 'account':
 * @property string $account_id
 * @property string $account_name
 * @property integer $account_balance
 * @property string $account_type
 * @property string $user_user_id
 *
 * The followings are the available model relations:
 * @property User $userUser
 * @property Transaction[] $transactions
 */
class Account extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Account the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'account';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('account_name, account_balance, account_type', 'required'),
			array('account_balance', 'numerical', 'integerOnly'=>true),
			array('account_name', 'length', 'max'=>45),
			array('account_type', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('account_id, account_name, account_balance, account_type, user_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'userUser' => array(self::BELONGS_TO, 'User', 'user_user_id'),
			'transactions' => array(self::HAS_MANY, 'Transaction', 'account_account_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'account_id' => 'Account',
			'account_name' => 'Account Name',
			'account_balance' => 'Account Balance',
			'account_type' => 'Account Type',
			'user_user_id' => 'User User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('account_id',$this->account_id,true);
		$criteria->compare('account_name',$this->account_name,true);
		$criteria->compare('account_balance',$this->account_balance);
		$criteria->compare('account_type',$this->account_type,true);
		$criteria->compare('user_user_id',$this->user_user_id,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}