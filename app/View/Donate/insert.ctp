<div class="book form">
<?php echo $this->Form->create('Donate'); ?>
    <fieldset>
        <legend><?php echo __('Your details'); ?></legend>
       <?php echo $this->Form->input('name');?>
       <?php echo $this->Form->input('email');?>
       <?php echo $this->Form->input('phone');?>
       <?php //we will take care of book name later ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>