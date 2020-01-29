<h1>Editar cake</h1>

<?php 
    echo $this->Form->create('Cake');
    echo $this->Form->input('title', ["value" => $cake["Cake"]["title"]]);
    echo $this->Form->input('flavor', ["value" => $cake["Cake"]["flavor"]]);
    echo $this->Form->end('edit');
?>