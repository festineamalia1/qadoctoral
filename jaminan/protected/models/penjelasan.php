<?php

/**
 * This is the model class for table "penjelasan_pendekatandanpemikiran".
 *
 * The followings are the available columns in table 'penjelasan_pendekatandanpemikiran':
 * @property integer $id_penjelasan_pendekatan
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $penjelasan_pendekatandanpemikiran
 * @property integer $id_sumber_data
 * @property string $sumber_data
 * @property string $lampiran
 * @property string $jenis_penelitian
 * @property string $judul_penelitian
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 */
class penjelasan extends CActiveRecord
{
	public $th_akademik_search;
	public $nama_prodi_search;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return penjelasan the static model class
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
		return 'penjelasan_pendekatandanpemikiran';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, penjelasan_pendekatandanpemikiran,  jenis_penelitian, judul_penelitian', 'required'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('sumber_data, lampiran, judul_penelitian', 'length', 'max'=>100),
			array('jenis_penelitian', 'length', 'max'=>26),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_penjelasan_pendekatan, id_prodi, id_administrasi, penjelasan_pendekatandanpemikiran, id_sumber_data, sumber_data, lampiran, jenis_penelitian, judul_penelitian', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'relasi_administrasi'=>array(self::BELONGS_TO, 'Administrasi', 'id_administrasi'),
			'relasi_prodi'=>array(self::BELONGS_TO, 'Prodi', 'id_prodi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_penjelasan_pendekatan' => 'Id Penjelasan Pendekatan',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'penjelasan_pendekatandanpemikiran' => 'Penjelasan pendekatan dan pemikiran baru  ',
			'id_sumber_data' => 'Id Sumber Data',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran',
			'jenis_penelitian' => 'Jenis Penelitian',
			'judul_penelitian' => 'Judul Penelitian',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi');


		$criteria->compare('id_penjelasan_pendekatan',$this->id_penjelasan_pendekatan);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('penjelasan_pendekatandanpemikiran',$this->penjelasan_pendekatandanpemikiran,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('jenis_penelitian',$this->jenis_penelitian,true);
		$criteria->compare('judul_penelitian',$this->judul_penelitian,true);

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