<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Users</h1>
                        
                        </div>
                    </div>
                </div>
            </div>
        </header>
		

<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="table-responsive">
		<table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col"><?php echo $this->Paginator->sort('name'); ?></th>
      <th scope="col"><?php echo $this->Paginator->sort('username'); ?></th>
      <th scope="col"><?php echo $this->Paginator->sort('role'); ?></th>
      <th scope="col"><?php echo $this->Paginator->sort('created'); ?></th>
      <th scope="col"><?php echo $this->Paginator->sort('role'); ?></th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($users as $user): ?>
	<tr>
		<td><?= h($user['User']['name']); ?>&nbsp;</td>
		<td><?= h($user['User']['username']); ?>&nbsp;</td>
		<td><?=  h($user['User']['role']); ?>&nbsp;</td>
		<td><?= h($user['User']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']), array('class'=>'btn btn-primary btn-sm')); ?>
			<?php if(AuthComponent::user('id') ==  $user['User']['id']):?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class'=>'btn btn-info btn-sm')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']),'class'=>'btn btn-danger btn-sm')); ?>
			<?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
  </tbody>
</table>
		</div>
	</div>

</div>

		<div class="users index">
	<p>
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
