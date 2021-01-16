<?php

/**
 * This is the model class for table "kurikulum_tdk_tetap".
 *
 * The followings are the available columns in table 'kurikulum_tdk_tetap':
 * @property integer $id_tdk_tetap
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $penataan_pelaksanaan
 * @property string $peninjauan_kurikulum
 */
class KurikulumTidakTetap extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KurikulumTidakTetap the static model class
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
		return 'kurikulum_tdk_tetap';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, penataan_pelaksanaan, peninjauan_kurikulum', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_tdk_tetap, id_prodi, id_administrasi, penataan_pelaksanaan, peninjauan_kurikulum', 'safe', 'on'=>'search'),
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
			'id_tdk_tetap' => 'Id Kurikulum Tdk Tetap',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'penataan_pelaksanaan' => 'Penataan dan Pelaksanaan Program Pendidikan Doktor ',
			'peninjauan_kurikulum' => 'Peninjauan Kurikulum',
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

		$criteria->compare('id_tdk_tetap',$this->id_tdk_tetap);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('penataan_pelaksanaan',$this->penataan_pelaksanaan,true);
		$criteria->compare('peninjauan_kurikulum',$this->peninjauan_kurikulum,true);

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