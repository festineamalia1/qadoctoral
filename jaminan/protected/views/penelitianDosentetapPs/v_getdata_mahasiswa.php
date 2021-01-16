<?php
$this->breadcrumbs=array(
	'Penelitian Dosen Tetap',
);
?>

<?php
	// $model=new VisiMisi;
?>

<p>Data tugas akhir mahasiswa yang dilibatkan dalam penelitian dosen dalam tiga tahun terakhir</p>
<div class="row-fluid">
	<div class="span12" style="padding:20px;">
		<form class="form-inline" method="post" id="form_jurusan">
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
		    
		      <!-- <button type="button" class="btn btn-primary"><i class="icon-arrow-right icon-white"></i> Proses</button> -->
		    <button type="button" class="btn btn-primary getdata"><i class="icon-arrow-right icon-white"></i>Tampil</button>
		</form>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="progress progress-striped active hide" >
			  <div class="bar" style="width:0%;"></div>
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
		min-height: 300px;
		/*background: #000;*/
		/*opacity: 0.7;*/
	}
	.content-field{
		min-height: 550px !important;
	}
</style>

<script type="text/javascript">
$(function(){
  $(".getdata").click(function()
  	{
  		var dataserialized = $('#form_jurusan').serialize();
  		$("#data").hide();
  		$.ajax({
  			type: 'POST',
  			url:"sentdata2",
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
		    		$("#data").fadeIn();
		    	},1000));
		   }
		});

    return false;
  });

  $(".getdata").trigger('click');

});
 
</script>
