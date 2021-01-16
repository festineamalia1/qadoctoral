<?php

/**
 * This is the model class for table "tata_pamong".
 *
 * The followings are the available columns in table 'tata_pamong':
 * @property double $id_tata_pamong
 * @property double $id_prodi
 * @property double $id_administrasi
 * @property string $sistem_tata_pamong
 * @property string $kredibel
 * @property string $transparan
 * @property string $akuntable
 * @property string $bertanggungjawab
 * @property string $adil
 * @property string $sumber_data
 * @property string $lampiran
 */
class TataPamong extends CActiveRecord
{
	public $th_akademik_search;
	public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TataPamong the static model class
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
		return 'tata_pamong';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, sistem_tata_pamong, kredibel, transparan, akuntable, bertanggungjawab, adil, sumber_data,kredibel,akuntable,bertanggungjawab,adil,transparan', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi', 'numerical'),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search,nama_prodi_search,id_tata_pamong, id_prodi, id_administrasi, sistem_tata_pamong, kredibel, transparan, akuntable, bertanggungjawab, adil, sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_tata_pamong' => 'Id Tata Pamong',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'sistem_tata_pamong' => 'Sistem Tata Pamong',
			'kredibel' => 'Kredibel',
			'transparan' => 'Transparan',
			'akuntable' => 'Akuntable',
			'bertanggungjawab' => 'Bertanggungjawab',
			'adil' => 'Adil',
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
		// tambahan
		$criteria->with = array( 'relasi_prodi','relasi_administrasi' );
		// end tambahan
		$criteria->compare('id_tata_pamong',$this->id_tata_pamong);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('sistem_tata_pamong',$this->sistem_tata_pamong,true);
		$criteria->compare('kredibel',$this->kredibel,true);
		$criteria->compare('transparan',$this->transparan,true);
		$criteria->compare('akuntable',$this->akuntable,true);
		$criteria->compare('bertanggungjawab',$this->bertanggungjawab,true);
		$criteria->compare('adil',$this->adil,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);
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