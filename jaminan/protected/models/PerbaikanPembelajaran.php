<?php

/**
 * This is the model class for table "perbaikan_pembelajaran".
 *
 * The followings are the available columns in table 'perbaikan_pembelajaran':
 * @property integer $id_perbaikan
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $materi_tindakan
 * @property string $materi_hasil
 * @property string $metode_tindakan
 * @property string $metode_hasil
 * @property string $teknologi_tindakan
 * @property string $teknologi_hasil
 * @property string $evaluasi_tindakan
 * @property string $evaluasi_hasil
 * @property string $lainnya
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class PerbaikanPembelajaran extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PerbaikanPembelajaran the static model class
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
		return 'perbaikan_pembelajaran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, materi_tindakan, materi_hasil, metode_tindakan, metode_hasil, teknologi_tindakan, teknologi_hasil, evaluasi_tindakan, evaluasi_hasil, lainnya', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_perbaikan, id_prodi, id_administrasi, materi_tindakan, materi_hasil, metode_tindakan, metode_hasil, teknologi_tindakan, teknologi_hasil, evaluasi_tindakan, evaluasi_hasil, lainnya, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_perbaikan' => 'Id Perbaikan',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'materi_hasil' => 'Materi Hasil',
			'metode_tindakan' => 'Metode Tindakan',
			'metode_hasil' => 'Metode Hasil',
			'teknologi_tindakan' => 'Teknologi Tindakan',
			'teknologi_hasil' => 'Teknologi Hasil',
			'evaluasi_tindakan' => 'Evaluasi Tindakan',
			'evaluasi_hasil' => 'Evaluasi Hasil',
			'lainnya' => 'Lainnya',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : PerbaikanPemb_tahunakreditasi (.zip) contoh PerbaikanPemb_2012.zip)',
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

		$criteria->compare('id_perbaikan',$this->id_perbaikan);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('materi_tindakan',$this->materi_tindakan,true);
		$criteria->compare('materi_hasil',$this->materi_hasil,true);
		$criteria->compare('metode_tindakan',$this->metode_tindakan,true);
		$criteria->compare('metode_hasil',$this->metode_hasil,true);
		$criteria->compare('teknologi_tindakan',$this->teknologi_tindakan,true);
		$criteria->compare('teknologi_hasil',$this->teknologi_hasil,true);
		$criteria->compare('evaluasi_tindakan',$this->evaluasi_tindakan,true);
		$criteria->compare('evaluasi_hasil',$this->evaluasi_hasil,true);
		$criteria->compare('lainnya',$this->lainnya,true);
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