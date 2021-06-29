<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Edit Post</h1>
                       
                        </div>
                    </div>
                </div>
            </div>
        </header>


<div class="row">

<div class="col-md-6 offset-md-3">
<?php echo $this->Form->create('Post'); ?>

	
		<div class="form-group">
		<?= $this->Form->input('title', array('class'=>'form-control'));?>
		</div>
		<br/>
		<div class="form-group">
		<?= $this->Form->input('description', array('class'=>'form-control'));?>
		</div>
		<br/>
		<div class="form-group">
		<?= $this->Form->input('body', array('class'=>'form-control'));?>
		</div>
<br/>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Post.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Post.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
