<?php

/**
 * This is the model class for table "detail_evaluasi_lulusan".
 *
 * The followings are the available columns in table 'detail_evaluasi_lulusan':
 * @property integer $id_detail
 * @property integer $id_evaluasi
 * @property string $jenis_kemampuan
 * @property integer $tanggap_sangat_baik
 * @property integer $tanggap_baik
 * @property integer $tanggap_cukup
 * @property integer $tanggap_kurang
 * @property string $rencana_tindak_lanjut
 * @property string $ketarangan
 */
class DetailEvaluasiLulusan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DetailEvaluasiLulusan the static model class
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
		return 'detail_evaluasi_lulusan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' id_evaluasi, jenis_kemampuan, ketarangan', 'required'),
			array(' id_evaluasi, tanggap_sangat_baik, tanggap_baik, tanggap_cukup, tanggap_kurang', 'numerical', 'integerOnly'=>true),
			array('jenis_kemampuan', 'length', 'max'=>17),
			array('ketarangan', 'length', 'max'=>50),
			array('rencana_tindak_lanjut', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_detail, id_evaluasi, jenis_kemampuan, tanggap_sangat_baik, tanggap_baik, tanggap_cukup, tanggap_kurang, rencana_tindak_lanjut, ketarangan', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_detail' => 'Id Detail',
			'id_evaluasi' => 'Id Evaluasi',
			'jenis_kemampuan' => 'Jenis Kemampuan',
			'tanggap_sangat_baik' => 'Tanggap Sangat Baik',
			'tanggap_baik' => 'Tanggap Baik',
			'tanggap_cukup' => 'Tanggap Cukup',
			'tanggap_kurang' => 'Tanggap Kurang',
			'rencana_tindak_lanjut' => 'Rencana Tindak Lanjut',
			'ketarangan' => 'Keterangan',
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

		$criteria->compare('id_detail',$this->id_detail);
		$criteria->compare('id_evaluasi',$this->id_evaluasi);
		$criteria->compare('jenis_kemampuan',$this->jenis_kemampuan,true);
		$criteria->compare('tanggap_sangat_baik',$this->tanggap_sangat_baik);
		$criteria->compare('tanggap_baik',$this->tanggap_baik);
		$criteria->compare('tanggap_cukup',$this->tanggap_cukup);
		$criteria->compare('tanggap_kurang',$this->tanggap_kurang);
		$criteria->compare('rencana_tindak_lanjut',$this->rencana_tindak_lanjut,true);
		$criteria->compare('ketarangan',$this->ketarangan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}