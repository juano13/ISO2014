<?php

/**
 * This is the model class for table "colaboradores".
 *
 * The followings are the available columns in table 'colaboradores':
 * @property string $COL_CORREL
 * @property string $PUB_CORREL
 * @property string $COL_NOMBRE
 * @property string $COL_APELLIDOPATERNO
 * @property string $COL_APELLIDOMATERNO
 */
class Colaboradores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'colaboradores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PUB_CORREL, COL_NOMBRE, COL_APELLIDOPATERNO, COL_APELLIDOMATERNO', 'required'),
			array('PUB_CORREL', 'length', 'max'=>10),
			array('COL_NOMBRE, COL_APELLIDOPATERNO, COL_APELLIDOMATERNO', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('COL_CORREL, PUB_CORREL, COL_NOMBRE, COL_APELLIDOPATERNO, COL_APELLIDOMATERNO', 'safe', 'on'=>'search'),
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
			'COL_CORREL' => 'Col Correl',
			'PUB_CORREL' => 'Pub Correl',
			'COL_NOMBRE' => 'Col Nombre',
			'COL_APELLIDOPATERNO' => 'Col Apellidopaterno',
			'COL_APELLIDOMATERNO' => 'Col Apellidomaterno',
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

		$criteria->compare('COL_CORREL',$this->COL_CORREL,true);
		$criteria->compare('PUB_CORREL',$this->PUB_CORREL,true);
		$criteria->compare('COL_NOMBRE',$this->COL_NOMBRE,true);
		$criteria->compare('COL_APELLIDOPATERNO',$this->COL_APELLIDOPATERNO,true);
		$criteria->compare('COL_APELLIDOMATERNO',$this->COL_APELLIDOMATERNO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Colaboradores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
