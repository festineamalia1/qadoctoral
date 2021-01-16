<?php

/**
 * This is the model class for table "tata_pamong".
 *
 * The followings are the available columns in table 'tata_pamong':
 * @property integer $id_tata_pamong
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $sistem_tata_pamong
 * @property string $kepemimpinan
 * @property string $sistem_pengelolaan
 * @property string $penjaminan_mutu
 * @property string $umpan_balik_dosen
 * @property string $tindak_lanjut_dosen
 * @property string $umpan_balik_mhs
 * @property string $tindak_lanjut_mhs
 * @property string $umpan_balik_alumni
 * @property string $tindak_lanjut_alumni
 * @property string $umpan_balik_lulusan
 * @property string $tindak_lanjut_lulusan
 * @property string $animo_calon_mhs
 * @property string $mutu_manajemen
 * @property string $mutu_lulusan
 * @property string $kerjasama_kemitraan
 * @property string $hibah_kompetitif
 * @property string $sumber_data
 * @property string $lampiran
 */
class TataPamong extends CActiveRecord
{
	public $th_akademik_search;
	public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @return TataPamong the static model class
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
		return 'tata_pamong';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, sistem_tata_pamong, kepemimpinan, sistem_pengelolaan, penjaminan_mutu, umpan_balik_dosen, tindak_lanjut_dosen, umpan_balik_mhs, tindak_lanjut_mhs, umpan_balik_alumni, tindak_lanjut_alumni, umpan_balik_lulusan, tindak_lanjut_lulusan, animo_calon_mhs, mutu_manajemen, mutu_lulusan, kerjasama_kemitraan, hibah_kompetitif, sumber_data', 'required'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('sumber_data', 'length', 'max'=>100),
			array('lampiran', 'file', 'types'=>'zip,jpg,jpeg','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_tata_pamong, id_prodi, id_administrasi, sistem_tata_pamong, kepemimpinan, sistem_pengelolaan,th_akademik_search, nama_prodi_search, penjaminan_mutu, umpan_balik_dosen, tindak_lanjut_dosen, umpan_balik_mhs, tindak_lanjut_mhs, umpan_balik_alumni, tindak_lanjut_alumni, umpan_balik_lulusan, tindak_lanjut_lulusan, animo_calon_mhs, mutu_manajemen, mutu_lulusan, kerjasama_kemitraan, hibah_kompetitif, sumber_data', 'safe', 'on'=>'search'),
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
			'id_tata_pamong' => 'Id Tata Pamong',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'sistem_tata_pamong' => 'Sistem Tata Pamong',
			'kepemimpinan' => 'Kepemimpinan',
			'sistem_pengelolaan' => 'Sistem Pengelolaan',
			'penjaminan_mutu' => 'Penjaminan Mutu',
			'umpan_balik_dosen' => 'Umpan Balik Dosen',
			'tindak_lanjut_dosen' => 'Tindak Lanjut Dosen',
			'umpan_balik_mhs' => 'Umpan Balik Mhs',
			'tindak_lanjut_mhs' => 'Tindak Lanjut Mhs',
			'umpan_balik_alumni' => 'Umpan Balik Alumni',
			'tindak_lanjut_alumni' => 'Tindak Lanjut Alumni',
			'umpan_balik_lulusan' => 'Umpan Balik Lulusan',
			'tindak_lanjut_lulusan' => 'Tindak Lanjut Lulusan',
			'animo_calon_mhs' => 'Animo Calon Mhs',
			'mutu_manajemen' => 'Mutu Manajemen',
			'mutu_lulusan' => 'Mutu Lulusan',
			'kerjasama_kemitraan' => 'Kerjasama Kemitraan',
			'hibah_kompetitif' => 'Hibah Kompetitif',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : TataPamong_tahunakreditasi (.zip) contoh TataPamong_2012.zip)',
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
		// end tambahan

		$criteria->compare('id_tata_pamong',$this->id_tata_pamong);

		$criteria->compare('id_prodi',$this->id_prodi);

		$criteria->compare('id_administrasi',$this->id_administrasi);

		$criteria->compare('sistem_tata_pamong',$this->sistem_tata_pamong,true);

		$criteria->compare('kepemimpinan',$this->kepemimpinan,true);

		$criteria->compare('sistem_pengelolaan',$this->sistem_pengelolaan,true);

		$criteria->compare('penjaminan_mutu',$this->penjaminan_mutu,true);

		$criteria->compare('umpan_balik_dosen',$this->umpan_balik_dosen,true);

		$criteria->compare('tindak_lanjut_dosen',$this->tindak_lanjut_dosen,true);

		$criteria->compare('umpan_balik_mhs',$this->umpan_balik_mhs,true);

		$criteria->compare('tindak_lanjut_mhs',$this->tindak_lanjut_mhs,true);

		$criteria->compare('umpan_balik_alumni',$this->umpan_balik_alumni,true);

		$criteria->compare('tindak_lanjut_alumni',$this->tindak_lanjut_alumni,true);

		$criteria->compare('umpan_balik_lulusan',$this->umpan_balik_lulusan,true);

		$criteria->compare('tindak_lanjut_lulusan',$this->tindak_lanjut_lulusan,true);

		$criteria->compare('animo_calon_mhs',$this->animo_calon_mhs,true);

		$criteria->compare('mutu_manajemen',$this->mutu_manajemen,true);

		$criteria->compare('mutu_lulusan',$this->mutu_lulusan,true);

		$criteria->compare('kerjasama_kemitraan',$this->kerjasama_kemitraan,true);

		$criteria->compare('hibah_kompetitif',$this->hibah_kompetitif,true);

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

		return new CActiveDataProvider('TataPamong', array(
			'criteria'=>$criteria,
		));
	}
}