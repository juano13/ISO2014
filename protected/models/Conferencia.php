<?php

/**
 * This is the model class for table "conferencia".
 *
 * The followings are the available columns in table 'conferencia':
 * @property string $PUB_CORREL
 * @property string $CON_NOMBRE
 * @property string $CON_FECHAINGRESO
 * @property string $CON_LUGAR
 * @property string $CON_FECHAREALIZACION
 */
class Conferencia extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'conferencia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUB_CORREL, CON_NOMBRE, CON_FECHAINGRESO, CON_LUGAR, CON_FECHAREALIZACION', 'required'),
			array('PUB_CORREL', 'length', 'max'=>10),
			array('CON_NOMBRE, CON_LUGAR', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PUB_CORREL, CON_NOMBRE, CON_FECHAINGRESO, CON_LUGAR, CON_FECHAREALIZACION', 'safe', 'on'=>'search'),
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
			'PUB_CORREL' => 'Pub Correl',
			'CON_NOMBRE' => 'Con Nombre',
			'CON_FECHAINGRESO' => 'Con Fechaingreso',
			'CON_LUGAR' => 'Con Lugar',
			'CON_FECHAREALIZACION' => 'Con Fecharealizacion',
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

		$criteria->compare('PUB_CORREL',$this->PUB_CORREL,true);
		$criteria->compare('CON_NOMBRE',$this->CON_NOMBRE,true);
		$criteria->compare('CON_FECHAINGRESO',$this->CON_FECHAINGRESO,true);
		$criteria->compare('CON_LUGAR',$this->CON_LUGAR,true);
		$criteria->compare('CON_FECHAREALIZACION',$this->CON_FECHAREALIZACION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Conferencia the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
