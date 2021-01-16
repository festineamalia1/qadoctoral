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
		font-size: 16px;
		font-weight: bold;
		margin-bottom: 20px;
	}
	p{
		text-align:justify;
		text-justify:inter-world;
	}
</style>

<?php
if(empty($data)){
	?>
		<div class="alert alert-error">
		  Maaf Data yang Anda inginkan masih dalam keadaan kosong. 
		</div>
	<?
}else{
?>
<p>
	2.3 Sistem Pengelolaan
</p>
<p style="padding-left:25px">
	Sistem pengelolaan fungsional dan operasional program studi mencakup planning, organizing, staffing, leading, controlling dalam kegiatan  internal maupun eksternal.
	<br><br>
	Jelaskan sistem pengelolaan Program Studi serta dokumen pendukungnya.

</p>
<div style="border:1px solid black;padding:5px;margin-bottom:20px;">
	<?=$data['sistem_pengelolaan']?>
</div>
<?
}
?>