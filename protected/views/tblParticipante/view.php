<?php
/* @var $this TblParticipanteController */
/* @var $model TblParticipante */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	$model->parti_nombreempresa,
);

$this->menu=array(
	array('label'=>'Listar Participantes', 'url'=>array('index')),
	array('label'=>'Create Participante', 'url'=>array('create')),
	array('label'=>'Actualizar Participante', 'url'=>array('update', 'id'=>$model->part_id)),
	array('label'=>'Borrar Participante', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->part_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Andinistrar Participante', 'url'=>array('admin')),
);
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl.'/css/customs.css'; ?>">

<div class="hero-unit divi">
<h1>Participante<?php echo "    ".$model->parti_nombreempresa; ?></h1>


<div>
 		<H1>

 		<?php
 			 echo CHtml::image(Yii::app()->request->baseUrl.$model->parti_imagen,"",
 			 	array('class'=>'imagen', 'width'=>200,'href'=>"#myModal",'data-toggle'=>"modal"));		
 		 ?>	
 		<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  		<div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    			<h3 id="myModalLabel"><?php echo $model->parti_nombreempresa; ?></h3>
  		</div>
  		<div class="modal-body">

 		<?php
 			 echo CHtml::image(Yii::app()->request->baseUrl.$model->parti_imagen,"",
 			 	array('width'=>500));
		
 		 ?>	
  		</div>
  		<div class="modal-footer">
    	<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
    	
	  	</div>
		</div>		
 		
 		</H1>
 	</div>	






<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        
       
        'parti_nombreempresa',
        'parti_nit',
        'parti_nom_represantante',
        'parti_direccion',
        'partiCiudad.depCodigo.dep_nombre',
        'partiCiudad.mun_nombre',
        'parti_email',
        'parti_telefono',
        'parti_celular',
        'parti_fax',
        'parti_web',
        'parti_ntrabajadores',
        'partiSector.sec_nombre',       
    ),
)); ?>


<center>
            <!-- nuevos botones-->
            <?php echo CHtml::link(CHtml::Button('Lo que vende', array('class'=>'btn btn-info btn-large')), array('TblParticipante/portafolio', 'cate'=>1, 'id'=>$model->part_id)); ?>
            <?php echo CHtml::link(CHtml::Button('Lo que necesita', array('class'=>'btn btn-info btn-large')), array('TblParticipante/portafolio', 'cate'=>2, 'id'=>$model->part_id)); ?>
</center>


</div>
  <?php
 if( Yii::app()->getModule('user')->isAdmin())
 {
?> 
    <center>
   <?php echo CHtml::link(CHtml::Button('Atras', array('class'=>'btn btn-success btn-large')), array('tblParticipante/admin')); ?>
    </center>
<?php 

}else
{
 echo CHtml::link(CHtml::Button('Principal', array('class'=>'btn btn-success btn-large')), array('site/index'));

}
 ?>