<div class="book form">
<?php echo $this->Form->create('Book'); ?>
    <fieldset>
        <legend><?php echo __('Donate Book'); echo "</legend>";?>
       <?php echo $this->Form->input('title');?>
       <?php echo $this->Form->input('isbn');?>
       <?php echo $this->Form->input('donatorName');?>
       <?php echo $this->Form->input('donatorEmail');?>
       <?php echo $this->Form->input('donatorMobile');?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>