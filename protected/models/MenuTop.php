<?php

/**
 * This is the model class for table "menu_top".
 *
 * The followings are the available columns in table 'menu_top':
 * @property integer $id
 * @property string $site_id
 * @property string $label
 * @property string $url
 * @property integer $order
 * @property string $highlight
 */
class MenuTop extends ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'menu_top';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('label, url', 'required'),
			array('order, site_id', 'numerical', 'integerOnly'=>true),
			array('label', 'length', 'max'=>64),
			array('url', 'length', 'max'=>255),
			array('highlight', 'length', 'max'=>65535),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, label, url, order, highlight', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('wot', 'ID'),
			'site_id' => Yii::t('wot', 'Site'),
			'label' => Yii::t('wot', 'Label'),
			'url' => Yii::t('wot', 'URL'),
			'order' => Yii::t('wot', 'Sort Order'),
			'highlight' => Yii::t('wot', 'Submenu'),
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

		$criteria->compare('id',$this->id);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('`order`',$this->order);
		$criteria->compare('highlight',$this->highlight,true);

		return new CActiveDataProvider($this, array(
			'pagination'=>array(
				'pageSize'=>50,
			),
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MenuTop the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	protected function beforeSave()
	{
		Yii::app()->cache->set('menuTop', time());
		return parent::beforeSave();
	}
	
	protected function beforeDelete()
	{
		Yii::app()->cache->set('menuTop', time());
		return parent::beforeDelete();
	}
}
