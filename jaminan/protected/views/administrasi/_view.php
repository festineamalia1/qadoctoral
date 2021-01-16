<div class="view">
<table class=" table-hover" style="width:100%;">
	<tr>
		<td style="width:150px;">
			<?php echo CHtml::encode($data->getAttributeLabel('id_administrasi')); ?>
		</td>
		<td>
			: <?php echo CHtml::encode($data->id_administrasi); ?>
		</td>
	</tr>

	<tr>
		<td>
			<?php echo CHtml::encode($data->getAttributeLabel('th_akademik')); ?>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_akademik); ?>
		</td>
	</tr>

	<tr>
		<td>
			<?php echo CHtml::encode($data->getAttributeLabel('th_akreditasi')); ?>
		</td>
		<td>
			: <?php echo CHtml::encode($data->th_akreditasi); ?>
		</td>
	</tr>

</table>


</div>