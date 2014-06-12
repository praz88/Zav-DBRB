<div class="book form">
<?php echo $this->Form->create('Book'); ?>
    <fieldset>
        <legend><?php echo __('Add Book'); ?></legend>
       <?php echo $this->Form->input('title');?>
       <?php echo $this->Form->input('isbn');?>
       <?php echo $this->Form->input('donator');?>
       <?php echo $this->Form->input('holder');?>
       <?php echo $this->Form->input('requester');?>
       <?php echo $this->Form->input('receiver');?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>