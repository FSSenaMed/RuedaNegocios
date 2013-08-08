<?php
/* @var $this TblParticipanteController */
/* @var $data TblParticipante */
?>

<style>
.empresa{
	cursor: pointer;
}
.empresa:hover{
background-color:#D5E7FD;
-webkit-box-shadow: 0px 0px 20px 10px #11AFEE;
box-shadow: 0px 0px 20px 10px #11AFEE;
}
</style>

<div class="hero-unit empresa" onclick="javascript: location.href='<?php echo Yii::app()->createUrl('TblParticipante/view', array('id'=>$data->part_id))?>'">
<table>
	<td>
			
	<?php //echo CHtml::encode($data->parti_imagen); ?>
	<?php 
		echo CHtml::link( CHtml::image(Yii::app()->request->baseUrl.$data->parti_imagen,"",
 		array('width'=>200)), array('view', 'id'=>$data->part_id));
		//echo CHtml::image(Yii::app()->request->baseUrl.$data->parti_imagen,"",
 		//array('width'=>50));
	 ?>



	<br />

		</td>
		<td>
			<b><?php echo CHtml::encode($data->getAttributeLabel('part_id')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->part_id), array('view', 'id'=>$data->part_id)); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('parti_nombreempresa')); ?>:</b>
			<?php echo CHtml::encode($data->parti_nombreempresa); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('parti_nit')); ?>:</b>
			<?php echo CHtml::encode($data->parti_nit); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('parti_nom_represantante')); ?>:</b>
			<?php echo CHtml::encode($data->parti_nom_represantante); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('parti_direccion')); ?>:</b>
			<?php echo CHtml::encode($data->parti_direccion); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('parti_departamento')); ?>:</b>
			<?php //echo CHtml::encode($data->parti_departamento); 
                              $modelo= TblDepartamento::model()-> findByPk($data->parti_departamento);
                              echo $departamento = $modelo->dep_nombre;
                        ?>
			<br />
	</td>
</table>

	<?php /*
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('parti_email')); ?>:</b>
	<?php echo CHtml::encode($data->parti_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parti_telefono')); ?>:</b>
	<?php echo CHtml::encode($data->parti_telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parti_fax')); ?>:</b>
	<?php echo CHtml::encode($data->parti_fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parti_web')); ?>:</b>
	<?php echo CHtml::encode($data->parti_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parti_ntrabajadores')); ?>:</b>
	<?php echo CHtml::encode($data->parti_ntrabajadores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parti_sector')); ?>:</b>
	<?php echo CHtml::encode($data->parti_sector); ?>
	<br />

	*/ ?>

</div>