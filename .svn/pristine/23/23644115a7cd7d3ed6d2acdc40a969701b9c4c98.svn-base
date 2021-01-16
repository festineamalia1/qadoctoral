<?php

/**
 * This is the model class for table "kerjasama_dlm".
 *
 * The followings are the available columns in table 'kerjasama_dlm':
 * @property integer $id_kerjasama_dlm
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $nama_instansi_dlm
 * @property string $jenis_kegiatan_dlm
 * @property string $th_mulai_dlm
 * @property string $th_akhir_dlm
 * @property string $manfaat_dlm
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 * @property string $ts
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 */
class KerjasamaDlm_ps extends CActiveRecord
{	
	public $th_akademik_search;
	public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KerjasamaDlm_ps the static model class
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
		return 'kerjasama_dlm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, nama_instansi_dlm, jenis_kegiatan_dlm, th_mulai_dlm, th_akhir_dlm, manfaat_dlm, lampiran, ts', 'required'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('nama_instansi_dlm', 'length', 'max'=>225),
			array('th_mulai_dlm, th_akhir_dlm, ts', 'length', 'max'=>4),
			array('sumber_data', 'length', 'max'=>150),
			array('lampiran', 'file', 'types'=>'zip'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_kerjasama_dlm, id_prodi, id_administrasi, nama_instansi_dlm, jenis_kegiatan_dlm, th_mulai_dlm, th_akhir_dlm, manfaat_dlm, sumber_data, id_sumber_data, lampiran, ts', 'safe', 'on'=>'search'),
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
			'id_kerjasama_dlm' => 'Id Kerjasama Dlm',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'nama_instansi_dlm' => 'Nama Instansi ',
			'jenis_kegiatan_dlm' => 'Jenis Kegiatan ',
			'th_mulai_dlm' => 'Tahun Mulai',
			'th_akhir_dlm' => 'Tahun Akhir',
			'manfaat_dlm' => 'Manfaat ',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'ts' => 'Tahun Akademik ',
			'lampiran' => 'Lampiran File (Format nama file harus : DataDosen_tahunakreditasi (.zip) contoh DataDosen_2012.zip)',
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

		$criteria->compare('id_kerjasama_dlm',$this->id_kerjasama_dlm);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('nama_instansi_dlm',$this->nama_instansi_dlm,true);
		$criteria->compare('jenis_kegiatan_dlm',$this->jenis_kegiatan_dlm,true);
		$criteria->compare('th_mulai_dlm',$this->th_mulai_dlm,true);
		$criteria->compare('th_akhir_dlm',$this->th_akhir_dlm,true);
		$criteria->compare('manfaat_dlm',$this->manfaat_dlm,true);
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