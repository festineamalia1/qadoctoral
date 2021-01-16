<?php

/**
 * This is the model class for table "umpan_balik".
 *
 * The followings are the available columns in table 'umpan_balik':
 * @property integer $id_umpan_balik
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $umpan_balik_dosen
 * @property string $tindak_lanjut_dosen
 * @property string $umpan_balik_mhs
 * @property string $tindak_lanjut_mhs
 * @property string $umpan_balik_alumni
 * @property string $tindak_lanjut_alumni
 * @property string $umpan_balik_lulusan
 * @property string $tindak_lanjut_lulusan
 * @property string $sumber_data
 */
class UmpanBalik extends CActiveRecord
{
	public $th_akademik_search;
	public $nama_prodi_search;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UmpanBalik the static model class
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
		return 'umpan_balik';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, umpan_balik_dosen, tindak_lanjut_dosen, umpan_balik_mhs, tindak_lanjut_mhs, umpan_balik_alumni, tindak_lanjut_alumni, umpan_balik_lulusan, tindak_lanjut_lulusan', 'required','message'=>'<i><span style="color:red">Kolom {attribute} tidak boleh dikosongkan</span></i>'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			array('sumber_data', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('th_akademik_search, nama_prodi_search,id_umpan_balik, id_prodi, id_administrasi, umpan_balik_dosen, tindak_lanjut_dosen, umpan_balik_mhs, tindak_lanjut_mhs, umpan_balik_alumni, tindak_lanjut_alumni, umpan_balik_lulusan, tindak_lanjut_lulusan, sumber_data', 'safe', 'on'=>'search'),
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
			'id_umpan_balik' => 'Id Umpan Balik',
			'id_prodi' => 'Nama Prodi',
			'id_administrasi' => 'Tahun Pelaporan Borang Akreditasi',
			'umpan_balik_dosen' => 'Umpan Balik Dosen',
			'tindak_lanjut_dosen' => 'Tindak Lanjut Dosen',
			'umpan_balik_mhs' => 'Umpan Balik Mhs',
			'tindak_lanjut_mhs' => 'Tindak Lanjut Mhs',
			'umpan_balik_alumni' => 'Umpan Balik Alumni',
			'tindak_lanjut_alumni' => 'Tindak Lanjut Alumni',
			'umpan_balik_lulusan' => 'Umpan Balik Lulusan',
			'tindak_lanjut_lulusan' => 'Tindak Lanjut Lulusan',
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

		$criteria->compare('id_umpan_balik',$this->id_umpan_balik);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('umpan_balik_dosen',$this->umpan_balik_dosen,true);
		$criteria->compare('tindak_lanjut_dosen',$this->tindak_lanjut_dosen,true);
		$criteria->compare('umpan_balik_mhs',$this->umpan_balik_mhs,true);
		$criteria->compare('tindak_lanjut_mhs',$this->tindak_lanjut_mhs,true);
		$criteria->compare('umpan_balik_alumni',$this->umpan_balik_alumni,true);
		$criteria->compare('tindak_lanjut_alumni',$this->tindak_lanjut_alumni,true);
		$criteria->compare('umpan_balik_lulusan',$this->umpan_balik_lulusan,true);
		$criteria->compare('tindak_lanjut_lulusan',$this->tindak_lanjut_lulusan,true);
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