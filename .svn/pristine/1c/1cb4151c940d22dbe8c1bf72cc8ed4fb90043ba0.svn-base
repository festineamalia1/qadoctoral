<?php

/**
 * This is the model class for table "tenaga_kependidikan".
 *
 * The followings are the available columns in table 'tenaga_kependidikan':
 * @property integer $id_tenaga_kependidikan
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $jenis_tenaga_pustakawan
 * @property string $jenis_tenaga
 * @property integer $jumS3
 * @property integer $jumS2
 * @property integer $jumS1
 * @property integer $jumD4
 * @property integer $jumD3
 * @property integer $jumD2
 * @property integer $jumD1
 * @property integer $jumSMA
 * @property integer $jumSMK
 * @property string $unit_kerja
 * @property string $upaya_peningkatan_kompetensi
 * @property string $F_pandangan_fakultas
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class TenagaKependidikan extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TenagaKependidikan the static model class
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
		return 'tenaga_kependidikan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, jenis_tenaga, jumS3, jumS2, jumS1, jumD4, jumD3, jumD2, jumD1, jumSMA, jumSMK, unit_kerja, upaya_peningkatan_kompetensi', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi, jumS3, jumS2, jumS1, jumD4, jumD3, jumD2, jumD1, jumSMA, jumSMK, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('jenis_tenaga_pustakawan, jenis_tenaga', 'length', 'max'=>10),
			array('unit_kerja', 'length', 'max'=>50),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_tenaga_kependidikan, id_prodi, id_administrasi, jenis_tenaga_pustakawan, jenis_tenaga, jumS3, jumS2, jumS1, jumD4, jumD3, jumD2, jumD1, jumSMA, jumSMK, unit_kerja, upaya_peningkatan_kompetensi, F_pandangan_fakultas, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_tenaga_kependidikan' => 'Id Tenaga Kependidikan',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'jenis_tenaga_pustakawan' => 'Jenis Tenaga Pustakawan',
			'jenis_tenaga' => 'Jenis Tenaga Kependidikan',
			'jumS3' => 'Jumlah S3',
			'jumS2' => 'Jumlah S2',
			'jumS1' => 'Jumlah S1',
			'jumD4' => 'Jumlah D4',
			'jumD3' => 'Jumlah D3',
			'jumD2' => 'Jumlah D2',
			'jumD1' => 'Jumlah D1',
			'jumSMA' => 'Jumlah SMA',
			'jumSMK' => 'Jumlah SMK',
			'unit_kerja' => 'Unit Kerja',
			'upaya_peningkatan_kompetensi' => 'Upaya Peningkatan Kompetensi',
			'F_pandangan_fakultas' => 'Pandangan Fakultas',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : TenagaKependidikan_tahunakreditasi (.zip) contoh TenagaKependidikan_2012.zip)',
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

		$criteria->compare('id_tenaga_kependidikan',$this->id_tenaga_kependidikan);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('jenis_tenaga_pustakawan',$this->jenis_tenaga_pustakawan,true);
		$criteria->compare('jenis_tenaga',$this->jenis_tenaga,true);
		$criteria->compare('jumS3',$this->jumS3);
		$criteria->compare('jumS2',$this->jumS2);
		$criteria->compare('jumS1',$this->jumS1);
		$criteria->compare('jumD4',$this->jumD4);
		$criteria->compare('jumD3',$this->jumD3);
		$criteria->compare('jumD2',$this->jumD2);
		$criteria->compare('jumD1',$this->jumD1);
		$criteria->compare('jumSMA',$this->jumSMA);
		$criteria->compare('jumSMK',$this->jumSMK);
		$criteria->compare('unit_kerja',$this->unit_kerja,true);
		$criteria->compare('upaya_peningkatan_kompetensi',$this->upaya_peningkatan_kompetensi,true);
		$criteria->compare('F_pandangan_fakultas',$this->F_pandangan_fakultas,true);
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