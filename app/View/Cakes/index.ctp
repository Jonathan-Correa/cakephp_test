<div class="container pt-4">
  <h1>All my cakes</h1>

  <?php echo $this->Html->Link('create a new cake', array("action" => "add"), array('class' => 'btn btn-secondary')); ?>

  <div class="container pt-4">
    <table class="table">
      <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Flavor</th>
            <th>action</th>
        </tr>      
      </thead>
      <tbody>
        <?php foreach($cakes as $cake): ?>
            <tr>
                <td> <?php echo $cake["Cake"]["id"] ?> </td>
                <td> <?php echo $cake["Cake"]["title"] ?> </td>
                <td> <?php echo $cake["Cake"]["flavor"] ?> </td>
                <td> 
                    <?php echo $this->Html->Link('edit', array("action" => "edit", $cake["Cake"]["id"]), array('class' => 'btn btn-secondary')); ?>
                    <?php echo $this->Form->postLink('delete', 
                      array("action" => "delete", $cake["Cake"]["id"]), 
                      array('class' => 'btn btn-secondary'), 
                      array('confirm' => "¿desea eliminar este cake?")); ?>
                </td>
                </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <nav>
          <ul class="pagination">
            <li class="btn btn-secondary page-link">
              <?php echo $this->Paginator->prev("previous", array('tag' => false), null, array('class' => "prev disabled")); ?>
            </li>
              
              <?php echo $this->Paginator->numbers(array('separator' => "", "tag" => "button"), array('class' => "btn btn-light")); ?>            
            <li class="btn btn-secondary page-link">
                <?php echo $this->Paginator->next("next", array('tag' => false), null, array('class' => "next disabled")); ?>              
            </li>
          </ul>
    </nav>
  </div>
</div>




<!-- 



 -->