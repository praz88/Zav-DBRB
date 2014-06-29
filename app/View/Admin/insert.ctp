<br/>
<div class="book form">
<?php echo $this->Form->create('Book'); ?>
    <fieldset>
        <legend><?php echo __('Add Book. Use this form to add a new book into the record. You need to know the donor name, if you are the donor, enter your name. To update the status of book once added, you can click on edit book details.'); ?></legend>
    <?php echo $this->Form->input('stream', array(
     'options' => array('School'=>'School books', 'PUC and CET'=>'PUC and CET books', 'Engineering'=>'Engineering books'
                                                    , 'Commerce and Management'=>'Commerce and Management books', 'Arts and Culture'=>'Arts and Culture books', 'Non academic'=>'Non academic books'),
                                                    'selected' => 'School books'));?>
       <?php echo $this->Form->input('titleAndAuthor',
                                          array(
                                          'required' => true,
                                          'placeholder' => 'Enter title and author',
                                          'type' => 'text'
                                          ));?>
       <?php echo $this->Form->input('isbn', array(
                                         'required' => false,
                                         'placeholder' => 'Enter ISBN for book',
                                         'type' => 'text'
                                         ));?>
       <?php echo $this->Form->input('donorName',
                                          array(
                                          'required' => true,
                                          'placeholder' => 'Enter donors name',
                                          'type' => 'text'
                                          ));?>
       <?php echo $this->Form->input('donorEmail',
                                         array(
                                         'required' => false,
                                         'placeholder' => 'Enter donors email id',
                                         'type' => 'email'
                                         ));?>
       <?php echo $this->Form->input('donorMobile',
                                         array(
                                         'required' => false,
                                         'placeholder' => 'Enter donors mobile number',
                                         'type' => 'text'
                                         ));?>
      <?php echo $this->Form->input('donorAddress',
                                        array(
                                        'required' => false,
                                        'placeholder' => 'Enter donors address',
                                        'type' => 'text'
                                        ));?>
       <?php echo $this->Form->input('holder', array('value' =>'Zav Foundation','disabled' => 'disabled'));?>
       <?php echo $this->Form->input('adminName', array('value' =>$this->Session->read('Admin.username'),'disabled' => 'disabled'));?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<br/><br/><br/><br/>