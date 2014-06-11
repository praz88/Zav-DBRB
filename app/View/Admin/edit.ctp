<div class="book form">
<?php echo $this->Form->create('Book'); ?>

    <fieldset>
        <legend><?php echo __('Edit Book'); ?></legend>
       <?php echo $this->Form->input('title', array('value' =>$books['Book']['title']));?>
       <?php echo $this->Form->input('isbn', array('value' =>$books['Book']['isbn']));?>
       <?php echo $this->Form->input('donator', array('value' =>$books['Book']['donator']));?>
       <?php echo $this->Form->input('holder', array('value' =>$books['Book']['holder']));?>
       <?php echo $this->Form->input('requester', array('value' =>$books['Book']['requester']));?>
       <?php echo $this->Form->input('receiver', array('value' =>$books['Book']['receiver']));?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>