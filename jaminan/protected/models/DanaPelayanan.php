<?php

/**
 * This is the model class for table "dana_pelayanan".
 *
 * The followings are the available columns in table 'dana_pelayanan':
 * @property integer $id_dana_pelayanan
 * @property integer $id_administrasi
 * @property string $Jdl_kegiatan_pelayanan
 * @property string $sumber_dana
 * @property string $jenis_dana
 * @property string $jml_dana
 */
class DanaPelayanan extends CActiveRecord
{
	public $th_akademik_search;
	 public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DanaPelayanan the static model class
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
		return 'dana_pelayanan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_administrasi, id_prodi, Jdl_kegiatan_pelayanan, sumber_dana, jenis_dana, jml_dana', 'required'),
			array('id_administrasi, id_prodi', 'numerical', 'integerOnly'=>true),
			
			array('Jdl_kegiatan_pelayanan, sumber_dana, jenis_dana, jml_dana','safe'),

			array('Jdl_kegiatan_pelayanan', 'length', 'max'=>150),
			array('sumber_dana', 'length', 'max'=>10),
			array('jenis_dana, jml_dana', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_dana_pelayanan,th_akademik_search, nama_prodi_search, id_administrasi, id_prodi, Jdl_kegiatan_pelayanan, sumber_dana, jenis_dana, jml_dana', 'safe', 'on'=>'search'),
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
			'id_dana_pelayanan' => 'Id Dana Pelayanan',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'Jdl_kegiatan_pelayanan' => 'Judul Kegiatan Pelayanan',
			'sumber_dana' => 'Sumber Dana',
			'jenis_dana' => 'Jenis Dana',
			'jml_dana' => 'Jumlah Dana',
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
		
		$criteria->compare('id_dana_pelayanan',$this->id_dana_pelayanan);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('Jdl_kegiatan_pelayanan',$this->Jdl_kegiatan_pelayanan,true);
		$criteria->compare('sumber_dana',$this->sumber_dana,true);
		$criteria->compare('jenis_dana',$this->jenis_dana,true);
		$criteria->compare('jml_dana',$this->jml_dana,true);

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