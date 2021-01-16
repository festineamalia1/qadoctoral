<?php

/**
 * This is the model class for table "ketersediaan_tempat".
 *
 * The followings are the available columns in table 'ketersediaan_tempat':
 * @property integer $id_ketersediaan
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $penjelasan_Keetersediaan
 */
class KetersediaanTempat extends CActiveRecord
{
	public $th_akademik_search;
	 public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return KetersediaanTempat the static model class
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
		return 'ketersediaan_tempat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, penjelasan_ketersediaan', 'required'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('penjelasan_ketersediaan', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_ketersediaan, id_prodi, id_administrasi, th_akademik_search, nama_prodi_search,penjelasan_ketersediaan', 'safe', 'on'=>'search'),
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
			'id_ketersediaan' => 'Id Ketersediaan',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Akademik',
			'penjelasan_ketersediaan' => 'Penjelasan Keetersediaan',

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

		$criteria->compare('id_ketersediaan',$this->id_ketersediaan);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('penjelasan_ketersediaan',$this->penjelasan_ketersediaan,true);

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