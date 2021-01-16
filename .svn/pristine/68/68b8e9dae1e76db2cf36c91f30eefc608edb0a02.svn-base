<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='X-UA-Compatible' content='IE=EmulateIE7' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--[if lt IE 7]>
<style>
#content
{
    height:600px !important;
}
</style>
<![endif]-->

<link rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css' type='text/css' />
<link rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css' type='text/css' />
<link rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/css/fisiep.css' type='text/css' />

</head>
<body>
    <div class="container-fluid" style="margin:0;padding:0;">
        <div class="row-fluid">
            <div class="span12 header">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <!-- <div class="img-logo">

                            </div> -->
                            <div class="img-header">
                                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/header2.jpg" style="margin-top:-40px;margin-left:10%;height:175px;width:80%;" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span10 offset1">
                            <div class="menu">
                               <?php $this->widget('zii.widgets.CMenu',array(
                                    'items'=>array(
                                        array('label'=>'DASHBOARD', 'url'=>array('/site/dashboard')),
                                        array('label'=>'AKREDITASI', 'url'=>array('/site/index')),
                                        array('label'=>'MANAJEMEN DATA', 'url'=>array('/site/manajemen')),
                                        // array('label'=>'ABOUT', 'url'=>array('/site/page', 'view'=>'about')),
                                        // array('label'=>'CONTACT', 'url'=>array('/site/contact')),
                                        // array('label'=>'Mahasiswa', 'url'=>array('/mahasiswa'),'visible'=>(!Yii::app()->user->isGuest) && ($group == 1) ),
                                        // array('label'=>'Dosen', 'url'=>array('/dosen'),'visible'=>(!Yii::app()->user->isGuest) && ($group == 1) ),
                                        // array('label'=>'User', 'url'=>array('/user'), 'visible'=>(!Yii::app()->user->isGuest) && ($group == 1) ),
                                        array('label'=>'LOGIN', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                        array('label'=>'LOGOUT ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                    ),
                                )); ?>
                                <div class="clearfix"></div>
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container-fluid" style="margin-bottom:110px;">
        <div class="row-fluid">
            <div class="span10 offset1 field_content">
                <div class="row-fluid">
                    <div class="span3">
                        <div class="site-sidebar">
                            
                            <?php
                            $items = array(
                              array(
                                'name' => 'Standart I',
                                'link' => '',
                                'active' => 'visimisi', 
                                'sub' => array(
                                  array(
                                    'name' => 'Visi dan Misi',
                                    'link' => Yii::app()->getBaseUrl(true).'/visimisi/getdata',
                                    // 'active'=> 'visimisi/index'
                                  )
                                )
                              ),
                              array(
                                'name' => 'Standart II',
                                'link' => '',
                                'active' => 'tatapamong', 
                                'sub' => array(
                                  array(
                                    'name' => 'Sistem Tata Pamong',
                                    'link' => Yii::app()->getBaseUrl(true).'/tatapamong/getdata',
                                  ),
                                  array(
                                    'name' => 'Kepemimpinan',
                                    'link' => Yii::app()->getBaseUrl(true).'/tatapamong/getdata_kepemimpinan',
                                  ),
                                  array(
                                    'name' => 'Sistem Pengelolaan',
                                   'link' => Yii::app()->getBaseUrl(true).'/tatapamong/getdata_sispeng',
                                  ),
                                  array(
                                    'name' => 'Penjaminan Mutu',
                                   'link' => Yii::app()->getBaseUrl(true).'/tatapamong/getdata_penjaminmutu',
                                  ),
                                  array(
                                    'name' => 'Umpan Balik',
                                   'link' => Yii::app()->getBaseUrl(true).'/tatapamong/getdata_umpanbalik',
                                  ),
                                  array(
                                    'name' => 'Keberlanjutan',
                                    'link' => Yii::app()->getBaseUrl(true).'/tatapamong/getdata_keberlanjutan',
                                  )
                                )
                              ),
                              array(
                                'name' => 'Standart III',
                                'link' => '',
                                'active' => 'mhsreguler', 
                                'sub' => array(
                                  array(
                                    'name' => 'Profil Mahasiswa & Lulusan',
                                    'link' => Yii::app()->getBaseUrl(true).'/mhsreguler/getdata',
                                  ),
                                  array(
                                    'name' => 'Layanan Kepada Mahasiswa',
                                   'link' => Yii::app()->getBaseUrl(true).'/mhsreguler/getdata_layanan',
                                  ),
                                  array(
                                    'name' => 'Evaluasi Lulusan',
                                    'link' => Yii::app()->getBaseUrl(true).'/mhsreguler/getdata_evaluasi',
                                  ),
                                  array(
                                    'name' => 'Himpunan Alumni',
                                   'link' => Yii::app()->getBaseUrl(true).'/mhsreguler/getdata_himpunan',
                                  )
                                )
                              ),
                              array(
                                'name' => 'Standart IV',
                                'link' => '',
                                'active' => 'sdm', 
                                'sub' => array(
                                  array(
                                    'name' => 'Seleksi & Pengembangan',
                                    'link' => Yii::app()->getBaseUrl(true).'/sdm/getdata_seleksipengembangan',
                                  ),
                                   array(
                                    'name' => 'Monitoring & Evaluasi',
                                    'link' => Yii::app()->getBaseUrl(true).'/sdm/getdata_monev',
                                  ),
                                  array(
                                    'name' => 'Dosen Tetap',
                                    'link' => Yii::app()->getBaseUrl(true).'/sdm/getdata_dosentetap',
                                  ),
                                  array(
                                    'name' => 'Dosen Tidak Tetap',
                                    'link' => Yii::app()->getBaseUrl(true).'/sdm/getdata_dosentidaktetap',
                                  ),
                                  array(
                                    'name' => 'Upaya Peningkatan SDM',
                                    'link' => Yii::app()->getBaseUrl(true).'/sdm/getdataupaya',
                                  ),
                                  array(
                                    'name' => 'Tenaga Kependidikan',
                                    'link' => Yii::app()->getBaseUrl(true).'/sdm/getdata_tenagakependidikan',
                                  )
                                )
                              ),
                              array(
                                'name' => 'Standart V',
                                'link' => '',
                                'active' => 'kurikulum', 
                                'sub' => array(
                                 array(
                                    'name' => 'Kurikulum',
                                    'link' => Yii::app()->getBaseUrl(true).'/kurikulum/getdata',
                                  ),
                                 array(
                                    'name' => 'Peninjauan 5 Thn',
                                    'link' => Yii::app()->getBaseUrl(true).'/kurikulum/getdatapeninjauan',
                                  ),
                                 array(
                                    'name' => 'Proses Pembelajaran',
                                    'link' => Yii::app()->getBaseUrl(true).'/kurikulum/getdatapembelajaran',
                                  ),
                                 array(
                                    'name' => 'Pembimbingan Akademik',
                                    'link' => Yii::app()->getBaseUrl(true).'/kurikulum/getdatapembimbingan',
                                  ),
                                 array(
                                    'name' => 'Pembimbingan TA/SKRIPSI',
                                    'link' => Yii::app()->getBaseUrl(true).'/kurikulum/getdataTA',
                                  ),
                                 array(
                                    'name' => 'Upaya Perbaikan',
                                    'link' => Yii::app()->getBaseUrl(true).'/kurikulum/getdataperbaikan',
                                  ),
                                 array(
                                    'name' => 'Upaya Peningkatan',
                                    'link' => Yii::app()->getBaseUrl(true).'/kurikulum/getdatapeningkatan',
                                  )
                                )
                              ),
                              array(
                                'name' => 'Standart VI',
                                'link' => '',
                                'active' => 'pengelolaandana', 
                                'sub' => array(
                                  array(
                                    'name' => 'Pengelolaan Dana',
                                    'link' => Yii::app()->getBaseUrl(true).'/pengelolaandana/getdatapengelolaan',
                                  ),
                                  array(
                                    'name' => 'Perolehan & Alokasi',
                                    'link' => Yii::app()->getBaseUrl(true).'/pengelolaandana/getdataperolehan',
                                  ),
                                  array(
                                    'name' => 'Prasarana',
                                    'link' => Yii::app()->getBaseUrl(true).'/pengelolaandana/getdataprasarana',
                                  ),
                                  array(
                                    'name' => 'Sarana',
                                    'link' => Yii::app()->getBaseUrl(true).'/pengelolaandana/getdatasarana',
                                  ),
                                  array(
                                    'name' => 'Sistem Informasi',
                                    'link' => Yii::app()->getBaseUrl(true).'/pengelolaandana/getdatasistem',
                                  )
                                )
                              ),
                              array(
                                'name' => 'Standart VII',
                                'link' => '',
                                'active' => 'penelitianDosentetapPs', 
                                'sub' => array(
                                  array(
                                    'name' => 'Penelitian Dosen',
                                    'link' => Yii::app()->getBaseUrl(true).'/PenelitianDosentetapPs/getdata',
                                  ),
                                  array(
                                    'name' => 'PKM',
                                    'link' => Yii::app()->getBaseUrl(true).'/PenelitianDosentetapPs/getdata_pkm',
                                  ),
                                  array(
                                    'name' => 'Kerjasama dg Instansi',
                                    'link' => Yii::app()->getBaseUrl(true).'/PenelitianDosentetapPs/getdata_kerjasama_dalam',
                                  )
                                )
                              ),
                              array(
                                'name' => 'Lampiran',
                                'link' => Yii::app()->getBaseUrl(true).'/lampiran/getdata',
                                'active' => 'lampiran', 
                                
                              )
                            );
                            ?>
                            <?php $this->widget('ext.menu.EMenu', array('items' => $items)); ?>
                        </div>
                    </div>
                    <div class="span9 content-after-sidebar">
                        <?php if((isset($this->breadcrumbs)) and(!empty($this->breadcrumbs))):?>
                            <div class="breadcumb">
                                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                    'links'=>$this->breadcrumbs,
                                )); ?><!-- breadcrumbs -->
                            </div>
                        <?php endif?>
                        <div class="content-field">
                            <?php echo $content; ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" style="margin:0;padding:0;margin-top:20px;">
        <div class="row-fluid">
            <div class="footer" style="">
    
            </div>
        </div>
    </div>

</body>
</html>

