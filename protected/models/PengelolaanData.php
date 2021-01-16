<?php

/**
 * This is the model class for table "pengelolaan_data".
 *
 * The followings are the available columns in table 'pengelolaan_data':
 * @property integer $id_kelola_data
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $jenis_data
 * @property string $sistem_pengelolaan
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class PengelolaanData extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PengelolaanData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pengelolaan_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, jenis_data, sistem_pengelolaan, sumber_data, lampiran', 'required'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('jenis_data', 'length', 'max'=>18),
			array('sistem_pengelolaan', 'length', 'max'=>16),
			//tambahan
			array('sumber_data, lampiran', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_kelola_data, id_prodi, id_administrasi, jenis_data, sistem_pengelolaan, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_kelola_data' => 'Id Kelola Data',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'jenis_data' => 'Jenis Data',
			'sistem_pengelolaan' => 'Sistem Pengelolaan',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_kelola_data',$this->id_kelola_data);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('jenis_data',$this->jenis_data,true);
		$criteria->compare('sistem_pengelolaan',$this->sistem_pengelolaan,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('lampiran',$this->lampiran,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}