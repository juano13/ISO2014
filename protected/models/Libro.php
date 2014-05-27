<?php

/**
 * This is the model class for table "libro".
 *
 * The followings are the available columns in table 'libro':
 * @property string $PUB_CORREL
 * @property string $LIB_NOMBRE
 * @property string $LIB_TITULO
 * @property string $LIB_FECHAINGRESO
 * @property string $LIB_EDICION
 * @property string $LIB_FECHAPUBLICACION
 * @property string $LIB_CAPLIBRO
 */
class Libro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'libro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUB_CORREL, LIB_NOMBRE, LIB_TITULO, LIB_FECHAINGRESO, LIB_EDICION, LIB_FECHAPUBLICACION', 'required'),
			array('PUB_CORREL', 'length', 'max'=>10),
			array('LIB_NOMBRE, LIB_EDICION, LIB_CAPLIBRO', 'length', 'max'=>45),
			array('LIB_TITULO', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PUB_CORREL, LIB_NOMBRE, LIB_TITULO, LIB_FECHAINGRESO, LIB_EDICION, LIB_FECHAPUBLICACION, LIB_CAPLIBRO', 'safe', 'on'=>'search'),
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
			'PUB_CORREL' => 'N° Libro',
			'LIB_NOMBRE' => 'Nombre Libro',
			'LIB_TITULO' => 'Titulo',
			'LIB_FECHAINGRESO' => 'Fecha ingreso',
			'LIB_EDICION' => 'Edicion',
			'LIB_FECHAPUBLICACION' => 'Fecha publicacion',
			'LIB_CAPLIBRO' => 'Capitulo de libro',
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
		$criteria->compare('LIB_NOMBRE',$this->LIB_NOMBRE,true);
		$criteria->compare('LIB_TITULO',$this->LIB_TITULO,true);
		$criteria->compare('LIB_FECHAINGRESO',$this->LIB_FECHAINGRESO,true);
		$criteria->compare('LIB_EDICION',$this->LIB_EDICION,true);
		$criteria->compare('LIB_FECHAPUBLICACION',$this->LIB_FECHAPUBLICACION,true);
		$criteria->compare('LIB_CAPLIBRO',$this->LIB_CAPLIBRO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Libro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
