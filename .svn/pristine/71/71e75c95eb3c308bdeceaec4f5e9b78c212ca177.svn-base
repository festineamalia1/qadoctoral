<?php

/**
 * This is the model class for table "visi_misi".
 *
 * The followings are the available columns in table 'visi_misi':
 * @property integer $id_visi_misi
 * @property integer $id_prodi
 * @property string $mekanisme
 * @property string $visi
 * @property string $misi
 * @property string $tujuan
 * @property string $sasaran
 * @property string $strategi
 * @property string $sosialisasi
 * @property integer $id_administrasi
 * @property string $sumber_data
 * @property string $lampiran
 */
class VisiMisi extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @return VisiMisi the static model class
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
		return 'visi_misi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, mekanisme, visi, misi, tujuan, sasaran, strategi, sosialisasi, id_administrasi, sumber_data', 'required'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('sumber_data', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array(' th_akademik_search, nama_prodi_search,id_prodi, mekanisme, visi, misi, tujuan, sasaran, strategi, sosialisasi, id_administrasi, sumber_data', 'safe', 'on'=>'search'),
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
			'id_visi_misi' => 'Id Visi Misi',
			'id_prodi' => 'Prodi',
			'mekanisme' => 'Jelaskan mekanisme penyusunan visi, misi, tujuan dan sasaran program studi, serta pihak-pihak yang dilibatkan.',
			'visi' => 'Visi',
			'misi' => 'Misi',
			'tujuan' => 'Tujuan',
			'sasaran' => 'Sasaran',
			'strategi' => 'Strategi',
			'sosialisasi' => 'Sosialisasi',
			'id_administrasi' => 'Tahun Akademik',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : VisiMisi_tahunakreditasi (.zip) contoh VisiMisi_2012.zip)',
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

		$criteria->compare('id_visi_misi',$this->id_visi_misi);

		$criteria->compare('id_prodi',$this->id_prodi);

		$criteria->compare('mekanisme',$this->mekanisme,true);

		$criteria->compare('visi',$this->visi,true);

		$criteria->compare('misi',$this->misi,true);

		$criteria->compare('tujuan',$this->tujuan,true);

		$criteria->compare('sasaran',$this->sasaran,true);

		$criteria->compare('strategi',$this->strategi,true);

		$criteria->compare('sosialisasi',$this->sosialisasi,true);

		$criteria->compare('id_administrasi',$this->id_administrasi);


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

		return new CActiveDataProvider('VisiMisi', array(
			'criteria'=>$criteria,
		));
	}
}