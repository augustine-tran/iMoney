<?php

/**
 * This is the model class for table "transaction".
 *
 * The followings are the available columns in table 'transaction':
 * @property string $trans_id
 * @property string $trans_created
 * @property string $trans_type
 * @property integer $trans_amount
 * @property string $trans_comment
 * @property string $account_account_id
 * @property string $user_user_id
 *
 * The followings are the available model relations:
 * @property Account $accountAccount
 * @property User $userUser
 * @property Tag[] $tags
 */
class Transaction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Transaction the static model class
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
		return 'transactions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trans_created, trans_type, trans_amount, user_user_id', 'required'),
			array('trans_amount', 'numerical', 'integerOnly'=>true),
			array('trans_id, account_account_id, user_user_id', 'length', 'max'=>10),
			array('trans_type', 'length', 'max'=>7),
			array('trans_comment', 'length', 'max'=>145),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('trans_id, trans_created, trans_type, trans_amount, trans_comment, account_account_id, user_user_id', 'safe', 'on'=>'search'),
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
			'account' => array(self::BELONGS_TO, 'Account', 'account_account_id'),
			'owner' => array(self::BELONGS_TO, 'User', 'user_user_id'),
			'tags' => array(self::MANY_MANY, 'Tag', 'transaction_tag(trans_id, tag_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'trans_id' => 'Trans ID',
			'trans_created' => 'Trans Created',
			'trans_type' => 'Trans Type',
			'trans_amount' => 'Trans Amount',
			'trans_comment' => 'Trans Comment',
			'account_account_id' => 'Account Account',
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

		$criteria->compare('trans_id',$this->trans_id,true);
		$criteria->compare('trans_created',$this->trans_created,true);
		$criteria->compare('trans_type',$this->trans_type,true);
		$criteria->compare('trans_amount',$this->trans_amount);
		$criteria->compare('trans_comment',$this->trans_comment,true);
		$criteria->compare('account_account_id',$this->account_account_id,true);
		$criteria->compare('user_user_id',$this->user_user_id,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
	
	public function beforeValidate() {
		if ($this->isNewRecord) {
			$this->trans_created = new CDbException('NOW()');
		}
		return parent::beforeValidate();
	}
	
	public function getTransactionTypeOptions() {
		return array(0 => 'Expense', 1 => 'Income', 2 => 'Refund');
	}
	
	public function getAccountOptions() {
		$user = User::model()->findByPk(Yii::app()->user->ID);
		return CHtml::listData($user->accounts, 'account_id', 'account_name');
	}
	
	public function getTransactionTypeText() {
		$arr = $this->getTransactionTypeOptions();
		return $arr[$this->trans_type];
	}
}