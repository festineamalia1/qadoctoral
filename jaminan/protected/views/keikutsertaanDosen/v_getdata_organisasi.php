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
  $(".getdata_organisasi").click(function()
  	{
  		var dataserialized = $('#form_jurusan').serialize();
  		$("#data").hide();
  		$.ajax({
  			type: 'POST',
  			url:"sentdata_organisasi",
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

  $(".getdata_organisasi").trigger('click');

});
 
</script>
