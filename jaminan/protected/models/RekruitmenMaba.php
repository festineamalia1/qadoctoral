<?php

/**
 * This is the model class for table "rekruitmen_maba".
 *
 * The followings are the available columns in table 'rekruitmen_maba':
 * @property integer $id_rmaba
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $kebijakan_rekruitmen_calon_maba
 * @property string $kriteria_seleksi_maba
 * @property string $sistem_pengambilan_kptsan
 * @property string $prosedur_penerimaan_maba
 * @property string $sumber_data
 * @property string $lampiran
 *
 * The followings are the available model relations:
 * @property Administrasi $idAdministrasi
 * @property Prodi $idProdi
 */
class RekruitmenMaba extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RekruitmenMaba the static model class
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
		return 'rekruitmen_maba';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, kebijakan_rekruitmen_calon_maba, kriteria_seleksi_maba, sistem_pengambilan_kptsan, prosedur_penerimaan_maba, sumber_data', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('sumber_data', 'length', 'max'=>200),
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nama_prodi_search,th_akademik_search,id_rmaba, id_prodi, id_administrasi, kebijakan_rekruitmen_calon_maba, kriteria_seleksi_maba, sistem_pengambilan_kptsan, prosedur_penerimaan_maba, sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'relasi_administrasi' => array(self::BELONGS_TO, 'Administrasi', 'id_administrasi'),
			'relasi_prodi' => array(self::BELONGS_TO, 'Prodi', 'id_prodi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			//'id_rmaba' => 'Id Rmaba',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Akademik',
			'kebijakan_rekruitmen_calon_maba' => 'Kebijakan Rekruitmen Calon Mahasiswa Baru',
			'kriteria_seleksi_maba' => 'Kriteria Seleksi Mahasiswa Baru',
			'sistem_pengambilan_kptsan' => 'Sistem Pengambilan Keputusan',
			'prosedur_penerimaan_maba' => 'Prosedur Penerimaan Mahasiswa Baru',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : rekruitmenMahasiswaBaru_tahunakreditasi (.zip) contoh rekruitmenMahasiswaBaru_2012.zip)',
			'th_akademik_search'=>'Tahun akademik',
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
		$criteria->compare('id_rmaba',$this->id_rmaba);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('kebijakan_rekruitmen_calon_maba',$this->kebijakan_rekruitmen_calon_maba,true);
		$criteria->compare('kriteria_seleksi_maba',$this->kriteria_seleksi_maba,true);
		$criteria->compare('sistem_pengambilan_kptsan',$this->sistem_pengambilan_kptsan,true);
		$criteria->compare('prosedur_penerimaan_maba',$this->prosedur_penerimaan_maba,true);
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
		return new CActiveDataProvider('RekruitmenMaba', array(
			'criteria'=>$criteria,
		));
	}
}