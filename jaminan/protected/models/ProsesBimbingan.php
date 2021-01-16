<?php

/**
 * This is the model class for table "proses_bimbingan".
 *
 * The followings are the available columns in table 'proses_bimbingan':
 * @property integer $id_proses
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $ketersediaan_panduan
 * @property string $kebijakan_pembimbing
 * @property string $mekanisme_penunjukkan
 * @property string $proses_pembimbingan
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class ProsesBimbingan extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProsesBimbingan the static model class
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
		return 'proses_bimbingan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi,kebijakan_pembimbingan, mekanisme_penunjukkan, proses_pembimbingan', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_proses, id_prodi, id_administrasi, kebijakan_pembimbingan, mekanisme_penunjukkan, proses_pembimbingan, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_proses' => 'Id Proses',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Akademik',
			'kebijakan_pembimbingan' => 'Kebijakkan Pembimbingan',
			'mekanisme_penunjukkan' => 'Mekanisme Penunjukan Promotor, Kopromotor dan Mahasiswa Bimbingan',
			'proses_pembimbingan' => 'Proses Pembimbingan',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran',
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

		$criteria->compare('id_proses',$this->id_proses);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('kebijakan_pembimbingan',$this->kebijakan_pembimbingan,true);
		$criteria->compare('mekanisme_penunjukkan',$this->mekanisme_penunjukkan,true);
		$criteria->compare('proses_pembimbingan',$this->proses_pembimbingan,true);
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