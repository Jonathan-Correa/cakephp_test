<h1>All my cakes</h1>

<?php echo $this->Html->Link('create a new cake', ["action" => "add"]); ?>

<?php if(!$cakes){




} ?>

<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Title</td>
            <td>Flavor</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
            <?php foreach($cakes as $cake): ?>
                <tr>
                    <td> <?php echo $cake["Cake"]["id"] ?> </td>
                    <td> <?php echo $cake["Cake"]["title"] ?> </td>
                    <td> <?php echo $cake["Cake"]["flavor"] ?> </td>
                    <td> 
                        <?php echo $this->Html->Link('edit', ["action" => "edit", $cake["Cake"]["id"]]); ?>
                        <?php echo $this->Form->postLink('delete', ["action" => "delete", $cake["Cake"]["id"]]); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
    </tbody>
</table>
