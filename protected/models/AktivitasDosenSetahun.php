<?php

/**
 * This is the model class for table "aktivitas_dosen_setahun".
 *
 * The followings are the available columns in table 'aktivitas_dosen_setahun':
 * @property integer $id_aktivitas_setahun
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $nama_dosen
 * @property string $bidang_keahlian
 * @property string $kode_mk
 * @property string $nama_mk
 * @property integer $jum_kelas
 * @property integer $jum_rencana_pertemuan
 * @property integer $jum_pertemuan_terlaksana
 * @property string $status_dosen
 * @property string $status_bidang
 * @property string $sumber_data
 * @property string $lampiran
 */
class AktivitasDosenSetahun extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return AktivitasDosenSetahun the static model class
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
		return 'aktivitas_dosen_setahun';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, nama_dosen, bidang_keahlian, kode_mk, nama_mk, jum_kelas, jum_rencana_pertemuan, jum_pertemuan_terlaksana, status_bidang, sumber_data', 'required'),
			array('id_prodi, id_administrasi, jum_kelas, jum_rencana_pertemuan, jum_pertemuan_terlaksana', 'numerical', 'integerOnly'=>true),
			array('nama_dosen, bidang_keahlian, nama_mk', 'length', 'max'=>30),
			array('kode_mk', 'length', 'max'=>20),
			array('status_dosen', 'length', 'max'=>11),
			array('status_bidang', 'length', 'max'=>15),
			array('sumber_data', 'length', 'max'=>100),
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_aktivitas_setahun, id_prodi, id_administrasi, nama_dosen, bidang_keahlian, kode_mk, nama_mk, jum_kelas, jum_rencana_pertemuan, jum_pertemuan_terlaksana, status_dosen, status_bidang, sumber_data', 'safe', 'on'=>'search'),
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
			'id_aktivitas_setahun' => 'Id Aktivitas Setahun',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'nama_dosen' => 'Nama Dosen',
			'bidang_keahlian' => 'Bidang Keahlian',
			'kode_mk' => 'Kode Mk',
			'nama_mk' => 'Nama Mk',
			'jum_kelas' => 'Jum Kelas',
			'jum_rencana_pertemuan' => 'Jum Rencana Pertemuan',
			'jum_pertemuan_terlaksana' => 'Jum Pertemuan Terlaksana',
			'status_dosen' => 'Status Dosen',
			'status_bidang' => 'Status Bidang',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran',
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

		$criteria->compare('id_aktivitas_setahun',$this->id_aktivitas_setahun);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('nama_dosen',$this->nama_dosen,true);
		$criteria->compare('bidang_keahlian',$this->bidang_keahlian,true);
		$criteria->compare('kode_mk',$this->kode_mk,true);
		$criteria->compare('nama_mk',$this->nama_mk,true);
		$criteria->compare('jum_kelas',$this->jum_kelas);
		$criteria->compare('jum_rencana_pertemuan',$this->jum_rencana_pertemuan);
		$criteria->compare('jum_pertemuan_terlaksana',$this->jum_pertemuan_terlaksana);
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