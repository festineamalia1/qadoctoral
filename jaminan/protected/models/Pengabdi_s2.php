<?php

/**
 * This is the model class for table "pengabdi".
 *
 * The followings are the available columns in table 'pengabdi':
 * @property integer $id_pengabdian
 * @property integer $id_administrasi
 * @property integer $id_prodi
 * @property string $sumber_biaya
 * @property integer $waktu_ts
 * @property integer $waktu_ts1
 * @property integer $waktu_ts2
 * @property integer $jumlah_kegiatan
 * @property integer $mhsiswa_terlibat_kegiatan
 * @property string $judul_pengabdian
 * @property integer $id_sumber_data
 * @property string $sumber_data
 * @property string $lampiran
 * @property string $detail_sumber_biaya
 *
 * The followings are the available model relations:
 * @property Administrasi $idAdministrasi
 * @property Prodi $idProdi
 */
class Pengabdi_s2 extends CActiveRecord
{	
	public $th_akademik_search;
	public $nama_prodi_search;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pengabdi_s2 the static model class
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
		return 'pengabdi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_administrasi, id_prodi, sumber_biaya, waktu_ts, waktu_ts1, waktu_ts2', 'required'),
			array('id_administrasi, id_prodi, waktu_ts, waktu_ts1, waktu_ts2, jumlah_kegiatan, mhsiswa_terlibat_kegiatan, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('sumber_biaya', 'length', 'max'=>11),
			array('judul_pengabdian, sumber_data, lampiran, detail_sumber_biaya', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_pengabdian, id_administrasi, id_prodi, sumber_biaya, waktu_ts, waktu_ts1, waktu_ts2, jumlah_kegiatan, mhsiswa_terlibat_kegiatan, judul_pengabdian, id_sumber_data, sumber_data, lampiran, detail_sumber_biaya', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pengabdian' => 'Id Pengabdian',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'id_prodi' => 'Nama Prodi',
			'sumber_biaya' => 'Sumber Biaya',
			'waktu_ts' => 'Jumlah Penelitian/PKM pd TS',
			'waktu_ts1' => 'Jumlah Penelitian/PKM pd TS1',
			'waktu_ts2' => 'Jumlah Penelitian/PKM pd TS2',
			'jumlah_kegiatan' => 'Jumlah Kegiatan',
			'mhsiswa_terlibat_kegiatan' => 'Mhsiswa Terlibat Kegiatan',
			'judul_pengabdian' => 'Judul  Kegiatan Pengabdian',
			'id_sumber_data' => 'Id Sumber Data',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran',
			'detail_sumber_biaya' => 'Detail Sumber Biaya',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi');

		$criteria->compare('id_pengabdian',$this->id_pengabdian);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('sumber_biaya',$this->sumber_biaya,true);
		$criteria->compare('waktu_ts',$this->waktu_ts);
		$criteria->compare('waktu_ts1',$this->waktu_ts1);
		$criteria->compare('waktu_ts2',$this->waktu_ts2);
		$criteria->compare('jumlah_kegiatan',$this->jumlah_kegiatan);
		$criteria->compare('mhsiswa_terlibat_kegiatan',$this->mhsiswa_terlibat_kegiatan);
		$criteria->compare('judul_pengabdian',$this->judul_pengabdian,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('detail_sumber_biaya',$this->detail_sumber_biaya,true);

		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);


		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);


		if(Yii::app()->user->group_id == 1){

		}else{
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}