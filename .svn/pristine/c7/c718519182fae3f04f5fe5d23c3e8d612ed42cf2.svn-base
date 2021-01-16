<?php

/**
 * This is the model class for table "detail_evaluasi_lulusan".
 *
 * The followings are the available columns in table 'detail_evaluasi_lulusan':
 * @property integer $id_detail
 * @property integer $id_evaluasi
 * @property string $jenis_kemampuan
 * @property integer $tanggap_sangat_baik
 * @property integer $tanggap_baik
 * @property integer $tanggap_cukup
 * @property integer $tanggap_kurang
 * @property string $rencana_tindak_lanjut
 * @property string $ketarangan
 */
class DetailEvaluasiLulusan extends CActiveRecord
{
	public $th_akademik_search;
	public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetailEvaluasiLulusan the static model class
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
		return 'detail_evaluasi_lulusan';
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
			array('  tanggap_sangat_baik, tanggap_baik, tanggap_cukup, tanggap_kurang', 'numerical', 'integerOnly'=>false,'message'=>'<i><span style="color:red">Kolom {attribute} hanya boleh diisi dengan angka</span></i>'),
			array('jenis_kemampuan', 'length', 'max'=>17),
			array('ketarangan', 'length', 'max'=>50),
			array('rencana_tindak_lanjut', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_detail,jenis_kemampuan, tanggap_sangat_baik, tanggap_baik, tanggap_cukup, tanggap_kurang, rencana_tindak_lanjut, ketarangan', 'safe', 'on'=>'search'),
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
			// 'relasi_evaluasi'=>array(self::BELONGS_TO, 'EvaluasiLulusan', 'id_evaluasi'),
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
			'id_detail' => 'Id Detail',
			'jenis_kemampuan' => 'Jenis Kemampuan',
			'tanggap_sangat_baik' => 'Tanggap Sangat Baik (dalam %)',
			'tanggap_baik' => 'Tanggap Baik (dalam %)',
			'tanggap_cukup' => 'Tanggap Cukup (dalam %)',
			'tanggap_kurang' => 'Tanggap Kurang (dalam %)',
			'rencana_tindak_lanjut' => 'Rencana Tindak Lanjut',
			'ketarangan' => 'Keterangan',
			'th_akademik_search'=>'Tahun akademik',
			'nama_prodi_search'=>'Nama Prodi',
			'id_prodi' => 'Nama Program Studi',
			'id_administrasi' => 'Tahun Akademik',
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


		$criteria->compare('id_detail',$this->id_detail);
		$criteria->compare('jenis_kemampuan',$this->jenis_kemampuan,true);
		$criteria->compare('tanggap_sangat_baik',$this->tanggap_sangat_baik);
		$criteria->compare('tanggap_baik',$this->tanggap_baik);
		$criteria->compare('tanggap_cukup',$this->tanggap_cukup);
		$criteria->compare('tanggap_kurang',$this->tanggap_kurang);
		$criteria->compare('rencana_tindak_lanjut',$this->rencana_tindak_lanjut,true);
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