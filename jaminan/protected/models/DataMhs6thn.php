<?php

/**
 * This is the model class for table "data_mhs_6thn".
 *
 * The followings are the available columns in table 'data_mhs_6thn':
 * @property integer $id_mhs6thn
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $TS_jum
 * @property string $value_jumlah
 * @property integer $jum_lulusan
 * @property string $sumber_data
 * @property string $lampiran
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 */
class DataMhs6thn extends CActiveRecord
{
	public $th_akademik_search;
	public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DataMhs6thn the static model class
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
		return 'data_mhs_6thn';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, TS_jum, value_jumlah, jum_lulusan, sumber_data', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, jum_lulusan', 'numerical', 'integerOnly'=>true),
			array('TS_jum', 'length', 'max'=>3),
			array('value_jumlah', 'length', 'max'=>10),
			array('sumber_data', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nama_prodi_search,th_akademik_search,id_mhs6thn, id_prodi, id_administrasi, TS_jum, value_jumlah, jum_lulusan, sumber_data', 'safe', 'on'=>'search'),
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
			'relasi_prodi' => array(self::BELONGS_TO, 'Prodi', 'id_prodi'),
			'relasi_administrasi' => array(self::BELONGS_TO, 'Administrasi', 'id_administrasi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mhs6thn' => 'Id Mhs6thn',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'TS_jum' => 'Jumlah Mahasiswa Reguler per Angkatan pada Tahun',
			'value_jumlah' => 'Jumlah',
			'jum_lulusan' => 'Jumlah Lulusan s.d. TS (dari Mahasiswa Reguler)',
			'sumber_data' => 'Sumber Data',
			//'lampiran' => 'Lampiran File (Format nama file : DataMhs5th_tahunakreditasi (.zip) contoh DataMhs5th_2012.zip)',
			'th_akademik_search'=>'Tahun akademik',
			'nama_prodi_search'=>'Nama Prodi',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi' );
		$criteria->compare('id_mhs6thn',$this->id_mhs6thn);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('TS_jum',$this->TS_jum,true);
		$criteria->compare('value_jumlah',$this->value_jumlah,true);
		$criteria->compare('jum_lulusan',$this->jum_lulusan);
		$criteria->compare('sumber_data',$this->sumber_data,true);
	//	$criteria->compare('lampiran',$this->lampiran,true);

		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);
		// end tambahan
		// tambahan
		if(Yii::app()->user->group_id == 1){

		}else{
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}