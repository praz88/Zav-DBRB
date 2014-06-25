<br/>
<div class="book form">
<?php echo $this->Form->create(); ?>

    <fieldset>
        <legend><?php echo __('Enter your details. Use your institute email id, without which you will not be allowed to request books'); ?></legend>
       <?php echo $this->Form->input('instituteName', array('value' =>$this->Session->read('Requester.name')));?>
       <?php echo $this->Form->input('instituteEmail', array('value' =>$this->Session->read('Requester.email')));?>
       <?php echo $this->Form->input('instituteMobile', array('value' =>$this->Session->read('Requester.mobile')));?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>