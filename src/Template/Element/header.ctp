
<?php 
  use Cake\Routing\Router;
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>nobaidfor</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" type="text/css"/>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>
  <?php
      echo $this->Html->css('css/style.css');
      echo $this->Html->script('jquery.min.js');
      echo $this->Html->script('jquery.validate.min.js');
  ?>
</head>
<body>
  <!-- header section -->
  <header>
    <div class="container-fluid">
      <div class="row">
        <figure class="brand navbar-header col-md-3 col-xs-4"><img src="images/logo.jpg" alt="NoBaidfor" /></figure>
        <div class="col-md-3 col-sm-4 col-xs-7 pull-right headerright text-right">
        <?php echo $this->Html->link('Sign Up','/applicants/signup',['class' => 'button borderbtn']); ?>
        <?php echo $this->Html->link('Login','/users/login',['class' => 'button borderbtn']); ?>
        </div>
        <div  class="col-md-6 col-sm-8 col-xs-12 text-left">
          <div class="headernav pull-left">
            <button class="mobimenubtn">
              <span></span>
              <span></span>
              <span></span>
            </button>
            <ul id="headmenu-list">
              <li><?php echo $this->Html->link('Teach','/users/teachoption',['class' => 'activenav']); ?></li>
              <li><?php echo $this->Html->link('Learn','/users/learnoption',['class' => 'activenav']); ?></li>
              <li><?php echo $this->Html->link('Activities','/users/activities',['class' => 'activenav']); ?></li>
            </ul>
          </div>
          <div class="headersearh">
            <input type="text" placeholder="Search experts" />
          </div>
        </div>
      </div>
    </div>
  </header>