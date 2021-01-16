<?php

/**
 * This is the model class for table "substansi_praktek".
 *
 * The followings are the available columns in table 'substansi_praktek':
 * @property integer $id_substansi
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property integer $kode_mk
 * @property string $judul_modul
 * @property string $jam_pelaksanaan
 * @property string $lokasi_praktek
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class SubstansiPraktek extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SubstansiPraktek the static model class
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
		return 'substansi_praktek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, kode_mk, judul_modul, jam_pelaksanaan, lokasi_praktek','required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('judul_modul, lokasi_praktek', 'length', 'max'=>30),
			array('jam_pelaksanaan', 'length', 'max'=>20),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_substansi, id_prodi, id_administrasi, kode_mk, judul_modul, jam_pelaksanaan, lokasi_praktek, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'relasi_mk'=>array(self::BELONGS_TO, 'MkKurikulum', 'kode_mk'),
		);
		// end tambahan
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_substansi' => 'Id Substansi',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'kode_mk' => 'Kode Mata Kuliah',
			'judul_modul' => 'Judul Modul',
			'jam_pelaksanaan' => 'Jam Pelaksanaan',
			'lokasi_praktek' => 'Lokasi Praktek',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran',
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
		// tambahan
		$criteria->with = array( 'relasi_prodi','relasi_administrasi','relasi_mk' );

		$criteria->compare('id_substansi',$this->id_substansi);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('kode_mk',$this->kode_mk);
		$criteria->compare('judul_modul',$this->judul_modul,true);
		$criteria->compare('jam_pelaksanaan',$this->jam_pelaksanaan,true);
		$criteria->compare('lokasi_praktek',$this->lokasi_praktek,true);
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