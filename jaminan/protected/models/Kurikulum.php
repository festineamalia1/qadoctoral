<?php

/**
 * This is the model class for table "kurikulum".
 *
 * The followings are the available columns in table 'kurikulum':
 * @property integer $id_kurikulum
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property integer $id_mk_kurikulum
 * @property string $kompetensi_utama
 * @property string $kompetensi_pendukung
 * @property string $kompetensi_lain
 * @property string $sumber_data
 * @property string $lampiran
 */
class Kurikulum extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kurikulum the static model class
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
		return 'kurikulum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi,kompetensi_utama, kompetensi_pendukung, kompetensi_lain','required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, id_mk_kurikulum', 'numerical', 'integerOnly'=>true),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_kurikulum, id_prodi, id_administrasi, id_mk_kurikulum, kompetensi_utama, kompetensi_pendukung, kompetensi_lain, sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_kurikulum' => 'Id Kurikulum',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'id_mk_kurikulum' => 'Id Mk Kurikulum',
			'kompetensi_utama' => 'Kompetensi Utama lulusan',
			'kompetensi_pendukung' => 'Kompetensi Pendukung lulusan',
			'kompetensi_lain' => 'Kompetensi Lain lulusan',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : Kurikulum_tahunakreditasi (.zip) contoh Kurikulum_2012.zip)',
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
		// tambahan
		$criteria->with = array( 'relasi_prodi','relasi_administrasi' );
		
		$criteria->compare('id_kurikulum',$this->id_kurikulum);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('id_mk_kurikulum',$this->id_mk_kurikulum);
		$criteria->compare('kompetensi_utama',$this->kompetensi_utama,true);
		$criteria->compare('kompetensi_pendukung',$this->kompetensi_pendukung,true);
		$criteria->compare('kompetensi_lain',$this->kompetensi_lain,true);
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