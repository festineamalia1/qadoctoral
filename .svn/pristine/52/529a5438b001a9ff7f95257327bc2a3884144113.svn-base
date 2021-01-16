<?php

/**
 * This is the model class for table "peralatan_utama".
 *
 * The followings are the available columns in table 'peralatan_utama':
 * @property integer $id_peralatan
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $nama_lab
 * @property string $jenis_peralatan
 * @property integer $jml_unit
 * @property string $kepemilikan
 * @property string $kondisi
 * @property string $rata2_wkt_guna
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class PeralatanUtama extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PeralatanUtama the static model class
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
		return 'peralatan_utama';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, nama_lab, jenis_peralatan, jml_unit, kepemilikan, kondisi, rata2_wkt_guna', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, jml_unit, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('nama_lab, jenis_peralatan', 'length', 'max'=>50),
			array('kepemilikan, kondisi', 'length', 'max'=>7),
			array('rata2_wkt_guna', 'length', 'max'=>5),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_peralatan, id_prodi, id_administrasi, nama_lab, jenis_peralatan, jml_unit, kepemilikan, kondisi, rata2_wkt_guna, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_peralatan' => 'Id Peralatan',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'nama_lab' => 'Nama Laboratorium',
			'jenis_peralatan' => 'Jenis Peralatan Utama',
			'jml_unit' => 'Jumlah Unit',
			'kepemilikan' => 'Kepemilikan',
			'kondisi' => 'Kondisi',
			'rata2_wkt_guna' => 'Rata-rata Waktu Penggunaan (jam/minggu)',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
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

		$criteria->compare('id_peralatan',$this->id_peralatan);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('nama_lab',$this->nama_lab,true);
		$criteria->compare('jenis_peralatan',$this->jenis_peralatan,true);
		$criteria->compare('jml_unit',$this->jml_unit);
		$criteria->compare('kepemilikan',$this->kepemilikan,true);
		$criteria->compare('kondisi',$this->kondisi,true);
		$criteria->compare('rata2_wkt_guna',$this->rata2_wkt_guna,true);
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