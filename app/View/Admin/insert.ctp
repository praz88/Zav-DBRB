<div class="book form">
<?php echo $this->Form->create('Book'); ?>
    <fieldset>
        <legend><?php echo __('Add Book'); ?></legend>
       <?php echo $this->Form->input('title');?>
       <?php echo $this->Form->input('isbn');?>
       <?php echo $this->Form->input('donatorName');?>
       <?php echo $this->Form->input('donatorEmail');?>
       <?php echo $this->Form->input('donatorMobile');?>
       <?php echo $this->Form->input('holder', array('value' =>'Zav Foundation','disabled' => 'disabled'));?>
       <?php echo $this->Form->input('adminName', array('value' =>'Admin name','disabled' => 'disabled'));?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>