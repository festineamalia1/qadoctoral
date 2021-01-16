<?php

/**
 * This is the model class for table "evaluasi_lulusan".
 *
 * The followings are the available columns in table 'evaluasi_lulusan':
 * @property integer $id_evaluasi
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property integer $id_detail
 * @property string $studi_pelacakan
 * @property string $metode
 * @property string $proses
 * @property string $mekanisme_kegiatan
 * @property string $tindak_lanjut
 * @property string $hasil
 * @property string $sumber_data
 * @property string $lampiran
 */
class EvaluasiLulusan extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EvaluasiLulusan the static model class
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
		return 'evaluasi_lulusan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, studi_pelacakan, metode, proses, mekanisme_kegiatan, tindak_lanjut, hasil, sumber_data', 'required'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('studi_pelacakan', 'length', 'max'=>9),
			array('sumber_data', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_evaluasi, id_prodi, id_administrasi, studi_pelacakan, metode, proses, mekanisme_kegiatan, tindak_lanjut, hasil, sumber_data', 'safe', 'on'=>'search'),
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
			'id_evaluasi' => 'Id Evaluasi',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'studi_pelacakan' => 'Studi Pelacakan',
			'metode' => 'Metode',
			'proses' => 'Proses',
			'mekanisme_kegiatan' => 'Mekanisme Kegiatan',
			'tindak_lanjut' => 'Tindak Lanjut',
			'hasil' => 'Hasil',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : EvaluasiLulusan_tahunakreditasi (.zip) contoh EvaluasiLulusan_2012.zip)',
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

		$criteria->compare('id_evaluasi',$this->id_evaluasi);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('studi_pelacakan',$this->studi_pelacakan,true);
		$criteria->compare('metode',$this->metode,true);
		$criteria->compare('proses',$this->proses,true);
		$criteria->compare('mekanisme_kegiatan',$this->mekanisme_kegiatan,true);
		$criteria->compare('tindak_lanjut',$this->tindak_lanjut,true);
		$criteria->compare('hasil',$this->hasil,true);
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