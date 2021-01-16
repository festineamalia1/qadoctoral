<?php
$this->breadcrumbs=array(
	'Pengabdian Kepada Masyarakat (PKM)',
);
?>
<h1>Pengabdian Kepada Masyarakat (PKM)</h1>
<div class="row-fluid">
	<div class="span12">
		<div class="tabbable"> <!-- Only required for left/right tabs -->
		  	<ul class="nav nav-tabs">
		    	<li class="list_tab active"><a href="#tab1" class="a_tab" data-toggle="tab">Kegiatan pelayanan/pengabdian kepada masyarakat</a></li>
		    	<li class="list_tab "><a href="#tab2" class="b_tab" data-toggle="tab">Judul dan hasil/dampak kegiatan pelayanan kepada masyarakat</a></li>
		    </ul>
		  	<div class="tab-content">
		    	<div class="tab-pane active" id="tab1">
		    		<!-- Start Tab 1 -->
		      		<div class="row-fluid">
						<div class="span12" style="padding:20px;">
							<form class="form-inline" method="post" id="form_pkm">
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
							    
							    <button type="button" class="btn btn-primary getpkm"><i class="icon-arrow-right icon-white"></i> Tampil</button>
							</form>
						</div>
					</div>
					<!-- END -->
		    	</div>
		    	<div class="tab-pane" id="tab2">
		      		<!-- Start Tab 2 -->
		      		<div class="row-fluid">
						<div class="span12" style="padding:20px;">
							<form class="form-inline" method="post" id="form_pelayanan">
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
							    
							      <button type="button" class="btn btn-primary getdata_pelayanan"><i class="icon-arrow-right icon-white"></i> Tampil</button>
							</form>
						</div>
					</div>
					<!-- END -->
		    	</div>
		  	</div>
		</div>
		<div style="height:20px;">
			<div class="progress progress-striped active hide" >
			  <div class="bar" style="width:0%;"></div>
			</div>
		</div>
		<div id="data" class="data">	
			
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
  $(".getpkm").click(function()
  	{
  		var dataserialized = $('#form_pkm').serialize();
  		// $("#data").hide();
  		$.ajax({url:"sentdata_pkm",
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
  $(".getdata_pelayanan").click(function()
  	{
  		var dataserialized = $('#form_pelayanan').serialize();
  		// $("#data").hide();
  		$.ajax({url:"SentDataPelayanan",
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


  $(".a_tab").live('click',function(){
  		$(".list_tab").removeClass('active');
	  	$(this).parent().addClass('active');
	  	$('.tab-pane').removeClass('active');
	  	var tab_pan = $(this).attr('href');
	  	$(tab_pan).addClass('active');
	  	$(".getpkm").trigger('click');
	  	return false;
  })
  $(".b_tab").live('click',function(){
  		$(".list_tab").removeClass('active');
	  	$(this).parent().addClass('active');
	  	$('.tab-pane').removeClass('active');
	  	var tab_pan = $(this).attr('href');
	  	$(tab_pan).addClass('active');
	  	$(".getdata_pelayanan").trigger('click');
	  	return false;
  })

 $(".getdata").trigger('click');

});
 
</script>
