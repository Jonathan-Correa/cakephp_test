<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Test-Cake</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a>
        <?php echo $this->Html->Link('Home', array('controller' => "Home", "action" => 'index'), array('class' => "nav-link")); ?>
      </a>
    </li>
    <li class="nav-item">
        <a> 
            <?php echo $this->Html->Link('Cakes', array('controller' => "cakes", "action" => "index"), array('class' => "nav-link")); ?>
        </a>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a>
        <?php echo $this->Html->Link('Sign Up', array('controller' => "Users", "action" => "signup"), array('class' => "nav-link")); ?>
      </a>
    </li>
    <li class="nav-item">
      <a>Sign In</a>
    </li>
  </ul>

    
</nav>