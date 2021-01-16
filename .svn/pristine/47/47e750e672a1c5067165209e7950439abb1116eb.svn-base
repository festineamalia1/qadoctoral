<?php

/**
 * This is the model class for table "administrasi".
 *
 * The followings are the available columns in table 'administrasi':
 * @property integer $id_administrasi
 * @property string $th_akademik
 * @property string $nama_petugas
 * @property string $th_akreditasi
 * @property string $sumber_data
 * @property string $lampiran
 *
 * The followings are the available model relations:
 * @property VisiMisi[] $visiMisis
 */
class Administrasi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Administrasi the static model class
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
		return 'administrasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('th_akademik, nama_petugas, th_akreditasi, sumber_data, lampiran', 'required'),
			array('th_akademik, th_akreditasi', 'length', 'max'=>10),
			array('nama_petugas', 'length', 'max'=>50),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_administrasi, th_akademik, nama_petugas, th_akreditasi, sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'visiMisis' => array(self::HAS_MANY, 'VisiMisi', 'id_administrasi'),
			'tataPamong' => array(self::HAS_MANY, 'TataPamong', 'id_administrasi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_administrasi' => 'Id Administrasi',
			'th_akademik' => 'Th Akademik',
			'nama_petugas' => 'Nama Petugas',
			'th_akreditasi' => 'Th Akreditasi',
			'sumber_data' => 'Sumber Data',
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

		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('th_akademik',$this->th_akademik,true);
		$criteria->compare('nama_petugas',$this->nama_petugas,true);
		$criteria->compare('th_akreditasi',$this->th_akreditasi,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}