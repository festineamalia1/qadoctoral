<?php

/**
 * This is the model class for table "dana_penelitian".
 *
 * The followings are the available columns in table 'dana_penelitian':
 * @property integer $id_dana_penelitian
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $th_publikasi
 * @property string $judul
 * @property string $sumber_dana
 * @property string $jenis_dana
 * @property string $jumlah_dana
 * @property string $status
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class DanaPenelitian extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	 public $nama_dosen_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DanaPenelitian the static model class
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
		return 'dana_penelitian';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, th_publikasi, judul,id_dosen, sumber_dana, jenis_dana, jumlah_dana, status', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('th_publikasi', 'length', 'max'=>4),
			array('judul, sumber_dana, jenis_dana', 'length', 'max'=>200),
			array('jumlah_dana, status', 'length', 'max'=>30),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_dana_penelitian, id_prodi, id_administrasi, id_dosen,th_publikasi, judul, nama_dosen_search, sumber_dana, jenis_dana, jumlah_dana, status, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'relasi_dosen'=>array(self::BELONGS_TO, 'DataDosen', 'id_dosen'),
		);
		// end tambahan
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_dana_penelitian' => 'Id Dana Penelitian',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'th_publikasi' => 'Tahun Publikasi',
			'judul' => 'Judul Penelitian',
			'id_dosen' => 'Nama Dosen',
			'sumber_dana' => 'Sumber Dana',
			'jenis_dana' => 'Jenis Dana',
			'jumlah_dana' => 'Jumlah Dana',
			'status' => 'Status',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran',

			'th_akademik_search'=>'Tahun akademik',
			'nama_prodi_search'=>'Nama Prodi',
			'nama_dosen_search' => 'Nama Dosen'
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
		
		$criteria->compare('id_dana_penelitian',$this->id_dana_penelitian);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('th_publikasi',$this->th_publikasi,true);
		$criteria->compare('judul',$this->judul,true);
		$criteria->compare('id_dosen',$this->id_dosen);	
		$criteria->compare('sumber_dana',$this->sumber_dana,true);
		$criteria->compare('jenis_dana',$this->jenis_dana,true);
		$criteria->compare('jumlah_dana',$this->jumlah_dana,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('lampiran',$this->lampiran,true);
		// tambahan
		$criteria->compare('relasi_dosen.nama_dosen',$this->nama_dosen_search,true);


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