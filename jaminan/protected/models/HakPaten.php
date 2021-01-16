<?php

/**
 * This is the model class for table "hak_paten".
 *
 * The followings are the available columns in table 'hak_paten':
 * @property integer $id_paten
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property integer $id_karya
 * @property string $haki
 */
class HakPaten extends CActiveRecord
{
	public $th_akademik_search;
	public $nama_prodi_search;
	public $nama_karya;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return HakPaten the static model class
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
		return 'hak_paten';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, id_karya, haki', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, id_karya', 'numerical', 'integerOnly'=>true),
			array('haki', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('nama_prodi_search,nama_karya,th_akademik_search,id_paten, id_prodi, id_administrasi, id_karya, haki', 'safe', 'on'=>'search'),
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
			'relasi_administrasi' => array(self::BELONGS_TO, 'Administrasi', 'id_administrasi'),
			'relasi_prodi' => array(self::BELONGS_TO, 'Prodi', 'id_prodi'),
			'relasi_karya' => array(self::BELONGS_TO, 'hasilkarya_ps', 'id_karya'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_paten' => 'Id Paten',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Akademik',
			'id_karya' => 'Judul Karya',
			'haki' => 'Haki',
			'th_akademik_search'=>'Tahun akademik',
			'nama_prodi_search'=>'Nama Prodi',
			'nama_karya'=>'Judul Karya',
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
		$criteria->with = array( 'relasi_karya','relasi_prodi','relasi_administrasi' );
		$criteria->compare('id_paten',$this->id_paten);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('id_karya',$this->id_karya);
		$criteria->compare('haki',$this->haki,true);

		// tambahan
		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);
		$criteria->compare('relasi_karya.judul',$this->nama_karya,true);
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