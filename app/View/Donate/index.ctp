<div class="book form">
<?php echo $this->Form->create('Book'); ?>
    <fieldset>
        <legend><?php echo __('Donate Book'); echo $this->Html->link(' Enter your details before donating', array('action'=>'../donate/insert'));echo "</legend>";?>
       <?php echo $this->Form->input('title');?>
       <?php echo $this->Form->input('isbn');?>
       <?php echo $this->Form->input('donator');?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>