<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>

		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="A Faux blog by Hussein Warrake" />
        <meta name="author" content="Hussein Warrake"/>
        <title>Neox - A Blog By Hussein Warrake</title>
        <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />

	<?php
		echo $this->Html->css('styles');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
				<?= $this->Html->link('Neox', '/', array('class' => 'navbar-brand'));?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item">
						<?= $this->Html->link('Home', '/', array('class' => 'nav-link px-lg-3 py-3 py-lg-4'));?>
						</li>
                        <li class="nav-item">
						<?= $this->Html->link('Blogposts', '/posts', array('class' => 'nav-link px-lg-3 py-3 py-lg-4'));?>
						</li>
						<?php if (!AuthComponent::user('id')): ?>
                        <li class="nav-item">
						<?= $this->Html->link('Login', '/users/login', array('class' => 'nav-link px-lg-3 py-3 py-lg-4'));?>
						</li>
                        <li class="nav-item">
						<?= $this->Html->link('Register', '/users/add', array('class' => 'nav-link px-lg-3 py-3 py-lg-4'));?>
						<?php else:?>
							<li class="nav-item">
						<?= $this->Html->link('Create Blogpost', array('controller'=>'posts','action' => 'add'), array('class' => 'nav-link px-lg-3 py-3 py-lg-4'));?>
						</li>
							<li class="nav-item">
						<?= $this->Html->link('Logout', '/users/logout', array('class' => 'nav-link px-lg-3 py-3 py-lg-4'));?>
						</li>
							<li class="nav-item">
						
						<?= $this->Html->link(AuthComponent::user('name') ,array('controller'=>'users','action' => 'view',AuthComponent::user('id')), array('class' => 'nav-link px-lg-3 py-3 py-lg-4'));?>
						</li>
						<?php endif;?>
                    </ul>
                </div>
            </div>
        </nav>


		<?php echo $this->Flash->render(); ?>
		<?php echo $this->fetch('content'); ?>
	

		<footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Neox 2021 by Hussein Warrake</div>
                    </div>
                </div>
            </div>
        </footer>

  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
		<?php echo $this->Html->script('scripts');?>
</body>
</html>
