<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/admin'); ?>
<?php
	if(!empty($this->menu)){
	?>
	<div class="span9">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="span3">
		<div id="sidebar" style="padding-top:10px;">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Menu Manajemen Data',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar -->
		<div id="sidebar">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Menu Borang',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>array(
					array('label'=>'Pengisi Borang', 'url'=>array('/pengisiborang/admin')),
					array('label'=>'Standar 1', 'url'=>array('/visimisi/admin')),
					array('label'=>'Standar 2', 'url'=>array('/tatapamong/admin')),
					array('label'=>'Standar 3', 'url'=>array('/mhsreguler/admin')),
					array('label'=>'Standar 4', 'url'=>array('/sdm/admin')),
					array('label'=>'Standar 5', 'url'=>array('/kurikulum/admin')),
					array('label'=>'Standar 6', 'url'=>array('/penjelasanpengelolaandana/admin')),
					array('label'=>'Standar 7', 'url'=>array('/PenelitianDosentetapPs/admin')),
					array('label'=>'Lampiran', 'url'=>array('/lampiran/admin')),
				),
				'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar -->
	</div>
	<?php 
	}else{
		?>
		<div class="span12">
			<div id="content">
				<?php echo $content; ?>
			</div><!-- content -->
		</div>
		<?php
	}
?>
<?php $this->endContent(); ?>