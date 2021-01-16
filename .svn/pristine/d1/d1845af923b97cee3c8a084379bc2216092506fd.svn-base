<?php
$this->pageTitle=Yii::app()->name . ' - Data Akreditasi';
$this->breadcrumbs=array(
	'Data Akreditasi',
);
?>

<div class="row-fluid">
	<div class="span12">
		<form class="form-inline" method="post" id="form_getdata">
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
		      	<option value="0">Semua</option>
		      	<?
		      	foreach ($administrasi as $key => $value) {
		      		?>
		      		<option value="<?=$value['id_administrasi']?>"><?=$value['th_akademik']?></option>
		      		<?
		      	}
		      	?>
		      </select>
		    
		    <button type="button" class="btn btn-primary getdata"><i class="icon-arrow-right icon-white"></i> Proses</button>
		</form>
		<div style="height:30px;">
			<div class="progress progress-striped active hide" >
				  <div class="bar" style="width:0%;"></div>
			</div>
		</div>
		<div id="data_akreditasi" class="data">	
			
		</div>
	</div>
</div>


<script type="text/javascript">
$(function(){
  $(".getdata").click(function()
  	{
  		var dataserialized = $('#form_getdata').serialize();
  		$.ajax({
  			type: 'POST',
  			url:"SearchAkreditasi",
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
		    		$("#data_akreditasi").html(result);
		    		$("#data_akreditasi").fadeIn(1000);
		    	},1000));
		   }
		});
    return false;
  });
  $(".getdata").trigger('click');
});
 
</script>

<style type="text/css">
	.span-19{
		width: 100% !important;
	}
	.data{
		min-height: 300px;
		/*background: #000;*/
		/*opacity: 0.7;*/
	}
	.content-field{
		min-height: 550px !important;
	}
</style>