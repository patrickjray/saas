<?php

/**
 * This is the model class for table "configs".
 *
 * The followings are the available columns in table 'configs':
 * @property integer $id
 * @property string $caption
 * @property string $path
 * @property string $name
 * @property string $value
 * @property integer $account_id
 * @property integer $scope_id
 * @property integer $category_id
 */
class Configs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Configs the static model class
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
		return 'configs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('caption, path, name, value, account_id, scope_id, category_id', 'required'),
			array('account_id, scope_id, category_id', 'numerical', 'integerOnly'=>true),
			array('caption, path, name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, caption, path, name, value, account_id, scope_id, category_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'caption' => 'Caption',
			'path' => 'Path',
			'name' => 'Name',
			'value' => 'Value',
			'account_id' => 'Account',
			'scope_id' => 'Scope',
			'category_id' => 'Category',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('account_id',$this->account_id);
		$criteria->compare('scope_id',$this->scope_id);
		$criteria->compare('category_id',$this->category_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}