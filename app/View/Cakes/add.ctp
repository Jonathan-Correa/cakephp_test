<h1>create a new cake</h1>

<?php 
   echo $this->Form->create('Cake');
   echo $this->Form->input('title');
   echo $this->Form->input('flavor');
   echo $this->Form->end('save');

?>