<?php

/**
 * This is the model class for table "monitoringevaluasi".
 *
 * The followings are the available columns in table 'monitoringevaluasi':
 * @property integer $id_monitoring
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $penyusun
 * @property string $penulis
 * @property string $kelayakan_dosen
 * @property string $ujian_akhir
 * @property string $lampiran
 * @property string $sumber_data
 */
class Monitoring2 extends CActiveRecord
{
	
// tambahan
	 public $th_akademik_search;
	 public $nama_prodi_search;
	// end tambahan
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Monitoring2 the static model class
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
		return 'monitoringevaluasi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_prodi, id_administrasi, pelaksanaan_ujian, usul_penelitian, penulisan_disertasi, kelayakan_dosen, ujian_akhir', 'required'),
			array('id_prodi, id_administrasi', 'numerical', 'integerOnly'=>true),
			
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_monitoring, id_prodi, id_administrasi, pelaksanaan_ujian, usul_penelitian, penulisan_disertasi, kelayakan_dosen, ujian_akhir', 'safe', 'on'=>'search'),
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
			'id_monitoring' => 'Id Monitoring',
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'pelaksanaan_ujian' => 'Pelaksanaan Ujian Kualifikasi',
			'usul_penelitian' => 'Proses Penyususnan Usul & Pelaksanaan Penelitian',
			'penulisan_disertasi' => 'Proses Penulisan Disertasi',
			'kelayakan_dosen' => 'Kelayakan Dosen',
			'ujian_akhir' => 'Ujian Akhir',
			/*'lampiran' => 'Lampiran',
			'sumber_data' => 'Sumber Data',
*/
			'th_akademik_search' => 'Tahun Akademik',
			'nama_prodi_search' => 'Nama Prodi',
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

		$criteria->compare('id_monitoring',$this->id_monitoring);
		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('pelaksanaan_ujian',$this->pelaksanaan_ujian,true);
		$criteria->compare('usul_penelitian',$this->usul_penelitian,true);
		$criteria->compare('penulisan_disertasi',$this->penulisan_disertasi,true);
		$criteria->compare('kelayakan_dosen',$this->kelayakan_dosen,true);
		$criteria->compare('ujian_akhir',$this->ujian_akhir,true);
		/*$criteria->compare('lampiran',$this->lampiran,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);*/

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