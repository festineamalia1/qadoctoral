<?php

/**
 * This is the model class for table "dana_operasional".
 *
 * The followings are the available columns in table 'dana_operasional':
 * @property integer $id_dana_operasional
 * @property string $TS2
 * @property string $TS1
 * @property string $TS
 * @property integer $id_administrasi
 * @property integer $id_prodi
 */
class DanaOperasional extends CActiveRecord
{
	public $th_akademik_search;
	 public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DanaOperasional the static model class
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
		return 'dana_operasional';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TS2, TS1, TS, id_administrasi, id_prodi', 'required'),
			array('id_administrasi, id_prodi', 'numerical', 'integerOnly'=>true),
			array('TS2, TS1, TS', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dana_operasional, TS2, TS1, TS, id_administrasi, id_prodi', 'safe', 'on'=>'search'),
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
			'id_dana_operasional' => 'Id Dana Operasional',
			'TS2' => 'Ts-2',
			'TS1' => 'Ts-1',
			'TS' => 'Ts',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'id_prodi' => 'Nama Prodi',
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

		$criteria->compare('id_dana_operasional',$this->id_dana_operasional);
		$criteria->compare('TS2',$this->TS2,true);
		$criteria->compare('TS1',$this->TS1,true);
		$criteria->compare('TS',$this->TS,true);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('id_prodi',$this->id_prodi);

		$criteria->compare('relasi_administrasi.th_akademik',$this->th_akademik_search,true);

		$criteria->compare('relasi_prodi.nama_prodi',$this->nama_prodi_search,true);

if(Yii::app()->user->group_id == 1){

		}else{
			$criteria->addColumnCondition(array('relasi_prodi.id_prodi'=>Yii::app()->user->group_id),'AND','AND');
		}

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}