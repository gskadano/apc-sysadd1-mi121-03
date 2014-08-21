<?php

/**
 * This is the model class for table "conf_godparent".
 *
 * The followings are the available columns in table 'conf_godparent':
 * @property integer $id
 * @property integer $confirmation_id
 * @property integer $person_id
 *
 * The followings are the available model relations:
 * @property Confirmation $confirmation
 * @property Person $person
 */
class ConfGodparent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'conf_godparent';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('confirmation_id, person_id', 'required'),
			array('confirmation_id, person_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, confirmation_id, person_id', 'safe', 'on'=>'search'),
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
			'confirmation' => array(self::BELONGS_TO, 'Confirmation', 'confirmation_id'),
			'person' => array(self::BELONGS_TO, 'Person', 'person_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'confirmation_id' => 'Confirmation',
			'person_id' => 'Person',
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
		//$criteria->compare('confirmation_id',$this->confirmation_id);
		//$criteria->compare('person_id',$this->person_id);
		
		//add the magic letter 't' to refer to the 'main' (not the related) table:
		$criteria->compare('t.id',$this->id);
		$criteria->compare('confirmation.id',$this->confirmation_id, true);
		$criteria->compare('person.p_lname',$this->person_id, true);

		//load the related table at the same time:
		$criteria->with=array('confirmation','person');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ConfGodparent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
