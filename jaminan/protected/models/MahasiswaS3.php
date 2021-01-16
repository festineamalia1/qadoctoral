<?php

/**
 * This is the model class for table "mahasiswa_s3".
 *
 * The followings are the available columns in table 'mahasiswa_s3':
 * @property integer $id_mhs_s3
 * @property string $NIF
 * @property string $nama_mhs_s3
 * @property string $alamat_mhs
 * @property string $daerah_asal
 * @property string $tgl_lahir
 * @property integer $id_administrasi
 * @property integer $id_prodi
 * @property string $jenis_kelamin
 * @property string $warga_negara
 * @property integer $NIU
 * @property string $status
 * @property string $pekerjaan
 * @property string $tgl_masuk
 * @property string $nama_ortu
 */
class MahasiswaS3 extends CActiveRecord
{
	 public $th_akademik_search;
	 public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MahasiswaS3 the static model class
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
		return 'mahasiswa_s3';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NIF, nama_mhs_s3, alamat_mhs, daerah_asal, tgl_lahir, id_administrasi, id_prodi, jenis_kelamin, warga_negara, NIU, status, pekerjaan, tgl_masuk, nama_ortu', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_administrasi, id_prodi, NIU', 'numerical', 'integerOnly'=>true),
			array('NIF', 'length', 'max'=>20),
			array('nama_mhs_s3', 'length', 'max'=>50),
			array('daerah_asal, pekerjaan, nama_ortu', 'length', 'max'=>100),
			array('jenis_kelamin', 'length', 'max'=>9),
			array('warga_negara', 'length', 'max'=>3),
			array('status', 'length', 'max'=>13),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nama_prodi_search,th_akademik_search,id_mhs_s3, NIF, nama_mhs_s3, alamat_mhs, daerah_asal, tgl_lahir, id_administrasi, id_prodi, jenis_kelamin, warga_negara, NIU, status, pekerjaan, tgl_masuk, nama_ortu', 'safe', 'on'=>'search'),
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
			'id_mhs_s3' => 'Id Mhs S3',
			'NIF' => 'NIF',
			'nama_mhs_s3' => 'Nama Mahasiswa',
			'alamat_mhs' => 'Alamat',
			'daerah_asal' => 'Daerah Asal',
			'tgl_lahir' => 'Tanggal Lahir',
			'id_administrasi' => 'Angkatan',
			'id_prodi' => 'Program Studi',
			'jenis_kelamin' => 'Jenis Kelamin',
			'warga_negara' => 'Warga Negara',
			'NIU' => 'NIU',
			'status' => 'Status',
			'pekerjaan' => 'Pekerjaan',
			'tgl_masuk' => 'Tgl Masuk',
			'nama_ortu' => 'Nama Ortu',
			'th_akademik_search'=>'Angkatan',
			'nama_prodi_search'=>'Program studi',
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

		$criteria->compare('id_mhs_s3',$this->id_mhs_s3);
		$criteria->compare('NIF',$this->NIF,true);
		$criteria->compare('nama_mhs_s3',$this->nama_mhs_s3,true);
		$criteria->compare('alamat_mhs',$this->alamat_mhs,true);
		$criteria->compare('daerah_asal',$this->daerah_asal,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('warga_negara',$this->warga_negara,true);
		$criteria->compare('NIU',$this->NIU);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('pekerjaan',$this->pekerjaan,true);
		$criteria->compare('tgl_masuk',$this->tgl_masuk,true);
		$criteria->compare('nama_ortu',$this->nama_ortu,true);

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