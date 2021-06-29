<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?= h($user['User']['name']); ?></h1>
                            <span class="subheading">@<?= h($user['User']['username']); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		
		<div class="row">
			<div class="col-md-6 offset-md-3">
			<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-3">
        <div class="d-flex align-items-center">
            <div class="image"> <img style="margin:0 15px 0 0" src="https://picsum.photos/200" class="rounded" width="155"> </div>
            <div class="ml-3 w-100">
                <h4 class="mb-0 mt-0"><?= h($user['User']['name']); ?></h4> <span>@<?= h($user['User']['name']); ?></span>
                <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                    <div class="d-flex flex-column" style="margin:10px"> <span class="articles">Total Posts</span> <span class="number1">	<?= sizeof($user['Post']); ?></span> </div>
                   
                   
                </div>
                <div class="button mt-2 d-flex flex-row align-items-center"> 
				<button class="btn btn-sm btn-outline-primary w-100">Role: <?= h($user['User']['role']); ?></button>
            </div>
        </div>
    </div>
</div>
			</div>
		</div>
	
<div class="actions">

	<ul>
	
		<li><?php echo $this->Html->link(__('See all Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Create a New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('See all Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Create a New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
