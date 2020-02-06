<div class="row">
    <div class="col-md-4 mx-auto">
        <div class="card">
            <div class="card-head text-center">
                <h3>Sign Up!</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <?php echo $this->Form->create('User'); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('username', array("class" => "form-control")); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('password', array("class" => "form-control")); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Enviar!</button>
                </div>
            </div>
        </div>
    </div>
</div>