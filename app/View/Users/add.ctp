<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Register</h1>
							<span class="subheading">Create a new account</span>
                        
                        </div>
                    </div>
                </div>
            </div>
        </header>
		

		<div class="row">
			<div class="col-md-6 offset-md-3">
			<?php echo $this->Form->create('User'); ?>
	
		<legend><?php echo __('Add User'); ?></legend>

		<div class="form-group"><?= $this->Form->input('name', array('class'=>'form-control'));?></div>
		<br/>
		<div class="form-group"><?= $this->Form->input('username', array('class'=>'form-control'));?></div>
		<br/>
		<div class="form-group"><?= $this->Form->input('password', array('class'=>'form-control'));?></div>
		
	
<br/>
<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
		
</div>
