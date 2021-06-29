<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Blog Posts</h1>
                           
                        </div>
                    </div>
                </div>
            </div>
        </header>

<div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

<?php foreach ($posts as $post): ?>
						<div class="post-preview">
						<h2><?= $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']), array('class'=>'post-title')); ?></h2>
        
                        <p class="post-meta">
                            Posted by
							<?= $this->Html->link($post['User']['name'], array('controller' => 'users', 'action' => 'view', $post['User']['id'])); ?>

                            on <?= h(($post['Post']['created'])); ?>
						
                        </p>
                    </div>
					<hr class="my-4" />
					<?php endforeach; ?>

					<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?> 

</div>
</div>
</div>