<?php

/**
 * This is the model class for table "himpunan_alumni".
 *
 * The followings are the available columns in table 'himpunan_alumni':
 * @property integer $id_himpunan
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $aktivitas
 * @property string $hasil_kegiatan
 * @property string $jenis_kegiatan
 * @property string $sumbangan_dana
 * @property string $sumbangan_fasilitas
 * @property string $libat_kegiatan
 * @property string $kembang_jejaring
 * @property string $sedia_fasilitas
 * @property string $sumber_data
 * @property string $lampiran
 */
class HimpunanAlumni extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HimpunanAlumni the static model class
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
		return 'himpunan_alumni';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, aktivitas, hasil_kegiatan, jenis_kegiatan, sumbangan_dana, sumbangan_fasilitas, libat_kegiatan, kembang_jejaring, sedia_fasilitas, sumber_data', 'required'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('jenis_kegiatan', 'length', 'max'=>8),
			array('sumber_data', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_himpunan, id_prodi, id_administrasi, aktivitas, hasil_kegiatan, jenis_kegiatan, sumbangan_dana, sumbangan_fasilitas, libat_kegiatan, kembang_jejaring, sedia_fasilitas, sumber_data', 'safe', 'on'=>'search'),
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
		);
		// end tambahan
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_himpunan' => 'Id Himpunan',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'aktivitas' => 'Aktivitas',
			'hasil_kegiatan' => 'Hasil Kegiatan',
			'jenis_kegiatan' => 'Jenis Kegiatan',
			'sumbangan_dana' => 'Sumbangan Dana',
			'sumbangan_fasilitas' => 'Sumbangan Fasilitas',
			'libat_kegiatan' => 'Libat Kegiatan',
			'kembang_jejaring' => 'Kembang Jejaring',
			'sedia_fasilitas' => 'Sedia Fasilitas',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : Alumni_tahunakreditasi (.zip) contoh Alumni_2012.zip)',
			'th_akademik_search'=>'Th akademik',
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

		// tambahan
		$criteria->with = array( 'relasi_prodi','relasi_administrasi' );

		$criteria->compare('id_himpunan',$this->id_himpunan);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('aktivitas',$this->aktivitas,true);
		$criteria->compare('hasil_kegiatan',$this->hasil_kegiatan,true);
		$criteria->compare('jenis_kegiatan',$this->jenis_kegiatan,true);
		$criteria->compare('sumbangan_dana',$this->sumbangan_dana,true);
		$criteria->compare('sumbangan_fasilitas',$this->sumbangan_fasilitas,true);
		$criteria->compare('libat_kegiatan',$this->libat_kegiatan,true);
		$criteria->compare('kembang_jejaring',$this->kembang_jejaring,true);
		$criteria->compare('sedia_fasilitas',$this->sedia_fasilitas,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);

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