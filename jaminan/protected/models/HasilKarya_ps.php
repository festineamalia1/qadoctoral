<?php

/**
 * This is the model class for table "hasil_karya".
 *
 * The followings are the available columns in table 'hasil_karya':
 * @property integer $id_hasil_karya
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property integer $id_dosen
 * @property string $judul
 * @property string $publikasi
 * @property string $th_publikasi
 * @property string $tingkat
 * @property string $status_haki
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 * @property string $lembaga_akreditasi
 * @property string $tingkat_akreditasi
 * @property string $tgl_publikasi
 * @property string $ts
 */
class HasilKarya_ps extends CActiveRecord
{	
	public $th_akademik_search;
	public $nama_prodi_search;
	public $nama_dosen_search;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HasilKarya_ps the static model class
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
		return 'hasil_karya';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, judul, id_dosen, publikasi, th_publikasi, tingkat, lembaga_akreditasi, tgl_publikasi, ts', 'required'),
			array('id_prodi, id_administrasi,id_dosen, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('publikasi', 'length', 'max'=>250),
			array('th_publikasi, ts', 'length', 'max'=>4),
			array('tingkat, tingkat_akreditasi', 'length', 'max'=>13),
			array('status_haki', 'length', 'max'=>6),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			array('lembaga_akreditasi', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search, nama_dosen_search, id_hasil_karya, id_prodi, id_administrasi, judul, id_dosen, publikasi, th_publikasi, tingkat, status_haki, sumber_data, id_sumber_data, lampiran, lembaga_akreditasi, tingkat_akreditasi, tgl_publikasi, ts', 'safe', 'on'=>'search'),
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
		'relasi_administrasi'=>array(self::BELONGS_TO, 'Administrasi', 'id_administrasi'),
		'relasi_prodi'=>array(self::BELONGS_TO, 'Prodi', 'id_prodi'),
		'relasi_dosen'=>array(self::BELONGS_TO, 'DataDosen', 'id_dosen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_hasil_karya' => 'Id Hasil Karya',
			'id_prodi' => 'Nama  Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'judul' => 'Judul Karya',
			'id_dosen' => 'Nama Dosen',
			'publikasi' => 'Publikasi',
			'th_publikasi' => 'Tahun Publikasi',
			'tingkat' => 'Tingkat',
			'status_haki' => 'Status Haki',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran',
			'lembaga_akreditasi' => 'Lembaga Sitasi',
			'tingkat_akreditasi' => 'Tingkat Sitasi',
			'tgl_publikasi' => 'Tanggal Publikasi (yyyy-mm-dd)',
			'ts' => 'Tahun Akademik',
			'th_akademik_search'=>'Tahun akademik',
			'nama_prodi_search'=>'Nama Prodi',
			'nama_dosen_search'=>'Nama dosen',
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
			$criteria->with = array( 'relasi_prodi','relasi_administrasi','relasi_dosen' );

		$criteria->compare('id_hasil_karya',$this->id_hasil_karya);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('id_dosen',$this->id_dosen,true);
		$criteria->compare('publikasi',$this->publikasi,true);
		$criteria->compare('th_publikasi',$this->th_publikasi,true);
		$criteria->compare('tingkat',$this->tingkat,true);
		$criteria->compare('status_haki',$this->status_haki,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('lembaga_akreditasi',$this->lembaga_akreditasi,true);
		$criteria->compare('tingkat_akreditasi',$this->tingkat_akreditasi,true);
		$criteria->compare('tgl_publikasi',$this->tgl_publikasi,true);
		$criteria->compare('ts',$this->ts,true);

		// tambahan
		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);

		$criteria->compare('relasi.dosen.nama_dosen',$this->nama_dosen_search,true);		// end tambahan
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