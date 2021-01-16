<?php

/**
 * This is the model class for table "prestasi_mhs".
 *
 * The followings are the available columns in table 'prestasi_mhs':
 * @property integer $id_prestasi
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $nama_kegiatan
 * @property string $wkt_penyelenggaraan
 * @property string $tingkat
 * @property string $prestasi_dicapai
 * @property string $sumber_data
 * @property string $lampiran
 */
class PrestasiMhs extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	 public $nama_mahasiswa_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PrestasiMhs the static model class
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
		return 'prestasi_mhs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tempat,id_prodi, id_mahasiswa id_administrasi, nama_kegiatan, wkt_penyelenggaraan, tingkat, jenis_prestasi','required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('nama_kegiatan', 'length', 'max'=>100),
			array('wkt_penyelenggaraan', 'length', 'max'=>4),
			array('tingkat', 'length', 'max'=>13),
			array('jenis_prestasi', 'length', 'max'=>50),
			array('sumber_data', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tempat,nama_mahasiswa_search,th_akademik_search, nama_prodi_search,id_prestasi, id_prodi, id_administrasi, nama_kegiatan, wkt_penyelenggaraan, tingkat, jenis_prestasi, sumber_data', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		// tambahan
		return array(
			'relasi_administrasi'=>array(self::BELONGS_TO, 'Administrasi', 'id_administrasi'),
			'relasi_prodi'=>array(self::BELONGS_TO, 'Prodi', 'id_prodi'),
			'relasi_mahasiswa'=>array(self::BELONGS_TO,'mahasiswaS3','id_mahasiswa'),
		);
		// end tambahan
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tempat'=>'Tempat Penyelenggaraan',
			'id_prestasi' => 'Id Prestasi',
			'id_prodi' => 'Nama Prodi',
			'id_mahasiswa'=>'Nama Mahasiswa',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'nama_kegiatan' => 'Nama Kegiatan',
			'wkt_penyelenggaraan' => 'Waktu Penyelenggaraan',
			'tingkat' => 'Tingkat',
			'jenis_prestasi' => 'jenis_prestasi',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : Prestasi_tahunakreditasi (.zip) contoh Prestasi_2012.zip)',
			'th_akademik_search'=>'Tahun akademik',
			'nama_prodi_search'=>'Nama Prodi',
			'nama_mahasiswa_search'=>'Nama Mahasiswa',
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

		// tambahan
		$criteria->with = array( 'relasi_prodi','relasi_administrasi' );

		$criteria->compare('id_prestasi',$this->id_prestasi);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('nama_kegiatan',$this->nama_kegiatan,true);
		$criteria->compare('wkt_penyelenggaraan',$this->wkt_penyelenggaraan,true);
		$criteria->compare('tingkat',$this->tingkat,true);
		$criteria->compare('jenis_prestasi',$this->jenis_prestasi,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('id_mahasiswa',$this->id_mahasiswa,true);
		$criteria->compare('nama_mahasiswa_search',$this->nama_mahasiswa_search,true);
		$criteria->compare('tempat',$this->tempat,true);
		// tambahan
		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);
		// end tambahan
		// tambahan
		if(Yii::app()->user->group_id == 1){

		}else{
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}
		// end tambahan

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}