<h1>Selamat Datang di <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?
    // if(isset(Yii::app()->user->group_id)){
    //     echo Yii::app()->user->group_id;
    // }
?>
<div class="content">
    <div class="slide">
    <?php
        $this->widget('ext.slider.slider', array(
            'container'=>'slideshow',
            'width'=>760, 
            'height'=>240, 
            'timeout'=>6000,
            'infos'=>true,
            'constrainImage'=>true,
            'images'=>array('home.jpg','visi1.jpg','misi.jpg')
            )
        );
    ?>
    </div>
    <div class="clearfix"></div>
</div>

<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>


