<?php

/**
 * This is the model class for table "penelitian_dosentetap_ps_s2".
 *
 * The followings are the available columns in table 'penelitian_dosentetap_ps_s2':
 * @property integer $id_penelitian_dosentetap_ps_s2
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $tgl_penelitian_awal
 * @property string $tgl_penelitian_akhir
 * @property string $status_penelitian
 * @property string $judul_penelitian
 * @property integer $jumlah_penelitian
 * @property string $ts
 * @property string $nama_dosen
 * @property integer $id_sumber_data
 * @property string $sumber_data
 * @property string $lampiran
 * @property integer $Ts0
 * @property integer $Ts1
 * @property integer $Ts2
 * @property string $biaya
 *
 * The followings are the available model relations:
 * @property Prodi $idProdi
 * @property Administrasi $idAdministrasi
 */
class Penelitian_Dosentetap_Ps_S2 extends CActiveRecord
{	
	 public $th_akademik_search;
	 public $nama_prodi_search;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Penelitian_Dosentetap_Ps_S2 the static model class
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
		return 'penelitian_dosentetap_ps_s2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, judul_penelitian, ts, nama_dosen, lampiran, Ts0, Ts1, Ts2, biaya', 'required'),
			array('id_prodi, id_administrasi, jumlah_penelitian, id_sumber_data, Ts0, Ts1, Ts2', 'numerical', 'integerOnly'=>true),
			array('status_penelitian, judul_penelitian, nama_dosen, sumber_data', 'length', 'max'=>100),
			array('ts', 'length', 'max'=>4),
			array('biaya', 'length', 'max'=>11),
			array('lampiran', 'file', 'types'=>'zip'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_penelitian_dosentetap_ps_s2, id_prodi, id_administrasi, tgl_penelitian_awal, tgl_penelitian_akhir, status_penelitian, judul_penelitian, jumlah_penelitian, ts, nama_dosen, id_sumber_data, sumber_data, lampiran, Ts0, Ts1, Ts2, biaya', 'safe', 'on'=>'search'),
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
		// end tambahan
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_penelitian_dosentetap_ps_s2' => 'Id Penelitian Dosentetap Ps S2',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Administrasi',
			'tgl_penelitian_awal' => 'Waktu Penelitian Awal (YYYY-MM-DD)',
			'tgl_penelitian_akhir' => 'Tgl Penelitian Akhir (YYYY-MM-DD)',
			'status_penelitian' => 'Status Penelitian',
			'judul_penelitian' => 'Judul Penelitian',
			'jumlah_penelitian' => 'Jumlah Penelitian Selama 3 Tahun Terakhir',
			'ts' => 'Tahun Akademik',
			'nama_dosen' => 'Nama Dosen',
			'id_sumber_data' => 'Id Sumber Data',
			'sumber_data' => 'Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : DataDosen_tahunakreditasi (.zip) contoh DataDosen_2012.zip)',
			'Ts0' => 'Jumlah Penelitian/PKM pd TS',
			'Ts1' => 'Jumlah Penelitian/PKM pd TS1',
			'Ts2' => 'Jumlah Penelitian/PKM pd TS2',
			'biaya' => 'Sumber Biaya',
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
		$criteria->with = array( 'relasi_prodi','relasi_administrasi' );

		$criteria->compare('id_penelitian_dosentetap_ps_s2',$this->id_penelitian_dosentetap_ps_s2);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('tgl_penelitian_awal',$this->tgl_penelitian_awal,true);
		$criteria->compare('tgl_penelitian_akhir',$this->tgl_penelitian_akhir,true);
		$criteria->compare('status_penelitian',$this->status_penelitian,true);
		$criteria->compare('judul_penelitian',$this->judul_penelitian,true);
		$criteria->compare('jumlah_penelitian',$this->jumlah_penelitian);
		$criteria->compare('ts',$this->ts,true);
		$criteria->compare('nama_dosen',$this->nama_dosen,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('Ts0',$this->Ts0);
		$criteria->compare('Ts1',$this->Ts1);
		$criteria->compare('Ts2',$this->Ts2);
		$criteria->compare('biaya',$this->biaya,true);

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