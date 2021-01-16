<?php

/**
 * This is the model class for table "disertasi".
 *
 * The followings are the available columns in table 'disertasi':
 * @property integer $id_disertasi
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $judul_disertasi
 * @property string $nama_mhs_s3
 * @property string $ts
 * @property integer $id_dosen
 * @property integer $id_sumber_data
 * @property string $sumber_data
 * @property string $lampiran
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 * @property DataDosen $idDosen
 */
class disertasi extends CActiveRecord
{	
	public $th_akademik_search;
	public $nama_prodi_search;
	public $nama_dosen_search;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return disertasi the static model class
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
		return 'disertasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, judul_disertasi, nama_mhs_s3, ts, id_dosen', 'required'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('nama_mhs_s3, judul_disertasi, sumber_data, lampiran', 'length', 'max'=>100),
			array('ts', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,nama_dosen_search,id_disertasi, id_prodi, id_administrasi, judul_disertasi, nama_mhs_s3, ts, id_sumber_data, sumber_data, lampiran,id_dosen', 'safe', 'on'=>'search'),
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
			'id_disertasi' => 'Id disertasi',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang',
			'judul_disertasi' => 'Judul Disertasi',
			'nama_mhs_s3' => 'Nama Mahasiswa',
			'ts' => 'Tahun Akademik',
			'id_dosen' => 'Nama Dosen Pembimbing',
			'id_sumber_data' => 'Id Sumber Data',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran',
			'th_akademik_search'=>'Th akademik',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi','relasi_dosen');

		$criteria->compare('id_disertasi',$this->id_disertasi);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('judul_disertasi',$this->judul_disertasi);
		$criteria->compare('nama_mhs_s3',$this->nama_mhs_s3,true);
		$criteria->compare('ts',$this->ts,true);
		$criteria->compare('id_dosen',$this->id_dosen,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);

		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);
		$criteria->compare('relasi_dosen.nama_dosen',$this->nama_dosen_search,true);

		

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