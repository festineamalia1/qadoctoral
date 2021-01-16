<?php

/**
 * This is the model class for table "upaya_keberlanjutan".
 *
 * The followings are the available columns in table 'upaya_keberlanjutan':
 * @property integer $id_upaya_keberlanjutan
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $animo_calon_mhs
 * @property string $mutu_manajemen
 * @property string $mutu_lulusan
 * @property string $kerjasama_kemitraan
 * @property string $hibah_kompetitif
 * @property string $sumber_data
 */
class UpayaKeberlanjutan extends CActiveRecord
{
	public $th_akademik_search;
	public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UpayaKeberlanjutan the static model class
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
		return 'upaya_keberlanjutan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, animo_calon_mhs, mutu_manajemen, mutu_lulusan, kerjasama_kemitraan, hibah_kompetitif', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('sumber_data', 'length', 'max'=>100),
			array('animo_calon_mhs, mutu_manajemen, mutu_lulusan, kerjasama_kemitraan, hibah_kompetitif', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_upaya_keberlanjutan, id_prodi, id_administrasi, animo_calon_mhs, mutu_manajemen, mutu_lulusan, kerjasama_kemitraan, hibah_kompetitif, sumber_data', 'safe', 'on'=>'search'),
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
			'id_upaya_keberlanjutan' => 'Id Upaya Keberlanjutan',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'animo_calon_mhs' => 'Animo Calon Mhs',
			'mutu_manajemen' => 'Mutu Manajemen',
			'mutu_lulusan' => 'Mutu Lulusan',
			'kerjasama_kemitraan' => 'Kerjasama Kemitraan',
			'hibah_kompetitif' => 'Hibah Kompetitif',
			'sumber_data' => 'Sumber Data',
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

		$criteria->compare('id_upaya_keberlanjutan',$this->id_upaya_keberlanjutan);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('animo_calon_mhs',$this->animo_calon_mhs,true);
		$criteria->compare('mutu_manajemen',$this->mutu_manajemen,true);
		$criteria->compare('mutu_lulusan',$this->mutu_lulusan,true);
		$criteria->compare('kerjasama_kemitraan',$this->kerjasama_kemitraan,true);
		$criteria->compare('hibah_kompetitif',$this->hibah_kompetitif,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);

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