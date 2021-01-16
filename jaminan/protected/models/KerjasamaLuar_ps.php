<?php

/**
 * This is the model class for table "kerjasama_luar".
 *
 * The followings are the available columns in table 'kerjasama_luar':
 * @property integer $id_kerjasama_luar
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $nama_instansi_luar
 * @property string $jenis_kegiatan_luar
 * @property string $th_mulai_luar
 * @property string $th_akhir_luar
 * @property string $manfaat_luar
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 * @property string $ts
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 */
class KerjasamaLuar_ps extends CActiveRecord
{	
	 public $th_akademik_search;
	 public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KerjasamaLuar_ps the static model class
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
		return 'kerjasama_luar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, nama_instansi_luar, jenis_kegiatan_luar, th_mulai_luar, th_akhir_luar, manfaat_luar, ts', 'required'),
			array('id_kerjasama_luar, id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('nama_instansi_luar', 'length', 'max'=>225),
			array('th_mulai_luar, th_akhir_luar, ts', 'length', 'max'=>4),
			array('sumber_data', 'length', 'max'=>150),
			array('lampiran', 'file', 'types'=>'zip'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_kerjasama_luar, id_prodi, id_administrasi, nama_instansi_luar, jenis_kegiatan_luar, th_mulai_luar, th_akhir_luar, manfaat_luar, sumber_data, id_sumber_data, lampiran, ts', 'safe', 'on'=>'search'),
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
		// end tambahan
	}
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kerjasama_luar' => 'Id Kerjasama Luar',
			'id_prodi' => 'Nama  Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'nama_instansi_luar' => 'Nama Instansi ',
			'jenis_kegiatan_luar' => 'Jenis Kegiatan',
			'th_mulai_luar' => 'Tahun Mulai ',
			'th_akhir_luar' => 'Tahun Akhir ',
			'manfaat_luar' => 'Manfaat ',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : DataDosen_tahunakreditasi (.zip) contoh DataDosen_2012.zip)',
			'ts' => 'Tahun akademik',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi' );

		$criteria->compare('id_kerjasama_luar',$this->id_kerjasama_luar);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('nama_instansi_luar',$this->nama_instansi_luar,true);
		$criteria->compare('jenis_kegiatan_luar',$this->jenis_kegiatan_luar,true);
		$criteria->compare('th_mulai_luar',$this->th_mulai_luar,true);
		$criteria->compare('th_akhir_luar',$this->th_akhir_luar,true);
		$criteria->compare('manfaat_luar',$this->manfaat_luar,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('ts',$this->ts,true);

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