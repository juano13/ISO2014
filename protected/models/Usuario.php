<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $USU_CORREL
 * @property string $USU_NOMBRE
 * @property string $USU_APELLIDOPATERNO
 * @property string $USU_APELLIDOMATERNO
 * @property string $USU_EMAIL
 * @property string $USU_DIRECCION
 * @property string $USU_FONO
 * @property string $USU_USERNAME
 * @property string $USU_PASSWORD
 * @property string $USU_ROLE
 * @property string $USU_GRADO
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USU_NOMBRE, USU_APELLIDOPATERNO, USU_APELLIDOMATERNO, USU_EMAIL, USU_DIRECCION, USU_FONO, USU_USERNAME, USU_PASSWORD, USU_ROLE', 'required'),
			array('USU_NOMBRE, USU_APELLIDOPATERNO, USU_APELLIDOMATERNO, USU_USERNAME, USU_PASSWORD, USU_ROLE', 'length', 'max'=>20),
			array('USU_EMAIL, USU_GRADO', 'length', 'max'=>45),
			array('USU_DIRECCION', 'length', 'max'=>100),
			array('USU_FONO', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('USU_CORREL, USU_NOMBRE, USU_APELLIDOPATERNO, USU_APELLIDOMATERNO, USU_EMAIL, USU_DIRECCION, USU_FONO, USU_USERNAME, USU_PASSWORD, USU_ROLE, USU_GRADO', 'safe', 'on'=>'search'),
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
			'USU_CORREL' => 'Usu Correl',
			'USU_NOMBRE' => 'Usu Nombre',
			'USU_APELLIDOPATERNO' => 'Usu Apellidopaterno',
			'USU_APELLIDOMATERNO' => 'Usu Apellidomaterno',
			'USU_EMAIL' => 'Usu Email',
			'USU_DIRECCION' => 'Usu Direccion',
			'USU_FONO' => 'Usu Fono',
			'USU_USERNAME' => 'Usu Username',
			'USU_PASSWORD' => 'Usu Password',
			'USU_ROLE' => 'Usu Role',
			'USU_GRADO' => 'Usu Grado',
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

		$criteria->compare('USU_CORREL',$this->USU_CORREL,true);
		$criteria->compare('USU_NOMBRE',$this->USU_NOMBRE,true);
		$criteria->compare('USU_APELLIDOPATERNO',$this->USU_APELLIDOPATERNO,true);
		$criteria->compare('USU_APELLIDOMATERNO',$this->USU_APELLIDOMATERNO,true);
		$criteria->compare('USU_EMAIL',$this->USU_EMAIL,true);
		$criteria->compare('USU_DIRECCION',$this->USU_DIRECCION,true);
		$criteria->compare('USU_FONO',$this->USU_FONO,true);
		$criteria->compare('USU_USERNAME',$this->USU_USERNAME,true);
		$criteria->compare('USU_PASSWORD',$this->USU_PASSWORD,true);
		$criteria->compare('USU_ROLE',$this->USU_ROLE,true);
		$criteria->compare('USU_GRADO',$this->USU_GRADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
