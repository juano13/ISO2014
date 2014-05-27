<?php

/**
 * This is the model class for table "proyecto".
 *
 * The followings are the available columns in table 'proyecto':
 * @property string $PUB_CORREL
 * @property string $PRO_NOMBRE
 * @property string $PRO_TITULO
 * @property string $PRO_FECHAINGRESO
 * @property string $PRO_DESCRIPCION
 */
class Proyecto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proyecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUB_CORREL, PRO_NOMBRE, PRO_TITULO, PRO_FECHAINGRESO', 'required'),
			array('PUB_CORREL', 'length', 'max'=>10),
			array('PRO_NOMBRE', 'length', 'max'=>45),
			array('PRO_TITULO', 'length', 'max'=>100),
			array('PRO_DESCRIPCION', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PUB_CORREL, PRO_NOMBRE, PRO_TITULO, PRO_FECHAINGRESO, PRO_DESCRIPCION', 'safe', 'on'=>'search'),
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
			'PRO_NOMBRE' => 'Pro Nombre',
			'PRO_TITULO' => 'Pro Titulo',
			'PRO_FECHAINGRESO' => 'Pro Fechaingreso',
			'PRO_DESCRIPCION' => 'Pro Descripcion',
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
		$criteria->compare('PRO_NOMBRE',$this->PRO_NOMBRE,true);
		$criteria->compare('PRO_TITULO',$this->PRO_TITULO,true);
		$criteria->compare('PRO_FECHAINGRESO',$this->PRO_FECHAINGRESO,true);
		$criteria->compare('PRO_DESCRIPCION',$this->PRO_DESCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Proyecto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
