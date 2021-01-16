<?php

/**
 * This is the model class for table "layanan".
 *
 * The followings are the available columns in table 'layanan':
 * @property integer $id_layanan
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $kegiatan_BK
 * @property string $pelaksanaan_BK
 * @property string $hasil_BK
 * @property string $kegiatan_minat
 * @property string $pelaksanaan_minat
 * @property string $hasil_minat
 * @property string $kegiatan_softskill
 * @property string $pelaksanaan_softskill
 * @property string $hasil_softskill
 * @property string $kegiatan_beasiswa
 * @property string $pelaksanaan_beasiswa
 * @property string $hasil_beasiswa
 * @property string $kegiatan_kesehatan
 * @property string $pelaksanaan_kesehatan
 * @property string $hasil_kesehatan
 * @property string $sumber_data
 * @property string $lampiran
 */
class Layanan extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Layanan the static model class
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
		return 'layanan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, kegiatan_BK, pelaksanaan_BK, hasil_BK, kegiatan_minat, pelaksanaan_minat, hasil_minat, kegiatan_softskill, pelaksanaan_softskill, hasil_softskill, kegiatan_beasiswa, pelaksanaan_beasiswa, hasil_beasiswa, kegiatan_kesehatan, pelaksanaan_kesehatan, hasil_kesehatan, sumber_data', 'required'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('sumber_data', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_layanan, id_prodi, id_administrasi, kegiatan_BK, pelaksanaan_BK, hasil_BK, kegiatan_minat, pelaksanaan_minat, hasil_minat, kegiatan_softskill, pelaksanaan_softskill, hasil_softskill, kegiatan_beasiswa, pelaksanaan_beasiswa, hasil_beasiswa, kegiatan_kesehatan, pelaksanaan_kesehatan, hasil_kesehatan, sumber_data', 'safe', 'on'=>'search'),
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
			'id_layanan' => 'Id Layanan',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'kegiatan_BK' => 'Kegiatan Bk',
			'pelaksanaan_BK' => 'Pelaksanaan Bk',
			'hasil_BK' => 'Hasil Bk',
			'kegiatan_minat' => 'Kegiatan Minat',
			'pelaksanaan_minat' => 'Pelaksanaan Minat',
			'hasil_minat' => 'Hasil Minat',
			'kegiatan_softskill' => 'Kegiatan Softskill',
			'pelaksanaan_softskill' => 'Pelaksanaan Softskill',
			'hasil_softskill' => 'Hasil Softskill',
			'kegiatan_beasiswa' => 'Kegiatan Beasiswa',
			'pelaksanaan_beasiswa' => 'Pelaksanaan Beasiswa',
			'hasil_beasiswa' => 'Hasil Beasiswa',
			'kegiatan_kesehatan' => 'Kegiatan Kesehatan',
			'pelaksanaan_kesehatan' => 'Pelaksanaan Kesehatan',
			'hasil_kesehatan' => 'Hasil Kesehatan',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran',
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

		$criteria->compare('id_layanan',$this->id_layanan);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('kegiatan_BK',$this->kegiatan_BK,true);
		$criteria->compare('pelaksanaan_BK',$this->pelaksanaan_BK,true);
		$criteria->compare('hasil_BK',$this->hasil_BK,true);
		$criteria->compare('kegiatan_minat',$this->kegiatan_minat,true);
		$criteria->compare('pelaksanaan_minat',$this->pelaksanaan_minat,true);
		$criteria->compare('hasil_minat',$this->hasil_minat,true);
		$criteria->compare('kegiatan_softskill',$this->kegiatan_softskill,true);
		$criteria->compare('pelaksanaan_softskill',$this->pelaksanaan_softskill,true);
		$criteria->compare('hasil_softskill',$this->hasil_softskill,true);
		$criteria->compare('kegiatan_beasiswa',$this->kegiatan_beasiswa,true);
		$criteria->compare('pelaksanaan_beasiswa',$this->pelaksanaan_beasiswa,true);
		$criteria->compare('hasil_beasiswa',$this->hasil_beasiswa,true);
		$criteria->compare('kegiatan_kesehatan',$this->kegiatan_kesehatan,true);
		$criteria->compare('pelaksanaan_kesehatan',$this->pelaksanaan_kesehatan,true);
		$criteria->compare('hasil_kesehatan',$this->hasil_kesehatan,true);
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