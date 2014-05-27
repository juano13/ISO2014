<?php

/**
 * This is the model class for table "autor".
 *
 * The followings are the available columns in table 'autor':
 * @property string $AUT_CORREL
 * @property string $AUT_NOMBRE
 * @property string $AUT_APELLIDOPATERNO
 * @property string $AUT_APELLIDOMATERNO
 */
class Autor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'autor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('AUT_NOMBRE, AUT_APELLIDOPATERNO, AUT_APELLIDOMATERNO', 'required'),
			array('AUT_NOMBRE, AUT_APELLIDOPATERNO, AUT_APELLIDOMATERNO', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AUT_CORREL, AUT_NOMBRE, AUT_APELLIDOPATERNO, AUT_APELLIDOMATERNO', 'safe', 'on'=>'search'),
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
			'AUT_CORREL' => 'N° Autor',
			'AUT_NOMBRE' => 'Nombre Autor',
			'AUT_APELLIDOPATERNO' => 'Apellido Paterno',
			'AUT_APELLIDOMATERNO' => 'Apellido Materno',
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

		$criteria->compare('AUT_CORREL',$this->AUT_CORREL,true);
		$criteria->compare('AUT_NOMBRE',$this->AUT_NOMBRE,true);
		$criteria->compare('AUT_APELLIDOPATERNO',$this->AUT_APELLIDOPATERNO,true);
		$criteria->compare('AUT_APELLIDOMATERNO',$this->AUT_APELLIDOMATERNO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Autor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
