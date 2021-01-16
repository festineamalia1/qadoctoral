<?php

/**
 * This is the model class for table "data_dosen".
 *
 * The followings are the available columns in table 'data_dosen':
 * @property integer $id_dosen
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $nama_dosen
 * @property string $Nidn
 * @property string $tgl_lahir
 * @property string $jabatan_akademik
 * @property string $gelar_akademik
 * @property integer $F_gelar_akademik_terakhir
 * @property string $pendidikanS1
 * @property string $pendidikanS2
 * @property string $pendidikanS3
 * @property string $asal_PTS1
 * @property string $asal_PTS2
 * @property string $asal_PTS3
 * @property string $bidang_keahlianS1
 * @property string $bidang_keahlianS2
 * @property string $bidang_keahlianS3
 * @property string $status_dosen
 * @property string $status_bidang
 * @property string $sumber_data
 * @property string $lampiran
 */
class DataDosen extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DataDosen the static model class
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
		return 'data_dosen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_dosen, id_prodi, id_administrasi, nama_dosen, Nidn, tgl_lahir, status_dosen, status_bidang', 'required'),
			array('id_dosen, id_prodi, id_administrasi, F_gelar_akademik_terakhir', 'numerical', 'integerOnly'=>true),
			array('nama_dosen, jabatan_akademik, gelar_akademik', 'length', 'max'=>50),
			array('Nidn, pendidikanS1, pendidikanS2, pendidikanS3, bidang_keahlianS3', 'length', 'max'=>30),
			array('asal_PTS1, asal_PTS2, asal_PTS3, bidang_keahlianS1, bidang_keahlianS2', 'length', 'max'=>255),
			array('status_dosen', 'length', 'max'=>11),
			array('status_bidang', 'length', 'max'=>13),
			array('sumber_data', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_dosen, id_prodi, id_administrasi, nama_dosen, Nidn, tgl_lahir, jabatan_akademik, gelar_akademik, F_gelar_akademik_terakhir, pendidikanS1, pendidikanS2, pendidikanS3, asal_PTS1, asal_PTS2, asal_PTS3, bidang_keahlianS1, bidang_keahlianS2, bidang_keahlianS3, status_dosen, status_bidang, sumber_data', 'safe', 'on'=>'search'),
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
			'id_dosen' => 'Id Dosen',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'nama_dosen' => 'Nama Dosen',
			'Nidn' => 'Nidn',
			'tgl_lahir' => 'Tgl Lahir',
			'jabatan_akademik' => 'Jabatan Akademik',
			'gelar_akademik' => 'Gelar Akademik',
			'F_gelar_akademik_terakhir' => 'F Gelar Akademik Terakhir',
			'pendidikanS1' => 'Pendidikan S1',
			'pendidikanS2' => 'Pendidikan S2',
			'pendidikanS3' => 'Pendidikan S3',
			'asal_PTS1' => 'Asal Pts1',
			'asal_PTS2' => 'Asal Pts2',
			'asal_PTS3' => 'Asal Pts3',
			'bidang_keahlianS1' => 'Bidang Keahlian S1',
			'bidang_keahlianS2' => 'Bidang Keahlian S2',
			'bidang_keahlianS3' => 'Bidang Keahlian S3',
			'status_dosen' => 'Status Dosen',
			'status_bidang' => 'Status Bidang',
			'sumber_data' => 'Sumber Data',
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
		// tambahan
		$criteria->with = array( 'relasi_prodi','relasi_administrasi' );

		$criteria->compare('id_dosen',$this->id_dosen);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('nama_dosen',$this->nama_dosen,true);
		$criteria->compare('Nidn',$this->Nidn,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('jabatan_akademik',$this->jabatan_akademik,true);
		$criteria->compare('gelar_akademik',$this->gelar_akademik,true);
		$criteria->compare('F_gelar_akademik_terakhir',$this->F_gelar_akademik_terakhir);
		$criteria->compare('pendidikanS1',$this->pendidikanS1,true);
		$criteria->compare('pendidikanS2',$this->pendidikanS2,true);
		$criteria->compare('pendidikanS3',$this->pendidikanS3,true);
		$criteria->compare('asal_PTS1',$this->asal_PTS1,true);
		$criteria->compare('asal_PTS2',$this->asal_PTS2,true);
		$criteria->compare('asal_PTS3',$this->asal_PTS3,true);
		$criteria->compare('bidang_keahlianS1',$this->bidang_keahlianS1,true);
		$criteria->compare('bidang_keahlianS2',$this->bidang_keahlianS2,true);
		$criteria->compare('bidang_keahlianS3',$this->bidang_keahlianS3,true);
		$criteria->compare('status_dosen',$this->status_dosen,true);
		$criteria->compare('status_bidang',$this->status_bidang,true);
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