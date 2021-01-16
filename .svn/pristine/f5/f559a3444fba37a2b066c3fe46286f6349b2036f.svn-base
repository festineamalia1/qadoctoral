<?php

/**
 * This is the model class for table "mhs_nonreguler".
 *
 * The followings are the available columns in table 'mhs_nonreguler':
 * @property integer $id_mhs_nonreg
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $th_akademik
 * @property string $daya_tampung
 * @property string $jml_ikut_seleksi
 * @property string $jml_lulus_seleksi
 * @property string $jml_maba_nonreg
 * @property string $jml_transfer
 * @property string $tot_mhs_nonreg
 * @property string $tot_transfer
 * @property string $sumber_data
 * @property string $lampiran
 */
class MhsNonReguler extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MhsNonReguler the static model class
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
		return 'mhs_nonreguler';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, th_akademik, daya_tampung, jml_ikut_seleksi, jml_lulus_seleksi, jml_maba_nonreg, jml_transfer, 
				tot_mhs_nonreg, tot_transfer','required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi,daya_tampung, jml_ikut_seleksi, jml_lulus_seleksi, jml_maba_nonreg, jml_transfer, 
				tot_mhs_nonreg, tot_transfer', 'numerical', 'integerOnly'=>false,'message'=>'<i><span style="color:red">Kolom {attribute} hanya boleh diisi dengan angka</span></i>'),
			array('th_akademik', 'length', 'max'=>4),
			array('daya_tampung, jml_ikut_seleksi, jml_lulus_seleksi, jml_maba_nonreg, jml_transfer, tot_mhs_nonreg, tot_transfer', 'length', 'max'=>10),
			array('sumber_data', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_mhs_nonreg, id_prodi, id_administrasi, th_akademik, daya_tampung, jml_ikut_seleksi, jml_lulus_seleksi, jml_maba_nonreg, jml_transfer, tot_mhs_nonreg, tot_transfer, sumber_data', 'safe', 'on'=>'search'),
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
			'id_mhs_nonreg' => 'Id Mhs Nonreg',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'th_akademik' => 'Tahun Akademik',
			'daya_tampung' => 'Daya Tampung',
			'jml_ikut_seleksi' => 'Jumlah Ikut Seleksi',
			'jml_lulus_seleksi' => 'Jumlah Lulus Seleksi',
			'jml_maba_nonreg' => 'Jumlah Mahasiswa Baru Non Reguler',
			'jml_transfer' => 'Jumlah Transfer',
			'tot_mhs_nonreg' => 'Total Mahasiswa Non Reguler',
			'tot_transfer' => 'Total Transfer',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file : MhsNoReg_tahunakreditasi (.zip) contoh MhsNoReg_2012.zip)',
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

		$criteria->compare('id_mhs_nonreg',$this->id_mhs_nonreg);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('th_akademik',$this->th_akademik,true);
		$criteria->compare('daya_tampung',$this->daya_tampung,true);
		$criteria->compare('jml_ikut_seleksi',$this->jml_ikut_seleksi,true);
		$criteria->compare('jml_lulus_seleksi',$this->jml_lulus_seleksi,true);
		$criteria->compare('jml_maba_nonreg',$this->jml_maba_nonreg,true);
		$criteria->compare('jml_transfer',$this->jml_transfer,true);
		$criteria->compare('tot_mhs_nonreg',$this->tot_mhs_nonreg,true);
		$criteria->compare('tot_transfer',$this->tot_transfer,true);
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