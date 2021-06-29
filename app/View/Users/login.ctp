<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Login</h1>
                          
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="row">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
<div class="col-md-6 offset-md-3">
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <div class="form-group">
        <?= $this->Form->input('username', array('class'=>'form-control'));?>
        </div>
        <br/>
       
        <div class="form-group">
       <?= $this->Form->input('password', array('class'=>'form-control')); ?>
       </div>
    </fieldset>
    <br/>
    <div class="form-group">
<?php echo $this->Form->end(__('Login', array('class'=>'btn btn-primary'))); ?>
</div>
</div>
</div>