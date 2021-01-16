<?php

/**
 * This is the model class for table "agendadanpenelitian_s3".
 *
 * The followings are the available columns in table 'agendadanpenelitian_s3':
 * @property integer $id_agenda
 * @property string $judul_penelitian
 * @property string $agenda_penelitian
 * @property string $ts
 * @property string $keterlibatan_penelitian
 * @property integer $id_sumber_data
 * @property integer $sumber_data
 * @property string $lampiran
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $jabatan_penelitian
 * @property integer $id_dosen
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 * @property DataDosen $idDosen
 */
class Agendadanpenelitia extends CActiveRecord
{

	public $th_akademik_search;
	public $nama_prodi_search;
	public $nama_dosen_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Agendadanpenelitia the static model class
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
		return 'agendadanpenelitian_s3';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('judul_penelitian, agenda_penelitian, ts, keterlibatan_penelitian, id_prodi, id_administrasi, jabatan_penelitian, id_dosen', 'required'),
			array('id_sumber_data, sumber_data, id_prodi, id_administrasi, id_dosen', 'numerical', 'integerOnly'=>true),
			array('judul_penelitian, agenda_penelitian, keterlibatan_penelitian, lampiran, jabatan_penelitian', 'length', 'max'=>100),
			array('ts', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,nama_dosen_search,id_agenda, judul_penelitian, agenda_penelitian, ts, keterlibatan_penelitian, id_sumber_data, sumber_data, lampiran, id_prodi, id_administrasi, jabatan_penelitian, id_dosen', 'safe', 'on'=>'search'),
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
			'relasi_prodi' => array(self::BELONGS_TO, 'Prodi', 'id_prodi'),
			'relasi_administrasi' => array(self::BELONGS_TO, 'Administrasi', 'id_administrasi'),
			'relasi_dosen'=>array(self::BELONGS_TO, 'DataDosen', 'id_dosen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_agenda' => 'Id Agenda',
			'id_dosen' => 'Nama Dosen',
			'judul_penelitian' => 'Judul Penelitian',
			'agenda_penelitian' => 'Agenda Penelitian',
			'ts' => 'Tahun Akademik',
			'jabatan_penelitian'=> 'Jabatan Penelitian',
			'keterlibatan_penelitian' => 'Keterlibatan Penelitian',
			'id_sumber_data' => 'Id Sumber Data',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'nama_prodi_search'=>'Nama Prodi',
			'th_akademik_search'=>'Tahun Akademik',
			'nama_dosen_search'=>'Nama Dosen',
			'jabatan_penelitian' => 'Jabatan Penelitian',
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

		$criteria->compare('id_agenda',$this->id_agenda);
		$criteria->compare('id_dosen',$this->id_dosen,true);
		$criteria->compare('judul_penelitian',$this->judul_penelitian,true);
		$criteria->compare('agenda_penelitian',$this->agenda_penelitian,true);
		$criteria->compare('ts',$this->ts,true);
		$criteria->compare('keterlibatan_penelitian',$this->keterlibatan_penelitian,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('sumber_data',$this->sumber_data);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('jabatan_penelitian',$this->jabatan_penelitian,true);

		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);
		$criteria->compare('relasi_prodi.nama_prodi_',$this->nama_prodi_search,true);
		$criteria->compare('relasi_dosen.nama_dosen_',$this->nama_dosen_search,true);


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