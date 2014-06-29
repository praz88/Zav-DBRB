<br/>
<div class="book form">
<?php echo $this->Form->create(); ?>

    <fieldset>
        <legend><?php echo __('Enter your details. Use your institute email id, without which you will not be granted books. After submitting this form, you can easily request for multiple books from our book list.'); ?></legend>
       <?php echo $this->Form->input('requesterName', array('value' =>$this->Session->read('Requester.name')
       ,'required' => true,
                                                   'placeholder' => 'Enter your institute name',
                                                   'type' => 'text'));?>
       <?php echo $this->Form->input('requesterEmail', array('value' =>$this->Session->read('Requester.email')
       ,'required' => false,
                                                   'placeholder' => 'Enter your institute email',
                                                   'type' => 'email'));?>
       <?php echo $this->Form->input('requesterMobile', array('value' =>$this->Session->read('Requester.mobile')
       ,'required' => true,
                                                   'placeholder' => 'Enter your mobile number for us to contact you',
                                                   'type' => 'number'));?>
       <?php echo $this->Form->input('requesterAddress', array('value' =>$this->Session->read('Requester.address')
       ,
              'required' => true,
                                                   'placeholder' => 'Enter your institute contact address',
                                                   'type' => 'text'));?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>