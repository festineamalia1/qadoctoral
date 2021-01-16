<?php

/**
 * This is the model class for table "hasil_studi_pelacakan".
 *
 * The followings are the available columns in table 'hasil_studi_pelacakan':
 * @property integer $id_hsp
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $jenis_kemampuan
 * @property integer $tanggap_sangat_baik
 * @property integer $tanggap_baik
 * @property integer $tanggap_cukup
 * @property integer $tanggap_kurang
 * @property string $pemanfaatan_hsp
 * @property string $ketarangan
 *
 * The followings are the available model relations:
 * @property Administrasi $idAdministrasi
 * @property Prodi $idProdi
 */
class HasilStudiPelacakan extends CActiveRecord
{
	public $th_akademik_search;
	public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HasilStudiPelacakan the static model class
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
		return 'hasil_studi_pelacakan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('  id_prodi, id_administrasi,jenis_kemampuan','required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, tanggap_sangat_baik, tanggap_baik, tanggap_cukup, tanggap_kurang', 'numerical', 'integerOnly'=>false,'message'=>'<i><span style="color:red">Kolom {attribute} hanya boleh diisi dengan angka</span></i>'),
			array('jenis_kemampuan, ketarangan', 'length', 'max'=>50),
			array('pemanfaatan_hsp', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_hsp, id_prodi, id_administrasi, jenis_kemampuan, tanggap_sangat_baik, tanggap_baik, tanggap_cukup, tanggap_kurang, pemanfaatan_hsp, ketarangan', 'safe', 'on'=>'search'),
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
			'id_hsp' => 'Id Hasil studi Pelacakan',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Akademik',
			'jenis_kemampuan' => 'Jenis Kemampuan',
			'tanggap_sangat_baik' => 'Tanggap Sangat Baik (dalam %)',
			'tanggap_baik' => 'Tanggap Baik (dalam %)',
			'tanggap_cukup' => 'Tanggap Cukup (dalam %)',
			'tanggap_kurang' => 'Tanggap Kurang (dalam %)',
			'ketarangan' => 'Keterangan',
			'th_akademik_search'=>'Tahun akademik',
			'nama_prodi_search'=>'Nama Prodi',
			'pemanfaatan_hsp' => 'Pemanfaatan Hasil Studi Pelacakan',
			'ketarangan' => 'Keterangan',
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


		$criteria->compare('id_hsp',$this->id_hsp);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('jenis_kemampuan',$this->jenis_kemampuan,true);
		$criteria->compare('tanggap_sangat_baik',$this->tanggap_sangat_baik);
		$criteria->compare('tanggap_baik',$this->tanggap_baik);
		$criteria->compare('tanggap_cukup',$this->tanggap_cukup);
		$criteria->compare('tanggap_kurang',$this->tanggap_kurang);
		$criteria->compare('pemanfaatan_hsp',$this->pemanfaatan_hsp,true);
		$criteria->compare('ketarangan',$this->ketarangan,true);

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