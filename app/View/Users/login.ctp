<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password to login.'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
  </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>
<br/>
<legend></legend>
 <legend><?php echo __('If you are not registered as an admin and wish to manage books, contact Zav foundation for admin access'); ?></legend>
  
<br/><br/><br/><br/>