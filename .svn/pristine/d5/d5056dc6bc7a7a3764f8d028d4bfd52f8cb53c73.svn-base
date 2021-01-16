<?php

/**
 * This is the model class for table "sdm".
 *
 * The followings are the available columns in table 'sdm':
 * @property integer $id_sdm
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $rekrut_seleksi
 * @property string $penempatan
 * @property string $pengembangan
 * @property string $retensi
 * @property string $berhenti_dosen
 * @property string $berhenti_kependidikan
 * @property string $monitoring
 * @property string $evaluasi
 * @property string $rekam_jejak
 * @property string $ket_tambahan
 * @property string $sumber_data
 * @property string $lampiran
 */
class Sdm extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Sdm the static model class
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
		return 'sdm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, rekrut_seleksi, penempatan, pengembangan, retensi, berhenti_dosen, berhenti_kependidikan, monitoring, evaluasi, rekam_jejak, ket_tambahan, sumber_data', 'required'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('sumber_data', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_sdm, id_prodi, id_administrasi, rekrut_seleksi, penempatan, pengembangan, retensi, berhenti_dosen, berhenti_kependidikan, monitoring, evaluasi, rekam_jejak, ket_tambahan, sumber_data', 'safe', 'on'=>'search'),
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
			'id_sdm' => 'Id Sdm',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'rekrut_seleksi' => 'Rekrut Seleksi',
			'penempatan' => 'Penempatan',
			'pengembangan' => 'Pengembangan',
			'retensi' => 'Retensi',
			'berhenti_dosen' => 'Berhenti Dosen',
			'berhenti_kependidikan' => 'Berhenti Kependidikan',
			'monitoring' => 'Monitoring',
			'evaluasi' => 'Evaluasi',
			'rekam_jejak' => 'Rekam Jejak',
			'ket_tambahan' => 'Ket Tambahan',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : SDM_tahunakreditasi (.zip) contoh SDM_2012.zip)',
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

		$criteria->compare('id_sdm',$this->id_sdm);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('rekrut_seleksi',$this->rekrut_seleksi,true);
		$criteria->compare('penempatan',$this->penempatan,true);
		$criteria->compare('pengembangan',$this->pengembangan,true);
		$criteria->compare('retensi',$this->retensi,true);
		$criteria->compare('berhenti_dosen',$this->berhenti_dosen,true);
		$criteria->compare('berhenti_kependidikan',$this->berhenti_kependidikan,true);
		$criteria->compare('monitoring',$this->monitoring,true);
		$criteria->compare('evaluasi',$this->evaluasi,true);
		$criteria->compare('rekam_jejak',$this->rekam_jejak,true);
		$criteria->compare('ket_tambahan',$this->ket_tambahan,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
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