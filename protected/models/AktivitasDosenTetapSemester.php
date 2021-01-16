<?php

/**
 * This is the model class for table "aktivitas_dosen_tetap_semester".
 *
 * The followings are the available columns in table 'aktivitas_dosen_tetap_semester':
 * @property integer $id_aktivitas
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $nama_dosen_tetap
 * @property integer $sks_PSsendiri
 * @property integer $sks_PSlain_PTsendiri
 * @property integer $sks_PSPTlain
 * @property integer $sks_penelitian
 * @property integer $sks_pkm
 * @property integer $sks_manajemen_PTsendiri
 * @property integer $sks_manajemen_PTlain
 * @property integer $jum_sks
 * @property string $sumber_data
 * @property string $lampiran
 */
class AktivitasDosenTetapSemester extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AktivitasDosenTetapSemester the static model class
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
		return 'aktivitas_dosen_tetap_semester';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, nama_dosen_tetap, sks_PSsendiri, sks_PSlain_PTsendiri, sks_PSPTlain, sks_penelitian, sks_pkm, sks_manajemen_PTsendiri, sks_manajemen_PTlain, jum_sks, sumber_data', 'required'),
			array('id_prodi, id_administrasi, sks_PSsendiri, sks_PSlain_PTsendiri, sks_PSPTlain, sks_penelitian, sks_pkm, sks_manajemen_PTsendiri, sks_manajemen_PTlain, jum_sks', 'numerical', 'integerOnly'=>true),
			array('nama_dosen_tetap', 'length', 'max'=>50),
			array('sumber_data', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_prodi,id_aktivitas, id_prodi, id_administrasi, nama_dosen_tetap, sks_PSsendiri, sks_PSlain_PTsendiri, sks_PSPTlain, sks_penelitian, sks_pkm, sks_manajemen_PTsendiri, sks_manajemen_PTlain, jum_sks, sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_aktivitas' => 'Id Aktivitas',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'nama_dosen_tetap' => 'Nama Dosen Tetap',
			'sks_PSsendiri' => 'Sks Pssendiri',
			'sks_PSlain_PTsendiri' => 'Sks Pslain Ptsendiri',
			'sks_PSPTlain' => 'Sks Psptlain',
			'sks_penelitian' => 'Sks Penelitian',
			'sks_pkm' => 'Sks Pkm',
			'sks_manajemen_PTsendiri' => 'Sks Manajemen Ptsendiri',
			'sks_manajemen_PTlain' => 'Sks Manajemen Ptlain',
			'jum_sks' => 'Jum Sks',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : AktifitasDosen_tahunakreditasi (.zip) contoh AktifitasDosen_2012.zip)',
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

		$criteria->compare('id_aktivitas',$this->id_aktivitas);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('nama_dosen_tetap',$this->nama_dosen_tetap,true);
		$criteria->compare('sks_PSsendiri',$this->sks_PSsendiri);
		$criteria->compare('sks_PSlain_PTsendiri',$this->sks_PSlain_PTsendiri);
		$criteria->compare('sks_PSPTlain',$this->sks_PSPTlain);
		$criteria->compare('sks_penelitian',$this->sks_penelitian);
		$criteria->compare('sks_pkm',$this->sks_pkm);
		$criteria->compare('sks_manajemen_PTsendiri',$this->sks_manajemen_PTsendiri);
		$criteria->compare('sks_manajemen_PTlain',$this->sks_manajemen_PTlain);
		$criteria->compare('jum_sks',$this->jum_sks);
		$criteria->compare('sumber_data',$this->sumber_data,true);

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