<?php

/**
 * This is the model class for table "ruang_kerja_dosen".
 *
 * The followings are the available columns in table 'ruang_kerja_dosen':
 * @property integer $id_ruang_dosen
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property integer $ruang_kerja_dosen
 * @property integer $jumlah_ruang
 * @property integer $luas
 */
class RuangKerjaDosen extends CActiveRecord
{
	 public $th_akademik_search;
	 public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RuangKerjaDosen the static model class
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
		return 'ruang_kerja_dosen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ruang_kerja_dosen, jumlah_ruang, luas, id_administrasi, id_prodi', 'required'),
			array('id_ruang_dosen, id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('ruang_kerja_dosen, jumlah_ruang, luas','safe'), 
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ruang_dosen,th_akademik_search, nama_prodi_search, id_prodi, id_administrasi, ruang_kerja_dosen, jumlah_ruang, luas', 'safe', 'on'=>'search'),
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
			'id_ruang_dosen' => 'Id Ruang Dosen',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun',
			'ruang_kerja_dosen' => 'Ruang Kerja Dosen',
			'jumlah_ruang' => 'Jumlah Ruang',
			'luas' => 'Luas',

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

		$criteria->compare('id_ruang_dosen',$this->id_ruang_dosen);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('ruang_kerja_dosen',$this->ruang_kerja_dosen);
		$criteria->compare('jumlah_ruang',$this->jumlah_ruang);
		$criteria->compare('luas',$this->luas);

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