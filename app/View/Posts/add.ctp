<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Create a Post</h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </header>
		
<div class="row">

<div class="col-md-6 offset-md-3">
<?php echo $this->Form->create('Post'); ?>
		<div class="form-group">
		<?= $this->Form->input('title',array('class'=>'form-control'));?>
		</div>
		<br/>
		<div class="form-group">
		<?= $this->Form->input('description',array('class'=>'form-control'));?>
		</div>
		<br/>
		<div class="form-group">
		<?= $this->Form->input('body',array('class'=>'form-control'));?>
		</div>
		<br/>
<?= $this->Form->end(__('Submit',array('class'=>'btn btn-primary'))); ?>
</div>
</div>
<br/>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?= $this->Html->link(__('All Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>
