<?php

/**
 * This is the model class for table "suasana_akademik".
 *
 * The followings are the available columns in table 'suasana_akademik':
 * @property integer $id_suasana
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $kebijakan
 * @property string $sarana_dana
 * @property string $kegiatan
 * @property string $interaksi
 * @property string $pengembangan_perilaku
 * @property string $ket_lainnya
 * @property string $F_pembelajaran
 * @property string $F_suasana_akademik
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class SuasanaAkademik extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SuasanaAkademik the static model class
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
		return 'suasana_akademik';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, kebijakan, sarana_dana, kegiatan, interaksi, pengembangan_perilaku, ket_lainnya, sumber_data', 'required'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_suasana, id_prodi, id_administrasi, kebijakan, sarana_dana, kegiatan, interaksi, pengembangan_perilaku, ket_lainnya, F_pembelajaran, F_suasana_akademik, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_suasana' => 'Id Suasana',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'kebijakan' => 'Kebijakan',
			'sarana_dana' => 'Sarana Dana',
			'kegiatan' => 'Kegiatan',
			'interaksi' => 'Interaksi',
			'pengembangan_perilaku' => 'Pengembangan Perilaku',
			'ket_lainnya' => 'Ket Lainnya',
			'F_pembelajaran' => 'F Pembelajaran',
			'F_suasana_akademik' => 'F Suasana Akademik',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : SuasanaAkademik_tahunakreditasi (.zip) contoh SuasanaAkademik_2012.zip)',
			'th_akademik_search'=>'Th akademik',
			'nama_prodi_search'=>'Nama Prodi',		);
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

		$criteria->compare('id_suasana',$this->id_suasana);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('kebijakan',$this->kebijakan,true);
		$criteria->compare('sarana_dana',$this->sarana_dana,true);
		$criteria->compare('kegiatan',$this->kegiatan,true);
		$criteria->compare('interaksi',$this->interaksi,true);
		$criteria->compare('pengembangan_perilaku',$this->pengembangan_perilaku,true);
		$criteria->compare('ket_lainnya',$this->ket_lainnya,true);
		$criteria->compare('F_pembelajaran',$this->F_pembelajaran,true);
		$criteria->compare('F_suasana_akademik',$this->F_suasana_akademik,true);
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