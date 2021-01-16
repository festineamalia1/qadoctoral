<?php

/**
 * This is the model class for table "prasarana".
 *
 * The followings are the available columns in table 'prasarana':
 * @property integer $id_prasarana
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $ruang_kerja
 * @property integer $jml_ruang
 * @property integer $luasm2
 * @property string $F_uraian_aspek
 * @property string $F_uraian_penilaian
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class Prasarana extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prasarana the static model class
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
		return 'prasarana';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, ruang_kerja, jml_ruang, luasm2,', 'required'),
			array('id_prodi, id_administrasi, jml_ruang, luasm2, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('ruang_kerja', 'length', 'max'=>4),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			//tambahan
			// array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_prasarana, id_prodi, id_administrasi, ruang_kerja, jml_ruang, luasm2, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
		);
		// end tambahan
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_prasarana' => 'Id Prasarana',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'ruang_kerja' => 'Ruang Kerja',
			'jml_ruang' => 'Jml Ruang',
			'luasm2' => 'Luasm2',
			'F_uraian_aspek' => 'F Uraian Aspek',
			'F_uraian_penilaian' => 'F Uraian Penilaian',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : Prasarana_tahunakreditasi (.zip) contoh Prasarana_2012.zip)',
			'th_akademik_search'=>'Th akademik',
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

		$criteria->compare('id_prasarana',$this->id_prasarana);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('ruang_kerja',$this->ruang_kerja,true);
		$criteria->compare('jml_ruang',$this->jml_ruang);
		$criteria->compare('luasm2',$this->luasm2);
		$criteria->compare('F_uraian_aspek',$this->F_uraian_aspek,true);
		$criteria->compare('F_uraian_penilaian',$this->F_uraian_penilaian,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
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