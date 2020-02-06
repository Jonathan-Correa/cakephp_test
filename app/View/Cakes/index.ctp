<div class="container">

  <?php if(!$cakes): ?>
    <div class="row">
      <div class="col-md-4 mx-auto">
        <div class="card">
          <div class="card-body">
            <h2>
              There are not Cakes yet!!
            </h2>
            <?php echo $this->Html->Link('Create one!', array('controller' => 'cakes', 'action' => 'add'), array('class' => 'btn btn-success btn-block')); ?>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if($cakes): ?>
    <?php echo $this->Html->Link('create a new cake', array("action" => "add"), array('class' => 'btn btn-secondary')); ?>
    
    <div class="row">
    <?php foreach($cakes as $cake): ?>
      <div class="col-md-4">
        <div class="card mt-4">
          <div class="card-header">
            <h3>
              Cake #
              <?php echo $cake['Cake']['id']; ?> 

              <?php echo $this->Html->Link('edit', array("action" => "edit", $cake["Cake"]["id"]), array('class' => 'btn btn-primary')); ?>            
                           
            </h3>
          </div>
          <div class="card-body">
            <p>
              <h3>
                Title: 
              </h3>
              <?php echo $cake['Cake']['title']; ?>
            </p>
              
            <p>
              <h3>
                Flavor: 
              </h3>
              <?php echo $cake['Cake']['flavor']; ?>
            </p>

            <?php echo $this->Form->postLink('Delete', 
                      array("action" => "delete", $cake["Cake"]["id"]), 
                      array('class' => 'btn btn-danger btn-block'), 
                      array('confirm' => '¿desea eliminar este cake?')); ?>
              
          </div>        
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <nav class="pt-4">
          <ul class="pagination">
              <?php echo $this->Paginator->prev("Previous", array('tag' => "button"), null, array('class' => "btn btn-primary")); ?>
              <?php echo $this->Paginator->numbers(array('separator' => "", "tag" => "button"), array('class' => "btn btn-light")); ?>            
              <?php echo $this->Paginator->next("Next", array('tag' => "button"), null, array('class' => "btn btn-primary")); ?>              
          </ul>
    </nav>
  <?php endif; ?>

    
  
</div>