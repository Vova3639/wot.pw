<?php

/**
 * This is the model class for table "polls_answers".
 *
 * The followings are the available columns in table 'polls_answers':
 * @property string $id
 * @property string $site_id
 * @property string $poll_id
 * @property string $account_id
 * @property string $answer
 *
 * The followings are the available model relations:
 * @property Sites $site
 * @property Polls $poll
 * @property Accounts $account
 */
class PollsAnswers extends ActiveRecord
{
	public $count, $percent;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'polls_answers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('poll_id, account_id, answer', 'required'),
			array('site_id', 'length', 'max'=>11),
			array('poll_id, answer', 'length', 'max'=>10),
			array('account_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, site_id, poll_id, account_id, answer', 'safe', 'on'=>'search'),
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
			'site' => array(self::BELONGS_TO, 'Sites', 'site_id'),
			'poll' => array(self::BELONGS_TO, 'Polls', 'poll_id'),
			'account' => array(self::BELONGS_TO, 'Accounts', 'account_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'site_id' => 'Сайт',
			'poll_id' => 'Опрос',
			'account_id' => 'Аккаунт',
			'answer' => 'Ответ',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('site_id',$this->site_id,true);
		$criteria->compare('poll_id',$this->poll_id,true);
		$criteria->compare('account_id',$this->account_id,true);
		$criteria->compare('answer',$this->answer,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PollsAnswers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
