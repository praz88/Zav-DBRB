<br/>
<div class="book form">
<?php echo $this->Form->create('Book'); ?>

    <fieldset>
        <legend><?php echo __('Request Book. You can hold the book for a maximum of 1 year only, upon which you will be contacted for returning the book. Enter your correct details to request for a book'); ?></legend>
                  <?php echo $this->Form->input('stream', array(
                            'options' => array('School'=>'School books', 'PUC and CET'=>'PUC and CET books', 'Engineering'=>'Engineering books'
                                                                           , 'Commerce and Management'=>'Commerce and Management books', 'Arts and Culture'=>'Arts and Culture books', 'Non academic'=>'Non academic books'),
                                                                           'selected' => $books['Book']['stream'],'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('titleAndAuthor', array('value' =>$books['Book']['titleAndAuthor'],'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('isbn', array('value' =>$books['Book']['isbn'], 'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('status', array('value' =>"Requested", 'type' => 'hidden'));?>
       <?php echo $this->Form->input('holder', array('value' =>"Zav foundation", 'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('requesterName', array('value' =>$this->Session->read('Requester.name'),
       'required' => true,
                                            'placeholder' => 'Enter your name',
                                            'type' => 'text'));?>
       <?php echo $this->Form->input('requesterEmail', array('value' =>$this->Session->read('Requester.email'),
       'required' => false,
                                            'placeholder' => 'Enter your email',
                                            'type' => 'email'));?>
       <?php echo $this->Form->input('requesterMobile', array('value' =>$this->Session->read('Requester.mobile'),
       'required' => true,
                                            'placeholder' => 'Enter your mobile number for us to contact you',
                                            'type' => 'number'));?>
       <?php echo $this->Form->input('requesterAddress', array('value' =>$this->Session->read('Requester.address'),
       'required' => true,
                                            'placeholder' => 'Enter your contact address',
                                            'type' => 'text'));?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<br/>
<br/>
<br/>
<br/>
