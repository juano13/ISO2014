<?php

/**
 * This is the model class for table "categoriapaper".
 *
 * The followings are the available columns in table 'categoriapaper':
 * @property string $CATP_CORREL
 * @property string $PUB_CORREL
 * @property string $CATP_NOMBRE
 * @property string $CATP_DESCRIPCION
 */
class Categoriapaper extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'categoriapaper';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUB_CORREL, CATP_NOMBRE, CATP_DESCRIPCION', 'required'),
			array('PUB_CORREL', 'length', 'max'=>10),
			array('CATP_NOMBRE', 'length', 'max'=>45),
			array('CATP_DESCRIPCION', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CATP_CORREL, PUB_CORREL, CATP_NOMBRE, CATP_DESCRIPCION', 'safe', 'on'=>'search'),
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
			'CATP_CORREL' => 'Catp Correl',
			'PUB_CORREL' => 'Pub Correl',
			'CATP_NOMBRE' => 'Catp Nombre',
			'CATP_DESCRIPCION' => 'Catp Descripcion',
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

		$criteria->compare('CATP_CORREL',$this->CATP_CORREL,true);
		$criteria->compare('PUB_CORREL',$this->PUB_CORREL,true);
		$criteria->compare('CATP_NOMBRE',$this->CATP_NOMBRE,true);
		$criteria->compare('CATP_DESCRIPCION',$this->CATP_DESCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Categoriapaper the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
