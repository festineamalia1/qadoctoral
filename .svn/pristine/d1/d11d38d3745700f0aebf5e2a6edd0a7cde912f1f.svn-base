<?php

/**
 * This is the model class for table "jml_mahasiswa_s2".
 *
 * The followings are the available columns in table 'jml_mahasiswa_s2':
 * @property integer $id_jml_mhs_s2
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $tahun_akademik
 * @property integer $jml_ikut_seleksi
 * @property integer $jml_lolos_seleksi
 * @property integer $jml_maba
 * @property integer $jml_maba_transfer
 * @property integer $jml_total
 * @property integer $jml_total_transfer
 * @property integer $jml_lulusan
 * @property integer $jml_lulusan_transfer
 * @property integer $ipk_min
 * @property integer $ipk_max
 * @property integer $ipk_rata
 * @property integer $jml_mhs_wna
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 */
class JmlMahasiswaS2 extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return JmlMahasiswaS2 the static model class
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
		return 'jml_mahasiswa_s2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, rata_lama_studi, rata_lama_studi, id_administrasi, daya_tampung, tahun_akademik, jml_ikut_seleksi, jml_lolos_seleksi, jml_maba, jml_maba_transfer, jml_total, jml_total_transfer, jml_lulusan, jml_lulusan_transfer, ipk_min, ipk_max, ipk_rata, jml_mhs_wna', 'required'),
			array('id_prodi, id_administrasi, jml_ikut_seleksi, jml_lolos_seleksi, jml_maba, jml_maba_transfer, jml_total, jml_total_transfer, daya_tampung, jml_lulusan, jml_lulusan_transfer, ipk_min, ipk_max, ipk_rata, jml_mhs_wna', 'numerical', 'integerOnly'=>true),
			array('tahun_akademik', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nama_prodi_search,th_akademik_search,id_jml_mhs_s2, rata_lama_studi, tahun_akademik, jml_ikut_seleksi, jml_lolos_seleksi, jml_maba, jml_maba_transfer, jml_total, jml_total_transfer, jml_lulusan, jml_lulusan_transfer, ipk_min, ipk_max, ipk_rata, jml_mhs_wna', 'safe', 'on'=>'search'),
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
			'relasi_prodi' => array(self::BELONGS_TO, 'Prodi', 'id_prodi'),
			'relasi_administrasi' => array(self::BELONGS_TO, 'Administrasi', 'id_administrasi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'daya_tampung'=>'Daya Tampung',
			'id_jml_mhs_s2' => 'Id Jml Mhs S2',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'tahun_akademik' => 'Tahun Akademik',
			'jml_ikut_seleksi' => 'Jumlah Calon Mahasiswa Baru Ikut Seleksi ',
			'jml_lolos_seleksi' => 'Jumlah Calon Mahasiswa Baru Lolos Seleksi',
			'jml_maba' => 'Jumlah Mahasiswa Baru Bukan Transfer',
			'jml_maba_transfer' => 'Jumlah Mahasiswa Baru Transfer',
			'jml_total' => 'Jumlah Total Mahasiswa Bukan Transfer',
			'jml_total_transfer' => 'Jumlah Total Mahasiswa Transfer',
			'jml_lulusan' => 'Jumlah Lulusan Bukan Transfer',
			'jml_lulusan_transfer' => 'Jumlah Lulusan Transfer',
			'ipk_min' => 'IPK Minimal',
			'ipk_max' => 'IPK Maksimum',
			'ipk_rata' => 'IPK Rata-Rata',
			'jml_mhs_wna' => 'Jumlah Mahasiswa Wna',
			'nama_prodi_search'=>'Nama Prodi',
			'th_akademik_search'=>'Tahun Pengisian data',
			'rata_lama_studi'=>'Rata-Rata Lama Masa Studi'

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
		$criteria->compare('id_jml_mhs_s2',$this->id_jml_mhs_s2);
		$criteria->compare('daya_tampung',$this->daya_tampung);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('tahun_akademik',$this->tahun_akademik,true);
		$criteria->compare('jml_ikut_seleksi',$this->jml_ikut_seleksi);
		$criteria->compare('jml_lolos_seleksi',$this->jml_lolos_seleksi);
		$criteria->compare('jml_maba',$this->jml_maba);
		$criteria->compare('jml_maba_transfer',$this->jml_maba_transfer);
		$criteria->compare('jml_total',$this->jml_total);
		$criteria->compare('jml_total_transfer',$this->jml_total_transfer);
		$criteria->compare('jml_lulusan',$this->jml_lulusan);
		$criteria->compare('jml_lulusan_transfer',$this->jml_lulusan_transfer);
		$criteria->compare('ipk_min',$this->ipk_min);
		$criteria->compare('ipk_max',$this->ipk_max);
		$criteria->compare('ipk_rata',$this->ipk_rata);
		$criteria->compare('jml_mhs_wna',$this->jml_mhs_wna);

		$criteria->compare('rata_lama_studi',$this->rata_lama_studi);
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