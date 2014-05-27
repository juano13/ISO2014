<?php

/**
 * This is the model class for table "paper".
 *
 * The followings are the available columns in table 'paper':
 * @property string $PUB_CORREL
 * @property string $PAP_NOMBRE
 * @property string $PAP_TITULO
 * @property string $PAP_FECHAINGRESO
 * @property string $PAP_OBJETIVO
 */
class Paper extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paper';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUB_CORREL, PAP_NOMBRE, PAP_TITULO, PAP_FECHAINGRESO, PAP_OBJETIVO', 'required'),
			array('PUB_CORREL', 'length', 'max'=>10),
			array('PAP_NOMBRE, PAP_OBJETIVO', 'length', 'max'=>45),
			array('PAP_TITULO', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PUB_CORREL, PAP_NOMBRE, PAP_TITULO, PAP_FECHAINGRESO, PAP_OBJETIVO', 'safe', 'on'=>'search'),
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
			'PUB_CORREL' => 'N° Paper',
			'PAP_NOMBRE' => 'Nombre Paper',
			'PAP_TITULO' => 'Titulo',
			'PAP_FECHAINGRESO' => 'Fecha Ingreso',
			'PAP_OBJETIVO' => 'Objetivo',
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
		$criteria->compare('PAP_NOMBRE',$this->PAP_NOMBRE,true);
		$criteria->compare('PAP_TITULO',$this->PAP_TITULO,true);
		$criteria->compare('PAP_FECHAINGRESO',$this->PAP_FECHAINGRESO,true);
		$criteria->compare('PAP_OBJETIVO',$this->PAP_OBJETIVO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paper the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
