<?php
$this->breadcrumbs=array(
	'Dosen Tidak Tetap',
);
?>

<?php
	// $model=new VisiMisi;
?>

<h1>Dosen Tidak Tetap</h1>
<div class="row-fluid">
	<div class="span12">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
		  	<ul class="nav nav-tabs">
		    	<li class="list_tab active"><a href="#tab1" class="a_tab" data-toggle="tab">Data Dosen Tidak Tetap</a></li>
		    	<li class="list_tab "><a href="#tab2" class="b_tab" data-toggle="tab">Aktivitas Dosen Setahun</a></li>
		  	</ul>
		  	<div class="tab-content">
		    	<div class="tab-pane active" id="tab1">
		    		<!-- Start Tab 1 -->
		      		<div class="row-fluid">
						<div class="span12" style="padding:20px;">
							<form class="form-inline" method="post" id="form_dosentidaktetap">
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
							    
							    <button type="button" class="btn btn-primary getdata_dosentidaktetap"><i class="icon-arrow-right icon-white"></i> Tampil</button>
							</form>
						</div>
					</div>
					<!-- END -->
		    	</div>
		    	<div class="tab-pane" id="tab2">
		      		<!-- Start Tab 2 -->
		      		<div class="row-fluid">
						<div class="span12" style="padding:20px;">
							<form class="form-inline" method="post" id="form_dosentidaktetap_setahun">
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
							    
							    <button type="button" class="btn btn-primary getdata_dosentidaktetap_setahun"><i class="icon-arrow-right icon-white"></i> Tampil</button>
							</form>
						</div>
					</div>
					<!-- END -->
		    	</div>
		    	
		</div>
		<div style="height:20px;">
			<div class="progress progress-striped active hide" >
			  <div class="bar" style="width:0%;"></div>
			</div>
		</div>
		<div id="data" class="data">	
			
		</div>
		<div class="grafik" style="margin-top:100px;" >
			<?php
			    // $this->Widget('ext.highcharts.HighchartsWidget', array(
			    //    'options'=>'{
			    //       "title": { "text": "Statistik Mahasiswa" },
			    //       "chart" : {"type":"column"},
			    //       "xAxis": {
			    //          "categories": ["Manajemen Kebijakan Publik", "HI", "Ilmu Komunikasi","Sosiologi","Ilmu Pembangunan dan Kesejahteraan Sosial","Ilmu Pemerintahan"]
			    //       },
			    //       "yAxis": {
			    //          "title": { "text": "Lulusan Mahasiswa" }
			    //       },
			    //       "series": [
			    //          { "name": "2011", "data": [111,120,100,112,127,119] },
			    //          { "name": "2012", "data": [125,120,110,100,129,118] },
			    //          { "name": "2013", "data": [110,112,116,119,130,137] }
			    //       ]
			    //    }'
			    // ));
			?>
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
			  $(".getdata_dosentidaktetap").click(function()
			  	{
			  		var dataserialized = $('#form_dosentidaktetap').serialize();
			  		// $("#data").hide();
			  		$.ajax({url:"<?=Yii::app()->getBaseUrl(true)?>/DataDosen/sentdata_dosentidaktetap",
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
					  $(".getdata_dosentidaktetap_setahun").click(function()
					  	{
					  		var dataserialized = $('#form_dosentidaktetap_setahun').serialize();
					  		// $("#data").hide();
					  		$.ajax({url:"<?=Yii::app()->getBaseUrl(true)?>/AktivitasDosenSetahun/sentdata_dosentidaktetap_setahun",
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
					 


  $(".a_tab").live('click',function(){
  		$(".list_tab").removeClass('active');
	  	$(this).parent().addClass('active');
	  	$('.tab-pane').removeClass('active');
	  	var tab_pan = $(this).attr('href');
	  	$(tab_pan).addClass('active');
	  	$(".getdata_dosentidaktetap").trigger('click');
	  	return false;
  })
  $(".b_tab").live('click',function(){
  		$(".list_tab").removeClass('active');
	  	$(this).parent().addClass('active');
	  	$('.tab-pane').removeClass('active');
	  	var tab_pan = $(this).attr('href');
	  	$(tab_pan).addClass('active');
	  	$(".getdata_dosentidaktetap_setahun").trigger('click');
	  	return false;
  })


  $(".getdata_dosentidaktetap").trigger('click');

});
 
</script>
