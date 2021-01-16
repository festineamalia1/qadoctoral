<?php

/**
 * This is the model class for table "topik_penelitian".
 *
 * The followings are the available columns in table 'topik_penelitian':
 * @property integer $id_topik
 * @property integer $id_administrasi
 * @property integer $id_prodi
 * @property integer $id_dosen
 * @property string $topik_penelitian_disertasi
 * @property integer $jum_mhs_terlbt
 * @property integer $judul_penelitian
 * @property integer $id_sumber_data
 * @property string $sumber_data
 * @property string $lampiran
 * @property integer $mhs_terlibat_disertasi
 *
 * The followings are the available model relations:
 * @property Administrasi $idAdministrasi
 * @property Prodi $idProdi
 */
class TopikPenelitian extends CActiveRecord
{	
	 public $th_akademik_search;
	 public $nama_prodi_search;
	 public $nama_dosen_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TopikPenelitian the static model class
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
		return 'topik_penelitian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_administrasi, id_prodi, topik_penelitian_disertasi, id_dosen, judul_penelitian,  mhs_terlibat_disertasi', 'required'),
			array('id_administrasi, id_prodi, jum_mhs_terlbt, id_sumber_data, mhs_terlibat_disertasi', 'numerical', 'integerOnly'=>true),
			array('topik_penelitian_disertasi', 'length', 'max'=>255),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			array('judul_penelitian', 'length', 'max'=>100),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search, nama_dosen_search, id_topik, id_administrasi, id_prodi, topik_penelitian_disertasi, jum_mhs_terlbt, id_dosen, judul_penelitian, id_sumber_data, sumber_data, lampiran, mhs_terlibat_disertasi', 'safe', 'on'=>'search'),
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
			'relasi_dosen'=>array(self::BELONGS_TO, 'DataDosen', 'id_dosen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_topik' => 'Id Topik',
			'id_administrasi' => 'Tahun Administrasi',
			'id_prodi' => 'Nama Prodi',
			'topik_penelitian_disertasi' => 'Topik Penelitian Dosen',
			'jum_mhs_terlbt' => 'Jumlah  Mahasiswa Yang Terlibat Tidak Untuk Penelitian Disertasi ',
			'id_dosen' => 'Nama Dosen',
			'judul_penelitian' => 'Judul Penelitian',
			'id_sumber_data' => 'Id Sumber Data',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran',
			'mhs_terlibat_disertasi' => ' Jumlah Mahasiswa Yang Terlibat Untuk Penelitian Disertasi',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi','relasi_dosen');

		$criteria->compare('id_topik',$this->id_topik);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('topik_penelitian_disertasi',$this->topik_penelitian_disertasi,true);
		$criteria->compare('jum_mhs_terlbt',$this->jum_mhs_terlbt);
		$criteria->compare('id_dosen',$this->id_dosen,true);
		$criteria->compare('judul_penelitian',$this->judul_penelitian);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('mhs_terlibat_disertasi',$this->mhs_terlibat_disertasi);

		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);

		$criteria->compare('relasi_dosen.nama_dosen',$this->nama_dosen_search,true);
	


	//tambahan
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