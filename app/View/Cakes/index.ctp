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
                  <?php echo $this->Html->Link('edit', ["action" => "edit", $cake["Cake"]["id"]], array('class' => 'btn btn-secondary')); ?>
                  <?php echo $this->Form->postLink('delete', ["action" => "delete", $cake["Cake"]["id"]], array('class' => 'btn btn-secondary')); ?>
              </td>
              </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
</div>




