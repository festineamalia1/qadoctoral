<?php

/**
 * This is the model class for table "tesis_mhs_s2".
 *
 * The followings are the available columns in table 'tesis_mhs_s2':
 * @property integer $id_tesis
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property integer $judul_tesis
 * @property string $nama_mhs_s2
 * @property string $ts
 * @property string $nama_dosen
 * @property integer $id_sumber_data
 * @property string $sumber_data
 * @property string $lampiran
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 */
class TesisMhs_ps_S2 extends CActiveRecord
{	
	public $th_akademik_search;
	public $nama_prodi_search;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TesisMhs_ps_S2 the static model class
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
		return 'tesis_mhs_s2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, judul_tesis, nama_mhs_s2, ts, nama_dosen', 'required'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('nama_mhs_s2, nama_dosen,judul_tesis, sumber_data, lampiran', 'length', 'max'=>100),
			array('ts', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_tesis, id_prodi, id_administrasi, judul_tesis, nama_mhs_s2, ts, nama_dosen, id_sumber_data, sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_tesis' => 'Id Tesis',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang',
			'judul_tesis' => 'Judul Tesis',
			'nama_mhs_s2' => 'Nama Mahasiswa',
			'ts' => 'Tahun Akademik',
			'nama_dosen' => 'Nama Dosen Pembimbing',
			'id_sumber_data' => 'Id Sumber Data',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi');

		$criteria->compare('id_tesis',$this->id_tesis);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('judul_tesis',$this->judul_tesis);
		$criteria->compare('nama_mhs_s2',$this->nama_mhs_s2,true);
		$criteria->compare('ts',$this->ts,true);
		$criteria->compare('nama_dosen',$this->nama_dosen,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);

		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);

		

		// end tambahan
		// tambahan




		if(Yii::app()->user->group_id == 1){

		}else{
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}