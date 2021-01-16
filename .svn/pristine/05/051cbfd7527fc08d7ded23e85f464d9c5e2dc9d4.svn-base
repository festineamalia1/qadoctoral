<?php
$this->breadcrumbs=array(
	'3.4 Himpunan Alumni',
);
?>

<?php
	// $model=new VisiMisi;
?>

<h1>3.4 Himpunan Alumni</h1>
<div class="row-fluid">
	<div class="span12" style="padding:20px;">
		<form class="form-inline" method="post" id="form_jurusan">
		    <label class="control-label" for="">Jurusan</label>
		      <select class="input-large" name="id_prodi">
				  <option value="0">Semua Jurusan</option>
				  <option value="1">MANAJEMEN DAN KEBIJAKAN PUBLIK</option>
				  <option value="2">ILMU HUBUNGAN INTERNASIONAL</option>
				  <option value="4">Ilmu Komunikasi</option>
				  <option value="5">SOSIOLOGI</option>
				  <option value="6">ILMU PEMBANGUNAN SOSIAL DAN KESEJAHTERAAN</option>
				  <option value="7">POLITIK DAN PEMERINTAHAN</option>
				  <option value="8">SELURUH JURUSAN</option>
			</select>
		    
		    <label class="control-label" for="">Tahun</label>
		      <select class="input-small">
		      	<option>2000</option>
		      	<option>2005</option>
		      	<option>2010</option>
		      	<option>2015</option>
		      	<option>2020</option>
		      </select>
			</select>
		    
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
  			url:"sentdata",
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

  $(".getdata").trigger('click');

});
 
</script>
