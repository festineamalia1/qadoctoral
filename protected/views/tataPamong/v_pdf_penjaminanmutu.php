<style type="text/css">
	table{
		/*border: thin solid black;*/
		border-collapse: collapse;
		width: 100%;
	}
	table tr th{
		border: thin; solid black;
		border-top: none;
		font-weight: bold;
	}
	table tr td{
		border: thin solid black;
		padding: 10px;
	}
	.judul{
		text-align: center;
		font-size: 16px;
	}
	.sub_judul{
		text-align: left;
		font-size: 14px;
		font-weight: bold;
		margin-bottom: 20px;
	}
</style>

<p class="sub_judul">
	2.4 Penjaminan Mutu
</p>

<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
	<p>Bagaimanakah pelaksanaan penjaminan mutu pada Program Studi? Jelaskan.</p>	
	<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
	<?=$data['penjaminan_mutu']?>
	</div>
<?
}
?>