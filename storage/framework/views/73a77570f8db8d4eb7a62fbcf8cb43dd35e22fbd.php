<?php $__env->startSection('contenido'); ?> 

<?php echo $__env->make('convocatoriasactivas.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('convocatoriasactivas.modalP', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('convocatoriasactivas.modalN', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('convocatoriasactivas.modalC', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php if((Auth::user()->privilegio == 1)): ?>

 
  <div class="row">

    <div class="col-lg-1">  
    </div>

    <div class="col-lg-3">

        <div class="small-box bg-yellow">
            <div class="inner">
              <?php  $nro2 = DB::select('SELECT COUNT(*) as cant FROM convocatoria WHERE estado="parcial"'); ?>
                <?php foreach($nro2 as $res2): ?>
                  <h3><?php echo e($res2->cant); ?></h3>
                <?php endforeach; ?>
              <p style="font-size: 17px;">Adjudicación Parcial</p>
            </div>

            <div class="icon">
              <i class="fa fa-file-text-o" aria-hidden="true"></i>
            </div>
            <a href="<?php echo URL::to('parciales'); ?>" class="small-box-footer" style="font-size: 15px;">Ver Todas <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
        </div>
          
    </div>

    <div class="col-lg-1">  
    </div>

  </div>

<?php endif; ?> 


  <div class="row">

    <div class="col-lg-1">  
    </div>


    <div class="col-lg-10">  

        
        <center> <h2 style="text-transform: uppercase; font-weight: bold;"> Convocatorias Activas </h2> </center>


<?php if(Auth::user()->privilegio == 0): ?>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive" style="overflow-x:inherit">


      <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
          <thead>
            <th style="font-size: 16px;"><center>Título</center></th>
            <th style="font-size: 16px;"><center>Categoria</center></th>
            <th style="font-size: 16px;"><center>Fecha-Publicación</center></th>
            <th style="font-size: 16px;"><center>Opciones</center></th>
          </thead>
          <tbody align="center" id="body_empresa">          
          <?php foreach($sql as $mov): ?>
          <tr>
            <td style="font-size: 15px;"><?php echo e($mov->titulo); ?></td>          
            <td style="font-size: 15px;"><?php echo e($mov->nombre); ?></td>
            <td style="font-size: 15px;"><?php echo e($mov->fecha); ?></td>
            <td style="font-size: 15px;"> <a href="<?php echo nl2br(e($mov->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a> 
<<<<<<< HEAD


<button class='btn btn-primary' style='background-color: black; font-size: 15px;'  data-t="<?php echo e($mov->titulo); ?>" data-toggle="modal" data-target="#ModalAdjuntar" >Enviar Propuesta</button></a>

<?php echo $__env->make('convocatoriasactivas.modalA', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
=======
           


         
            <a href="<?php echo URL::to('form_enviar_correo'); ?>" class="small-box-footer" style="font-size: 17px;"><button class='btn btn-primary' style='background-color: black; font-size: 15px;'>Enviar Propuesta</button></a>

>>>>>>> 54629061806168660137dc8c010e5e00e0d396af

            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>          
      </table>

      <div class="pull-left"> <?php echo $sql->render(); ?>  </div>
   <script src="js/sistemalaravel.js"></script>

      </div>
    </div>


<?php endif; ?> 



<!-- ///////////////////////////////////////////////////////////////////////////////////////// -->



<?php if(Auth::user()->privilegio == 1): ?>


      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php echo $__env->make('alerts.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('alerts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="table-responsive" style="overflow-x:inherit">


      <table class="table table-striped table-bordered table-condensed table-hover" style="background: white">
          <thead>
            <th style="font-size: 16px;"><center>Título</center></th>
            <th style="font-size: 16px;"><center>Categoria</center></th>
            <th style="font-size: 16px;"><center>Fecha-Publicación</center></th>
            <th style="font-size: 16px;"><center>Opciones</center></th>
          </thead>
          <tbody align="center" id="body_empresa">          
          <?php foreach($sqlAdm as $movAdm): ?>
          <tr>
            <td style="font-size: 15px;"><?php echo e($movAdm->titulo); ?></td>          
            <td style="font-size: 15px;"><?php echo e($movAdm->nombre); ?></td>
            <td style="font-size: 15px;"><?php echo e($movAdm->fecha); ?></td>
            <td style="font-size: 15px;"> 

              <a href="<?php echo nl2br(e($movAdm->descripcion)); ?>"><button class="btn btn-primary" style="font-size: 14px;"><i class="fa fa-download" aria-hidden="true" style="font-size: 18px;"></i> DESCARGAR</button></a> 

              <button class="btn btn-success" style="font-size: 14px;" data-toggle="modal" data-target="#ModalAdjudicar" data-id="<?php echo e($movAdm->idpublic); ?>" data-t="<?php echo e($movAdm->titulo); ?>" data-c="<?php echo e($movAdm->nombre); ?>"><i class="fa fa-file-text" aria-hidden="true" style="font-size: 17px;"></i> ADJUDICAR-TOTAL</button>

              <button class="btn btn-warning" style="font-size: 14px;" data-toggle="modal" data-target="#ModalAdjudicarP" data-id="<?php echo e($movAdm->idpublic); ?>" data-t="<?php echo e($movAdm->titulo); ?>" data-c="<?php echo e($movAdm->nombre); ?>"><i class="fa fa-file-text" aria-hidden="true" style="font-size: 17px;"></i> ADJUDICAR-PARCIAL</button>

            </td>
          </tr>
          <?php endforeach; ?>
          </tbody>          
      </table>

      <div class="pull-left"> <?php echo $sqlAdm->render(); ?>  </div>

      </div>
    </div>

<?php endif; ?> 



</div>



    <div class="col-lg-1">  
    </div>

  </div>

  <?php echo Html::script('js/jsmodal.js'); ?>

 
<?php $__env->stopSection(); ?>


<<<<<<< HEAD

=======
>>>>>>> 54629061806168660137dc8c010e5e00e0d396af
<?php echo $__env->make('layouts.cpanelp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>