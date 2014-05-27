<?php

/**
 * This is the model class for table "editores".
 *
 * The followings are the available columns in table 'editores':
 * @property string $EDI_CORREL
 * @property string $PUB_CORREL
 * @property string $EDI_NOMBRE
 * @property string $EDI_APELLIDOPATERNO
 * @property string $EDI_APELLIDOMATERNO
 */
class Editores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'editores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUB_CORREL, EDI_NOMBRE, EDI_APELLIDOPATERNO, EDI_APELLIDOMATERNO', 'required'),
			array('PUB_CORREL', 'length', 'max'=>10),
			array('EDI_NOMBRE, EDI_APELLIDOPATERNO, EDI_APELLIDOMATERNO', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EDI_CORREL, PUB_CORREL, EDI_NOMBRE, EDI_APELLIDOPATERNO, EDI_APELLIDOMATERNO', 'safe', 'on'=>'search'),
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
			'EDI_CORREL' => 'Edi Correl',
			'PUB_CORREL' => 'Pub Correl',
			'EDI_NOMBRE' => 'Edi Nombre',
			'EDI_APELLIDOPATERNO' => 'Edi Apellidopaterno',
			'EDI_APELLIDOMATERNO' => 'Edi Apellidomaterno',
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

		$criteria->compare('EDI_CORREL',$this->EDI_CORREL,true);
		$criteria->compare('PUB_CORREL',$this->PUB_CORREL,true);
		$criteria->compare('EDI_NOMBRE',$this->EDI_NOMBRE,true);
		$criteria->compare('EDI_APELLIDOPATERNO',$this->EDI_APELLIDOPATERNO,true);
		$criteria->compare('EDI_APELLIDOMATERNO',$this->EDI_APELLIDOMATERNO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Editores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
