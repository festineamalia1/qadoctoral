<?php

/**
 * This is the model class for table "himpunan_alumni_s3".
 *
 * The followings are the available columns in table 'himpunan_alumni_s3':
 * @property integer $id_himpunans3
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $himpunan_alumni
 * @property string $sumbangan_dana
 * @property string $sumbangan_fasilitas
 * @property string $masukan_perbaikan_pembelajaran
 * @property string $pengembangan_jejaring
 * @property string $hasil_kegiatan
 * @property string $sumber_data
 * @property string $lampiran
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 */
class HimpunanAlumniS3 extends CActiveRecord
{
	public $th_akademik_search;
	 public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HimpunanAlumniS3 the static model class
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
		return 'himpunan_alumni_s3';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi,id_administrasi,himpunan_alumni','required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('himpunan_alumni', 'length', 'max'=>5),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			array('sumbangan_dana, sumbangan_fasilitas, masukan_perbaikan_pembelajaran, pengembangan_jejaring, hasil_kegiatan', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nama_prodi_search,th_akademik_search,id_himpunans3, id_prodi, id_administrasi, himpunan_alumni, sumbangan_dana, sumbangan_fasilitas, masukan_perbaikan_pembelajaran, pengembangan_jejaring, hasil_kegiatan, sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_himpunans3' => 'Id Himpunan S3',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang akreditasi',
			'himpunan_alumni' => 'Himpunan Alumni',
			'sumbangan_dana' => 'Sumbangan Dana',
			'sumbangan_fasilitas' => 'Sumbangan Fasilitas',
			'masukan_perbaikan_pembelajaran' => 'Masukan untuk Perbaikan Proses Pembelajaran',
			'pengembangan_jejaring' => 'Pengembangan Jejaring',
			'hasil_kegiatan' => 'Hasil Kegiatan',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : Alumni_tahunakreditasi (.zip) contoh Alumni_2012.zip)',
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

		$criteria->compare('id_himpunans3',$this->id_himpunans3);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('himpunan_alumni',$this->himpunan_alumni,true);
		$criteria->compare('sumbangan_dana',$this->sumbangan_dana,true);
		$criteria->compare('sumbangan_fasilitas',$this->sumbangan_fasilitas,true);
		$criteria->compare('masukan_perbaikan_pembelajaran',$this->masukan_perbaikan_pembelajaran,true);
		$criteria->compare('pengembangan_jejaring',$this->pengembangan_jejaring,true);
		$criteria->compare('hasil_kegiatan',$this->hasil_kegiatan,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);

		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}