<?php

/**
 * This is the model class for table "accounts".
 *
 * The followings are the available columns in table 'accounts':
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone
 * @property string $logo
 * @property string $website
 * @property string $subdomain
 * @property integer $status
 * @property integer $parent_account_id
 */
class Accounts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Accounts the static model class
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
		return 'accounts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, address, city, state, zip, phone, logo, website, subdomain, status, parent_account_id', 'required'),
			array('status, parent_account_id', 'numerical', 'integerOnly'=>true),
			array('name, address, city, logo, subdomain', 'length', 'max'=>255),
			array('state', 'length', 'max'=>2),
			array('zip', 'length', 'max'=>10),
			array('phone', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, address, city, state, zip, phone, logo, website, subdomain, status, parent_account_id', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'address' => 'Address',
			'city' => 'City',
			'state' => 'State',
			'zip' => 'Zip',
			'phone' => 'Phone',
			'logo' => 'Logo',
			'website' => 'Website',
			'subdomain' => 'Subdomain',
			'status' => 'Status',
			'parent_account_id' => 'Parent Account',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('subdomain',$this->subdomain,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('parent_account_id',$this->parent_account_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}