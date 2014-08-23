<?php

/**
 * This is the model class for table "position".
 *
 * The followings are the available columns in table 'position':
 * @property integer $id
 * @property string $rank
 * @property integer $afpServiceNum
 * @property string $branchOfService
 * @property string $unitAddress
 * @property string $positioncol
 * @property integer $client_id
 *
 * The followings are the available model relations:
 * @property Person $client
 */
class Position extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'position';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('client_id', 'required'),
			array('afpServiceNum, client_id', 'numerical', 'integerOnly'=>true),
			array('rank, branchOfService, unitAddress, positioncol', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, rank, afpServiceNum, branchOfService, unitAddress, positioncol, client_id', 'safe', 'on'=>'search'),
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
			'client' => array(self::BELONGS_TO, 'Employee', 'client_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'rank' => 'Rank',
			'afpServiceNum' => 'AFP Service Number',
			'branchOfService' => 'Branch Of Service',
			'unitAddress' => 'Unit Address',
			'positioncol' => 'Positioncol',
			'client_id' => 'Client',
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
		$criteria->compare('rank',$this->rank,true);
		$criteria->compare('afpServiceNum',$this->afpServiceNum);
		$criteria->compare('branchOfService',$this->branchOfService,true);
		$criteria->compare('unitAddress',$this->unitAddress,true);
		$criteria->compare('positioncol',$this->positioncol,true);
		//$criteria->compare('client_id',$this->client_id,true);
		
		//add the magic letter 't' to refer to the 'main' (not the related) table:
		$criteria->compare('t.id',$this->id);
		$criteria->compare('client.emp_lname',$this->client_id, true);
		
		//load the related table at the same time:
		$criteria->with=array('client');
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Position the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
}
