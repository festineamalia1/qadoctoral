<?php

/**
 * This is the model class for table "mk_kurikulum".
 *
 * The followings are the available columns in table 'mk_kurikulum':
 * @property string $kode_mk
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $semester
 * @property string $nama_mk
 * @property string $bobot_sks
 * @property string $jenis_sks
 * @property string $bobot_tgs
 * @property string $kelengkapan_deskripsi
 * @property string $kelengkapan_silabus
 * @property string $kelengkapan_SAP
 * @property string $penyelenggara
 * @property string $ket_tambahan
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class MkKurikulum extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MkKurikulum the static model class
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
		return 'mk_kurikulum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kode_mk, id_prodi, id_administrasi, semester, nama_mk, bobot_sks, jenis_sks, kelengkapan_deskripsi, kelengkapan_silabus, 
				kelengkapan_SAP, penyelenggara, perkuliahan, tugas_khusus, penelitian, hasil_penelitian','required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('kode_mk', 'length', 'max'=>15),
			array('semester, bobot_sks, kelengkapan_deskripsi, kelengkapan_silabus, kelengkapan_SAP', 'length', 'max'=>5),
			array('nama_mk, sumber_data, lampiran', 'length', 'max'=>100),
			array('jenis_sks', 'length', 'max'=>13),
			array('penyelenggara, ket_tambahan', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,kode_mk, id_prodi, id_administrasi, semester, nama_mk, bobot_sks, jenis_sks, bobot_tgs, kelengkapan_deskripsi, kelengkapan_silabus, kelengkapan_SAP, penyelenggara, ket_tambahan, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			//'kode_mk' => 'Kode Mk',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'semester' => 'Semester',
			'nama_mk' => 'Nama Mata Kuliah',
			'bobot_sks' => 'Bobot SKS',
			'jenis_sks' => 'Jenis SKS',
			'kelengkapan_deskripsi' => 'Kelengkapan Deskripsi',
			'kelengkapan_silabus' => 'Kelengkapan Silabus',
			'kelengkapan_SAP' => 'Kelengkapan SAP',
			'penyelenggara' => 'Penyelenggara',
			'perkuliahan' => 'Struktur Kurikulum Perkuliahan',
			'tugas_khusus' => 'Struktur Kurikulum Tugas Khusus',
			'penelitian' => 'Struktur Kurikulum Penelitian Disertasi',
			'hasil_penelitian' => 'Struktur Kurikulum Hasil Penelitian Disertasi',
			'ket_tambahan' => 'Keterangan Tambahan',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran',
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

		$criteria->compare('kode_mk',$this->kode_mk,true);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('semester',$this->semester,true);
		$criteria->compare('nama_mk',$this->nama_mk,true);
		$criteria->compare('bobot_sks',$this->bobot_sks,true);
		$criteria->compare('jenis_sks',$this->jenis_sks,true);
		$criteria->compare('kelengkapan_deskripsi',$this->kelengkapan_deskripsi,true);
		$criteria->compare('kelengkapan_silabus',$this->kelengkapan_silabus,true);
		$criteria->compare('kelengkapan_SAP',$this->kelengkapan_SAP,true);
		$criteria->compare('penyelenggara',$this->penyelenggara,true);
		$criteria->compare('perkuliahan',$this->perkuliahan,true);
		$criteria->compare('tugas_khusus',$this->tugas_khusus,true);
		$criteria->compare('penelitian',$this->penelitian,true);
		$criteria->compare('hasil_penelitian',$this->hasil_penelitian,true);
		$criteria->compare('ket_tambahan',$this->ket_tambahan,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
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