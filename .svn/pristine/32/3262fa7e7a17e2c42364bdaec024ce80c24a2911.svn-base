<?php

/**
 * This is the model class for table "peninjauan_kurikulum".
 *
 * The followings are the available columns in table 'peninjauan_kurikulum':
 * @property integer $id_tinjau
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $kode_mk
 * @property string $status_mk
 * @property string $perubahan_silabus
 * @property string $perubahan_buku_ajar
 * @property string $alasan_peninjauan
 * @property string $pengusul
 * @property string $berlaku_mulai
 * @property string $sumber_data
 * @property string $lampiran
 */
class PeninjauanKurikulum extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PeninjauanKurikulum the static model class
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
		return 'peninjauan_kurikulum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, kode_mk, status_mk, perubahan_silabus, perubahan_buku_ajar, alasan_peninjauan, 
				pengusul, berlaku_mulai','required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('kode_mk', 'length', 'max'=>10),
			array('status_mk', 'length', 'max'=>50),
			array('perubahan_silabus, perubahan_buku_ajar, alasan_peninjauan, pengusul, sumber_data, lampiran', 'length', 'max'=>100),
			array('berlaku_mulai', 'length', 'max'=>20),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_tinjau, id_prodi, id_administrasi, kode_mk, status_mk, perubahan_silabus, perubahan_buku_ajar, alasan_peninjauan, pengusul, berlaku_mulai, sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_tinjau' => 'Id Tinjau',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'kode_mk' => 'Kode Mata Kuliah',
			'status_mk' => 'Status Mata Kuliah',
			'perubahan_silabus' => 'Perubahan Silabus',
			'perubahan_buku_ajar' => 'Perubahan Buku Ajar',
			'alasan_peninjauan' => 'Alasan Peninjauan',
			'pengusul' => 'Pengusul',
			'berlaku_mulai' => 'Berlaku Mulai Semester/Tahun',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : Peninjauan_tahunakreditasi (.zip) contoh Peninjauan_2012.zip)',
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
		$criteria->compare('id_tinjau',$this->id_tinjau);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('kode_mk',$this->kode_mk,true);
		$criteria->compare('status_mk',$this->status_mk,true);
		$criteria->compare('perubahan_silabus',$this->perubahan_silabus,true);
		$criteria->compare('perubahan_buku_ajar',$this->perubahan_buku_ajar,true);
		$criteria->compare('alasan_peninjauan',$this->alasan_peninjauan,true);
		$criteria->compare('pengusul',$this->pengusul,true);
		$criteria->compare('berlaku_mulai',$this->berlaku_mulai,true);
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