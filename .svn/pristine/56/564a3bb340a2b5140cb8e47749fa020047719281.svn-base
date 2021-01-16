<?php

/**
 * This is the model class for table "prasarana_lain".
 *
 * The followings are the available columns in table 'prasarana_lain':
 * @property integer $id_sarana
 * @property string $id_prodi
 * @property integer $id_administrasi
 * @property string $jenis_prasarana
 * @property integer $jml_unit
 * @property string $tot_luas
 * @property string $kepemilikan
 * @property string $kondisi
 * @property string $utilisasi
 * @property string $unit_pengelola
 * @property string $ket_prasarana
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class PrasaranaLain extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PrasaranaLain the static model class
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
		return 'prasarana_lain';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, jenis_prasarana, jml_unit, tot_luas, kepemilikan, kondisi, utilisasi, unit_pengelola, ket_prasarana',  'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_administrasi, jml_unit, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('id_prodi', 'length', 'max'=>5),
			array('jenis_prasarana', 'length', 'max'=>200),
			array('tot_luas', 'length', 'max'=>30),
			array('kepemilikan, kondisi', 'length', 'max'=>7),
			array('utilisasi, unit_pengelola', 'length', 'max'=>100),
			array('ket_prasarana', 'length', 'max'=>200),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_sarana, id_prodi, id_administrasi, jenis_prasarana, jml_unit, tot_luas, kepemilikan, kondisi, utilisasi, unit_pengelola, ket_prasarana, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_sarana' => 'Id Sarana',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'jenis_prasarana' => 'Jenis Prasarana',
			'jml_unit' => 'Jumlah Unit',
			'tot_luas' => 'Total Luas (m2)',
			'kepemilikan' => 'Kepemilikan',
			'kondisi' => 'Kondisi',
			'utilisasi' => 'Utilisasi (Jam/Minggu)',
			'unit_pengelola' => 'Unit Pengelola',
			'ket_prasarana' => 'Keterangan Prasarana',
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

		$criteria->compare('id_sarana',$this->id_sarana);
		$criteria->compare('id_prodi',$this->id_prodi,true);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('jenis_prasarana',$this->jenis_prasarana,true);
		$criteria->compare('jml_unit',$this->jml_unit);
		$criteria->compare('tot_luas',$this->tot_luas,true);
		$criteria->compare('kepemilikan',$this->kepemilikan,true);
		$criteria->compare('kondisi',$this->kondisi,true);
		$criteria->compare('utilisasi',$this->utilisasi,true);
		$criteria->compare('unit_pengelola',$this->unit_pengelola,true);
		$criteria->compare('ket_prasarana',$this->ket_prasarana,true);
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