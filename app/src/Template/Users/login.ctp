<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<!-- Meta, title, CSS, favicons, etc. -->
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<title>Administrativo </title>

    	<!-- Bootstrap -->
    	<?= $this->Html->css("bootstrap.min.css") ?>
    	<!-- Font Awesome -->
    	<?= $this->Html->css("font-awesome.min.css") ?>
    	<!-- NProgress -->
    	<?= $this->Html->css("nprogress.css") ?>
    	<!-- Animate.css -->
    	<?= $this->Html->css("animate.min.css") ?>
    	<!-- Custom Theme Style -->
    	<?= $this->Html->css("custom.min.css") ?>
  	</head>

 	<body class="login">
    	<div>
      		<div class="login_wrapper">
				<?= $this->Flash->render('auth') ?>
				<?= $this->Form->create() ?>
		    	<fieldset>
		        	<legend><?= __('Login Administrativo') ?></legend>
		        	<?= $this->Form->control('username', ['label' => 'Username', 'class' => 'form-control']) ?>
		        	<?= $this->Form->control('password', ['label' => 'Password', 'class' => 'form-control']) ?>
		   		</fieldset>
                <br>
				<?= $this->Form->button(__('Login', ['label' => 'Login', 'class' => 'form-control'])); ?>
				<?= $this->Form->end() ?>
              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-gears"></i> Administrativo</h1>
                  <p>©2019 Developed by | Daniel Gomes.</p>
                </div>
              </div>
			</div>
		</div>
	</body>
</html>

