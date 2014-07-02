<br/>
<div class="book form">
<?php echo $this->Form->create('Book'); ?>
    <fieldset>
        <legend><?php echo __('Donate Book. Enter your correct details and you will be contacted by us. You can keep track of your donated book on this website once we receive it.'); echo "</legend>";?>
           <?php echo $this->Form->input('stream', array(
                    'options' => array('School'=>'School books', 'PUC and CET'=>'PUC and CET books', 'Engineering'=>'Engineering books'
                                                                   , 'Commerce and Management'=>'Commerce and Management books', 'Arts and Culture'=>'Arts and Culture books', 'Non academic'=>'Non academic books'),
                                                                   'selected' => 'School books'));?>
       <?php echo $this->Form->input('status', array('value' =>"Unavailable/Not received", 'type' => 'hidden'));?>
       <?php echo $this->Form->input('titleAndAuthor',
                              array(
                              'required' => true,
                              'placeholder' => 'Title and author is compulsory',
                              'type' => 'text'
                              ));?>
       <?php echo $this->Form->input('isbn',
       array(
                                            'required' => false,
                                            'placeholder' => 'Enter book ISBN number',
                                            'type' => 'text'
                                            ));?>
       <?php echo $this->Form->input('donorName',
       array(
                                     'required' => true,
                                     'placeholder' => 'Enter your name',
                                     'type' => 'text'
                                     ));?>
       <?php echo $this->Form->input('donorEmail',
       array(
                                     'required' => false,
                                     'placeholder' => 'Enter your email',
                                     'type' => 'email'
                                     ));?>
       <?php echo $this->Form->input('donorMobile',
       array(
                                     'required' => true,
                                     'placeholder' => 'Enter your mobile number for us to contact you',
                                     'type' => 'number'
                                     ));?>
       <?php echo $this->Form->input('donorAddress',
       array(
                                     'required' => true,
                                     'placeholder' => 'Enter your contact address',
                                     'type' => 'text'
                                     ));?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<br/><br/><br/><br/><br/><br/>