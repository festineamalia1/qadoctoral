<?php

/**
 * This is the model class for table "persyaratan_pelaksanaan".
 *
 * The followings are the available columns in table 'persyaratan_pelaksanaan':
 * @property integer $id_pp
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $p_mukin
 * @property string $p_toefl
 * @property string $kuliah_ujian
 * @property string $penyaajian_penilaian
 * @property string $peraturan
 * @property string $penjamin
 * @property string $tim_penguji
 */
class PersyaratanPelaksanaan extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PersyaratanPelaksanaan the static model class
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
		return 'persyaratan_pelaksanaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, p_mukin, p_toefl, kuliah_ujian, ujian_kualifikasi,penyaajian_penilaian, peraturan_penyajian, peraturan_publikasi, penilaian, tim_penguji', 'required'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_pp, id_prodi, id_administrasi, p_mukin, p_toefl, kuliah_ujian, ujian_kualifikasi, penyaajian_penilaian, peraturan_penyajian, peraturan_publikasi, penilaian, tim_penguji', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		//tambahan
		return array(
			'relasi_administrasi'=>array(self::BELONGS_TO, 'Administrasi', 'id_administrasi'),
			'relasi_prodi'=>array(self::BELONGS_TO, 'Prodi', 'id_prodi'),
		);
		//end tambahan
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pp' => 'Id Pp',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'p_mukin' => 'Persyaratan Mukin',
			'p_toefl' => 'Persyaratan Penguasaan Bahasa Inggris',
			'kuliah_ujian' => 'Persyaratan Perkuliahan & Ujian',
			'ujian_kualifikasi' => 'Ujian Kualifikasi',
			'penyaajian_penilaian' => 'Penyaajian & Penilaian Disertasi',
			'peraturan_penyajian' => 'Peraturan Kewajiban Penyajian Hasil Disertasi',
			'peraturan_publikasi' => 'Peraturan Kewajiban Publikasi Hasil Disertasi',
			'penilaian' => 'Penilaian Kelayakkan Mutu',
			'tim_penguji' => 'Tim Penguji dalam Ujian',

			'th_akademik_search' => 'Tahun Akademik',
			'nama_prodi_search' => 'Nama Prodi',
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

		$criteria->compare('id_pp',$this->id_pp);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('p_mukin',$this->p_mukin,true);
		$criteria->compare('p_toefl',$this->p_toefl,true);
		$criteria->compare('kuliah_ujian',$this->kuliah_ujian,true);
		$criteria->compare('ujian_kualifikasi',$this->ujian_kualifikasi,true);
		$criteria->compare('penyaajian_penilaian',$this->penyaajian_penilaian,true);
		$criteria->compare('peraturan_penyajian',$this->peraturan_penyajian,true);
		$criteria->compare('peraturan_publikasi',$this->peraturan_publikasi,true);
		$criteria->compare('penilaian',$this->penilaian,true);
		$criteria->compare('tim_penguji',$this->tim_penguji,true);
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