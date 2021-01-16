<?php

/**
 * This is the model class for table "mhs_reguler".
 *
 * The followings are the available columns in table 'mhs_reguler':
 * @property integer $id_mhs_reguler
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $thn_akademik
 * @property string $daya_tampung
 * @property string $mhs_ikut_seleksi
 * @property string $mhs_lulus_seleksi
 * @property string $maba_bkn_transfer
 * @property string $maba_transfer
 * @property string $total_mhs_bkn_transfer
 * @property string $total_mhs_transfer
 * @property string $jumlah_lulus_bkn_transfer
 * @property string $jumlah_lulus_transfer
 * @property string $ipk_min_lulusan_reguler
 * @property string $ipk_rata2_lulusan_reguler
 * @property string $ipk_maks_lulusan_reguler
 * @property string $persen_ipk275
 * @property string $persen_ipk275_350
 * @property string $persen_ipk350
 * @property string $sumber_data
 * @property string $lampiran
 */
class MhsReguler extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;

	/**
	 * Returns the static model of the specified AR class.
	 * @return MhsReguler the static model class
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
		return 'mhs_reguler';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, thn_akademik, daya_tampung, mhs_ikut_seleksi, mhs_lulus_seleksi, maba_bkn_transfer, maba_transfer, 
				total_mhs_bkn_transfer, total_mhs_transfer, jumlah_lulus_bkn_transfer, jumlah_lulus_transfer, ipk_min_lulusan_reguler, 
				ipk_rata2_lulusan_reguler, ipk_maks_lulusan_reguler, persen_ipk275, persen_ipk275_350, persen_ipk350','required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi,daya_tampung, mhs_ikut_seleksi, mhs_lulus_seleksi, maba_bkn_transfer, maba_transfer, 
				total_mhs_bkn_transfer, total_mhs_transfer, jumlah_lulus_bkn_transfer, jumlah_lulus_transfer, ipk_min_lulusan_reguler, 
				ipk_rata2_lulusan_reguler, ipk_maks_lulusan_reguler, persen_ipk275, persen_ipk275_350, persen_ipk350', 'numerical', 'integerOnly'=>false,'message'=>'<i><span style="color:red">Kolom {attribute} hanya boleh diisi dengan angka</span></i>'),
			array('thn_akademik', 'length', 'max'=>4),
			array('daya_tampung, mhs_ikut_seleksi, mhs_lulus_seleksi, maba_bkn_transfer, maba_transfer, total_mhs_bkn_transfer, total_mhs_transfer, jumlah_lulus_bkn_transfer, jumlah_lulus_transfer, ipk_min_lulusan_reguler, ipk_rata2_lulusan_reguler, ipk_maks_lulusan_reguler, persen_ipk275, persen_ipk275_350, persen_ipk350', 'length', 'max'=>10),
			array('sumber_data', 'length', 'max'=>100),
			// tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_mhs_reguler, id_prodi, id_administrasi, thn_akademik, daya_tampung, mhs_ikut_seleksi, mhs_lulus_seleksi, maba_bkn_transfer, maba_transfer, total_mhs_bkn_transfer, total_mhs_transfer, jumlah_lulus_bkn_transfer, jumlah_lulus_transfer, ipk_min_lulusan_reguler, ipk_rata2_lulusan_reguler, ipk_maks_lulusan_reguler, persen_ipk275, persen_ipk275_350, persen_ipk350', 'safe', 'on'=>'search'),
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
			//'id_mhs_reguler' => 'Id Mhs Reguler',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'thn_akademik' => 'Tahun Akademik',
			'daya_tampung' => 'Daya Tampung',
			'mhs_ikut_seleksi' => 'Mahasiswa Ikut Seleksi',
			'mhs_lulus_seleksi' => 'Mahasiswa Lulus Seleksi',
			'maba_bkn_transfer' => 'Mahasiswa Baru Bukan transfer',
			'maba_transfer' => 'Maba Transfer',
			'total_mhs_bkn_transfer' => 'Total Mahasiswa Bukan Transfer',
			'total_mhs_transfer' => 'Total Mahasiswa Transfer',
			'jumlah_lulus_bkn_transfer' => 'Jumlah Lulus Bukan Transfer',
			'jumlah_lulus_transfer' => 'Jumlah Lulus Transfer',
			'ipk_min_lulusan_reguler' => 'IPK Minimal Lulusan Reguler',
			'ipk_rata2_lulusan_reguler' => 'IPK Rata-rata Lulusan Reguler',
			'ipk_maks_lulusan_reguler' => 'IPK Maksimal Lulusan Reguler',
			'persen_ipk275' => 'Persen IPK 2,75',
			'persen_ipk275_350' => 'Persen IPK 2,75-3,50',
			'persen_ipk350' => 'Persen IPK 3,50',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : MhsReguler_tahunakreditasi (.zip) contoh MhsReguler_2012.zip)',
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
		// end tambahan

		$criteria->compare('id_mhs_reguler',$this->id_mhs_reguler);

		$criteria->compare('id_prodi',$this->id_prodi);

		$criteria->compare('id_administrasi',$this->id_administrasi);

		$criteria->compare('thn_akademik',$this->thn_akademik,true);

		$criteria->compare('daya_tampung',$this->daya_tampung,true);

		$criteria->compare('mhs_ikut_seleksi',$this->mhs_ikut_seleksi,true);

		$criteria->compare('mhs_lulus_seleksi',$this->mhs_lulus_seleksi,true);

		$criteria->compare('maba_bkn_transfer',$this->maba_bkn_transfer,true);

		$criteria->compare('maba_transfer',$this->maba_transfer,true);

		$criteria->compare('total_mhs_bkn_transfer',$this->total_mhs_bkn_transfer,true);

		$criteria->compare('total_mhs_transfer',$this->total_mhs_transfer,true);

		$criteria->compare('jumlah_lulus_bkn_transfer',$this->jumlah_lulus_bkn_transfer,true);

		$criteria->compare('jumlah_lulus_transfer',$this->jumlah_lulus_transfer,true);

		$criteria->compare('ipk_min_lulusan_reguler',$this->ipk_min_lulusan_reguler,true);

		$criteria->compare('ipk_rata2_lulusan_reguler',$this->ipk_rata2_lulusan_reguler,true);

		$criteria->compare('ipk_maks_lulusan_reguler',$this->ipk_maks_lulusan_reguler,true);

		$criteria->compare('persen_ipk275',$this->persen_ipk275,true);

		$criteria->compare('persen_ipk275_350',$this->persen_ipk275_350,true);

		$criteria->compare('persen_ipk350',$this->persen_ipk350,true);

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

		return new CActiveDataProvider('MhsReguler', array(
			'criteria'=>$criteria,
		));
	}
}