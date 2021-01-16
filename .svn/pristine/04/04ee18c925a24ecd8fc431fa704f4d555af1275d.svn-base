<?php

/**
 * This is the model class for table "kerjasama".
 *
 * The followings are the available columns in table 'kerjasama':
 * @property integer $id_kerjasama
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $nama_instansi
 * @property string $jenis_kegiatan
 * @property string $th_mulai
 * @property string $th_akhir
 * @property string $manfaat
 * @property string $jenis_kerjasama
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class Kerjasama extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kerjasama the static model class
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
		return 'kerjasama';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, nama_instansi, jenis_kegiatan, th_mulai, th_akhir, manfaat, jenis_kerjasama', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('nama_instansi', 'length', 'max'=>225),
			array('manfaat, sumber_data, lampiran', 'length', 'max'=>200),
			array('th_mulai, th_akhir', 'length', 'max'=>4),
			array('jenis_kerjasama', 'length', 'max'=>50),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_kerjasama, id_prodi, id_administrasi, nama_instansi, jenis_kegiatan, th_mulai, th_akhir, manfaat, jenis_kerjasama, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_kerjasama' => 'Id Kerjasama',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'nama_instansi' => 'Nama Instansi',
			'jenis_kegiatan' => 'Jenis Kegiatan',
			'th_mulai' => 'Tahun Mulai',
			'th_akhir' => 'Tahun Berakhir',
			'manfaat' => 'Manfaat',
			'jenis_kerjasama' => 'Jenis Kerjasama',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : Kerjasama_tahunakreditasi (.zip) contoh Kerjasama_2012.zip)',
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

		$criteria->compare('id_kerjasama',$this->id_kerjasama);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('nama_instansi',$this->nama_instansi,true);
		$criteria->compare('jenis_kegiatan',$this->jenis_kegiatan,true);
		$criteria->compare('th_mulai',$this->th_mulai,true);
		$criteria->compare('th_akhir',$this->th_akhir,true);
		$criteria->compare('manfaat',$this->manfaat,true);
		$criteria->compare('jenis_kerjasama',$this->jenis_kerjasama,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
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