<?php

/**
 * This is the model class for table "capaian_dosen".
 *
 * The followings are the available columns in table 'capaian_dosen':
 * @property integer $id_capaian
 * @property integer $id_prodi
 * @property integer $id_dosen
 * @property integer $id_administrasi
 * @property string $prestasi
 * @property string $waktu
 * @property string $tingkat
 * @property string $bidang
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class CapaianDosen extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	 public $nama_dosen_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CapaianDosen the static model class
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
		return 'capaian_dosen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, id_dosen, prestasi, waktu, tingkat,bidang','required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, id_dosen', 'numerical', 'integerOnly'=>true),
			// array('nama_dosen', 'length', 'max'=>200),
			array('waktu', 'length', 'max'=>4),
			array('tingkat, bidang', 'length', 'max'=>20),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nama_dosen_search,th_akademik_search, nama_prodi_search,id_capaian, id_prodi, id_administrasi, id_dosen, prestasi, waktu, tingkat, bidang, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'relasi_dosen'=>array(self::BELONGS_TO, 'DataDosen', 'id_dosen'),
		);
		// end tambahan
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_capaian' => 'Id Capaian',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'id_dosen' => 'Nama Dosen',
			// 'nama_dosen' => 'Nama Dosen',
			'prestasi' => 'Prestasi yang dicapai',
			'waktu' => 'Waktu Pencapaian',
			'tingkat' => 'Tingkat',
			'bidang' => 'Bidang',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : PrestasiDosen_tahunakreditasi (.zip) contoh PrestasiDosen_2012.zip)',
			'th_akademik_search'=>'Tahun akademik',
			'nama_prodi_search'=>'Nama Prodi',
			'nama_dosen_search'=>'Nama Dosen',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi','relasi_dosen' );

		$criteria->compare('id_capaian',$this->id_capaian);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_dosen',$this->id_dosen);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		// $criteria->compare('nama_dosen',$this->nama_dosen,true);
		$criteria->compare('prestasi',$this->prestasi,true);
		$criteria->compare('waktu',$this->waktu,true);
		$criteria->compare('tingkat',$this->tingkat,true);
		$criteria->compare('bidang',$this->bidang,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('lampiran',$this->lampiran,true);


		// tambahan
		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);

		$criteria->compare('relasi_dosen.nama_dosen',$this->nama_dosen_search,true);
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