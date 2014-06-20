<div class="book form">
<?php echo $this->Form->create('Book'); ?>

    <fieldset>
        <legend><?php echo __('Request Book'); ?></legend>
       <?php echo $this->Form->input('title', array('value' =>$books['Book']['title'],'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('isbn', array('value' =>$books['Book']['isbn'], 'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('donator', array('value' =>$books['Book']['donator'],'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('holder', array('value' =>$books['Book']['holder'], 'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('requester', array('value' =>$books['Book']['requester']));?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>