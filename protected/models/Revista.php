<?php

/**
 * This is the model class for table "revista".
 *
 * The followings are the available columns in table 'revista':
 * @property string $PUB_CORREL
 * @property string $REV_NOMBRE
 * @property string $REV_TITULO
 * @property string $REV_FECHAINGRESO
 * @property string $REV_NUMEROSERIE
 * @property string $REV_VOLUMEN
 * @property string $REV_FECHAPUBLICACION
 */
class Revista extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'revista';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUB_CORREL, REV_NOMBRE, REV_TITULO, REV_FECHAINGRESO, REV_NUMEROSERIE, REV_VOLUMEN, REV_FECHAPUBLICACION', 'required'),
			array('PUB_CORREL', 'length', 'max'=>10),
			array('REV_NOMBRE', 'length', 'max'=>45),
			array('REV_TITULO', 'length', 'max'=>100),
			array('REV_NUMEROSERIE, REV_VOLUMEN', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PUB_CORREL, REV_NOMBRE, REV_TITULO, REV_FECHAINGRESO, REV_NUMEROSERIE, REV_VOLUMEN, REV_FECHAPUBLICACION', 'safe', 'on'=>'search'),
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
			'REV_NOMBRE' => 'Rev Nombre',
			'REV_TITULO' => 'Rev Titulo',
			'REV_FECHAINGRESO' => 'Rev Fechaingreso',
			'REV_NUMEROSERIE' => 'Rev Numeroserie',
			'REV_VOLUMEN' => 'Rev Volumen',
			'REV_FECHAPUBLICACION' => 'Rev Fechapublicacion',
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
		$criteria->compare('REV_NOMBRE',$this->REV_NOMBRE,true);
		$criteria->compare('REV_TITULO',$this->REV_TITULO,true);
		$criteria->compare('REV_FECHAINGRESO',$this->REV_FECHAINGRESO,true);
		$criteria->compare('REV_NUMEROSERIE',$this->REV_NUMEROSERIE,true);
		$criteria->compare('REV_VOLUMEN',$this->REV_VOLUMEN,true);
		$criteria->compare('REV_FECHAPUBLICACION',$this->REV_FECHAPUBLICACION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Revista the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
