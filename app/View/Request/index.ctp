<div class="book form">
<?php echo $this->Form->create('Book'); ?>

    <fieldset>
        <legend><?php echo __('Request Book'); ?></legend>
       <?php echo $this->Form->input('title', array('value' =>$books['Book']['title'],'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('isbn', array('value' =>$books['Book']['isbn'], 'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('status', array('value' =>"Requested", 'type' => 'hidden'));?>
       <?php echo $this->Form->input('donatorName', array('value' =>$books['Book']['donatorName'],'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('holder', array('value' =>"Zav foundation", 'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('requesterName', array('value' =>$this->Session->read('Requester.name')));?>
       <?php echo $this->Form->input('requesterEmail', array('value' =>$this->Session->read('Requester.email')));?>
       <?php echo $this->Form->input('requesterMobile', array('value' =>$this->Session->read('Requester.mobile')));?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>