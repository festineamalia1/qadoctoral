<?php

/**
 * This is the model class for table "mahasiswa_s2".
 *
 * The followings are the available columns in table 'mahasiswa_s2':
 * @property integer $id_mhs_s2
 * @property string $nim_s2
 * @property string $nama_mhs_s2
 * @property string $alamat_mhs
 * @property string $daerah_asal
 * @property string $tgl_lahir
 * @property integer $id_administrasi
 * @property integer $id_prodi
 * @property integer $id_sumber_data
 * @property string $sumber_data
 * @property string $lampiran
 * @property string $jenis_kelamin
 * @property string $warga_negara
 * @property integer $niu_s2
 * @property string $status
 * @property string $pekerjaan
 * @property string $tgl_masuk
 * @property string $nama_ortu
 *
 * The followings are the available model relations:
 * @property TesisS2[] $tesisS2s
 */
class MahasiswaS2 extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MahasiswaS2 the static model class
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
		return 'mahasiswa_s2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nim_s2, nama_mhs_s2, alamat_mhs, daerah_asal, tgl_lahir, id_administrasi, id_prodi, jenis_kelamin, warga_negara, niu_s2, status, pekerjaan, tgl_masuk, nama_ortu', 'required'),
			array('id_administrasi, id_prodi, id_sumber_data, niu_s2', 'numerical', 'integerOnly'=>true),
			array('nim_s2', 'length', 'max'=>20),
			array('nama_mhs_s2', 'length', 'max'=>50),
			array('daerah_asal, sumber_data, lampiran, pekerjaan, nama_ortu', 'length', 'max'=>100),
			array('jenis_kelamin', 'length', 'max'=>9),
			array('warga_negara', 'length', 'max'=>3),
			array('status', 'length', 'max'=>13),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_mhs_s2, nim_s2, nama_mhs_s2, alamat_mhs, daerah_asal, tgl_lahir, id_administrasi, id_prodi, id_sumber_data, sumber_data, lampiran, jenis_kelamin, warga_negara, niu_s2, status, pekerjaan, tgl_masuk, nama_ortu', 'safe', 'on'=>'search'),
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
			'tesisS2s' => array(self::HAS_MANY, 'TesisS2', 'id_mhs_s2'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_mhs_s2' => 'Id Mhs S2',
			'nim_s2' => 'Nim S2',
			'nama_mhs_s2' => 'Nama Mhs S2',
			'alamat_mhs' => 'Alamat Mhs',
			'daerah_asal' => 'Daerah Asal',
			'tgl_lahir' => 'Tgl Lahir',
			'id_administrasi' => 'Id Administrasi',
			'id_prodi' => 'Id Prodi',
			'id_sumber_data' => 'Id Sumber Data',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran',
			'jenis_kelamin' => 'Jenis Kelamin',
			'warga_negara' => 'Warga Negara',
			'niu_s2' => 'Niu S2',
			'status' => 'Status',
			'pekerjaan' => 'Pekerjaan',
			'tgl_masuk' => 'Tgl Masuk',
			'nama_ortu' => 'Nama Ortu',
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

		$criteria->compare('id_mhs_s2',$this->id_mhs_s2);
		$criteria->compare('nim_s2',$this->nim_s2,true);
		$criteria->compare('nama_mhs_s2',$this->nama_mhs_s2,true);
		$criteria->compare('alamat_mhs',$this->alamat_mhs,true);
		$criteria->compare('daerah_asal',$this->daerah_asal,true);
		$criteria->compare('tgl_lahir',$this->tgl_lahir,true);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('warga_negara',$this->warga_negara,true);
		$criteria->compare('niu_s2',$this->niu_s2);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('pekerjaan',$this->pekerjaan,true);
		$criteria->compare('tgl_masuk',$this->tgl_masuk,true);
		$criteria->compare('nama_ortu',$this->nama_ortu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}