<?php

/**
 * This is the model class for table "pengelolaan_dana".
 *
 * The followings are the available columns in table 'pengelolaan_dana':
 * @property integer $id_kelola_dana
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $sumber_dana
 * @property string $jenis_dana
 * @property string $jumlah_dana_TS2
 * @property string $jumlah_dana_TS1
 * @property string $jumlah_dana_TS
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class PengelolaanDana extends CActiveRecord
{
	// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PengelolaanDana the static model class
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
		return 'pengelolaan_dana';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, sumber_dana, jenis_dana, jumlah_dana_TS2, jumlah_dana_TS1, jumlah_dana_TS, sumber_data', 'required'),
			array('id_prodi, id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('sumber_dana, jumlah_dana_TS2, jumlah_dana_TS1, jumlah_dana_TS', 'length', 'max'=>10),
			array('jenis_dana, sumber_data, lampiran', 'length', 'max'=>100),
			//tambahan
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_kelola_dana, id_prodi, id_administrasi, sumber_dana, jenis_dana, jumlah_dana_TS2, jumlah_dana_TS1, jumlah_dana_TS, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'id_kelola_dana' => 'Id Kelola Dana',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'sumber_dana' => 'Sumber Dana',
			'jenis_dana' => 'Jenis Dana',
			'jumlah_dana_TS2' => 'Jumlah Dana Ts2',
			'jumlah_dana_TS1' => 'Jumlah Dana Ts1',
			'jumlah_dana_TS' => 'Jumlah Dana Ts',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran File (Format nama file harus : PengelolaanDana_tahunakreditasi (.zip) contoh PengelolaanDana_2012.zip)',
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

		$criteria->compare('id_kelola_dana',$this->id_kelola_dana);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('sumber_dana',$this->sumber_dana,true);
		$criteria->compare('jenis_dana',$this->jenis_dana,true);
		$criteria->compare('jumlah_dana_TS2',$this->jumlah_dana_TS2,true);
		$criteria->compare('jumlah_dana_TS1',$this->jumlah_dana_TS1,true);
		$criteria->compare('jumlah_dana_TS',$this->jumlah_dana_TS,true);
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