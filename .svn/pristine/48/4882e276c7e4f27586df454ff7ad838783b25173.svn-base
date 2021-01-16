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
<!-- <link rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/css/standar_ugm/css/fisipol.css' type='text/css' /> -->

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
                                        array('label'=>'DATA AKREDITASI', 'url'=>array('/site/akreditasi')),
                                        array('label'=>'MANAJEMEN DATA', 'url'=>array('/site/manajemen')),
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
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span10 offset1 field_content">
                <div class="row-fluid">
                    <div class="span12">
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

    <div class="container-fluid" style="margin:0;padding:0;margin-top:50px;">
        <div class="row-fluid">
            <div class="copyright">
              <div class="w1000 center">
              Copyright © 2012, Faculty of Social & Political Sciences, Universitas Gadjah Mada<br />
              Sosio Yustisia Bulaksumur, Yogyakarta 55281<br />
              Telp: (0274) 563362 | Fax: (0274) 563362 | Email: dekan_sp@ugm.ac.id<br />
              Disclaimer
              </div>    
          </div>
        </div>
    </div>

</body>
</html>

<style type="text/css">
  .center{
    text-align: center;
  }
</style>

