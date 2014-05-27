<?php

/**
 * This is the model class for table "tesis".
 *
 * The followings are the available columns in table 'tesis':
 * @property string $PUB_CORREL
 * @property string $TES_DESCRIPCION
 * @property string $TES_NOMBRE
 * @property string $TES_TITULO
 * @property string $TES_FECHAINGRESO
 */
class Tesis extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tesis';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUB_CORREL, TES_NOMBRE, TES_TITULO, TES_FECHAINGRESO', 'required'),
			array('PUB_CORREL', 'length', 'max'=>10),
			array('TES_DESCRIPCION', 'length', 'max'=>500),
			array('TES_NOMBRE', 'length', 'max'=>45),
			array('TES_TITULO', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PUB_CORREL, TES_DESCRIPCION, TES_NOMBRE, TES_TITULO, TES_FECHAINGRESO', 'safe', 'on'=>'search'),
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
			'TES_DESCRIPCION' => 'Tes Descripcion',
			'TES_NOMBRE' => 'Tes Nombre',
			'TES_TITULO' => 'Tes Titulo',
			'TES_FECHAINGRESO' => 'Tes Fechaingreso',
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
		$criteria->compare('TES_DESCRIPCION',$this->TES_DESCRIPCION,true);
		$criteria->compare('TES_NOMBRE',$this->TES_NOMBRE,true);
		$criteria->compare('TES_TITULO',$this->TES_TITULO,true);
		$criteria->compare('TES_FECHAINGRESO',$this->TES_FECHAINGRESO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tesis the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
