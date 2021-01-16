<?php
$this->breadcrumbs=array(
	'4.5 Upaya Peningkatan SDM',
);
?>
 
<?php
	// $model=new VisiMisi;
?>

<h1>4.5 Upaya Peningkatan SDM</h1>
<div class="row-fluid">
	<div class="span12">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
		  	<ul class="nav nav-tabs">
		    	<li class="list_tab active"><a href="#tab1" class="a_tab" data-toggle="tab">Tenaga Ahli</a></li>
		    	<li class="list_tab "><a href="#tab2" class="b_tab" data-toggle="tab">Tugas Belajar Dosen Tetap</a></li>
		    	<li class="list_tab "><a href="#tab3" class="c_tab" data-toggle="tab">Kegiatan Dosen Tetap</a></li>
		    	<li class="list_tab "><a href="#tab4" class="d_tab" data-toggle="tab">Prestasi Dosen Tetap</a></li>
		    	<li class="list_tab "><a href="#tab5" class="e_tab" data-toggle="tab">Organisasi</a></li>
		  	</ul>
		  	<div class="tab-content">
		    	<div class="tab-pane active" id="tab1">
		    		<!-- Start Tab 1 -->
		      		<div class="row-fluid">
						<div class="span12" style="padding:20px;">
							<form class="form-inline" method="post" id="form_tenagaahli">
							   <label class="control-label" for="">Jurusan</label>
							      <select class="input-large" name="id_prodi">
									 <?
									 foreach ($prodi as $key => $value) {
									 	?>
									 	<option value="<?=$value['id_prodi']?>"><?=$value['jurusan']?></option>
									 	<?
									 }
									 ?>
								</select>
							    
							    <label class="control-label" for="">Tahun</label>
							      <select class="input-small" name="id_administrasi" id="tahun">
							      	<?
							      	foreach ($administrasi as $key => $value) {
							      		?>
							      		<option value="<?=$value['id_administrasi']?>"><?=$value['th_akademik']?></option>
							      		<?
							      	}
							      	?>
							      </select>
							    
							    <button type="button" class="btn btn-primary getdata_tenagaahli"><i class="icon-arrow-right icon-white"></i> Tampil</button>
							</form>
						</div>
					</div>
					<!-- END -->
		    	</div>
		    	<div class="tab-pane" id="tab2">
		      		<!-- Start Tab 2 -->
		      		<div class="row-fluid">
						<div class="span12" style="padding:20px;">
							<form class="form-inline" method="post" id="form_tugasbelajar">
							   <label class="control-label" for="">Jurusan</label>
							      <select class="input-large" name="id_prodi">
									 <?
									 foreach ($prodi as $key => $value) {
									 	?>
									 	<option value="<?=$value['id_prodi']?>"><?=$value['jurusan']?></option>
									 	<?
									 }
									 ?>
								</select>
							    
							    <label class="control-label" for="">Tahun</label>
							      <select class="input-small" name="id_administrasi" id="tahun">
							      	<?
							      	foreach ($administrasi as $key => $value) {
							      		?>
							      		<option value="<?=$value['id_administrasi']?>"><?=$value['th_akademik']?></option>
							      		<?
							      	}
							      	?>
							      </select>
							    
							    <button type="button" class="btn btn-primary getdata_tugasbelajar"><i class="icon-arrow-right icon-white"></i> Tampil</button>
							</form>
						</div>
					</div>
					<!-- END -->
		    	</div>
		    	<div class="tab-pane" id="tab3">
		      		<!-- Start Tab 3 -->
		      		<div class="row-fluid">
						<div class="span12" style="padding:20px;">
							<form class="form-inline" method="post" id="form_keikutsertaan">
							   <label class="control-label" for="">Jurusan</label>
							      <select class="input-large" name="id_prodi">
									 <?
									 foreach ($prodi as $key => $value) {
									 	?>
									 	<option value="<?=$value['id_prodi']?>"><?=$value['jurusan']?></option>
									 	<?
									 }
									 ?>
								</select>
							    
							    <label class="control-label" for="">Tahun</label>
							      <select class="input-small" name="id_administrasi" id="tahun">
							      	<?
							      	foreach ($administrasi as $key => $value) {
							      		?>
							      		<option value="<?=$value['id_administrasi']?>"><?=$value['th_akademik']?></option>
							      		<?
							      	}
							      	?>
							      </select>
							    
							      <button type="button" class="btn btn-primary getdata_keikutsertaan"><i class="icon-arrow-right icon-white"></i> Tampil</button>
							</form>
						</div>
					</div>
					<!-- END -->
		    	</div>
		    	<div class="tab-pane" id="tab4">
		      		<!-- Start Tab 4 -->
		      		<div class="row-fluid">
						<div class="span12" style="padding:20px;">
							<form class="form-inline" method="post" id="form_prestasi">
							   <label class="control-label" for="">Jurusan</label>
							      <select class="input-large" name="id_prodi">
									 <?
									 foreach ($prodi as $key => $value) {
									 	?>
									 	<option value="<?=$value['id_prodi']?>"><?=$value['jurusan']?></option>
									 	<?
									 }
									 ?>
								</select>
							    
							    <label class="control-label" for="">Tahun</label>
							      <select class="input-small" name="id_administrasi" id="tahun">
							      	<?
							      	foreach ($administrasi as $key => $value) {
							      		?>
							      		<option value="<?=$value['id_administrasi']?>"><?=$value['th_akademik']?></option>
							      		<?
							      	}
							      	?>
							      </select>
							    
							      <button type="button" class="btn btn-primary getdata_prestasi"><i class="icon-arrow-right icon-white"></i> Tampil</button>
							</form>
						</div>
					</div>
					<!-- END -->
		  	</div>
		  	<div class="tab-pane" id="tab5">
		      		<!-- Start Tab 5 -->
		      		<div class="row-fluid">
						<div class="span12" style="padding:20px;">
							<form class="form-inline" method="post" id="form_organisasi">
							   <label class="control-label" for="">Jurusan</label>
							      <select class="input-large" name="id_prodi">
									 <?
									 foreach ($prodi as $key => $value) {
									 	?>
									 	<option value="<?=$value['id_prodi']?>"><?=$value['jurusan']?></option>
									 	<?
									 }
									 ?>
								</select>
							    
							    <label class="control-label" for="">Tahun</label>
							      <select class="input-small" name="id_administrasi" id="tahun">
							      	<?
							      	foreach ($administrasi as $key => $value) {
							      		?>
							      		<option value="<?=$value['id_administrasi']?>"><?=$value['th_akademik']?></option>
							      		<?
							      	}
							      	?>
							      </select>
							    
							      <button type="button" class="btn btn-primary getdata_organisasi"><i class="icon-arrow-right icon-white"></i> Tampil</button>
							</form>
						</div>
					</div>
					<!-- END -->
		  	</div>
		</div>
		
		</div>
	</div>
</div>


<style type="text/css">
	.span-19{
		width: 100% !important;
	}
	.data{
		min-height: 100px;
	}
	.content-field{
		min-height: 550px !important;
	}
</style>

<script type="text/javascript">
$(function(){
				// tab1
			  $(".getdata_tenagaahli").click(function()
			  	{
			  		var dataserialized = $('#form_tenagaahli').serialize();
			  		// $("#data").hide();
			  		$.ajax({url:"sentdata",
			  			type:'POST',
			  			data: dataserialized,
					   	beforeSend:function(){

					    $('.bar').attr('style','width:20%;');
				  		$(".progress").fadeIn();
				  		for (var i = 0; i <= 99; i++) {
					      	setTimeout(function(){
					        	$('.bar').attr('style','width:'+i+'%;');
					      	}, 800);
					  	};
					   },
					   success:function(result){
					    	$('.bar').attr('style','width:100%;');
					    	$(".progress").fadeOut(setTimeout(function(){
					    		$("#data").html(result);
					    		$("#data").fadeIn(1000);
					    	},1000));
					   }
					});

			    return false;
			  });
			  	// end tab 1
			  	// tab 2
					  $(".getdata_tugasbelajar").click(function()
					  	{
					  		var dataserialized = $('#form_tugasbelajar').serialize();
					  		// $("#data").hide();
					  		$.ajax({url:"<?=Yii::app()->getBaseUrl(true)?>/TugasBljDosen/sentdata",
					  			type:'POST',
					  			data: dataserialized,
							   	beforeSend:function(){

							    $('.bar').attr('style','width:20%;');
						  		$(".progress").fadeIn();
						  		for (var i = 0; i <= 99; i++) {
							      	setTimeout(function(){
							        	$('.bar').attr('style','width:'+i+'%;');
							      	}, 800);
							  	};
							   },
							   success:function(result){
							    	$('.bar').attr('style','width:100%;');
							    	$(".progress").fadeOut(setTimeout(function(){
							    		$("#data").html(result);
							    		$("#data").fadeIn(1000);
							    	},1000));
							   }
							});

					    return false;
					  });
					  // end tab 2
					  // tab 3
						  $(".getdata_keikutsertaan").click(function()
						  	{
						  		var dataserialized = $('#form_keikutsertaan').serialize();
						  		// $("#data").hide();
						  		$.ajax({url:"<?=Yii::app()->getBaseUrl(true)?>/KegiatanDosen/sentdata",
						  			type:'POST',
						  			data: dataserialized,
								   	beforeSend:function(){

								    $('.bar').attr('style','width:20%;');
							  		$(".progress").fadeIn();
							  		for (var i = 0; i <= 99; i++) {
								      	setTimeout(function(){
								        	$('.bar').attr('style','width:'+i+'%;');
								      	}, 800);
								  	};
								   },
								   success:function(result){
								    	$('.bar').attr('style','width:100%;');
								    	$(".progress").fadeOut(setTimeout(function(){
								    		$("#data").html(result);
								    		$("#data").fadeIn(1000);
								    	},1000));
								   }
								});

						    return false;
						  });
					// end tab 3
					 // tab 4
						  $(".getdata_prestasi").click(function()
						  	{
						  		var dataserialized = $('#form_prestasi').serialize();
						  		// $("#data").hide();
						  		$.ajax({url:"<?=Yii::app()->getBaseUrl(true)?>/CapaianDosen/sentdata_capaiandosen",
						  			type:'POST',
						  			data: dataserialized,
								   	beforeSend:function(){

								    $('.bar').attr('style','width:20%;');
							  		$(".progress").fadeIn();
							  		for (var i = 0; i <= 99; i++) {
								      	setTimeout(function(){
								        	$('.bar').attr('style','width:'+i+'%;');
								      	}, 800);
								  	};
								   },
								   success:function(result){
								    	$('.bar').attr('style','width:100%;');
								    	$(".progress").fadeOut(setTimeout(function(){
								    		$("#data").html(result);
								    		$("#data").fadeIn(1000);
								    	},1000));
								   }
								});

						    return false;
						  });
					// end tab 4
					// tab 5
						  $(".getdata_organisasi").click(function()
						  	{
						  		var dataserialized = $('#form_organisasi').serialize();
						  		// $("#data").hide();
						  		$.ajax({url:"<?=Yii::app()->getBaseUrl(true)?>/KeikutsertaanDosen/sentdata_organisasi",
						  			type:'POST',
						  			data: dataserialized,
								   	beforeSend:function(){

								    $('.bar').attr('style','width:20%;');
							  		$(".progress").fadeIn();
							  		for (var i = 0; i <= 99; i++) {
								      	setTimeout(function(){
								        	$('.bar').attr('style','width:'+i+'%;');
								      	}, 800);
								  	};
								   },
								   success:function(result){
								    	$('.bar').attr('style','width:100%;');
								    	$(".progress").fadeOut(setTimeout(function(){
								    		$("#data").html(result);
								    		$("#data").fadeIn(1000);
								    	},1000));
								   }
								});

						    return false;
						  });
					// end tab 5


  $(".a_tab").live('click',function(){
  		$(".list_tab").removeClass('active');
	  	$(this).parent().addClass('active');
	  	$('.tab-pane').removeClass('active');
	  	var tab_pan = $(this).attr('href');
	  	$(tab_pan).addClass('active');
	  	$(".getdata_tenagaahli").trigger('click');
	  	return false;
  })
  $(".b_tab").live('click',function(){
  		$(".list_tab").removeClass('active');
	  	$(this).parent().addClass('active');
	  	$('.tab-pane').removeClass('active');
	  	var tab_pan = $(this).attr('href');
	  	$(tab_pan).addClass('active');
	  	$(".getdata_tugasbelajar").trigger('click');
	  	return false;
  })
  $(".c_tab").live('click',function(){
  		$(".list_tab").removeClass('active');
	  	$(this).parent().addClass('active');
	  	$('.tab-pane').removeClass('active');
	  	var tab_pan = $(this).attr('href');
	  	$(tab_pan).addClass('active');
	  	$(".getdata_keikutsertaan").trigger('click');
	  	return false;
  })

    $(".d_tab").live('click',function(){
  		$(".list_tab").removeClass('active');
	  	$(this).parent().addClass('active');
	  	$('.tab-pane').removeClass('active');
	  	var tab_pan = $(this).attr('href');
	  	$(tab_pan).addClass('active');
	  	$(".getdata_prestasi").trigger('click');
	  	return false;
  })

    $(".e_tab").live('click',function(){
  		$(".list_tab").removeClass('active');
	  	$(this).parent().addClass('active');
	  	$('.tab-pane').removeClass('active');
	  	var tab_pan = $(this).attr('href');
	  	$(tab_pan).addClass('active');
	  	$(".getdata_organisasi").trigger('click');
	  	return false;
  })


  $(".getdata_tenagaahli").trigger('click');

});
 
</script>