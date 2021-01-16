<?php

/**
 * This is the model class for table "judul_pelayanandanpengabdian".
 *
 * The followings are the available columns in table 'judul_pelayanandanpengabdian':
 * @property integer $id_pelayana
 * @property integer $id_administrasi
 * @property integer $id_prodi
  * @property integer $id_dosen
 * @property string $judul_kegiatan_pengabdian
 * @property string $wkt_awl
 * @property string $wkt_akh
 * @property string $hasil
 * @property string $ts
 * @property string $lampiran
 * @property integer $id_sumber_data
 * @property string $sumber_data
 *
 * The followings are the available model relations:
 * @property Administrasi $idAdministrasi
 * @property Prodi $idProdi
 */
class JudulPelayanandanpengabdian extends CActiveRecord
{	
	public $th_akademik_search;
	public $nama_prodi_search;
	public $nama_dosen_search;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JudulPelayanandanpengabdian the static model class
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
		return 'judul_pelayanandanpengabdian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_administrasi, id_prodi, judul_kegiatan_pengabdian, wkt_awl, wkt_akh, hasil, id_dosen, ts', 'required'),
			array('id_administrasi, id_prodi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('judul_kegiatan_pengabdian, lampiran, sumber_data', 'length', 'max'=>100),
			array('hasil', 'length', 'max'=>200),
			array('ts', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,nama_dosen_search,id_pelayana, id_administrasi, id_prodi, judul_kegiatan_pengabdian, wkt_awl, wkt_akh, hasil, id_dosen, ts, lampiran, id_sumber_data, sumber_data', 'safe', 'on'=>'search'),
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
			'id_pelayana' => 'Id Pelayana',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'id_prodi' => 'Nama Prodi',
			'judul_kegiatan_pengabdian' => 'Judul Kegiatan Pengabdian',
			'wkt_awl' => 'Waktu Mulai (yyyy-mm-dd)',
			'wkt_akh' => 'Waktu Akhir (yyyy-mm-dd)',
			'hasil' => 'Hasil Kegiatan',
			'id_dosen' => 'Nama Dosen',
			'ts' => 'Tahun Akademik',
			'lampiran' => 'Lampiran',
			'id_sumber_data' => 'Id Sumber Data',

			'sumber_data' => 'Sumber Data',
			'nama_prodi_search'=>'Nama Prodi',
			'th_akademik_search'=>'Tahun Akademik',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi','relasi_dosen');

		$criteria->compare('id_pelayana',$this->id_pelayana);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('judul_kegiatan_pengabdian',$this->judul_kegiatan_pengabdian,true);
		$criteria->compare('wkt_awl',$this->wkt_awl,true);
		$criteria->compare('wkt_akh',$this->wkt_akh,true);
		$criteria->compare('hasil',$this->hasil,true);
		$criteria->compare('id_dosen',$this->id_dosen,true);
		$criteria->compare('ts',$this->ts,true);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('sumber_data',$this->sumber_data,true);

		
		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);
		$criteria->compare('relasi_dosen.nama_dosen',$this->nama_dosen_search,true);


		if(Yii::app()->user->group_id == 1){

		}else{
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}