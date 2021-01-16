<?php

/**
 * This is the model class for table "dampak_penelitian".
 *
 * The followings are the available columns in table 'dampak_penelitian':
 * @property integer $id_dampakpenelitian
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $penjelasan_dampak
 * @property string $judul_penelitian
 * @property string $jenis_penelitian
 * @property string $damp_produktifitas
 * @property string $damp_kesejahteraan_masyarakat
 * @property string $damp_mutu_lingkungan
 * @property integer $id_sumber_data
 * @property string $sumber_data
 * @property string $lampiran
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 */
class DampakPenelitian_ps extends CActiveRecord
{	
	 public $th_akademik_search;
	 public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DampakPenelitian_ps the static model class
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
		return 'dampak_penelitian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, judul_penelitian, jenis_penelitian, damp_produktifitas, damp_kesejahteraan_masyarakat, damp_mutu_lingkungan', 'required'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('judul_penelitian, sumber_data, lampiran', 'length', 'max'=>100),
			array('jenis_penelitian', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dampakpenelitian, id_prodi, id_administrasi, penjelasan_dampak, judul_penelitian, jenis_penelitian, damp_produktifitas, damp_kesejahteraan_masyarakat, damp_mutu_lingkungan, id_sumber_data, sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_dampakpenelitian' => 'Id Dampakpenelitian',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun PelaporanBorang Administrasi',
			'penjelasan_dampak' => 'Penjelasan Dampak',
			'judul_penelitian' => 'Judul Penelitian',
			'jenis_penelitian' => 'Jenis Penelitian',
			'damp_produktifitas' => 'Dampak Produktifitas',
			'damp_kesejahteraan_masyarakat' => 'Dampak Kesejahteraan Masyarakat',
			'damp_mutu_lingkungan' => 'Dampak Mutu Lingkungan',
			'id_sumber_data' => 'Id Sumber Data',
			'sumber_data' => 'Sumber Data',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi' );

		$criteria->compare('id_dampakpenelitian',$this->id_dampakpenelitian);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('penjelasan_dampak',$this->penjelasan_dampak,true);
		$criteria->compare('judul_penelitian',$this->judul_penelitian,true);
		$criteria->compare('jenis_penelitian',$this->jenis_penelitian,true);
		$criteria->compare('damp_produktifitas',$this->damp_produktifitas,true);
		$criteria->compare('damp_kesejahteraan_masyarakat',$this->damp_kesejahteraan_masyarakat,true);
		$criteria->compare('damp_mutu_lingkungan',$this->damp_mutu_lingkungan,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);

		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);
		
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