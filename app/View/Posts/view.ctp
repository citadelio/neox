<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?= h($post['Post']['title']); ?></h1>
                            <h2 class="subheading"><?= h($post['Post']['description']);?></h2>
                            <span class="meta">
							Posted by
							<?= $this->Html->link($post['User']['name'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>
								on <?= h(($post['Post']['created'])); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>


		<article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
						<p><?php echo h($post['Post']['body']); ?></p>

					</div>
					</div>
					</div>
					</article>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

	<!-- $post['User']['name'] -->
	<?php if( AuthComponent::user('id') == $post['User']['id']):?>
		<li><?= $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id']), array('class'=>'btn btn-info')); ?> </li>
		<li><?= $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $post['Post']['id']),'class'=>'btn btn-danger')); ?> </li>
	<?php endif;?>

		<li><?php echo $this->Html->link(__('All Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
	</ul>
</div>
