
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Welcome</h1>
                            <span class="subheading">You'd be thrilled!</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

		<div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
				<?php if (AuthComponent::user('id')): ?>
					
				
					<h3> Logged in as <?= AuthComponent::user('name') ?></h3>
					<h3>
						<?= $this->Html->link('View all Posts', array('controller' => 'posts', 'action' => 'index'),array('class'=>'mt-5 mb-5 btn btn-primary btn-md'))?>
					</h3>

				<?php else:?>
					<h3> We have curated a number of really exciting posts that will tickle your interest</h3>
					<h3>
						<?= $this->Html->link('Login to see blogposts','/users/login', array('class'=>'mt-5 mb-5 btn btn-primary btn-md'))?>
					</h3>
				<?php endif; ?>
				</div>
			</div>
		</div>