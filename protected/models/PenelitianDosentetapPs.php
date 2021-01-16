<?php

/**
 * This is the model class for table "penelitian_dosentetap_ps".
 *
 * The followings are the available columns in table 'penelitian_dosentetap_ps':
 * @property integer $id_jum_kegiatan
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $sumber_pembiayaan
 * @property string $detail_sumber_biaya
 * @property string $waktu_TS2
 * @property string $waktu_TS1
 * @property string $waktu_TS
 * @property string $detail_waktu
 * @property string $status
 * @property string $detail_status
 * @property string $mhs_terlibat
 * @property integer $jum_mhs_ambil_ta
 * @property integer $jum_mhs_penelitian
 * @property string $wujud_mhs_pkm
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class PenelitianDosentetapPs extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PenelitianDosentetapPs the static model class
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
		return 'penelitian_dosentetap_ps';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, sumber_pembiayaan, waktu_TS, status, mhs_terlibat, jum_mhs_penelitian, wujud_mhs_pkm', 'required'),
			array('id_prodi, id_administrasi, jum_mhs_ambil_ta, jum_mhs_penelitian, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('sumber_pembiayaan', 'length', 'max'=>11),
			array('detail_sumber_biaya', 'length', 'max'=>40),
			array('waktu_TS2, waktu_TS1, waktu_TS', 'length', 'max'=>3),
			array('detail_waktu, detail_status', 'length', 'max'=>80),
			array('status', 'length', 'max'=>10),
			array('mhs_terlibat', 'length', 'max'=>9),
			array('sumber_data, lampiran', 'length', 'max'=>100),
			//tambahan
			array('lampiran', 'file', 'types'=>'zip','allowEmpty' => true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_jum_kegiatan, id_prodi, id_administrasi, sumber_pembiayaan, detail_sumber_biaya, waktu_TS2, waktu_TS1, waktu_TS, detail_waktu, status, detail_status, mhs_terlibat, jum_mhs_ambil_ta, jum_mhs_penelitian, wujud_mhs_pkm, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_jum_kegiatan' => 'Id Jum Kegiatan',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'sumber_pembiayaan' => 'Sumber Pembiayaan',
			'detail_sumber_biaya' => 'Detail Sumber Biaya',
			'waktu_TS2' => 'Waktu Ts2',
			'waktu_TS1' => 'Waktu Ts1',
			'waktu_TS' => 'Waktu Ts',
			'detail_waktu' => 'Detail Waktu',
			'status' => 'Status',
			'detail_status' => 'Detail Status',
			'mhs_terlibat' => 'Mhs Terlibat',
			'jum_mhs_ambil_ta' => 'Jum Mhs Ambil Ta',
			'jum_mhs_penelitian' => 'Jum Mhs Penelitian',
			'wujud_mhs_pkm' => 'Wujud Mhs Pkm',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : PenelitianDosen_tahunakreditasi (.zip) contoh PenelitianDosen_2012.zip)',
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

		$criteria->compare('id_jum_kegiatan',$this->id_jum_kegiatan);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('sumber_pembiayaan',$this->sumber_pembiayaan,true);
		$criteria->compare('detail_sumber_biaya',$this->detail_sumber_biaya,true);
		$criteria->compare('waktu_TS2',$this->waktu_TS2,true);
		$criteria->compare('waktu_TS1',$this->waktu_TS1,true);
		$criteria->compare('waktu_TS',$this->waktu_TS,true);
		$criteria->compare('detail_waktu',$this->detail_waktu,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('detail_status',$this->detail_status,true);
		$criteria->compare('mhs_terlibat',$this->mhs_terlibat,true);
		$criteria->compare('jum_mhs_ambil_ta',$this->jum_mhs_ambil_ta);
		$criteria->compare('jum_mhs_penelitian',$this->jum_mhs_penelitian);
		$criteria->compare('wujud_mhs_pkm',$this->wujud_mhs_pkm,true);
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