<?php

/**
 * This is the model class for table "otros".
 *
 * The followings are the available columns in table 'otros':
 * @property string $PUB_CORREL
 * @property string $OTR_NOMBRE
 * @property string $OTR_TITULO
 * @property string $OTR_FECHA
 * @property string $OTR_DESCRIPCION
 */
class Otros extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'otros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUB_CORREL, OTR_NOMBRE, OTR_TITULO, OTR_FECHA', 'required'),
			array('PUB_CORREL', 'length', 'max'=>10),
			array('OTR_NOMBRE', 'length', 'max'=>45),
			array('OTR_TITULO', 'length', 'max'=>100),
			array('OTR_DESCRIPCION', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PUB_CORREL, OTR_NOMBRE, OTR_TITULO, OTR_FECHA, OTR_DESCRIPCION', 'safe', 'on'=>'search'),
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
			'OTR_NOMBRE' => 'Otr Nombre',
			'OTR_TITULO' => 'Otr Titulo',
			'OTR_FECHA' => 'Otr Fecha',
			'OTR_DESCRIPCION' => 'Otr Descripcion',
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
		$criteria->compare('OTR_NOMBRE',$this->OTR_NOMBRE,true);
		$criteria->compare('OTR_TITULO',$this->OTR_TITULO,true);
		$criteria->compare('OTR_FECHA',$this->OTR_FECHA,true);
		$criteria->compare('OTR_DESCRIPCION',$this->OTR_DESCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Otros the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
