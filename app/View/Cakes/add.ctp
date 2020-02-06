<div class="container mt-4">
   <div class="row">
      <div class="col-md-4 mx-auto">
         <div class="card">
            <div class="card-header text-center">
               <h3>Agregar Cake</h3>
            </div>
            <div class="card-body">
                  <div class="form-group">
                     <?php echo $this->Form->create('Cake'); ?>
                  </div>
                  <div class="form-group">
                     <?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
                  </div>
                  <div class="form-group">
                     <?php echo $this->Form->input('flavor', array('class' => 'form-control')); ?>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-success">Enviar</button>
                  </div>         
            </div>
         </div>
      </div>
   </div>
</div>