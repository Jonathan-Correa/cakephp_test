<h1>create a new cake</h1>

<?php 
    $this->Html->create('Cake');
    $this->Html->input('title');
    $this->Html->input('flavor');
    $this->Html->end('save');

?>