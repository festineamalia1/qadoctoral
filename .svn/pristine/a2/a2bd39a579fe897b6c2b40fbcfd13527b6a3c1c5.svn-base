<?php

/**
 * This is the model class for table "prodi".
 *
 * The followings are the available columns in table 'prodi':
 * @property integer $id_prodi
 * @property integer $id_administrasi
 * @property string $nama_prodi
 * @property string $jurusan
 * @property string $no_sk
 * @property string $tgl_sk
 * @property string $pejabat_sk
 * @property string $bln_thn_PS
 * @property string $no_sk_operasional
 * @property string $tgl_sk_operasional
 * @property string $nilai_akreditasi_akhir
 * @property string $no_sk_BANPT
 * @property string $alamat_PS
 * @property string $telp_PS
 * @property string $fax_PS
 * @property string $homepage_PS
 * @property string $email_PS
 * @property string $sumber_data
 * @property integer $id_sumber_data
 * @property string $lampiran
 */
class Prodi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Prodi the static model class
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
		return 'prodi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_administrasi, nama_prodi, jurusan, no_sk, tgl_sk, pejabat_sk, bln_thn_PS, no_sk_operasional, tgl_sk_operasional, nilai_akreditasi_akhir, no_sk_BANPT, alamat_PS, telp_PS, fax_PS, homepage_PS, email_PS, sumber_data, lampiran', 'required'),
			array('id_administrasi, id_sumber_data', 'numerical', 'integerOnly'=>true),
			array('nama_prodi, no_sk, pejabat_sk, no_sk_operasional, no_sk_BANPT, homepage_PS, email_PS', 'length', 'max'=>30),
			array('jurusan', 'length', 'max'=>50),
			array('nilai_akreditasi_akhir', 'length', 'max'=>10),
			array('alamat_PS, sumber_data, lampiran', 'length', 'max'=>100),
			array('telp_PS, fax_PS', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_prodi, id_administrasi, nama_prodi, jurusan, no_sk, tgl_sk, pejabat_sk, bln_thn_PS, no_sk_operasional, tgl_sk_operasional, nilai_akreditasi_akhir, no_sk_BANPT, alamat_PS, telp_PS, fax_PS, homepage_PS, email_PS, sumber_data, id_sumber_data, lampiran', 'safe', 'on'=>'search'),
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
			'visiMisis' => array(self::HAS_MANY, 'VisiMisi', 'id_prodi'),
			'tataPamong' => array(self::HAS_MANY, 'TataPamong', 'id_prodi'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_prodi' => 'Id Prodi',
			'id_administrasi' => 'Id Administrasi',
			'nama_prodi' => 'Nama Prodi',
			'jurusan' => 'Jurusan',
			'no_sk' => 'No Sk',
			'tgl_sk' => 'Tgl Sk',
			'pejabat_sk' => 'Pejabat Sk',
			'bln_thn_PS' => 'Bln Thn Ps',
			'no_sk_operasional' => 'No Sk Operasional',
			'tgl_sk_operasional' => 'Tgl Sk Operasional',
			'nilai_akreditasi_akhir' => 'Nilai Akreditasi Akhir',
			'no_sk_BANPT' => 'No Sk Banpt',
			'alamat_PS' => 'Alamat Ps',
			'telp_PS' => 'Telp Ps',
			'fax_PS' => 'Fax Ps',
			'homepage_PS' => 'Homepage Ps',
			'email_PS' => 'Email Ps',
			'sumber_data' => 'Sumber Data',
			'id_sumber_data' => 'Id Sumber Data',
			'lampiran' => 'Lampiran',
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

		$criteria->compare('id_prodi',$this->id_prodi);
		$criteria->compare('id_administrasi',$this->id_administrasi);
		$criteria->compare('nama_prodi',$this->nama_prodi,true);
		$criteria->compare('jurusan',$this->jurusan,true);
		$criteria->compare('no_sk',$this->no_sk,true);
		$criteria->compare('tgl_sk',$this->tgl_sk,true);
		$criteria->compare('pejabat_sk',$this->pejabat_sk,true);
		$criteria->compare('bln_thn_PS',$this->bln_thn_PS,true);
		$criteria->compare('no_sk_operasional',$this->no_sk_operasional,true);
		$criteria->compare('tgl_sk_operasional',$this->tgl_sk_operasional,true);
		$criteria->compare('nilai_akreditasi_akhir',$this->nilai_akreditasi_akhir,true);
		$criteria->compare('no_sk_BANPT',$this->no_sk_BANPT,true);
		$criteria->compare('alamat_PS',$this->alamat_PS,true);
		$criteria->compare('telp_PS',$this->telp_PS,true);
		$criteria->compare('fax_PS',$this->fax_PS,true);
		$criteria->compare('homepage_PS',$this->homepage_PS,true);
		$criteria->compare('email_PS',$this->email_PS,true);
		$criteria->compare('sumber_data',$this->sumber_data,true);
		$criteria->compare('id_sumber_data',$this->id_sumber_data);
		$criteria->compare('lampiran',$this->lampiran,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}